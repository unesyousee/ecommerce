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

Route::get('/', 'indexController@index')->name('index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index','indexController@index')->name('index');
Route::get('/goods','indexController@goods')->name('goods');
Route::get('/goods/{ename}','indexController@goods');
Route::get('/contact-us','indexController@contact')->name('contact');
Route::get('/search','indexController@search')->name('search');
Route::get('/search/optional','indexController@search_page')->name('search');
Route::get('/show/{id}','indexController@show')->name('show');

Route::get('/cart','ShopingController@cart');
Route::put('/cart','ShopingController@buy')->name('buy');
Route::get('/add-to-cart/{id}', 'ShopingController@add');
Route::patch('/update-cart', 'ShopingController@update');
Route::delete('/remove-from-cart', 'ShopingController@remove');




//Route::get('/cart','CartController@index')->name('cart.index');
//Route::post('/cart','CartController@add')->name('cart.add');
//Route::post('/cart/conditions','CartController@addCondition')->name('cart.addCondition');
//Route::delete('/cart/conditions','CartController@clearCartConditions')->name('cart.clearCartConditions');
//Route::get('/cart/details','CartController@details')->name('cart.details');
//Route::delete('/cart/{id}','CartController@delete')->name('cart.delete');
//
//Route::group(['prefix' => 'wishlist'],function()
//{
//    Route::get('/','WishListController@index')->name('wishlist.index');
//    Route::post('/','WishListController@add')->name('wishlist.add');
//    Route::get('/details','WishListController@details')->name('wishlist.details');
//    Route::delete('/{id}','WishListController@delete')->name('wishlist.delete');
//});

