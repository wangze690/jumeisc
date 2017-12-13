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

    

}
