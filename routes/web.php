<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
})->name('front');
Route::get('/404', function () {
    return view('404');
})->name('404');

//admin controller
Route::middleware('auth', 'verified', 'role:admin', 'status:active')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/dashboard', 'index')->name('admin.dashboard');
        Route::get('/admin/dashboard/user', 'userIndex')->name('admin.user');
        Route::get('/admin/dashboard/user/add', 'userAdd')->name('user.add');
        Route::post('/admin/dashboard/user/submit', 'userInsert')->name('user.submit');
        Route::get('logout', 'adminLogout')->name('admin.logout');
    });
});
//user controller
Route::middleware('auth', 'verified', 'role:user', 'status:active')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/use/logout', 'userLogout')->name('user.logout');
    });
});

require __DIR__ . '/auth.php';
