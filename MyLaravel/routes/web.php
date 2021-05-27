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

Route::get('/ospiti', 'MyController@home')->name('home');

Route::get('/ospiti/{id}', 'MyController@ospite')->name('ospite');

Route::get('/ospiti/create', 'MyController@createGuest')->name('create');

Route::post('/store', 'MyController@storeGuest')->name('update');

