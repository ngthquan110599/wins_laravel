<?php

use App\Http\Controllers\ProductDetails;
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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/product', [\App\Http\Controllers\ProductDetails::class, 'product']);

Route::group(['prefix' => 'cart'], function () {
    Route::get('', [\App\Http\Controllers\CartController::class, 'cart1']);
    Route::get('cart2', [\App\Http\Controllers\CartController::class, 'cart2']);
    Route::get('base', [\App\Http\Controllers\CartController::class, 'base']);
    Route::get('type=1', [\App\Http\Controllers\CartController::class, 'buyTogether'])->name('buy-together');
    Route::get('type=2', [\App\Http\Controllers\CartController::class, 'waitAccept'])->name('wait-accept');
    Route::get('type=3', [\App\Http\Controllers\CartController::class, 'waitGetProduct'])->name('wait-get-product');
    Route::get('type=4', [\App\Http\Controllers\CartController::class, 'delivery'])->name('delivery');
    Route::get('type=5', [\App\Http\Controllers\CartController::class, 'delivered'])->name('delivered');
    Route::get('type=6', [\App\Http\Controllers\CartController::class, 'aborted'])->name('aborted');
    Route::get('type=7', [\App\Http\Controllers\CartController::class, 'paid'])->name('paid');
    Route::group(['prefix' => 'wholesale'], function () {
        Route::get('', [\App\Http\Controllers\CartController::class, 'wholesale']);
        Route::get('type=0', [\App\Http\Controllers\CartController::class, 'businessCart']);
        Route::get('type=1', [\App\Http\Controllers\CartController::class, 'businessCart1']);
        Route::get('type=2', [\App\Http\Controllers\CartController::class, 'businessCart2']);
        Route::get('type=3', [\App\Http\Controllers\CartController::class, 'businessCart3']);
        Route::get('type=4', [\App\Http\Controllers\CartController::class, 'businessCart4']);
        Route::get('type=5', [\App\Http\Controllers\CartController::class, 'businessCart5']);
        Route::get('type=6', [\App\Http\Controllers\CartController::class, 'businessCart6']);
        Route::get('type=7', [\App\Http\Controllers\CartController::class, 'businessCart7']);
        Route::get('type=8', [\App\Http\Controllers\CartController::class, 'businessCart8']);
    });
});



Route::get('/frame15011', [\App\Http\Controllers\CartController::class, 'frame']);
Route::get('/notification', [\App\Http\Controllers\OptionsController::class, 'notification']);
Route::get('/favourite', [\App\Http\Controllers\OptionsController::class, 'favourite']);
