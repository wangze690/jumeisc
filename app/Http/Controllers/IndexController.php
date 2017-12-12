<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;

class IndexController extends Controller
{
     public function index()
    {
    	
    	$shop1 = DB::table('shop')->where('pid',1)->get();
    	$shop2 = DB::table('shop')->where('pid',2)->get();
    	$shop3 = DB::table('shop')->where('pid',3)->get();
    	$shop4 = DB::table('shop')->where('pid',4)->get();


    	return view('index.index',[

    		'shop1'=>$shop1,
    		'shop2'=>$shop2,
    		'shop3'=>$shop3,
    		'shop4'=>$shop4
    		]);
    }
}
