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

Route::get('/', 'UserController@index');
Route::get('/products', 'ProductController@index');

Route::get('/profile', 'UserController@getProfile')->middleware('auth');

Route::get('/add-to-cart/{id}', 'ProductController@getAddToCart')->name('product.addToCart');
Route::get('/reduce/{id}', 'ProductController@getReduceByOne');
Route::get('/remove/{id}', 'ProductController@getRemoveItem');
Route::get('/shopping-cart', 'ProductController@getCart')->name('shop.shoppingCart');

Route::get('/checkout', 'ProductController@getCheckout')->middleware('auth');
Route::post('/checkout', 'ProductController@postCheckout')->middleware('auth');

Route::get('/register', 'UserController@getRegister');
Route::post('/register', 'UserController@postRegister');

Route::get('/login', 'UserController@getLogin')->name('login');
Route::post('/login', 'UserController@postLogin')->name('login');

Route::get('/logout', 'UserController@logout');

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function() 
{
    Route::get('/product/create', 'ProductController@create')->middleware('auth');
    Route::post('/product/create', 'ProductController@store')->middleware('auth');    
});