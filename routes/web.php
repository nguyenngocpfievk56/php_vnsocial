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

// Route::get('/posts', function () {
//     return view('post/index');
// });
// Route::get('/detail', function () {
//     return view('post/detail');
// });
// Route::get('/create', function () {
//     return view('post/create');
// });

Route::get('/news', 'NewsController@index');
Route::get('/news/add', 'NewsController@add');
Route::post('/news/store', 'NewsController@store');


Route::prefix('shop')->name('shop.')->group(function(){
    Route::get('/', 'ShopController@index')->name('index');
    Route::get('/detail/{id}', 'ShopController@detail')->name('detail');
    Route::get('/create', 'ShopController@create')->name('create');
});
// Route::get('/post', 'Post@index');

// Route::get('/news', 'NewsController@index');
// Route::get('/news/add', 'NewsController@add');
// Route::post('/news/store', 'NewsController@store');
// Route::get('/news/delete', 'NewsController@delete');
// Route::get('/news/{id}/{id2}', 'NewsController@detail');

Route::get('/{moduleAlias}', 'CommonController@index');
Route::get('/{moduleAlias}/add', 'CommonController@add');
Route::post('/{moduleAlias}/store', 'CommonController@store');
Route::get('/{moduleAlias}/{id}', 'CommonController@detail');

