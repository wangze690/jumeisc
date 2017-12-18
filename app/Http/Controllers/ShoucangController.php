<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ShoucangController extends Controller
{
    public function shoucang()
    {
        $user_id = session('id');
        $shoucang = DB::table('shoucang')->where('user_id',$user_id)->get();
    	foreach ($shoucang as $key => $value) {
          $value->goods = DB::table('shop')->where('id',$value->sp_id)->first();
        }

        $sl = DB::table('shoucang')->where('user_id',$user_id)->count();

        $nav = DB::table('nav')->where('path',2)->get();
        $zhandian = DB::table('zhandian')->where('ztid',1)->first();
        return view('shoucang.shoucang',[
                    'shoucang' => $shoucang,
                    'nav' => $nav,
                    'sl' => $sl,
                     'zhandian'=>$zhandian
                    ]);

    }

   
    public function delete($id)
    {
       if(DB::table('shoucang')->where('id',$id)->delete())
        {
            return back()->with('msg','删除成功');
        }
        else
        {
            return back()->back('msg','删除失败');
        }
    }

}
