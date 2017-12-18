<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SpgliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

        $spsp = DB::table('shop')->paginate(10);
        return view('admin.spgli.index',[
            'spsp'=>$spsp,
            
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.spgli.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $request->except(['_token']);
        // if(DB::table('shop')->insert($data)){
        //     return redirect('/spgli')->with('msg','添加成功');
        // }else{
        //     return back()->with('msg','添加失败!!');
        // }
        $info =  $request->only('shoptitle','shopcons','shopxj','shopyj');
        //文件上传
        if($request->hasFile('profile'))
        {
        //获取文件后缀
        $str = $request->file('profile')->extension();
        //创建一个新的名称
        $name = uniqid('img').'.'.$str;
        //文件夹路径
        $path = './uploade'.date('Y-m-d');
        //移动文件
        $request->file('profile')->move($path,$name);
        //获取文件的路径
        $info['profile'] = trim($path.'/'.$name,'.');
        }

        //将数据插入到数据库中
        if(DB::table('shop')->insert($info))
        {
        return redirect('/spgli')->with('msg','添加成功');
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
        $mk = DB::table('shop')->where('id',$id)->first();
        return view('admin.spgli.edit',[
            'mk'=>$mk
            ]);
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
        $info =  $request->only('shoptitle','shopcons','shopxj','shopyj','pid','profile','manmany','zengmany','sppro','xiaopro');
        //文件上传
        if($request->hasFile('profile'))
        {
        //获取文件后缀
        $str = $request->file('profile')->extension();
        //创建一个新的名称
        $name = uniqid('img').'.'.$str;
        //文件夹路径
        $path = './uploade'.date('Y-m-d');
        //移动文件
        $request->file('profile')->move($path,$name);
        //获取文件的路径
        $info['profile'] = trim($path.'/'.$name,'.');
        }

        //将数据插入到数据库中
        if(DB::table('shop')->where('id',$id)->update($info))
        {
            return redirect('/spgli')->with('msg','修改成功');
        }else{
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
        if(DB::table('shop')->where('id',$id)->delete())
        {
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败!!!');
        }
    }
}
