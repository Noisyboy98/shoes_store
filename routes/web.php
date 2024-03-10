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
Route::get('/', function () {return view('user/home');});
Route::get('/product', function () {return view('user/product');});
Route::get('/product/{id}', function () {return view('user/product');});
Route::get('/about', function () {return view('user/about');});



// Cms routes
Route::get('/cms', function () {return view('cms/home');});


// Language
Route::get('lang/{lang}', 'App\Http\Controllers\Controller@language')->name('lang');

