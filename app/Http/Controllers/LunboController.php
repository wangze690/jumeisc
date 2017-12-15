<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class LunboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mad = DB::table('lunbo')->get();
        return view('admin.lunbo.index',[
            'mad'=>$mad
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lunbo.create');
    }

    /**
     * 添加数据库
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
         $info = $request->only('pid');
         if($request->hasFile('url'))
          {
            //获取文件后缀
           $str = $request->file('url')->extension();
           //创建一个新的名称
           $name = uniqid('img').'.'.$str;
           //文件夹路径
           $path = './uploade'.date('Y-m-d');
           //移动文件
           $request->file('url')->move($path,$name);
           //获取文件的路径
           $info['url'] = trim($path.'/'.$name,'.');
          }

          //将数据插入到数据库中
          if(DB::table('lunbo')->insert($info))
          {
            return redirect('/lunbo')->with('msg','更新成功');
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
         $lunbo = DB::table('lunbo')->where('id',$id)->first();
        return view('admin.lunbo.edit',['lunbo'=>$lunbo]);
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
        $info = $request->only('pid');
         if($request->hasFile('url'))
          {
            //获取文件后缀
           $str = $request->file('url')->extension();
           //创建一个新的名称
           $name = uniqid('img').'.'.$str;
           //文件夹路径
           $path = './uploade'.date('Y-m-d');
           //移动文件
           $request->file('url')->move($path,$name);
           //获取文件的路径
           $info['url'] = trim($path.'/'.$name,'.');
          }

          //将数据插入到数据库中
          if(DB::table('lunbo')->update($info))
          {
            return redirect('/lunbo')->with('msg','更新成功');
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
        if(DB::table('lunbo')->where('id',$id)->delete())
        {
             return back()->with('msg','删除成功');
        }
    }
}
