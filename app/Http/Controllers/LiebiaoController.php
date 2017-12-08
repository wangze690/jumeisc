<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiebiaoController extends Controller
{
	public function liebiao()
	{
		return view('liebiao.liebiao');
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
