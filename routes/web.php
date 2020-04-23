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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/get-data', 'HomeController@getData')->name('get_data');

Route::get('/customer/list', 'CustomerController@index')->name('customer');
Route::get('/customer/get-data', 'CustomerController@getData')->name('customer.get_data');

Route::get('/order/list', 'OrderController@index')->name('order');
Route::get('/order/get-data', 'OrderController@getData')->name('order.get_data');

Route::get('/product/list', 'ProductController@index')->name('product');
Route::get('/product/get-data', 'ProductController@getData')->name('product.get_data');
