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

Route::get('/',[
    'as'=>'homepage',
    'uses'=>'HomePageController@home'
]);

Route::get('/store/{name}-{id}',[
    'as'=>'stores',
    'uses'=>'HomePageController@showCouponsByStore'
]);

Route::get('/coupon-single.html',[
    'as'=>'single_coupon',
    'uses'=>'HomePageController@Single_coupon'
]);

Route::get('/autocomplete',[
    'as'=>'autocomplete',
    'uses'=>'HomePageController@autocomplete'
]);

Route::get('/db','HomePageController@test');

//Route::post('/admin',array('as'=>'login','uses'=>'AdminController@doLogin'));
Route::get('/abc','HomePageController@abc');

Route::group(['middleware' => ['web']], function () {

    Route::get('/login',[
        'as'=>'get_form_login',
        'uses'=>'AdminController@showLogin'
    ]);

    Route::post('/login',[
        'as'=>'login',
        'uses'=>'AdminController@doLogin'
    ]);

    Route::get('/admin/category',[
        'as'=>'admin_category',
        'uses'=>'AdminController@editCategory'
    ]);

    Route::get('/admin/home',[
        'as'=>'admin_page',
        'uses'=>'AdminController@index'
    ]);

});

