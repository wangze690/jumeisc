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
            return redirect('/mzsc')->with('msg','登陆成功');
            
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
        $nav = DB::table('nav')->where('path',2)->get();
        $sid = session('id');
        $userinfos = DB::table('userinfos')->where('user_id',$sid)->first();
        $shengr = $userinfos->shengr
        $year = substr(0,3);
        dd($year);
    	return view('grzx.user',['userinfos'=>$userinfos,'nav'=>$nav]);
    }





    public function grzxs(Request $request)
    {
        $nav = DB::table('nav')->where('path',2)->get();

        $shouhuodz = DB::table('shouhuodz')->where('user_id', session('id'))->get();

        foreach ($shouhuodz as $key => &$value){
            $value->pname = DB::table('areas')->where('id',$value->province)->value('area_name');
            $value->cname = DB::table('areas')->where('id',$value->city)->value('area_name');
            $value->xname = DB::table('areas')->where('id',$value->xian)->value('area_name');

        }
        return view('grzx.add',['shouhuodz'=>$shouhuodz,'nav'=>$nav]);
    }

     public function addres(Request $request)
    {
        // dd($request->all());
        //获取数据
        $data = $request->except(['_token']);
        
        $data['user_id'] = session('id');
        //插入
        if(DB::table('shouhuodz')->insert($data)) {
            return redirect('/grzxs');
        }else{
            
        }
       

    }
    public function getArea(Request $request)
    {
        $pid = $request->pid;
       
        $areas = DB::table('areas')->where('area_parent_id',$pid)->get();

        return $areas->toJson();
    }
    public function delete(Request $request)
    {
        $id = $request->input('id');
        if(DB::table('shouhuodz')->where('id',$id)->delete())
        {
            echo 1;
        }
        else
        {
            echo 0;
        }
    }

}
