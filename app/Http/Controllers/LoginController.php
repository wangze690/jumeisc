<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;

class LoginController extends Controller
{
    public function login()
    {
    	return view('admin.login');
    }
    public function quert(Request $request)
    {
    	$info = $request->except(['_token']);
    	//检测接收数据是否和数据库中数据一样
    	$user = DB::table('users')->where('username',$info['username'])->first();
    	if(empty($user))
    	{
    		return back()->with('mas','登录失败');
    	}
    	else
    	{
    		//校验密码
    		if($info['password']==$user->password)
    		{
    			session(['id'=>$user->id]);
    			session(['username'=>$user->username]);
    			return redirect('/admin')->with('msg','登录成功');
    		}
    		else
    		{
    			return back()->with('msg','登录失败');
    		}
    		
    	}
    }
}
