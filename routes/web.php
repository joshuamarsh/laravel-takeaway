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
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->middleware('auth');

// Menu Routes
Route::get('/order/starters', 'OrderController@starter')->middleware('auth');
Route::get('/order', 'OrderController@starter')->middleware('auth');

// Basket Routes
Route::post('/addtobasket', 'OrderController@addtobasket')->middleware('auth');
Route::get('/checkout', 'OrderController@checkout')->middleware('auth');

// Stock Routes
Route::get('/stock', 'StockController@index')->middleware('auth');
Route::post('/additem', 'StockController@addItem')->middleware('auth');