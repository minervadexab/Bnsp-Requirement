<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventController as ControllersEventController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| FRONTEND ROUTES
|--------------------------------------------------------------------------
*/

Route::view('/', 'frontend.home')->name('home');

Route::view('/about', 'frontend.about')->name('about');

Route::view('/services', 'frontend.services')->name('services');

Route::view('/portfolio', 'frontend.portfolio')->name('portfolio');

Route::view('/gallery', 'frontend.gallery')->name('gallery');

Route::view('/events', 'frontend.events')->name('events');

Route::view('/contact', 'frontend.contact')->name('contact');

// DATA DARI DATABASE

// Article
Route::get('/articles', [FrontendController::class, 'articles'])
    ->name('articles');

Route::get('/articles/{slug}', [FrontendController::class, 'articleDetail'])
    ->name('articles.detail');

//Event
Route::get('/events', [FrontendController::class, 'events'])
    ->name('events');

Route::get('/events/{slug}', [FrontendController::class, 'eventDetail'])
    ->name('events.detail');
/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
/*
|--------------------------------------------------------------------------
| PROFILE
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

    Route::resource('articles-admin', ArticleController::class);

    Route::resource('events-admin', EventController::class)
        ->parameters([
            'events-admin' => 'event'
        ]);

    Route::resource('galleries-admin', GalleryController::class);
});

require __DIR__ . '/auth.php';
