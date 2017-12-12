<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //后台主页面方法
    public function index()
    {
    	return view('admin.index');
    }
}
