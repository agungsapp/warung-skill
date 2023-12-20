<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class AdminUserController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    if ($request->ajax()) {
      $data = User::whereNotIn('id', function ($query) {
        $query->select('user_id')->from('admins');
      })
        ->whereNotIn('id', function ($query) {
          $query->select('user_id')->from('mentors');
        });

      // if (($request->has('startDate') && $request->has('endDate')) && ($request->input('startDate') !== null && $request->input('endDate') !== null)) {
      //   $format = 'm/d/Y'; // The expected date format

      //   $startDate = Carbon::createFromFormat($format, $request->startDate);
      //   $endDate = Carbon::createFromFormat($format, $request->endDate)->endOfDay();

      //   if (!$startDate || !$endDate) {
      //     return response()->json([
      //       'message' => 'Invalid date format. Dates must be in ' . $format . '.'
      //     ], 422);
      //   }

      //   $data = $data->whereBetween('last_login', [$startDate, $endDate]);
      // }

      return DataTables::of($data)
        ->addColumn('action', function ($row) {
          $btn = '<button class="btn btn-primary btn-sm edit" data-id="' . $row->id . '">Update</button> ';
          $btn .= '<form action="' . route('admin.user.destroy', $row->id) . '" method="POST" class="d-inline delete-form">';
          $btn .= csrf_field();
          $btn .= '<input type="hidden" name="_method" value="DELETE">';
          $btn .= '<button type="submit" class="btn btn-danger btn-sm delete show_confirm" data-id="' . $row->id . '">Delete</button>';
          $btn .= '</form>';
          return $btn;
        })
        ->rawColumns(['action'])
        ->make(true);
    }

    return view('admin.user.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'first_name' => 'required|string|max:255',
      'last_name' => 'required|string|max:255',
      'email' => 'required|email|unique:users',
      'username' => 'required|string|unique:users',
      'password' => 'required|string|min:6',
      'gender' => 'required',
      'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($validator->fails()) {
      flash()->addError('Lengkapi semua data!');
      return redirect()->route('admin.user.index')
        ->withErrors($validator)
        ->withInput();
    }

    $imagePath = null; // Initialize the variable for image path

    // Begin a transaction
    DB::beginTransaction();
    try {
      // Create the user
      $user = User::create([
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'email' => $request->input('email'),
        'username' => $request->input('username'),
        'password' => bcrypt($request->input('password')),
        'gender' => $request->input('gender'),
        // 'image' will be filled in later, after the image is saved
      ]);

      // Upload and save the image if it's present
      if ($request->hasFile('photo')) {
        $imageFile = $request->file('photo');
        $imagePath = $imageFile->store('public/user_photos'); // Save the image
        $user->image = str_replace('public/', '', $imagePath); // Store the path without the 'public/' part
        $user->save(); // Update the user with the image path
      }

      DB::commit(); // Commit the transaction

      // Redirect with success message
      flash()->addSuccess("User {$user->username} berhasil dibuat");

      return redirect()->route('admin.user.index');
    } catch (Exception $e) {
      DB::rollBack(); // An error occurred; cancel the transaction

      // Redirect with error message
      flash()->addError('Terjadi kesalahan data tidak dapat dibuat.!');
      return redirect()->route('admin.user.index');
    }
  }


  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    // Find the user by ID
    $user = User::findOrFail($id);

    // Validate the request data
    $validator = Validator::make($request->all(), [
      'first_name' => 'required|string|max:255',
      'last_name' => 'required|string|max:255',
      'password' => 'nullable|string|min:6',
      'gender' => 'required',
      'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($validator->fails()) {
      flash()->addError('Lengkapi semua data!');
      return redirect()->route('admin.user.index');
    }

    // Check if email is unique in the database
    if (User::where('email', $request->email)->where('id', '<>', $id)->exists()) {
      flash()->addError("The email has already been taken.");
      redirect()->route('admin.user.index');
    }

    // Check if username is unique in the database
    if (User::where('username', $request->username)->where('id', '<>', $id)->exists()) {
      flash()->addError("The username has already been taken.");
      redirect()->route('admin.user.index');
    }

    // Begin a transaction
    DB::beginTransaction();
    try {
      // Update user details
      $user->first_name = $request->input('first_name');
      $user->last_name = $request->input('last_name');
      $user->email = $request->input('email');
      $user->username = $request->input('username');
      if ($request->filled('password')) {
        $user->password = bcrypt($request->input('password'));
      }
      $user->gender = $request->input('gender');

      // Check for image and upload if present
      if ($request->hasFile('photo')) {
        // Delete the old image if it exists
        if ($user->image && Storage::exists('public/' . $user->image)) {
          Storage::delete('public/' . $user->image);
        }

        // Upload the new image
        $imagePath = $request->file('photo')->store('public/user_photos');
        $user->image = str_replace('public/', '', $imagePath);
      }

      $user->save(); // Save the user with the new image path if changed
      DB::commit(); // Commit the transaction

      // Redirect with success message
      flash()->addSuccess("Data berhasil diubah");
      return redirect()->route('admin.user.index');
    } catch (Exception $e) {
      DB::rollBack(); // Rollback the transaction on error

      // Log the error for debugging
      Log::error($e->getMessage());

      // Redirect with error message
      flash()->addError('Terjadi kesalahan data tidak dapat diubah.!');
      return redirect()->route('admin.user.index');
    }
  }


  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    try {
      $user = User::findOrFail($id);

      // If the user has an image, delete it from the storage
      if ($user->image && Storage::exists('public/' . $user->image)) {
        Storage::delete('public/' . $user->image);
      }

      // Delete the user
      $user->delete();

      // Redirect with success message
      flash()->addSuccess("User successfully deleted.");
      return redirect()->route('admin.user.index');
    } catch (Exception $e) {
      // Log the exception message
      Log::error($e->getMessage());

      // Redirect with an error message
      flash()->addError("There was an error deleting the user.");
      return redirect()->route('admin.user.index');
    }
  }
}
