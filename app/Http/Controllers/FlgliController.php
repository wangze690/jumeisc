<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class FlgliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $xinxi =  DB::select("select id,navname,pid,concat(path,'_',id) as paths from nav order by paths=2");
       foreach ($xinxi as $key => $value) {
           $count = count(explode('_',$value->paths))-2;

            $value->navname =str_repeat('|----', $count).$value->navname;
       }

       return view('admin.flgli.index',[
        'xinxi' => $xinxi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $flgl =DB::table('nav')->where(['path'=>3,'pid'=>0])->get();
        return view('admin.flgli.create',[
            'flgl'=>$flgl
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取参数把不用的去掉
        $data = $request->except(['_token']);
        //判断是否食顶级分类
        if($data['pid'] == 0){
            $data['path'] = '2';  
        }
        else{
            //读取父级分类的信息
            $d = DB::table('nav')->where('id',$data['pid'])->first();
            $data['path'] = $d->path.'_'.$d->id;
        }
        //将数据添加到数据库中
        if(DB::table('nav')->insert($data)){
            return redirect('/flgli')->with('msg','添加成功');
        }else{
            return back()->with('msg','添加失败!!');
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
       $a =  DB::table('nav')->where('id',$id)->first();
       $path = $a->path.'_'.$a->id;
       
       $res = DB::table('nav')->where('path','like',$path.'%')->delete();
      
      if(DB::table('nav')->where('id',$id)->delete())
      {
        return back()->with('msg','删除成功');
      }else{
        return back()->with('msg','删除失败！！');
      }
    }
}
