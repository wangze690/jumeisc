<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $user = DB::table('users')->get();
        // $user = DB::table('users')->paginate(10);
        
       return view('admin.user.index',['user'=>$user]);
       
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * 添加数据库
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
      $info =  $request->only('username','password','email','phone');
      $info['password'] = encrypt($info['password']);
      //文件上传
      if($request->hasFile('profile'))
      {
        //获取文件后缀
       $str = $request->file('profile')->extension();
       //创建一个新的名称
       $name = uniqid('img').'.'.$str;
       //文件夹路径
       $path = './uploade'.date('Y-m-d');
       //移动文件
       $request->file('profile')->move($path,$name);
       //获取文件的路径
       $info['profile'] = trim($path.'/'.$name,'.');
      }

      //将数据插入到数据库中
      if(DB::table('users')->insert($info))
      {
        return redirect('/user')->with('msg','更新成功');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * 用户修改.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $user = DB::table('users')->where('id',$id)->first();
        return view('admin.user.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $info = $request->only('username','email');
        //文件上传
      if($request->hasFile('profile'))
      {
        //获取文件后缀
       $str = $request->file('profile')->extension();
       //创建一个新的名称
       $name = uniqid('img').'.'.$str;
       //文件夹路径
       $path = './uploade'.date('Y-m-d');
       //移动文件
       $request->file('profile')->move($path,$name);
       //获取文件的路径
       $info['profile'] = trim($path.'/'.$name,'.');
      }
      if(DB::table('users')->where('id',$id)->update($info))
      {
            return redirect('/user')->with('msg','修改成功');
      }
      else
      {
            return back()->with('msg','更新失败');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(DB::table('users')->where('id',$id)->delete())
        {
             return back()->with('msg','删除成功');
        }

    }

    public function logout(Request $request)
    {
      //清除session
      $request->session()->flush();
      return back();
    }
}
