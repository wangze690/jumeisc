<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;

class PersonController extends Controller
{
    public function person()
    {
    	

        $nav = DB::table('nav')->where('path',2)->get();
    	return view('person.person',['nav'=>$nav]);
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
