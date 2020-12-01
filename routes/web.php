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

Route::get('/news', 'NewsController@index')->middleware('testmiddleware');
Route::get('/news/add', 'NewsController@add')->middleware('testmiddleware');
Route::post('/news/store', 'NewsController@store');
Route::get('/news/detail/{news}', 'NewsController@detail');

// Route::prefix('shop')->name('shop.')->group(function(){
//     Route::get('/', 'ShopController@index')->name('index');
//     Route::get('/detail/{id}', 'ShopController@detail')->name('detail');
//     Route::get('/create', 'ShopController@create')->name('create');
// });

// Route::get('/{moduleAlias}', 'CommonController@index');
// Route::get('/{moduleAlias}/add', 'CommonController@add');
// Route::post('/{moduleAlias}/store', 'CommonController@store');
// Route::get('/{moduleAlias}/{id}', 'CommonController@detail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
// Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

// Route::get("/auth/otp", "CustomAuthController@authOtp");
// Route::get("/auth/send-otp", "CustomAuthController@sendOtp");
// Route::post("/auth/check-otp", "CustomAuthController@checkOtp");
// Route::get('/login', 'CustomAuthController@login');
// Route::post('/auth/do-login', 'CustomAuthController@doLogin');
// Route::get('/auth/do-logout', 'CustomAuthController@doLogout');
// Route::get('/', 'HomeController@index');

Route::get("/products", 'NewsController@products');
