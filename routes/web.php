<?php

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

/* Auth*/
Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login');
Route::post('logout','Auth\LoginController@logout')->name('logout');

Route::get('/','CustomerController@index');
Route::get('/home','CustomerController@index');

/* Customer */
Route::get('/customer/show/{id}',['as'=>'customer.show','uses'=>'CustomerController@show']);
Route::get('/customer/create',['as'=>'customer.create','uses'=>'CustomerController@create']);

Route::post('/customer/store',['as'=>'customer.store','uses'=>'CustomerController@store']);
Route::get('/customer/index',['as'=>'customer.index','uses'=>'CustomerController@index']);

Route::get('/','CustomerController@index');
Route::get('/home','CustomerController@index');


/* Product */
Route::get('/product/index',['as'=>'product.index','uses'=>'ProductsController@index']);
Route::get('/product/create',['as'=>'product.create','uses'=>'ProductsController@create']);
Route::post('/product/store',['as'=>'product.store','uses'=>'ProductsController@store']);



//auth

?>
