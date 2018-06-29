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

Route::get('/', 'IndexController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/masochists', 'MasochistController@index')->name('masochists');
Route::get('/masochists/add', 'MasochistController@add')->name('masochists-add');

Route::post('/masochists', 'MasochistController@store')->middleware('auth');
