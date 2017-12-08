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

Route::get('/admin','AdminController@index');

Route::resource('/user','UserController');

Route::get('/liebiao','LiebiaoController@liebiao');

Route::get('/mzsc','MzscController@mzsc');

//商品前端路由
	//首页路由
Route::get('/jumei','JumeiController@index');
	//购物车路由
Route::get('/cart{id}','JumeiController@cart');
	//个人中心路由
Route::get('/jumei/person{id}','JumeiController@person');
Route::post('/jumei/person{id}','JumeiController@creat');
// 短信验证
Route::get('/message','CommonController@message');
// 尺码列表
Route::get('/jumei/sizelist','JumeiController@sizelist');
Route::post('/jumei/sizelist','JumeiController@sizeadd');
Route::get('/xiangqing','XiangqingController@xiangqing');

Route::get('liebiaotwo','LiebiaoController@liebiaotwo');

