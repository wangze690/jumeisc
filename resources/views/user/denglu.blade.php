<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="./css/denglu.css">
	<script src="./bootstrap/js/jquery.js"></script>
	<script src="./bootstrap/js/bootstrap.js"></script>
	<script src="./bootstrap/js/holder.min.js"></script>
	

</head>
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
        </div>
        
        <div class="col-md-6 pull-right loginBord">
           <div class="loginTit">
                <h2 style="float: left;"><strong>登录聚美</strong></h2>
                <p style="float: right;">还没有聚美帐号？<a href="/zhuce">30秒注册</a></p>
           </div>
           <form method="post" action="/denglu">
              <div class="form-group">
                <input type="text" class="form-control" id="user" placeholder="已验证手机/邮箱/用户名" onfocus="show_user()" onblur="hide_user()" name="phone"><span id="u_span"></span>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="pass" placeholder="密码" onfocus="show_pass()" onBlur="hide_pass()" name="pwds">
                <span id="p_span"></span>
              </div>
                <p>
                    <a href="#" class="fr">忘记密码?</a>
                    <label for="auto_login">
                        <input type="checkbox" id="auto_login" checked="">
                        &nbsp;自动登录
                    </label>
                </p>
                {{csrf_field()}}
              <input class="loginbtn submit_btn" type="submit" value="登 录" style=" display: block;width: 100%;">

            </form>
            <div>你也可以使用以下帐号登录</div>
             <!-- 百度分享  start -->
                <div>
                    <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
                <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
                </div>
            <!-- 百度分享  end -->
        </div>
</div>

<script>
var preg_user = /1\d{10}/;
var preg_pass = /^.{6,10}$/;

function show_user()
{
    var uval = document.getElementById("user")
    if(uval.value == "")
    {
        document.getElementById("u_span").innerHTML = "<span style='color:#f00;font-size:12px;'>登录名可能是您的手机号、邮箱或用户名</span>";
    }
    else
    {
        if(preg_user.test(uval.value))
        {
            document.getElementById("u_span").innerHTML = "<span style='color:green;font-size:12px;'>√</span>";
        }
        else
        {
            document.getElementById("u_span").innerHTML = "<span style='color:#f00;font-size:12px;'>请输入正确的用户名</span>";
        }
    }
}

function hide_user()
{
    var uval = document.getElementById("user")
    if(uval.value == "")
    {
        document.getElementById("u_span").innerHTML = "<span style='color:#f00;font-size:12px;'>用户名不能为空</span>";
    }
    else
    {
        if(preg_user.test(uval.value))
        {
            document.getElementById("u_span").innerHTML = "<span style='color:green;font-size:12px;'>√</span>";
        }
        else
        {
            document.getElementById("u_span").innerHTML = "<span style='color:#f00;font-size:12px;'>请输入正确的用户名</span>";
        }
    }
}

function show_pass()
{
    var pass = document.getElementById("pass");
    if(pass.value == "")
    {
        document.getElementById("p_span").innerHTML = "<span style='color:#f00;font-size:12px;'>密码不能为空</span>";
    }
}

function hide_pass()
{
    var pass = document.getElementById("pass");
    if(pass.value == "")
    {
        document.getElementById("p_span").innerHTML = "<span style='color:#f00;font-size:12px;'>密码不能为空</span>";
    }
    else
    {
        if(preg_pass.test(pass.value))
        {
            document.getElementById("p_span").innerHTML = "<span style='color:green;font-size:12px;'>√</span>";
        }
        else
        {
            document.getElementById("p_span").innerHTML = "<span style='color:#f00;font-size:12px;'>密码格式不对</span>";
        }
    }
}
function hide_rpass()
{
    var pass = document.getElementById("pass");
    var rpass = document.getElementById("rpass");
    if(pass.value != rpass.value)
    {
        document.getElementById("rp_span").innerHTML = "<span style='color:#f00;font-size:12px;'>俩次密码不一致</span>";
    }
    else
    {
        document.getElementById("rp_span").innerHTML = "<span style='color:green;font-size:12px;'>√</span>";
    }
}

</script>
<script type="text/javascript">
    $(function(){
    
        $('input[type=submit]').click(function(){
            //alert(phones);
            //alert(1);
            var phones = $("#u_span").text();
            //alert(phones);
            var pwds = $("#p_span").text();
            var uname=$('input[id=user]').val();//用户名
            //alert(uname);
            var upwd=$('input[id=pass]').val();//密码
            //alert(upwd);
            if(phones=="√" && pwds=="√" ){
                
                $.ajax({
                    type:"POST",
                    url:"/postdenglu",
                    data:"username="+uname+"&pwds="+upwd,
                    success: function(mess){
                        //alert(mess);
                        if(mess=="ok"){
                            $('input[type=button]').val("正在登录...");
                            setTimeout("location.href='/grzx'",500);
                        }else{
                            alert("用户名或密码错误，忘记密码？");
                        }
                    }
                })
            }
        })
    })
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