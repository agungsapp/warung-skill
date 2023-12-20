<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Admin;

class AdminLoginController extends Controller
{
    public function index()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->to('app/dashboard');
        }
        return view('admin.auth.admin-login');
    }

    public function procesLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only('username', 'password');

        // Cari user berdasarkan username
        $user = User::where('username', $request->username)->first();

        // Cek apakah user tersebut adalah admin
        if ($user && Admin::where('user_id', $user->id)->exists()) {
            $user->status_online = true;
            $user->save();
            // Coba otentikasi menggunakan guard 'admin'
            if (Auth::guard('admin')->attempt($credentials)) {
                return redirect()->intended('app/dashboard');
            }
        }

        return redirect()->back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ]);
    }
}
