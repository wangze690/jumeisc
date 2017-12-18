<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SizeController extends Controller
{

    public function index()
    {

    	$shop1 = DB::table('shop')->where('pid',1)->get();
    	$shop2 = DB::table('shop')->where('pid',2)->get();
    	$shop3 = DB::table('shop')->where('pid',3)->get();
    	$shop4 = DB::table('shop')->where('pid',4)->get();
        $zhandian = DB::table('zhandian')->where('ztid',1)->first();
    	return view('index.index',[

    		'shop1'=>$shop1,
    		'shop2'=>$shop2,
    		'shop3'=>$shop3,
    		'shop4'=>$shop4,
            'zhandian'=>$zhandian
    		]);
    }
    public function cart()
    {
    	return view('cart.cart');
    }
    public function person()
    {
    	


    	return view('person.person',[]);
    }


    public function creat(Request $request,$id)
    {
    	$data = $request->only('vcode');

    	if(session('vcode') == $data['vcode'])
    	{
    		$pwd = $request->only('password');
	    	$pwd['password'] = Hash::make($pwd['password']);
	    	// 检测密码是否和数据库中一样
	    	$user = DB::table('users')->where('password',$pwd['password'])->first();
	    	if(empty($user))
	    	{
	    		DB::table('users')->update($pwd);
	    		
	    	}
    	}
    	else
    	{
    		return back()->with('msg','验证码错误');
    	}
    	
    	
    }

    public function sizelist()
    {
        $ssphone = session('phone');
    	$size = DB::table('size')->get();
    	foreach ($size as $key => $value)
    	 {
    		if($value->sex == 1)
    		{
    			$value->sex='女';
    		}
    		elseif($value->sex == 0)
    		{
    			$value->sex='男';
    		}
    	 }
    	$nav = DB::table('nav')->where('path',2)->get();
         $zhandian = DB::table('zhandian')->where('ztid',1)->first();
    	return view('size.sizelist',['nav'=>$nav,'size'=>$size,'zhandian'=>$zhandian,'ssphone'=> $ssphone]);
    }
    public function sizeadd(Request $request)
    {
    	$info = $request->except('_token');
    	if(DB::table('size')->insert($info))
    	{
    		return back();
    	}
    }
     public function delete(Request $request)
    {
    	$id = $request->input('cid');
    	if(DB::table('size')->where('id',$id)->delete())
    	{
    		echo 1;
    	}
    	else
    	{
    		echo 0;
    	}
    }
}
