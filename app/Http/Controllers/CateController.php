<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cate = DB::select("select id,name,pid,concat(path,'_',id) as paths from cate order by paths");
        foreach($cate as $key => &$value)
        {
            $count = count(explode('_',$value->paths))-2;

            $value->name = str_repeat('|-----',$count).$value->name;
        }
        return view('admin.cate.index',['cate'=>$cate]);
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = DB::table('cate')->get();
        return view('admin.cate.create',['cate'=>$cate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $date = $request->except('_token');
       if($date['pid'] == 0)
       {
            $date['path'] = 0;
       }
       else
       {
            $p = DB::table('cate')->where('id',$date['pid'])->first();
            $date['path'] = $p->path .'_'.$p->id;
       }
       if(DB::table('cate')->insert($date))
       {
            return redirect('/cate')->with('msg','添加成功');
       }
       else
       {
            return back()->with('msg','添加失败');
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
       $cate = DB::table('cate')->where('id',$id)->first();
       $path = $cate->path .'_'. $cate->id;
       $res = DB::table('cate')->where('path','like',$path.'%')->delete();
       if(DB::table('cate')->where('id',$id)->delete())
       {
        return back()->with('mag','删除成功');
       }
       else
       {
        return back()->with('mag','删除失败');
       }
    }
}
