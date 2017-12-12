<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QiantaiController extends Controller
{
    public function denglu()
    {
    	return view('user.denglu');
    }

    public function postdenglu(Request $request)
    {
        $deluinfo = $request->only('phone','pwds');
        //检测数据是否正确 根据用户名来查找用户信息
        $user = DB::table('users')->where('phone', $deluinfo['phone'])->first();
        //判断 没有这个用户
        if(empty($user)) {
            return back()->with('msg','登陆失败!!');
        }
        
        //校验密码
        if ($deluinfo['pwds']==$user->pwds) {
              
            session(['id'=>$user->id]);
            session(['phone'=>$user->phone]);

            //登陆成功
            return redirect('/liebiaosan')->with('msg','登陆成功');
            
        }
        return back()->with('msg','登录失败');
        
    }

     public function zhuce()
    {
    	return view('user.zhuce');
    }
    public function getzhuce(Request $request)
    {
       $userinfo= $request->only('phone','pwds');
   
      //将数据插入到数据库中
        DB::table('users')->insert($userinfo);
        return view('user.denglu');
    }

     public function grzx()
    {
    	return view('grzx.user');
    }
    public function grzxs()
    {
        return view('grzx.add');
    }
}
