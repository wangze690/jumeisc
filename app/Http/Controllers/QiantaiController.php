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
            return redirect('/grzxs')->with('msg','登陆成功');
            
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
        return redirect('/denglu')->with('msg','注册成功');
    }

     public function grzx()
    {
        $nav = DB::table('nav')->where('path',2)->get();
        $sid = session('id');
        $userinfos = DB::table('userinfos')->where('user_id',$sid)->first();
        $zhandian = DB::table('zhandian')->first();
        
       
    	return view('grzx.user',['userinfos'=>$userinfos,'nav'=>$nav,'zhandian'=>$zhandian]);
    }
    public function update(Request $request,$id)
    {
        $info = $request->except('_token');
        //文件上传
      if($request->hasFile('touxiang'))
      {
        //获取文件后缀
       $str = $request->file('touxiang')->extension();
       //创建一个新的名称
       $name = uniqid('img').'.'.$str;
       //文件夹路径
       $path = './uploade'.date('Y-m-d');
       //移动文件
       $request->file('touxiang')->move($path,$name);
       //获取文件的路径
       $info['touxiang'] = trim($path.'/'.$name,'.');
      }
        if(DB::table('userinfos')->where('id',$id)->update($info))
        {
            return back()->with('msg','修改成功');
        }
    }




    public function grzxs(Request $request)
    {
        $nav = DB::table('nav')->where('path',2)->get();

        $shouhuodz = DB::table('shouhuodz')->where('user_id', session('id'))->get();

        foreach ($shouhuodz as $key => $value){
            $value->pname = DB::table('areas')->where('id',$value->province)->value('area_name');
            $value->cname = DB::table('areas')->where('id',$value->city)->value('area_name');
            $value->xname = DB::table('areas')->where('id',$value->xian)->value('area_name');

        }
        $zhandian = DB::table('zhandian')->where('ztid',1)->first();
        return view('grzx.add',['shouhuodz'=>$shouhuodz,'nav'=>$nav,'zhandian'=>$zhandian]);
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
