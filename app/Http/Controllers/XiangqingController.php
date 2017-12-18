<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class XiangqingController extends Controller
{
    //
    public function xiangqing($id)
    {
        $xiangqing = DB::table('xiangqing')->where('sp_id',$id)->first();
        $pingjia = DB::table('pingjia')->get();
        $lb = DB::table('shop')->where('id',$id)->first();

    	return view('xiangqing.xiangqing',[

    			'xiangqing' => $xiangqing,
                'lb' => $lb,
                'pingjia' => $pingjia
    			]);
    }

    public function jrgwc(Request $Request)
    {
        $data = $Request->only(['good_id','imgs','cons','goods_xj','goods_yj']);
        $data['user_id'] = session('id');
        $data['num'] = 1;
        $data['conts'] = $data['goods_xj'] * $data['num'];
        if(!session('id'))
        {
            return redirect('/denglu')->with('msg','您还未登录,请登录');
        }
       
            if(DB::table('carts')->insert($data))
            {
                return back()->with('msg','加入购物车成功');
            }
            else
            {
                return back()->with('msg','加入购物车失败');
            }
        
    } 

    public function jrsc(Request $Request)
    {
        $sp_id = $Request->input('sp_id');
        $user_id = session('id');
        $addDate = Date('Y-m-d H:i:s');
        $arr = [
            'sp_id' => $sp_id,
            'user_id' => $user_id,
            'addDate' => $addDate
        ];
        if(empty($user_id))
        {
           
        }
        else
        {
            $tianjia = DB::table('shoucang')->insert($arr);
            if($tianjia)
            {
                echo 1;
            }
            else
            {
                echo 0;
            }
        }
        
    }
}
