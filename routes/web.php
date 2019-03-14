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
//定义后台首页的路由
Route::get('admin','Admin\IndexController@index');

Route::resource('admin/users','Admin\UsersController');
//分类路由
Route::resource('admin/cates','Admin\CatesController');


