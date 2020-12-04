<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Product;
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

Route::get('/', 'CategoryController@index');

Auth::routes();

// mail
Route::get('/email', function(){
    return new \App\Mail\NewUserWelcomeMail();
});

Route::get('/category_each',function(){
    dd(request()->all());
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/adminprofile/{user}','AdminController@index');
Route::get('/userprofile/{user}','UserController@index');

//cart
Route::post('/add_to_cart','ProductController@addToCart' );
Route::get('/cartlist', 'ProductController@cartlist');
Route::get('/removecart/{id}', 'ProductController@removecart');
//order
Route::get('/ordernow', 'OrderController@ordernow');
Route::post('/orderplace', 'OrderController@orderplace');
Route::get('/myorders', 'OrderController@myorders');

//aboutus
Route::get('/aboutus', 'ProductController@aboutus');
Route::get('/contactus', 'ProductController@contactus');
//shop
Route::get('/shop', 'ProductController@shop');
Route::get('/homepage', function(){
    return view('home');
});

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
Route::post('/product/images_color', 'DetailController@store');

// all product page
Route::get('/all', 'DetailController@index');

// will redrect you to the edit form 
Route::get('/product/{product}/edit', 'ProductController@edit')->name('product.edit');
 
// edit product
Route::patch('/product/{product}', 'ProductController@update')->name('product.update');

// will redrect you to the color and image edit form
Route::get('/product/{product}/edit_image_color', 'DetailController@edit')->name('detail.edit');

// edit image and color
Route::patch('/product/detail/{product}', 'DetailController@update')->name('detail.update');

// confirm delete
Route::get('/product/delete/{product}', 'DeleteProductController@index')->name('productdelete.index');

//delete product
Route::post('/product/{product}/delete', 'DeleteProductController@destroy')->name('product.destroy');


// Route::get('/{product}/productdetails',function(Product $product){
//     return view('product/productdetails',compact('product'));
// });

Route::get('/{product}/productdetails','DetailController@detail');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category','CategoryController@show');


