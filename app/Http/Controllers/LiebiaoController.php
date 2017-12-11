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
   		return view('liebiao.liebiaosan');
   	}
}
