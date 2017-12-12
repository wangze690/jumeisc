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
   		$sp_1 = DB::table('shop')->where('pid',5)->get();
   		$sp_2 = DB::table('shop')->where('pid',6)->get();
   		$sp_3 = DB::table('shop')->where('pid',7)->get();
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
   		return view('liebiao.liebiaosan');
   	}
}
