<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;

class IndexController extends Controller
{
     public function index()
    {
    	$nav = DB::table('nav')->where('path',2)->get();
    	$shop1 = DB::table('shop')->where('pid',1)->get();
    	$shop2 = DB::table('shop')->where('pid',2)->get();
    	$shop3 = DB::table('shop')->where('pid',3)->get();
    	$shop4 = DB::table('shop')->where('pid',4)->get();
        $imgs = DB::table('lunbo')->where('pid',1)->get();


    	return view('index.index',[
            'nav'=>$nav,
    		'shop1'=>$shop1,
    		'shop2'=>$shop2,
    		'shop3'=>$shop3,
    		'shop4'=>$shop4,
            'atr'=>$imgs
    		]);
    }
}
