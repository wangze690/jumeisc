<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ZhandianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zhandian = DB::table('zhandian')->get();
        // $user = DB::table('users')->paginate(10);
       return view('admin.zhandian.index',['zhandian'=>$zhandian]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.zhandian.create');
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
      //将数据插入到数据库中
      if(DB::table('zhandian')->insert($info))
      {
        return redirect('/zhandian')->with('msg','更新成功');
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
        $zhandian = DB::table('zhandian')->where('id',$id)->first();
        return view('admin.zhandian.edit',['zhandian'=>$zhandian]);
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
      if(DB::table('zhandian')->where('id',$id)->update($info))
      {
            return redirect('/zhandian')->with('msg','修改成功');
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
        if(DB::table('zhandian')->where('id',$id)->delete())
        {
             return back()->with('msg','删除成功');
        }
    }
}
