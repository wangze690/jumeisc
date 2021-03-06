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

Route::get('/dingdan/pay', 'DingdanController@pay');
//登录路由
Route::get('/admin/login','LoginController@login');
Route::post('/admin/login','LoginController@quert');

Route::group(['middleware'=>'login'],function(){
//后台管理路由
Route::get('/admin','AdminController@index');
//用户管理路由
Route::resource('user','UserController');
//留言管理路由
Route::resource('article','ArticleController');
//评价管理
Route::resource('/pjgl','PingjiaController');
//详情管理
Route::resource('/xqgl','XqglController');

Route::resource('cate','CateController');
});

Route::get('/logout','UserController@logout');

Route::get('/liebiao','LiebiaoController@liebiao');

Route::get('/mzsc','MzscController@mzsc');
//前台登录
Route::get('/denglu','QiantaiController@denglu');
Route::post('/denglu','QiantaiController@postdenglu');

//前台注册
Route::get('/zhuce','QiantaiController@zhuce');
Route::post('/zhuce','QiantaiController@getzhuce');
//个人中心
Route::get('/grzx','QiantaiController@grzx');
Route::post('/grzx/{id}','QiantaiController@update');
//收货地址
Route::get('/grzxs','QiantaiController@grzxs');
Route::post('/grzxss', 'QiantaiController@addres');
Route::get('/getarea', 'QiantaiController@getArea');
Route::get('/delete', 'QiantaiController@delete');

//首页路由
Route::get('/jumei','IndexController@index');

	//购物车路由
Route::get('/cart','CartController@cart');



Route::get('/cart/delete','CartController@delete');
Route::resource('/dingdan','DingdanController');

Route::post('/dingdan/conform','DingdanController@conform');

//个人中心路由
Route::get('/jumei/person','PersonController@person');
Route::post('/jumei/person','PersonController@creat');
//轮播管理路由
Route::resource('/lunbo','LunboController');



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
Route::get('/xiangqing/{id}','XiangqingController@xiangqing');
Route::post('/jrgwc','XiangqingController@jrgwc');
Route::get('/jrsc','XiangqingController@jrsc');
//列表二
Route::get('/liebiaotwo','LiebiaoController@liebiaotwo');
//列表(保湿)
Route::get('/baoshi','BaoshiController@baoshi');

//列表gougo
Route::get('/gougo','LiebiaoController@gougo');
//收藏
Route::get('/shoucang','ShoucangController@shoucang');
Route::post('/qcshoucang/{id}','ShoucangController@delete');


//后台管理路由
Route::get('/admin','AdminController@index');

Route::resource('/user','UserController');


// 我的尺码路由
Route::resource('sizemana','SizemanaController');
// 购物车后台
Route::resource('cartmana','CartmanaController');
//分类管理
Route::resource('flgli','FlgliController');
//商品管理
Route::resource('spgli','SpgliController');

// 站点管理
Route::resource('zhandian','ZhandianController');
