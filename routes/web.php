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
use App\Http\Controllers\WhyUsController;
use App\Http\Controllers\MenuCategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SpecialCategoryController;
use App\Http\Controllers\SpecialController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\AboutController;


Route::get('/', function () {
    return view('welcome');
})->name('front');
Route::get('/404', function () {
    return view('404');
})->name('404');

Route::post('/message/submit',[ContactMessageController::class, 'insert'])->name('message.insert');
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
    Route::controller(WhyUsController::class)->group(function(){
        Route::get('/admin/dashboard/whyus','index')->name('why');
        Route::get('/admin/dashboard/whyus/add','add')->name('why.add');
        Route::post('/admin/dashboard/whyus/add/submit','insert')->name('why.insert');
    });
    Route::controller(MenuCategoryController::class)->group(function(){
        Route::get('/admin/dashboard/menu/category','index')->name('menu.category');
        Route::get('/admin/dashboard/menu/category/add','add')->name('menu.category.add');
        Route::post('/admin/dashboard/menu/category/submit','insert')->name('menu.category.insert');
    });
    Route::controller(MenuController::class)->group(function(){
        Route::get('/admin/dashboard/menu','index')->name('menu');
        Route::get('/admin/dashboard/menu/add','add')->name('menu.add');
        Route::post('/admin/dashboard/menu/add/submit','insert')->name('menu.insert');
    });
    Route::controller(SpecialCategoryController::class)->group(function(){
        Route::get('/admin/deshboard/special/category','index')->name('special.category');
        Route::get('/admin/deshboard/special/category/add','add')->name('special.category.add');
        Route::post('/admin/deshboard/special/category/add/submit','insert')->name('special.category.insert');
    });
    Route::controller(SpecialController::class)->group(function(){
        Route::get('/admin/deshboard/special','index')->name('special');
        Route::get('/admin/deshboard/special/add','add')->name('special.add');
        Route::post('/admin/deshboard/special/add/submit','insert')->name('special.insert');
    });
    Route::controller(ChefController::class)->group(function(){
        Route::get('/admin/deshboard/chef','index')->name('chef');
        Route::get('/admin/deshboard/chef/add','add')->name('chef.add');
        Route::post('/admin/deshboard/chef/add/submit','insert')->name('chef.insert');
    });
    Route::controller(ContactMessageController::class)->group(function(){
        Route::get('/admin/deshboard/messages','index')->name('messages');
    });
    Route::controller(AboutController::class)->group(function(){
        Route::get('/admin/deshboard/about','index')->name('about.edit');
        Route::get('/admin/deshboard/about/update','update')->name('about.update');
    });
    Route::controller(ProfileController::class)->group(function(){
        Route::get('/admin/deshboard/profile','index')->name('profile.edit');
        Route::post('/admin/deshboard/profile/update','update')->name('profile.update.admin');
    });

});
//user controller
Route::middleware('auth', 'verified', 'role:user', 'status:active')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/dashboard/profile', 'profile')->name('user.profile');
        Route::get('/use/logout', 'userLogout')->name('user.logout');
    });
});

require __DIR__ . '/auth.php';
