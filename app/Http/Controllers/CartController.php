<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CartController extends Controller
{
    public function cart()
    {
        $ssid = session('id');
    	$carts = DB::table('carts')->where('user_id',$ssid)->get();
    	$nums = 0;
    	foreach($carts as $key =>$value)
    	{
    		$nums += $value->num * $value->goods_xj;
    	}
    	return view('cart.cart',['carts'=>$carts,'nums'=>$nums]);
    }
    public function delete(Request $request)
    {
    	$id = $request->input('cid');
    	if(DB::table('carts')->where('id',$id)->delete())
    	{
    		echo 1;
    	}
    	else
    	{
    		echo 0;
    	}
    }

}
