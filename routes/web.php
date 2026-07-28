<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\StorePageController;
use App\Http\Controllers\Admin\RecipeController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\TourRequestController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\Admin\SubscriberController as AdminSubscriberController;
use App\Http\Controllers\Admin\StoreLocationController;
use App\Http\Controllers\Admin\BannerController;


Route::view('/', 'index');

Route::view('/classic', 'classic');
Route::view('/light', 'light');
Route::view('/orient', 'orient');
Route::view('/ourgin', 'ourgin');
Route::view('/reviews', 'reviews');
Route::view('/privacypolicy', 'privacypolicy');
Route::view('/returnoffer', 'returnoffer');

Route::get('/findourstores', [StorePageController::class, 'index']);

Route::get('/whatweoffer', [TourController::class, 'index']);
Route::view('/whoweare', 'whoweare');
Route::view('/termsandconditions', 'termsandconditions');
Route::view('/velvet', 'velvet');
Route::view('/xo', 'xo');

// Under api/* so validation failures render as JSON — see shouldRenderJsonWhen()
// in bootstrap/app.php. Stays in web.php to keep the session/CSRF middleware.
Route::post('/api/subscribe', [SubscriberController::class, 'store'])->name('subscribe.store');

Route::prefix('admin')->group(function () {
    Route::resource('stores', StoreController::class);
    Route::resource('recipes', RecipeController::class);
    Route::resource('tours', TourController::class);
    Route::resource('events', EventController::class);

    Route::get('banner', [BannerController::class, 'edit'])
        ->name('banner.edit');

    Route::put('banner', [BannerController::class, 'update'])
        ->name('banner.update');

    Route::resource('requests', TourRequestController::class)
        ->only(['index', 'store']);

    Route::post('store-locations/reorder', [StoreLocationController::class, 'reorder'])
        ->name('store-locations.reorder');

    Route::resource('store-locations', StoreLocationController::class)
        ->except(['index', 'show']);

    Route::get('subscribers/export', [AdminSubscriberController::class, 'export'])
        ->name('subscribers.export');

    Route::put('subscribers/settings', [AdminSubscriberController::class, 'updateSettings'])
        ->name('subscribers.settings.update');

    Route::delete('subscribers/{subscriber}', [AdminSubscriberController::class, 'destroy'])
        ->name('subscribers.destroy');
});


Route::post('/recipes', [RecipeController::class, 'store']);

Route::resource('recipes', RecipeController::class)
    ->only(['store', 'destroy']);