<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// add product form
Route::get('/product/create', 'ProductController@create');

// validate product info and redirect to add_image.blade.php
Route::post('/product', 'ProductController@store');

// add image field is shown
Route::get('/product/add_image', 'ProductController@index');

// validate product image and redirect to all.blade.php
Route::post('/product/images', 'ImagesController@store');

// all product page
Route::get('/all', 'ImagesController@index');
