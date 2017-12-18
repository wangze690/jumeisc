<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PingjiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //显示列表,并设置分页
        $pjgl = DB::table('pingjia')->paginate(5);


        return view('admin.pjgl.index',['pjgl' => $pjgl]);
    }

    /**
     * 显示用户添加的模板
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.pjgl.create');
    }

    /**
     * 把添加的数据上传到数据库
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['username','title','cons']);

        if($request->hasFile('toutu'))
        {
            //获取文件的后缀名
            $suffix = $request->file('toutu')->extension();
            //创建一个新的随机名称
            $name = uniqid('img_').'.'.$suffix;
            //文件夹路径
            $dir = './upload/'.date('Y-m-d');
            //移动文件
            $request->file('toutu')->move($dir,$name);
            //获取图片路径
            $data['toutu'] = trim($dir.'/'.$name,'.');
        }

        //将数据插入到数据库中
        if(DB::table('pingjia')->insert($data))
        {
            return redirect('/pjgl')->with('msg','添加成功');
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
     * 修改数据
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $xgpj = DB::table('pingjia')->where('id',$id)->first();

        return view('admin.pjgl.edit',['xgpj' => $xgpj]);
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
       $data = $request->only(['username','title','cons']);

       if($request->hasFile('toutu'))
       {
            //获取文件后缀名
            $suffix = $request->file('toutu')->extension();
            //创建一个随机的文件名
            $name = uniqid('touwu').'.'.$suffix;
            //文件夹路径
            $dir = './upload/'.date('Y-m-d');
            //移动文件
            $request->file('toutu')->move($dir,$name);
            //获取文件的路径
            $data['toutu'] = trim($dir.'/'.$name,'.');
       }

        //更新
        if(DB::table('pingjia')->where('id',$id)->update($data))
        {
            return redirect('/pjgl')->with('msg','修改成功');
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
        //执行删除
        if(DB::table('pingjia')->where('id',$id)->delete())
        {
            return back()->with('msg','删除成功');
        }
        else
        {
            return back()->with('msg','删除失败');
        }
    }
}
