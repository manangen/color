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





















































































	
// 定义后台登陆路由 
Route::get('admin_login','Admin\LoginController@admin_login');
Route::post('dologin','Admin\LoginController@dologin');

// 定义后台退出登陆
Route::get('admin/login_out','Admin\LoginController@login_out');

// 后台登陆
Route::group(['middleware'=> ['admin_login']],function(){

//定义后台首页
Route::get('admin/index','Admin\IndexController@index');
Route::get('admin','Admin\IndexController@index');

// 定义后台用户的路由
Route::resource('admin/users','Admin\UsersController');

// 后台分类路由
Route::resource('admin/cates','Admin\CatesController');

// 后台轮播图路由
Route::resource('admin/slid','Admin\SlidController');
// 定义商品管理
Route::resource('admin/goods','Admin\GoodsController');
// 定义后台链接路由
Route::resource('admin/link','Admin\LinkController');
// 公告路由
Route::resource('admin/notice','Admin\NoticeController');
});
// 前台公告遍历路由
Route::resource('homes/notices','Home\NoticesController');
// 前台商品遍历路由
Route::resource('home/tiem','Home\TiemController');
// 前台登录
Route::post('homes/user/store','Home\UserController@store');

// 定义前台的路由
Route::resource('home','Home\IndexController');

// 定义前台登录注册
Route::get('homes/register','Home\UserController@create');

// 前台注册
Route::post('homes/user/insert','Home\UserController@insert');
Route::get('homes/user/sendMobileCode','Home\UserController@sendMobileCode');
