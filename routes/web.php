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



Route::get('/liebiao','LiebiaoController@liebiao');

Route::get('/mzsc','MzscController@mzsc');
//前台登录
Route::get('/denglu','QiantaiController@denglu');
Route::post('/denglu','QiantaiController@postdenglu');

//前台注册
Route::get('/zhuce','QiantaiController@zhuce');
Route::post('/zhuce','QiantaiController@getzhuce');

Route::get('/grzx','QiantaiController@grzx');
Route::get('/grzxs','QiantaiController@grzxs');

	//首页路由
Route::get('/jumei','IndexController@index');
	//购物车路由
Route::get('/cart','CartController@cart');
Route::get('/cart/delete','CartController@delete');
Route::post('/dingdan','CartController@dingdan');
	//个人中心路由
Route::get('/jumei/person{id}','PersonController@person');
Route::post('/jumei/person{id}','PersonController@creat');
// 短信验证
Route::get('/message','CommonController@message');
// 尺码列表
Route::get('/jumei/sizelist','SizeController@sizelist');
Route::get('/sizelist/delete','SizeController@delete');
Route::post('/jumei/sizelist','SizeController@sizeadd');


Route::get('liebiaotwo','LiebiaoController@liebiaotwo');

Route::get('liebiaosan','LiebiaoController@liebiaosan');

//详情
Route::get('/xiangqing','XiangqingController@xiangqing');
//列表二
Route::get('/liebiaotwo','LiebiaoController@liebiaotwo');
//列表(保湿)
Route::get('/baoshi','BaoshiController@baoshi');


//后台管理路由
Route::get('/admin','AdminController@index');

Route::resource('/user','UserController');

// 我的尺码路由
Route::resource('sizemana','SizemanaController');
// 购物车后台
Route::resource('cartmana','CartmanaController');
