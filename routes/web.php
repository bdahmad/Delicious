<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SliderController;


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
        Route::post('/admin/dashboard/basic/update','basicUpdate')->name('basic.update');

        Route::get('/admin/dashboard/contact','contactIndex')->name('contact');
        Route::post('/admin/dashboard/contact/update','contactUpdate')->name('contact.update');

        Route::get('/admin/dashboard/social','socialIndex')->name('social');
        Route::post('/admin/dashboard/social/update','socialUpdate')->name('social.update');

    });
    Route::controller(BookController::class)->group(function(){
        Route::get('/admin/dashboard/book','index')->name('book');
        Route::post('/admin/dashboard/book/submit','insert')->name('book.insert');
    });
    Route::controller(EventController::class)->group(function(){
        Route::get('/admin/dashboard/event','index')->name('event');
        Route::get('/admin/dashboard/event/add','add')->name('event.add');
        Route::post('/admin/dashboard/event/add/submit','insert')->name('event.insert');
    });
    Route::controller(GalleryController::class)->group(function(){
        Route::get('/admin/dashboard/gallery','index')->name('gallery');
        Route::get('/admin/dashboard/gallery/add','add')->name('gallery.add');
        Route::post('/admin/dashboard/gallery/add/submit','insert')->name('gallery.insert');
    });
    Route::controller(SliderController::class)->group(function(){
        Route::get('/admin/dashboard/slider','index')->name('slider');
        Route::get('/admin/dashboard/slider/add','add')->name('slider.add');
        Route::post('/admin/dashboard/slider/add/submit','insert')->name('slider.insert');
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
