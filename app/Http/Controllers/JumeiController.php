<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;

class JumeiController extends Controller
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
    public function cart()
    {
    	return view('cart.cart');
    }
    public function person()
    {
    	


    	return view('person.person',[]);
    }


    public function creat(Request $request,$id)
    {
    	$data = $request->only('vcode');

    	if(session('vcode') == $data['vcode'])
    	{
    		$pwd = $request->only('password');
	    	$pwd['password'] = Hash::make($pwd['password']);
	    	// 检测密码是否和数据库中一样
	    	$user = DB::table('users')->where('password',$pwd['password'])->first();
	    	if(empty($user))
	    	{
	    		DB::table('users')->update($pwd);
	    		
	    	}
    	}
    	else
    	{
    		return back()->with('msg','验证码错误');
    	}
    	
    	
    }
    public function sizelist()
    {
    	$nav1 = DB::table('nav')->where('path',0)->get();
    	$nav2 = DB::table('nav')->where('path',1)->get();
   			// for($i=0;$i<count($nav2);$i++)
			// {
			// $nav2->path = 
			// $pthr['navclassid']=$ptwonav[$i]['navid'];
			// $ptwonav[$i]['kkk']=$n->where($pthr)->select();
			// }
    	$nav3 = DB::table('nav')->where('path',2)->get();
    	
    	$shop1 = DB::table('shop')->where('pid',1)->get();
    	$shop2 = DB::table('shop')->where('pid',2)->get();
    	$shop3 = DB::table('shop')->where('pid',3)->get();
    	$shop4 = DB::table('shop')->where('pid',4)->get();


    	return view('jumei.size.sizelist',[
    		'nav1'=>$nav1,
    		'nav2'=>$nav2,
    		'nav3'=>$nav3,
    		'shop1'=>$shop1,
    		'shop2'=>$shop2,
    		'shop3'=>$shop3,
    		'shop4'=>$shop4
    		]);
    }
    public function sizeadd()
    {
    	$nav1 = DB::table('nav')->where('path',0)->get();
    	$nav2 = DB::table('nav')->where('path',1)->get();
   			// for($i=0;$i<count($nav2);$i++)
			// {
			// $nav2->path = 
			// $pthr['navclassid']=$ptwonav[$i]['navid'];
			// $ptwonav[$i]['kkk']=$n->where($pthr)->select();
			// }
    	$nav3 = DB::table('nav')->where('path',2)->get();
    	
    	$shop1 = DB::table('shop')->where('pid',1)->get();
    	$shop2 = DB::table('shop')->where('pid',2)->get();
    	$shop3 = DB::table('shop')->where('pid',3)->get();
    	$shop4 = DB::table('shop')->where('pid',4)->get();


    	return view('jumei.size.sizeadd',[
    		'nav1'=>$nav1,
    		'nav2'=>$nav2,
    		'nav3'=>$nav3,
    		'shop1'=>$shop1,
    		'shop2'=>$shop2,
    		'shop3'=>$shop3,
    		'shop4'=>$shop4
    		]);
    }
}
