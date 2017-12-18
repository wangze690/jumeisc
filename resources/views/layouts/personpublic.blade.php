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
					<li style="color:#ed145b;">{{$ssphone}}</li>
					<li>普通会员</li>
				</ul>
				<p style="float: left;">用户ID:236550520</p>
			
				<ul style="margin-left:-7px;margin-top:-10px;">
					<li><img src="/images/baot.png" alt=""></li>
					<li style="height:40px;width:160px;background-color:  #f8f6f4;text-align: center;line-height: 40px;margin-left:7px;border-bottom: 1px solid #ccc;">
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
						<img src="/images/tubiao.png" alt=""><a href="/jumei/sizelist">我的尺码</a>

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