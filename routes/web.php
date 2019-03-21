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

Route::get('/admin/login_out', function () {
    // return view('welcome');
    session()->forget('users');
    return view('admin/login');

});
	
	
// 定义后台登陆路由 
Route::get('admin_login','Admin\LoginController@admin_login');
Route::post('dologin','Admin\LoginController@dologin');

Route::group(['middleware'=> ['admin_login']],function(){
	// 定义后台首页的路由
	Route::get('admin/index','Admin\IndexController@index');
	Route::get('admin','Admin\IndexController@index');

// 定义后台用户路由
Route::resource('admin/users','Admin\UsersController');

// 定义后台链接路由
Route::resource('admin/link','Admin\LinkController');

// 定义后台用户的路由
Route::resource('admin/users','Admin\UsersController');


//分类路由
Route::resource('admin/cates','Admin\CatesController');

//轮播图路由
Route::resource('admin/slid','Admin\Slidcontroller');

});

// 定义前台的路由
Route::resource('home','Home\IndexController');











