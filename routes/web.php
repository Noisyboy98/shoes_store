<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
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
// User routes
Route::get('/', function () {return view('user/index');});
Route::get('/shop', function () {return view('user/shop');});
Route::get('/product', function () {return view('user/product');});
Route::get('/product/{id}', function () {return view('user/product');});
Route::get('/about', function () {return view('user/about');});
Route::get('/cart', function () {return view('user/cart');});
Route::get('/contact', function () {return view('user/contact');});
Route::get('/checkout', function () {return view('user/checkout');});
Route::get('/blogs', function () {return view('user/blogs');});
Route::get('/blog', function () {return view('user/blog');});



// Cms routes
Route::get('/cms', function () {return view('cms/home');});


// Language
Route::get('lang/{lang}', 'App\Http\Controllers\Controller@language')->name('lang');

