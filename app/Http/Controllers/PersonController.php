<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class PersonController extends Controller
{
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

    public function getArea(Request $request)
    {
        $pid = $request->pid;
       
        $areas = DB::table('areas')->where('area_parent_id',$pid)->get();

        return $areas->toJson();

    }
}
