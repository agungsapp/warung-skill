<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Sales;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AdminLogoutController extends Controller
{
  public function logout()
  {
    $user = Auth::guard('admin')->user();
    $user->update(['status_online' => false]);
    $user->update(['last_login' => Carbon::now()]);

    Auth::guard('admin')->logout();
    return redirect()->route('admin.login');
  }
}
