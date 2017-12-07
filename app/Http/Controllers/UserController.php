<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('user')->paginate(10);

        return view('admin.user.index',['user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //用户添加模板
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取到用户添加的内容
        $rs = $request->only(['username','password','email']);
        //密码加密
        $rs['password'] = encrypt($rs['password']);
        //文件上传
        if($request->hasFile('profile'))
        {
            //获取文件名的后缀
            $houzui = $request->file('profile')->extension();
            //文件夹的路径
            $suiji = uniqid('img_').'.'.$houzui;
            //移动文件
            $lujin = './uploads/'.date('Y-m-d');
            
            $request->file('profile')->move($lujin, $suiji);

            $rs['profile'] = trim($lujin.'/'.$suiji,'.');  //trim(a,b)函数可以去掉b
        }
        $rs['ztid'] = 1;

        if( DB::table('user')->insert($rs)){
            return redirect('/user')->with('msg','添加成功');
        }else{
             return back()->with('msg','添加失败');
        }
        
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
