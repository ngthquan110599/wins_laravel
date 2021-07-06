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

Route::get('/product',[\App\Http\Controllers\ProductDetails::class, 'product']);

Route::group(['prefix' => 'cart'], function () {
    Route::get('', [\App\Http\Controllers\CartController::class, 'cart1']);
    Route::get('cart2', [\App\Http\Controllers\CartController::class, 'cart2']);
    Route::get('type=1', [\App\Http\Controllers\CartController::class, 'buyTogether']);
    Route::get('type=2', [\App\Http\Controllers\CartController::class, 'waitAccept']);
    Route::get('type=3', [\App\Http\Controllers\CartController::class, 'waitGetProduct']);
    Route::get('type=4', [\App\Http\Controllers\CartController::class, 'delivery']);
    Route::get('type=5', [\App\Http\Controllers\CartController::class, 'delivered']);
    Route::get('type=6', [\App\Http\Controllers\CartController::class, 'aborted']);
    Route::get('type=7', [\App\Http\Controllers\CartController::class, 'paid']);
});
