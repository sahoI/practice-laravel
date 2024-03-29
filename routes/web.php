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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','StoresController@index')->name('top');
Route::resource('stores', 'StoresController', ['only' => ['create', 'store', 'show']]);
Route::resource('items', 'ItemsController', ['only' => ['create', 'store', 'show']]);
