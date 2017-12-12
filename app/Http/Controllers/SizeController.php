<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SizeController extends Controller
{
    public function sizelist()
    {
    	$size = DB::table('size')->get();
    	foreach ($size as $key => $value)
    	 {
    		if($value->sex == 1)
    		{
    			$value->sex='女';
    		}
    		elseif($value->sex == 0)
    		{
    			$value->sex='男';
    		}
    	 }
    	$nav = DB::table('nav')->where('path',2)->get();
    	return view('size.sizelist',['nav'=>$nav,'size'=>$size]);
    }
    public function sizeadd(Request $request)
    {
    	$info = $request->except('_token');
    	if(DB::table('size')->insert($info))
    	{
    		return back();
    	}
    }
     public function delete(Request $request)
    {
    	$id = $request->input('cid');
    	if(DB::table('size')->where('id',$id)->delete())
    	{
    		echo 1;
    	}
    	else
    	{
    		echo 0;
    	}
    }
}
