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

Route::get('/backoffice/product', [BackOfficeController::class, 'index'])->name('backofficeProductIndex');
Route::post('/backoffice/product', [BackOfficeController::class, 'store'])->name('backofficeProductStore');
Route::get('/backoffice/product/create', [BackOfficeController::class, 'create'])->name('backofficeProductCreate');
Route::get('/backoffice/product/{product}', [BackOfficeController::class, 'show'])->name('backofficeProductShow');
Route::put('/backoffice/product/{product}', [BackOfficeController::class, 'update'])->name('backofficeProductUpdate');
Route::delete('/backoffice/product/{product}', [BackOfficeController::class, 'destroy'])->name('backofficeProductDelete');
Route::get('/backoffice/product/{product}/edit', [BackOfficeController::class, 'edit'])->name('backofficeProductEdit');

Route::get('/backoffice/customer', [CustomerController::class, 'index'])->name('backofficeCustomerIndex');
Route::post('/backoffice/customer', [CustomerController::class, 'store'])->name('backofficeCustomerStore');
Route::get('/backoffice/customer/create', [CustomerController::class, 'create'])->name('backofficeCustomerCreate');
Route::get('/backoffice/customer/{customer}', [CustomerController::class, 'show'])->name('backofficeCustomerShow');
Route::put('/backoffice/customer/{customer}', [CustomerController::class, 'update'])->name('backofficeCustomerUpdate');
Route::delete('/backoffice/customer/{customer}', [CustomerController::class, 'destroy'])->name('backofficeCustomerDelete');
Route::get('/backoffice/customer/{customer}/edit', [CustomerController::class, 'edit'])->name('backofficeCustomerEdit');


Route::get('/test', [CustomerController::class, 'test']);



Route::get('/backoffice/order', [OrderController::class, 'index'])->name('backofficeOrderIndex');
Route::post('/backoffice/order', [OrderController::class, 'store'])->name('backofficeOrderStore');
Route::get('/backoffice/order/create', [OrderController::class, 'create'])->name('backofficeOrderCreate');
Route::get('/backoffice/order/{order}', [OrderController::class, 'show'])->name('backofficeOrderShow');
Route::put('/backoffice/order/{order}', [OrderController::class, 'update'])->name('backofficeOrderUpdate');
Route::delete('/backoffice/order/{order}', [OrderController::class, 'destroy'])->name('backofficeOrderDelete');
Route::get('/backoffice/order/{order}/edit', [OrderController::class, 'edit'])->name('backofficeOrderEdit');

