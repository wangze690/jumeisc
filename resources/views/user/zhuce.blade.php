<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="./css/zhuce.css">
	<script src="./bootstrap/js/jquery.js"></script>
	<script src="./bootstrap/js/bootstrap.js"></script>
	<script src="./bootstrap/js/holder.min.js"></script>
</head>
<style>
    .top_nav_hot{ position: absolute;left:81px;top:-4px;}

</style>
<body>
<div class="container" style="height: 85px;">
    	<div class="header_left pull-left">
	    	<img src="./img/logo.jpg" alt="" style="margin-top: 10px;">
	    </div>
	   <div class="header_right pull-right">
		    <a href="#"><img src="./img/logo1.jpg" alt=""></a>
		    <a href="#"><img src="./img/logo2.jpg" alt=""></a>
		    <a href="#"><img src="./img/logo3.jpg" alt=""></a>
		</div>
	</div>
</div>
<div class="container" style="height: 550px;">
	<div class="sign" style="position: relative;">
		<div class="login-wrap" style="margin-top:50px;">
			<div class="loginImage"></div>
			<div class="loginBord ">
				<div class="loginTit">
	                   <div class="tosignup">已有账号<a href="denglu">在此登录</a></div>
	                    <h1><strong>用户注册</strong></h1>
	            </div>
	            <form id="phone" method="post">
                    <div class="line">
                        <div class="textbox_ui">
                            <input type="text" id="mobile" placeholder="请输入您的邮箱或者手机号" autofocus autocomplete="off" value="">
                            <!-- <div class="focus_text">请输入11位手机号码</div> -->
                            <div class="invalid">
                                <i></i>
                                <div class="msg"></div>
                            </div>
                            <i class="valid"></i>
                            <i class="loading"></i>
                        </div>
                    </div>
                            <div class="line verityWrap imgVerifyWrap" data-required="no" style="display:none">
                                          <div class="textbox_ui">
                            <input type="text" placeholder="验证码" id="verify_code" autocomplete="off">
                            <!-- <div class="focus_text">按右图填写，不区分大小写</div> -->
                            <div class="invalid">
                                <i></i>
                                <div class="msg"></div>
                            </div>
                        </div>
                        <span id="change_verify_code">
                            <img src="/i/account/hash_code?from=signup">
                            换一张
                        </span>
                    </div>
                    <div class="line verityWrap">
                        <div class="textbox_ui sms_verify_wrapper">
                            <input type="text" id="mobile_verify" placeholder="短信校验码" autocomplete="off">
                                                            <!-- <div class="focus_text">请输入6位短信校验码</div> -->
                                                        <div class="hint"></div>
                            <div class="invalid">
                                <i></i>
                                <div class="msg"></div>
                            </div>
                        </div>
                                            <a href="javascript:;" id="getPhoneCode" class="phonecode" data-verifyType="sms"><strong>获取短信校验码</strong></a>
                                        </div>
                    <div class="line">
                        <div class="textbox_ui">
                            <input type="password" placeholder="密码" id="password" autocomplete="off">
                            <div class="focus_text">
                                <!-- <p class="default">6-16个字符，建议使用字母加数字或符号组合</p> -->
                                
                            </div>
                            <i class="valid"></i>
                            <div class="invalid">
                                <i></i>
                                <div class="msg"></div>
                            </div>
                        </div>
                    </div>
                    <div class="line">
                        <div class="textbox_ui">
                            <input type="password" id="password2" placeholder="重复密码" autocomplete="off">
                            
                            <i class="valid"></i>
                            <div class="invalid">
                                <i></i>
                                <div class="msg"></div>
                            </div>
                        </div>
                    </div>
                                        <div class="act" style="margin-left: 0px;">
                        <p>
                            <input type="submit" class="submit_btn" value="同意协议并注册" name="mobileCommit" style="width: 100%;">
                        </p>
                        <p>
                            <a href="http://www.jumei.com/help/user_terms" rel="nofollow" target="_blank" style="color:#ed145b;">《聚美优品用户协议》</a>
                        </p>
                    </div>
                    <br />
                </form>
                <div class="shadow_l"></div>
                <div class="shadow_r"></div>

			</div>
			</div>
		</div>
</div>
<div class="clearfix"></div>
<div class="footer_container" style="height: 219px;">
    <div class="footer_con" id="footer_copyright">
        <p class="footer_copy_con text-center">
            Copyright © 2010-2015 北京创锐文化传媒有限公司 Jumei.com 保留一切权利。客服热线：400-123-8888 <br>
            京公网安备 11010102001226 号 | 京ICP证111033号</a> | 食品流通许可证 SP1101051110165515（1-1）
            | 营业执照</a>
        </p>
        <p class="text-center">
           <a href="#"><img src="./img/footer_btm_icon.jpg"></a>
        </p>
    </div>
</div>

	
</body>
</html>