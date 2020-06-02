<?php
use App\Shop;
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
Route::get('/shop', function (){
    $shops = Shop::get();
    return view('shop/index',['shops'=>$shops]);
});
Route::get('createShop', function (){
    return view('shop/create');
});
Route::post('postForm', 'ShopController@postForm')->name('postForm');
