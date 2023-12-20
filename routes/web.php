<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminMentorController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Admin\Auth\AdminLogoutController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.homepage.index');
});

Route::prefix('app')->name('admin.')->group(function () {
    Route::get('login', [AdminLoginController::class, 'index']);
    Route::post('login', [AdminLoginController::class, 'procesLogin'])->name('login');
    Route::get('logout', [AdminLogoutController::class, 'logout'])->name('logout');

    Route::middleware(['auth.admin:admin'])->group(function () {
        Route::resource('dashboard', AdminDashboardController::class);
        Route::resource('user', AdminUserController::class);
        Route::resource('mentor', AdminMentorController::class);
        Route::post('mentor/mentorUser', [AdminMentorController::class, 'createMentorUser'])->name('mentor.mentorUser');
    });
});
