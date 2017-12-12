<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class XiangqingController extends Controller
{
    //
    public function xiangqing($id)
    {

    	$xq_1 = DB::table('xiangqing')->where('id',1)->first();
    	$xq_2 = DB::table('xiangqing')->where('id',2)->first();
    	$xq_3 = DB::table('xiangqing')->where('id',3)->first();
    	$xq_4 = DB::table('xiangqing')->where('id',4)->first();
    	$xq_5 = DB::table('xiangqing')->where('id',5)->first();
    	$xq_6 = DB::table('xiangqing')->where('id',6)->first();
    	$xq_7 = DB::table('xiangqing')->where('id',7)->first();
    	$xq_8 = DB::table('xiangqing')->where('id',8)->first();
    	$xq_9 = DB::table('xiangqing')->where('id',9)->first();
    	$xq_10 = DB::table('xiangqing')->where('id',10)->first();
    	$xq_11 = DB::table('xiangqing')->where('id',11)->first();
    	$xq_12 = DB::table('xiangqing')->where('id',12)->first();
    	$xq_13 = DB::table('xiangqing')->where('id',13)->first();
    	$xq_14 = DB::table('xiangqing')->where('id',14)->first();
    	$xq_15 = DB::table('xiangqing')->where('id',15)->first();
    	$xq_16 = DB::table('xiangqing')->where('id',16)->first();
    	$xq_17 = DB::table('xiangqing')->where('id',17)->first();
    	$xq_18 = DB::table('xiangqing')->where('id',18)->first();


        $lb = DB::table('shop')->where('id',$id)->first();


    	return view('xiangqing.xiangqing',[

    			'xq_1' => $xq_1,
    			'xq_2' => $xq_2,
    			'xq_3' => $xq_3,
    			'xq_4' => $xq_4,
    			'xq_5' => $xq_5,
    			'xq_6' => $xq_6,
    			'xq_7' => $xq_7,
    			'xq_8' => $xq_8,
    			'xq_9' => $xq_9,
    			'xq_10' => $xq_10,
    			'xq_11' => $xq_11,
    			'xq_12' => $xq_12,
    			'xq_13' => $xq_13,
    			'xq_14' => $xq_14,
    			'xq_15' => $xq_15,
    			'xq_16' => $xq_16,
    			'xq_17' => $xq_17,
    			'xq_18' => $xq_18,
                'lb' => $lb
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
