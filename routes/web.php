<?php

use App\Http\Controllers\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', [Product::class,'CatShow'])->name('welcome');
Route::get('/cat/{id}', [Product::class,'ProductList'])->name('cat');
Route::get('/product/{id}', [Product::class,'ProductShow'])->name('product');
