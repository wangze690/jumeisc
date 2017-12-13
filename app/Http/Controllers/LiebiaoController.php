<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class LiebiaoController extends Controller
{
	public function liebiao()
	{
		$nav = DB::table('nav')->where('path',2)->get();
		$biao = DB::table('shop')->where('pid',10)->get();
		return view('liebiao.liebiao',[
			'nav'=>$nav,
			'biao'=>$biao


			]);
	}
   	
   	public function liebiaotwo()
   	{
   		$sp_1 = DB::table('shop')->where('pid',20)->get();
   		$sp_2 = DB::table('shop')->where('pid',21)->get();
   		$sp_3 = DB::table('shop')->where('pid',22)->get();
         $nav = DB::table('nav')->where('path',2)->get();

   		return view('liebiao.liebiaotwo',[

   				'sp_1' => $sp_1,
   				'sp_2' => $sp_2,
   				'sp_3' => $sp_3,
               'nav'=>$nav
   				]);
   	}
   	public function liebiaosan()
   	{
   		$shop = DB::table('shop')->where('pid','6')->get();
         $shops = DB::table('shop')->where('pid','7')->get();
         $shopd = DB::table('shop')->where('pid','8')->get();
         $shopf = DB::table('shop')->where('pid','9')->get();
         $shopg = DB::table('shop')->where('pid','11')->get();
         $shoph = DB::table('shop')->where('pid','12')->get();


   		return view('liebiao.liebiaosan',[
            'shop'=>$shop,
            'shops'=>$shops,
            'shopd'=>$shopd,
            'shopf'=>$shopf,
            'shopg'=>$shopg,
            'shoph'=>$shoph

            ]);
   	}

   	public function gougo()
   	{
         $nav = DB::table('nav')->where('path',2)->get();
         $pinpai = DB::table('pinpai')->where('ztid',1)->get();
   		return view('liebiao.gougo',[
            'nav'=>$nav,
            'pinpai'=>$pinpai
            ]);
   	}
}
