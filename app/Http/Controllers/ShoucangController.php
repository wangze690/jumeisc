<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ShoucangController extends Controller
{
    public function shoucang()
    {
    	$nav = DB::table('nav')->where('path',2)->get();

    	return view('shoucang.shoucang',[

    				'nav' => $nav
    				]);
    }
}
