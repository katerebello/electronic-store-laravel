<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/adminprofile/{user}','AdminController@index');
Route::get('/userprofile/{user}','UserController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/homepage', function(){
    return view('homepage');
});
Route::get('/admindashboard', function(){
    return view('admindashboard');
});

Route::post('/storeuser', 'UserController@store');  
Route::post('/storeadmin', 'AdminController@store');       




