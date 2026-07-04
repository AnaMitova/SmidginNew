<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\StorePageController;


Route::view('/', 'index');

Route::view('/classic', 'classic');
Route::view('/light', 'light');
Route::view('/orient', 'orient');
Route::view('/ourgin', 'ourgin');
Route::view('/reviews', 'reviews');
Route::view('/privacypolicy', 'privacypolicy');
Route::view('/returnoffer', 'returnoffer');

Route::get('/findourstores', [StorePageController::class, 'index']);

Route::view('/whatweoffer', 'whatweoffer');
Route::view('/whoweare', 'whoweare');
Route::view('/termsandconditions', 'termsandconditions');
Route::view('/velvet', 'velvet');
Route::view('/xo', 'xo');

Route::prefix('admin')->group(function () {
    Route::resource('stores', StoreController::class);
});