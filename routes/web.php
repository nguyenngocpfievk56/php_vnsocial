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
    return view('index');
});

Route::get('/post', 'Post@index');

Route::get('/news', 'NewsController@index');
Route::get('/news/add', 'NewsController@add');
Route::post('/news/store', 'NewsController@store');
