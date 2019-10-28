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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

// Auth Routes
Auth::routes();

// Menu Routes
Route::get('/order/starters', 'OrderController@starter');
Route::get('/order', 'OrderController@index');

// Stock Routes
Route::get('/stock', 'StockController@index');
Route::post('additem', 'StockController@addItem');