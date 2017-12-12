<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
     public function message(Request $request)
    {
        //手机号
    	$phone = $request->input('phone');
        //标题
    	$web = '聚美优品';
        //手机的验证码
    	$code = rand(100000,999999);
        // 正式 向三方平台发送请求
        //$res = file_get_contents('http://www.xiaohigh.com/message/index.php?to='.$phone.'&class=123456&web='.$web.'&code='.$code);
        //将验证码储存起来
    	session(['vcode'=>$code]);
    	$date['resp']['respCode'] = '000000';
        //解析json字符串
    	if($date['resp']['respCode'] == '000000')
    	{	
    		return response()->json(['data'=>['vcode'=>$code],'status'=>'0','msg'=>'发送成功']);
    	}
    	else
    	{
    		return response()->json(['data'=>'','status'=>'1','msg'=>'发送失败']);
    	}

    }
}
