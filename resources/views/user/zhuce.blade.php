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
	    	<a href="/mzsc"><img src="./img/logo.jpg" alt="" style="margin-top: 10px;"></a>
	    </div>
	   <div class="header_right pull-right">
		    <a href="#"><img src="./img/logo1.jpg" alt=""></a>
		    <a href="#"><img src="./img/logo2.jpg" alt=""></a>
		    <a href="#"><img src="./img/logo3.jpg" alt=""></a>
		</div>
	</div>
</div>
<div class="container loginWrap">
    <div class="col-md-6 pull-left loginImage">
        <a href="#"><img src="./img/signpic.jpg" alt=""></a>
    </div>
    <div class="col-md-6 pull-right loginBord">
        <div class="loginTit">
            <h2 style="float: left;"><strong>用户注册</strong></h2>
            <p style="float: right;">已有账号<a href="/denglu">在此登录</a></p>
        </div>
        <form method="post" action="/zhuce">
              <div class="form-group line">
                <input type="text" class="form-control" id="user" placeholder="手机号" onfocus="show_user()" onblur="hide_user()" name="phone"><span id="u_span"></span>
              </div>
        
              <div class="form-group line">
                  <input type="text" class="form-control" id="yzm" placeholder="短信验证码" name="yzm" onfocus="show_yzm()" onblur="hide_yzm()" style="float:left; width: 140px;margin-bottom: 20px;">
                    <button type="button" class="btn btn-default" id="send" style="float:right;height: 44px;">获取短信验证码</button><br>
                    <span id="y_span" style="float: left;margin: 0 40px;"></span>
                </div>
              <div class="form-group line">
                <input type="password" class="form-control" placeholder="密码" id="pass" onfocus="show_pass()" onBlur="hide_pass()" name="pwds"><span id="p_span"></span>
              </div>
              <div class="form-group line">
                <input type="password" class="form-control" placeholder="确认密码" id="rpass"  onfocus="show_rpass()" onblur="hide_rpass()" name="pwdss"/><span id="rp_span"></span>
              </div>
              <p>
                <input type="submit" class="submit_btn" value="同意协议并注册" name="mobileCommit" style="width: 100%;">
            </p>
            <p>
                <a href="#" rel="nofollow" target="_blank" style="color:#ed145b;">《聚美优品用户协议》</a>
        </p>
        {{csrf_field()}}
        </form>
    </div>
</div>
<div class="clearfix"></div>
<script>
var preg_user = /1\d{10}/;
var preg_pass = /^.{6,10}$/;

function show_user()
{
  var uval = document.getElementById("user")
  if(uval.value == "")
  {
    document.getElementById("u_span").innerHTML = "<span style='color:#999;font-size:12px;'>请输入11位手机号码</span>";
  }
  else
  {
    if(preg_user.test(uval.value))
    {
      document.getElementById("u_span").innerHTML = "<span style='color:green;font-size:12px;'>√</span>";
    }
    else
    {
      document.getElementById("u_span").innerHTML = "<span style='color:#999;font-size:12px;'>请输入正确的手机号</span>";
    }
  }
}

function hide_user()
{
  var uval = document.getElementById("user")
  if(uval.value == "")
  {
    document.getElementById("u_span").innerHTML = "<span style='color:#999;font-size:12px;'>手机号不能为空</span>";
  }
  else
  {
    if(preg_user.test(uval.value))
    {
      document.getElementById("u_span").innerHTML = "<span style='color:green;font-size:12px;'>√</span>";
    }
    else
    {
      document.getElementById("u_span").innerHTML = "<span style='color:#999;font-size:12px;'>您输入的手机号码格式有误，需为 11 位数字格式</span>";
    }
  }
}


function show_yzm()
{
  var uval = document.getElementById("yzm")
  if(uval.value == "")
  {
    document.getElementById("y_span").innerHTML = "<span style='color:#999;font-size:12px;'>请输入6位验证码</span>";
  }
  else
  {
    if(preg_user.test(uval.value))
    {
      document.getElementById("y_span").innerHTML = "<span style='color:green;font-size:12px;'>验证码不能为空</span>";
    }
    else
    {
      document.getElementById("y_span").innerHTML = "<span style='color:#999;font-size:12px;'>√</span>";
    }
  }
}

function hide_yzm()
{
  var uval = document.getElementById("yzm")
  if(uval.value == "")
  {
    document.getElementById("y_span").innerHTML = "<span style='color:#999;font-size:12px;'>验证码不能为空</span>";
  }
  else
  {
    if(preg_user.test(uval.value))
    {
      document.getElementById("y_span").innerHTML = "<span style='color:green;font-size:12px;'>验证码错误</span>";
    }
    else
    {
      document.getElementById("y_span").innerHTML = "<span style='color:#999;font-size:12px;'>√</span>";
    }
  }
}
function show_pass()
{
  var pass = document.getElementById("pass");
  if(pass.value == "")
  {
    document.getElementById("p_span").innerHTML = "<span style='color:#999;font-size:12px;'>密码不能为空</span>";
  }
}
function hide_pass()
{
  var pass = document.getElementById("pass");
  if(pass.value == "")
  {
    document.getElementById("p_span").innerHTML = "<span style='color:#999;font-size:12px;'>密码不能为空</span>";
  }
  else
  {
    if(preg_pass.test(pass.value))
    {
      document.getElementById("p_span").innerHTML = "<span style='color:green;font-size:12px;'>√</span>";
    }
    else
    {
      document.getElementById("p_span").innerHTML = "<span style='color:#999;font-size:12px;'>密码格式不对</span>";
    }
  }
}
function hide_rpass()
{
  var pass = document.getElementById("pass");
  var rpass = document.getElementById("rpass");
  if(pass.value != rpass.value)
  {
    document.getElementById("rp_span").innerHTML = "<span style='color:#999;font-size:12px;'>俩次密码不一致</span>";
  }
  else
  {
    document.getElementById("rp_span").innerHTML = "<span style='color:#999;font-size:12px;'>√</span>";
  }
}
</script>
<script src="./bootstrap/js/jquery.js"></script>
<script type="text/javascript">
$(function (){
      // 验证码发送
      $('#send').click(function(){
          //获取用户手机号
          var phone = $('input[name=phone]').val();
          // 验证手机号
          var reg = /1\d{10}/;
          //检测
          if(!reg.test(phone))
          {
            alert('手机号码格式不正确');
            return;
          }
          // 发送ajax
          $.ajax({
            type:'get',
            data:{phone:phone},
            url:'/message',
            success:function(data)
            {
              // alert(data);
              console.log(data);
            }
          })
          //发送短信之后 1分钟之内不能点击该按钮
          $(this).addClass('disabled');
          var t = 60;
          //加倒计时
          var inte = setInterval(function(){
            $('#send').html(t+'秒之后再重新发送');
            t--;
            if(t < 0) {
              //停止定时器
              clearInterval(inte);
              //使按钮可点
              $('#send').removeClass('disabled');
              //更换文字
              $('#send').html('发送验证码');
            }
          }, 1000);

    });


});
</script>

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