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
Route::get('/store/{name}-{id}','HomePageController@showCouponsByStore');
Route::get('/coupon-single.html','HomePageController@Single_coupon');
Route::get('/autocomplete',array('as'=>'autocomplete','uses'=>'HomePageController@autocomplete'));
Route::get('/db', 'HomePageController@test');
Route::get('/db2', 'HomePageController@check');
Route::get('/login','AdminController@showLogin');
//Route::post('/admin',array('as'=>'login','uses'=>'AdminController@doLogin'));
Route::post('/quantri','AdminController@doLogin')->name('login');
Route::get('/abc','HomePageController@abc');
