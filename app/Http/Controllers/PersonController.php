<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PersonController extends Controller
{
    public function person()
    {
        $ssid = session('id');
        $ssphone = session('phone');
    	$phone = DB::table('users')->where('id',$ssid)->get();
        $zhandian = DB::table('zhandian')->where('ztid',1)->first();
        $nav = DB::table('nav')->where('path',2)->get();
    	return view('person.person',[
            'nav'=>$nav,
            'phone'=>$phone,
            'zhandian'=>$zhandian,
            'ssphone'=>$ssphone
            ]);
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
}
