<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CartmanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = DB::table('carts')->get();
        // $user = DB::table('users')->paginate(10);
       return view('admin.cart.index',['carts'=>$carts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cart.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $info =  $request->except('_token');
      //文件上传
      if($request->hasFile('imgs'))
      {
        //获取文件后缀
       $str = $request->file('imgs')->extension();
       //创建一个新的名称
       $name = uniqid('img').'.'.$str;
       //文件夹路径
       $path = './uploade/'.date('Y-m-d');
       //移动文件
       $request->file('imgs')->move($path,$name);
       //获取文件的路径
       $info['imgs'] = trim($path.'/'.$name,'.');
      }

      //将数据插入到数据库中
      if(DB::table('carts')->insert($info))
      {
        return redirect('/cartmana')->with('msg','更新成功');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carts = DB::table('carts')->where('id',$id)->first();
        return view('admin.cart.edit',['carts'=>$carts]);
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
         $info =  $request->except('_token','_method');
      //文件上传
      if($request->hasFile('imgs'))
      {
        //获取文件后缀
       $str = $request->file('imgs')->extension();
       //创建一个新的名称
       $name = uniqid('img').'.'.$str;
       //文件夹路径
       $path = './uploade/'.date('Y-m-d');
       //移动文件
       $request->file('imgs')->move($path,$name);
       //获取文件的路径
       $info['imgs'] = trim($path.'/'.$name,'.');
      }

    
      if(DB::table('carts')->where('id',$id)->update($info))
      {
            return redirect('/cartmana')->with('msg','修改成功');
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
        if(DB::table('carts')->where('id',$id)->delete())
        {
             return back()->with('msg','删除成功');
        }
    }
}
