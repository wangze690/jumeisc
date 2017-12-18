<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class XqglController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $xqgl = DB::table('xiangqing')->paginate(5);
        return view('admin.xqgl.index',['xqgl' => $xqgl]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.xqgl.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['sp_id','from_2','from_3','xinxi','xiangqing','fangfa','shipai','jisu']);
        if($request->hasfile('from_1'))
        {
            $suffix = $request->file('from_1')->extension();
            $name = uniqid('img_').'.'.$suffix;
            $dir = './upload/'.date('Y-m-d');
            $request->file('from_1')->move($dir,$name);
            $data['from_1'] = trim($dir.'/'.$name,'.');
        }

        if(DB::table('xiangqing')->insert($data))
        {
            return redirect('/xqgl')->with('msg','添加成功');
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
        $xqgl = DB::table('xiangqing')->where('id',$id)->first();
        return view('admin.xqgl.edit',['xqgl' => $xqgl]);
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
        $data = $request->only(['sp_id','from_2','from_3','xinxi','xiangqing','fangfa','shipai','jisu']);
        if($request->hasFile('from_1'))
        {
            $suffix = $request->file('from_1')->extension();
            $name = uniqid('img_').'.'.$suffix;
            $dir = './upload/'.date('Y-m-d');
            $request->file('from_1')->move($dir,$name);
            $data['from_1'] = trim($dir.'/'.$name,'.');
        }

        if(DB::table('xiangqing')->where('id',$id)->update($data))
        {
            return redirect('/xqgl')->with('msg','修改成功');
        }
        else
        {
            return back()->with('msg','修改失败');
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
        if(DB::table('xiangqing')->where('id',$id)->delete())
        {
            return back()->with('msg','删除成功');
        }
        else
        {
            return back()->with('msg','删除失败');
        }
    }
}
