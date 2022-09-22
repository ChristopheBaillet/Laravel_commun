<?php


use App\Http\Controllers\backoffice\CategoryController;
use App\Http\Controllers\backoffice\CustomerController;
use App\Http\Controllers\backoffice\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\backoffice\ProductController as BOProductController;
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
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('productID');

Route::get('/backoffice/home', [BOProductController::class, 'home'])->name('backoffice');

Route::resource("products", BOProductController::class);
Route::resource("orders", OrderController::class);
Route::resource("customers", CustomerController::class);
Route::resource("categories", CategoryController::class);

Route::get("/cart", [CartController::class, "index"])->name("cart.index");

Route::get('/test', [CustomerController::class, 'test']);
