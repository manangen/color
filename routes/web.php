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
	// dump('萝卜');
    return view('welcome');
});





















































































// 定义后台首页的路由
Route::get('admin','Admin\IndexController@index');

// 定义后台用户的路由
Route::resource('admin/users','Admin\UsersController');

// 分类路由
Route::resource('admin/cates','Admin\CatesController');

// 轮播图路由
Route::resource('admin/slid','Admin\SlidController');

// 定义后台首页的路由
Route::get('admin','Admin\IndexController@index');

// 定义后台链接路由
Route::resource('admin/link','Admin\LinkController');

// 定义前台的路由
Route::resource('home','Home\IndexController');

// 定义前台登录注册
Route::get('homes/register','Home\UserController@create');

//前台注册
Route::post('homes/user/insert','Home\UserController@insert');
Route::get('homes/user/sendMobileCode','Home\UserController@sendMobileCode');

//前台登录
Route::post('homes/user/store','Home\UserController@store');





































































































