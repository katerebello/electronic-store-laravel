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

Route::get('/adminprofile/{user}','AdminController@index');
Route::get('/userprofile/{user}','UserController@index');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admindashboard', function(){
    return view('admindashboard');
});

Route::post('/storeuser', 'UserController@store');  
Route::post('/storeadmin', 'AdminController@store');       




// add product form
Route::get('/product/create', 'ProductController@create');

// validate product info and redirect to add_image.blade.php
Route::post('/product', 'ProductController@store');

// add image field is shown
Route::get('/product/add_image_color', 'ProductController@index');

// validate product image and redirect to all.blade.php
Route::post('/product/images_color', 'Images_ColorController@store');

// all product page
Route::get('/all', 'Images_ColorController@index');
