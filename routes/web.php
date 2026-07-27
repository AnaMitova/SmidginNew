<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\StorePageController;
use App\Http\Controllers\Admin\RecipeController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\TourRequestController;


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

Route::prefix('admin')->group(function () {
    Route::resource('stores', StoreController::class);
    Route::resource('recipes', RecipeController::class);
    Route::resource('tours', TourController::class);
    Route::resource('requests', TourRequestController::class)
        ->only(['index', 'store']);
});


Route::post('/recipes', [RecipeController::class, 'store']);

Route::resource('recipes', RecipeController::class)
    ->only(['store', 'destroy']);