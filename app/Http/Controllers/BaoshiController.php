<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BaoshiController extends Controller
{
    //
    public function baoshi()
    {
    	$nav = DB::table('nav')->where('path',2)->get();
    	$pinpai = DB::table('pinpai')->where('ztid',1)->get();
    	$fenlei = DB::table('fenlei')->where(['pid'=>0,'ztid'=>1])->get();
    	$gongxiao = DB::table('gongxiao')->where('ztid',1)->get();
    	$jiage = DB::table('jiage')->where('ztid',1)->get();
    	$shop = DB::table('shop')->where('pid',23)->get();

    	return view('baoshi.baoshi',[

    				'nav' => $nav,
    				'pinpai' => $pinpai,
    				'fenlei' =>$fenlei,
    				'gongxiao' => $gongxiao,
    				'jiage' => $jiage,
    				'shop' => $shop
    				]);
    }

    public function jrgwc(Request $Request)
    {

        $sp_id = $Request->input('sp_id');
        $user_id =  session('id');
        $addDate = Date('Y-m-d H:i:s');
        $data = [
            'sp_id' => $sp_id,
            'user_id' => $user_id,
            'addDate' => $addDate
        ];
        $jiaru = DB::table('carts')->insert($data);
        if(empty($user_id))
        {
            if($jiaru)
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
