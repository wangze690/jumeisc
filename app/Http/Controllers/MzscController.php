<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MzscController extends Controller
{
    public function mzsc()
    {
    	$nav = DB::table('nav')->where('path',2)->get();
    	$cbnav = DB::table('nav')->where(['path'=>3,'pid'=>0])->get();
        foreach ($cbnav as $s => $t) {
            $t->two = DB::table('nav')->where('pid',$t->id)->get();
        }

    	 $zhandian = DB::table('zhandian')->where('ztid',1)->first();

    	$pro = DB::table('shopspnr')->where('spid',2)->get();
    	$pro_one = DB::table('shopspnr')->where('spid',3)->get();
    	$pro_two = DB::table('shopspnr')->where('spid',4)->get();
    	$senr = DB::table('shop')->where(['pid'=>7])->get();
    	return view('mzsc.mzsc',[
    		'nav'=>$nav,
    		'cbnav'=>$cbnav,
    		'pro'=>$pro,
    		'pro_one'=>$pro_one,
    		'pro_two'=>$pro_two,
    		'senr'=>$senr,
            'zhandian'=>$zhandian
    		]);
    }
}
