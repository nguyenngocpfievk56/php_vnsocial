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
    return view('welcome');
});

Route::get('/screen2', function () {
    return view('screen2');
});

Route::get('/screen3', function () {
    return view('screen3');
});

Route::get('/screen4', function () {
    return view('screen4');
});

Route::get('/post', 'Post@index');
