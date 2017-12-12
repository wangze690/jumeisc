<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LiebiaoController extends Controller
{
	public function liebiao()
	{
		return view('liebiao.liebiao');
	}
   	
   	public function liebiaotwo()
   	{
   		$sp_1 = DB::table('shop')->where('pid',5)->get();
   		$sp_2 = DB::table('shop')->where('pid',6)->get();
   		$sp_3 = DB::table('shop')->where('pid',7)->get();

   		return view('liebiao.liebiaotwo',[

   				'sp_1' => $sp_1,
   				'sp_2' => $sp_2,
   				'sp_3' => $sp_3
   				]);
   	}
}
