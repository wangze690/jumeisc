<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ShoucangController extends Controller
{
    public function shoucang()
    {
    	$nav = DB::table('nav')->where('path',2)->get();
    	$shoucang = DB::table('shoucang')->get();
    	foreach ($shoucang as $key => $value) {
    	}
    	$sp_id = $value->sp_id;
    	$user_id = $value->user_id;

    	$user = DB::table('users')->where('id',$user_id)->get();
    	$sp_id = DB::table('shop')->where('id',$sp_id)->get();
    	dd($sp_id);

    	return view('shoucang.shoucang',[

    				'nav' => $nav
    				]);
    }

}
