@include('layouts.toubu')
@include('layouts.sousuo')
@include('layouts.nav')
<link rel="stylesheet" href="/css/index.css">
<link rel="stylesheet" href="/bootstrap/css/toubu.css">
<link rel="stylesheet" href="/bootstrap/css/sousuo.css">
<link rel="stylesheet" href="/bootstrap/css/nav.css">
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
	<script src="/bootstrap/js/jquery.js"></script>
	<script src="/bootstrap/js/bootstrap.js"></script>
	<script src="/bootstrap/js/holder.min.js"></script>

@section('title')
	<title>密码修改</title>
@endsection

@section('content')
<!-- 主体开始 -->
<style>
	#query{
		line-height: 70px;
		text-align: right;
	}
	#chue{
		height: 50px;
		margin-top:20px;
		text-align: left;
	}
</style>
	<section class="col-md-12 bg-success" style="height:auto;">
		<div class="col-md-offset-1 pull-left" style="height:auto;margin-top:30px; border: 1px solid #ccc;position: relative;left:50px;width:140px;">
			<div style="height:auto;margin-left:-20px;background-color: #fff;">
				<p class="pull-left" style="margin-top: 10px;">
					<img src="/images/touxi.png" alt="">
				</p>
				<ul class="pull-left" style="margin-top: 15px;margin-left:10px;">
					<li style="color:#ed145b;">JUM150WEW</li>
					<li>普通会员</li>
				</ul>
				<p style="float: left;">用户ID:236550520</p>
			
				<ul style="margin-left:-7px;margin-top:-10px;">
					<li><img src="/images/baot.png" alt=""></li>
					<li style="height:40px;width:160px;background-color: #fff;text-align: center;line-height: 40px;margin-left:7px;border-bottom: 1px solid #ccc;">
						<img src="/images/tubiao.png" alt="">修改密码
					</li>
					<li style="height:40px;width:160px;background-color: #f8f6f4;text-align: center;line-height: 40px;margin-left:7px;border-bottom: 1px solid #ccc;">
						<img src="/images/tubiao.png" alt="">设置账户信息
					</li>
					<li style="height:40px;width:160px;background-color: #f8f6f4;text-align: center;line-height: 40px;margin-left:7px;border-bottom: 1px solid #ccc;">
						<img src="/images/tubiao.png" alt="">我的订单
					</li>
					<li style="height:40px;width:160px;background-color: #f8f6f4;text-align: center;line-height: 40px;margin-left:7px;border-bottom: 1px solid #ccc;">
						<img src="/images/tubiao.png" alt="">我的订单
					</li>
				</ul>
				<ul style="margin-left:-7px;margin-top:-10px;">
					<li><img src="/images/baot.png" alt=""></li>
					<li style="height:40px;width:160px;background-color: #f8f6f4;text-align: center;line-height: 40px;margin-left:7px;border-bottom: 1px solid #ccc;">
						<img src="/images/tubiao.png" alt="">我的订单
					</li>
					<li style="height:40px;width:160px;background-color: #f8f6f4;text-align: center;line-height: 40px;margin-left:7px;border-bottom: 1px solid #ccc;">
						<img src="/images/tubiao.png" alt="">我的订单
					</li>					
				</ul>
				<ul style="margin-left:-7px;margin-top:-10px;">
					<li><img src="/images/baot.png" alt=""></li>
					<li style="height:40px;width:160px;background-color: #f8f6f4;text-align: center;line-height: 40px;margin-left:7px;border-bottom: 1px solid #ccc;">
						<img src="/images/tubiao.png" alt="">我的订单
					</li>				
				</ul>
			</div>
		</div>
		<div class="col-md-8 div_1" style="height:500px;position: relative;top:30px;left: 50px;background-color: #fff;">
			<div class="col-md-12" style="height: 50px;border-bottom: 1px solid #ccc;">
				<p style="font-size: 20px;margin-top:10px;">修改密码</p>
			</div>
			<div class="col-md-12" style="height:500px;">
				<ul class="col-md-3 col-md-offset-1">
					<li id="query">
						<span style="color: #ed145b;">*</span>
						选择验证身份方式 
					</li>
					<li id="query">
						<span style="color: #ed145b;">*</span>
						手机号 
					</li>
					<li id="query">
						<span style="color: #ed145b;">*</span>
						短信校验码 
					</li>
					<li id="query">
						<span style="color: #ed145b;">*</span>
						新密码
					</li>
					<li id="query">
						<span style="color: #ed145b;">*</span>
						重复密码
					</li>
				</ul>

			<form action="/jumei/person{id}" method="post">
				<ul class="col-md-8" style="height:800px;">
					<li id="chue">
						<input type="radio" value="0"> 手机验证&nbsp;&nbsp;&nbsp;
					    <input type="radio" value="1"> 密码验证
					</li>
					<li id="chue">
						<!-- <span id="phone">15047446816</span> -->
						<input type="text" name="phone" class="input-sm">
						&nbsp;&nbsp;&nbsp;
						<a href="#" style="color:#ed145b;">修改</a>
					</li>
					<li id="chue">
						<input type="text" class="input-sm" name="vcode">&nbsp;&nbsp;&nbsp;
						<button class="btn-default btn-sm" id="send" type="button">获取短息验证码</button>
						<p>请输入6位短信验证码</p>
					</li>
					<li id="chue">
						<input type="text" class="input-sm" name="password">
						<p>6-16 个字符，需使用字母、数字或符号组合，不能使用纯数字、纯字母、纯符号</p>
					</li>
					<li id="chue">
						<input type="text" class="input-sm" name="repassword">
						<p>重复密码</p>
					</li>
					{{csrf_field()}}
					<li id="chue">
						<button type="submit" class="btn-success">提交</button>
					</li>
				</ul>
			</form>
		</div>
		</div>
 	</section>
<!-- 主体结束 -->
@show

@include('layouts.foote')

	<script src="/js/jquery.js"></script>
	<script>
	$(function(){
		// 验证码发送
		$('#send').click(function(){
			//获取用户手机号
			var phone = $('input[name=phone]').val();
			// 验证手机号
			var reg = /1\d{10}/;
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
		});
	});
	
	</script>