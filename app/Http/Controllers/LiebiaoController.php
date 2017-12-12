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
   		return view('liebiao.liebiaotwo');
   	}
   	public function liebiaosan()
   	{
   		$shop = DB::table('shop')->where('pid','6')->get();
         $shops = DB::table('shop')->where('pid','7')->get();
         $shopd = DB::table('shop')->where('pid','8')->get();

   		return view('liebiao.liebiaosan',[
            'shop'=>$shop,
            'shops'=>$shops,
            'shopd'=>$shopd

            ]);
   	}
}
