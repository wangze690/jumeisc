<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QiantaiController extends Controller
{
    public function denglu()
    {
    	return view('user.denglu');
    }
     public function zhuce()
    {
    	return view('user.zhuce');
    }
     public function grzx()
    {
    	return view('grzx.user');
    }
    public function grzxs()
    {
        return view('grzx.add');
    }
}
