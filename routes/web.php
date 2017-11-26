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

Route::get('/', 'Auth\LoginController@showLoginForm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('quotation/index', 'QuotationController@index')->name('quotation.index');
Route::get('quotation/create', 'QuotationController@create')->name('quotation.create');
Route::post('quotation/create', 'QuotationController@store')->name('quotation.store');
Route::get('quotation/edit/{id}', 'QuotationController@edit')->name('quotation.edit');
Route::put('quotation/update/{id}', 'QuotationController@update')->name('quotation.update');
Route::get('quotation/show/{id}', 'QuotationController@show')->name('quotation.show');
Route::delete('quotation/destroy/{id}', 'QuotationController@destroy')->name('quotation.destroy');

Route::get('order/index', 'OrdersController@index')->name('order.index');
Route::get('order/create/{id?}', 'OrdersController@create')->name('order.create');
Route::post('order/create', 'OrdersController@store')->name('order.store');
// Route::get('order/edit/{id}', 'OrdersController@edit')->name('order.edit');
// Route::put('order/update/{id}', 'OrdersController@update')->name('order.update');
// Route::get('order/show/{id}', 'OrdersController@show')->name('order.show');
Route::delete('order/destroy/{id}', 'OrdersController@destroy')->name('order.destroy');
