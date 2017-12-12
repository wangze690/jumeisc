<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = DB::table('nav')->paginate(10);
       return view('admin.article.index',['article'=>$article]);
    }

    /**
     * 添加数据
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $info =  $request->only('navname');
      //文件上传
      

      //将数据插入到数据库中
      if(DB::table('nav')->insert($info))
      {
        return redirect('/article')->with('msg','更新成功');
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
        $article = DB::table('nav')->where('id',$id)->first();
        return view('admin.article.edit',['article'=>$article]);
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
        $info = $request->only('navname');
        //文件上传
     
      if(DB::table('nav')->where('id',$id)->update($info))
      {
            return redirect('/article')->with('msg','修改成功');
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
      dd($id);
       if(DB::table('nav')->where('id',$id)->delete())
        {
             return back()->with('msg','删除成功');
        }
    }
}
