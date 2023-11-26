<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManageController;


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
        Route::get('/admin/dashboard/user/view/{id}', 'userView')->name('user.view');
        Route::get('/admin/dashboard/user/edit/{id}', 'userEdit')->name('user.edit');
        Route::get('/admin/dashboard/user/status/{id}', 'userStatus')->name('user.status');
        Route::post('/admin/dashboard/user/submit', 'userInsert')->name('user.submit');
        Route::get('logout', 'adminLogout')->name('admin.logout');
    });

    Route::controller(ManageController::class)->group(function(){
        Route::get('/admin/dashboard/basic','basicIndex')->name('basic');

        Route::get('/admin/dashboard/contact','contactIndex')->name('contact');

        Route::get('/admin/dashboard/social','socialIndex')->name('social');

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
