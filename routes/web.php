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
<<<<<<< HEAD
Route::get('/product',[\App\Http\Controllers\ProductDetails::class, 'product']);
=======

Route::get('/cart', [\App\Http\Controllers\CartController::class, 'cart1']);
>>>>>>> 51a7765b5a0206cef1033d70582e9157c228a000
