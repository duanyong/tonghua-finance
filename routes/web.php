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
    return view('login');
});


Route::get('/login', 'LoginController@index');


# 用户点击登录按钮时请求的地址
Route::get('/auth/wechat', 'Auth\LoginController@oauth');
#
# # 微信接口回调地址
Route::get('/auth/wccallback', 'Auth\LoginController@callback');
