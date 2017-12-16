<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SizemanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $size = DB::table('size')->get();
        // $user = DB::table('users')->paginate(10);
        
       return view('admin.size.index',['size'=>$size]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.size.create');
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
      if(DB::table('size')->insert($info))
      {
        return redirect('/sizemana')->with('msg','更新成功');
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
         $size = DB::table('size')->where('id',$id)->first();
        return view('admin.size.edit',['size'=>$size]);
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
        $info = $request->except('_method','_token');
      if(DB::table('size')->where('id',$id)->update($info))
      {
            return redirect('/sizemana')->with('msg','修改成功');
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
        if(DB::table('size')->where('id',$id)->delete())
        {
             return back()->with('msg','删除成功');
        }

    }
}
