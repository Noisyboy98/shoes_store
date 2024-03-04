<?php

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

//cms routes
Route::get('/cms', function () {return view('cms/login');});


//user routes
Route::get('/', function () {return view('user/index');});
// Route::get('/about', function () {return view('user/about');});
// Route::get('/blog-single', function () {return view('user/blog-single');});
// Route::get('/blog', function () {return view('user/blog');});
// Route::get('/cart', function () {return view('user/cart');});
// Route::get('/checkout', function () {return view('user/checkout');});
// Route::get('/contact', function () {return view('user/contact');});
// Route::get('/home', function () {return view('user/home');});
// Route::get('/product-single', function () {return view('user/product-single');});
// Route::get('/shop', function () {return view('user/shop');});