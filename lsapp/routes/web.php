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

Route::get('/', 'PagesController@index');

Route::get('/rooms', 'PagesController@rooms');

Route::get('/workers', 'PagesController@workers');


Route::resource('workers', 'PostController');
Route::resource('rooms', 'RoomController');

