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

Route::get('/','App\Http\Controllers\Stock@StockTable');
Route::get('/fromJson','App\Http\Controllers\StockController@create');
Route::get('/fromSqlServer','App\Http\Controllers\StockController@index');
Route::get('/delete/{id}', 'App\Http\Controllers\StockController@destroy');
