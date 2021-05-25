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

Route::get('/', 'MyController@home');

Route::get('/ospite/{id}', 'MyController@ospite')->name('ospite');

Route::get('/add/ospite', 'MyController@addOspite')->name('addOspite');

Route::post('/form', 'MyController@submitForm')->name('submitForm');

