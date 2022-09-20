<?php

use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('productID');

Route::get('/backoffice/home', [BackOfficeController::class, 'home'])->name('backoffice');

Route::resource("products", BackOfficeController::class);
Route::resource("orders", OrderController::class);
Route::resource("customers", CustomerController::class);

Route::get('/test', [CustomerController::class, 'test']);
