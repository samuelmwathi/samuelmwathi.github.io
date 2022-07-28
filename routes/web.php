<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');
Route::view('/about-us', 'front.about')->name('about');
Route::view('/our-team', 'front.team')->name('team');
Route::get('/our-experience', 'HomeController@experience')->name('experience');
Route::view('/contact-us', 'front.contact')->name('contact');
Route::post('/contact', 'Front\ActionsController@contact')->name('contact.submit');
Route::post('/newsletter', 'Front\ActionsController@newsletter')->name('newsletter.submit');
Route::prefix('blog')->group(function() {
    Route::get('/', 'Front\BlogController@blogs')->name('blogs');
    Route::get('/read/{slug}', 'Front\BlogController@read')->name('blogs.read');
});

Route::view('/resources', 'front.resources.home')->name('resources');
Route::get('/photo-gallery', 'Front\ResourceController@photos')->name('photo-gallery');
Route::get('/video-gallery', 'Front\ResourceController@video')->name('video-gallery');

Route::prefix('services')->group(function() {
    Route::view('/', 'front.services.services')->name('services');
    Route::view('/training-experience', 'front.services.training')->name('services.training');
    Route::view('/capacity-building', 'front.services.capacity')->name('services.capacity');
    Route::view('/ict-solutions', 'front.services.ict-solution')->name('services.ict');
    Route::view('/project-management', 'front.services.project-management')->name('services.project');
    Route::view('/monitoring-and-evaluation', 'front.services.mel')->name('services.mel');
});

Route::prefix('products')->group(function() {
    Route::view('/', 'front.products.products')->name('products');
    Route::view('/syscoop-agri', 'front.products.syscoop-agri')->name('products.syscoop-agri');
    Route::view('/syscoop-book-keeping', 'front.products.syscoop-book-keeping')->name('products.syscoop-book-keeping');
    Route::view('/syscoop-coffee', 'front.products.syscoop-coffee')->name('products.syscoop-coffee');
    Route::view('/bulk-sms', 'front.products.bulk-sms')->name('products.bulk-sms');
    Route::view('/syscoop-agri-farm', 'front.products.syscoop-agri-farm')->name('products.syscoop-agri-farm');
});



Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::prefix('admin')->group(function() {
    Route::prefix('auth')->group(function() {
        Route::get('/login', 'Admin\AuthController@login')->name('admin.login');
        Route::post('/loginAction', 'Admin\AuthController@doLogin')->name('admin.login.action');
        Route::prefix('password')->group(function() {
            Route::get('/reset', 'Admin\AuthController@resetPassword')->name('admin.password.reset');
            Route::post('/reset/submit', 'Admin\AuthController@resetAction')->name('admin.password.reset.action');
            Route::get('/new/{token}', 'Admin\AuthController@newPassword')->name('admin.password.new');
            Route::post('/newPassword', 'Admin\AuthController@submitPassword')->name('admin.password.new.submit');
            Route::get('/activate/{token}', 'Admin\UsersController@activate')->name('admin.users.new.activate');
            Route::post('/activate/account', 'Admin\UsersController@activateAccount')->name('admin.users.activate.action');
        });
    });
    Route::middleware(['admin'])->group(function() {
        Route::get('/', 'Admin\DashboardController@dashboard')->name('admin.dashboard');

        Route::prefix('newsletter')->group(function() {
            Route::get('/emails', 'Admin\NewsLetterController@newsletter')->name('admin.newsletters');
        });
        Route::prefix('enquiries')->group(function() {
            Route::get('/', 'Admin\EnquiriesController@contacts')->name('admin.contacts');
            Route::post('/details', 'Admin\EnquiriesController@details')->name('admin.contacts.details');
            Route::get('/complete/{id}', 'Admin\EnquiriesController@complete')->name('admin.contacts.complete');
        });

        Route::prefix('users')->group(function() {
            Route::get('/', 'Admin\UsersController@users')->name('admin.users');
            Route::get('/{id}/details', 'Admin\UsersController@details')->name('admin.users.details');
            Route::get('/new', 'Admin\UsersController@newUser')->name('admin.users.create');
            Route::post('/create', 'Admin\UsersController@store')->name('admin.users.submit');
            Route::get('/{id}/delete', 'Admin\UsersController@delete')->name('admin.users.delete');
            Route::get('/{id}/suspend', 'Admin\UsersController@suspend')->name('admin.users.suspend');
            Route::get('/{id}/activate', 'Admin\UsersController@activateUser')->name('admin.users.activate');
            Route::post('/update/{id}', 'Admin\UsersController@updateUser')->name('admin.users.update');
        });
        Route::prefix('profile')->group(function() {
            Route::get('/', 'Admin\ProfileController@profile')->name('admin.profile');
            Route::post('/update', 'Admin\ProfileController@update')->name('admin.profile.update');
            Route::post('/updatePassword', 'Admin\ProfileController@updatePassword')->name('admin.profile.password.update');
            Route::post('/avatar', 'Admin\ProfileController@avatar')->name('admin.profile.avatar.update');
        });
        Route::prefix('gallery')->group(function() {
            Route::prefix('images')->group(function() {
                Route::get('/', 'Admin\ImageGalleryController@images')->name('admin.gallery.images');
                Route::get('/add', 'Admin\ImageGalleryController@add')->name('admin.gallery.images.add');
                Route::post('/submit', 'Admin\ImageGalleryController@submit')->name('admin.gallery.images.submit');
                Route::get('/delete/{imageId}', 'Admin\ImageGalleryController@delete')->name('admin.gallery.images.delete');
            });
            Route::prefix('video')->group(function() {
                Route::get('/', 'Admin\VideoGalleryController@videos')->name('admin.gallery.videos');
                Route::get('/add', 'Admin\VideoGalleryController@add')->name('admin.gallery.videos.add');
                Route::post('/submit', 'Admin\VideoGalleryController@submit')->name('admin.gallery.videos.submit');
                Route::get('/delete/{imageId}', 'Admin\VideoGalleryController@delete')->name('admin.gallery.videos.delete');
            });
        });
        Route::prefix('quotes')->group(function() {
            Route::get('/', 'Admin\ClientQuotesController@quotes')->name('admin.quotes');
            Route::get('/create', 'Admin\ClientQuotesController@create')->name('admin.quotes.create');
            Route::post('/submit', 'Admin\ClientQuotesController@submit')->name('admin.quotes.submit');

            Route::get('/{id}/edit', 'Admin\ClientQuotesController@edit')->name('admin.quotes.edit');
            Route::post('/submit/{id}', 'Admin\ClientQuotesController@update')->name('admin.quotes.update');


            Route::get('/delete/{imageId}', 'Admin\ClientQuotesController@delete')->name('admin.quotes.delete');
        });
    });
});
