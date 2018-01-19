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

Route::get('/admin','AdminController@index');
Route::get('/','HomePageController@home');
Route::get('/store/{name}-{id}','HomePageController@showStore');
Route::get('/coupon-single.html','HomePageController@Single_coupon');
Route::get('/autocomplete',array('as'=>'autocomplete','uses'=>'HomePageController@autocomplete'));
Route::get('/db', 'HomePageController@test');
