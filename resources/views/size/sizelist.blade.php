@extends('person/person')

@section('title')
	<title>尺码信息</title>
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
	.chue{
		line-height: 50px;
	}
	.down{
		border-left: 1px solid #ccc;
		border-bottom: 1px solid #ccc;
		height:80px;
		text-align: center;
		line-height: 80px;
	}
	.line{
		line-height: 50px;
		text-align: right;
	}
	.text{
		line-height: 30px;
		text-align: left;
		margin-top:17px;
		width: 150px;
	}
	.inpu{
		width: 60px;
	}
</style>
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
	<script src="/bootstrap/js/jquery.js"></script>
	<script src="/bootstrap/js/bootstrap.js"></script>
	<script src="/bootstrap/js/holder.min.js"></script>
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
					<li style="height:40px;width:160px;background-color: #f8f6f4;text-align: center;line-height: 40px;margin-left:7px;border-bottom: 1px solid #ccc;">
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
					<li style="height:40px;width:160px;background-color: #fff;text-align: center;line-height: 40px;margin-left:7px;border-bottom: 1px solid #ccc;">
						<img src="/images/tubiao.png" alt="">我的尺码
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
					<li style="height:40px;width:160px;background-color: #f8f6f4;text-align: center;line-height: 40px;margin-left:7px;border-bottom: 1px solid #ccc;">
						<img src="/images/tubiao.png" alt="">我的订单
					</li>	
					<li style="height:40px;width:160px;background-color: #f8f6f4;text-align: center;line-height: 40px;margin-left:7px;border-bottom: 1px solid #ccc;">
						<img src="/images/tubiao.png" alt="">我的订单
					</li>				
				</ul>
			</div>
		</div>
		<div class="col-md-8 div_1" style="height:auto;position: relative;top:30px;left: 50px;background-color: #fff;">
			<div class="col-md-12" style="height: 50px;border-bottom: 1px solid #ccc;">
				<p style="font-size: 20px;margin-top:10px;">尺寸信息</p>
			</div>
			<div class="col-md-12" style="height:1000px;">
				<div class="col-md-2" style="height:50px;border-left: 1px solid #ccc;border-top: 1px solid #ccc;border-right: 1px solid #ccc; margin-top:20px;text-align: center;line-height: 50px;">
					<p style="color:#ed145b; ">尺码信息</p>
				</div>
				<div class="col-md-2" style="height:50px;border-top: 1px solid #ccc;border-bottom: 1px solid #ccc;border-right: 1px solid #ccc; margin-top:20px;text-align: center;line-height: 50px;background-color: #f8f6f4;">
					<p>测量帮助</p>
				</div>
				<div class="col-md-8" style="height:50px;border-bottom: 1px solid #ccc; margin-top:20px;">
				</div>
				<div class="col-md-12" style="height:auto;border-bottom: 1px solid #ccc;border-left: 1px solid #ccc;border-right: 1px solid #ccc; ">
					<div class="col-md-12" style="height:50px; background-color: #eee;margin-top:20px;">
						<p class="col-md-2 chue">角色名称</p>
						<p class="col-md-1 chue">性别</p>
						<p class="col-md-1 chue">身高</p>
						<p class="col-md-1 chue">体重</p>
						<p class="col-md-1 chue">肩宽</p>
						<p class="col-md-1 chue">胸围</p>
						<p class="col-md-1 chue">腰围</p>
						<p class="col-md-1 chue">臀围</p>
						<p class="col-md-1 chue">鞋码</p>
						<p class="col-md-1 chue">罩杯</p>
						<p class="col-md-1 chue">操作</p>
					</div>
					<ul>
						<li class="col-md-2 down">王二毛</li>
						<li class="col-md-1 down">女</li>
						<li class="col-md-1 down"></li>
						<li class="col-md-1 down"></li>
						<li class="col-md-1 down"></li>
						<li class="col-md-1 down"></li>
						<li class="col-md-1 down"></li>
						<li class="col-md-1 down"></li>
						<li class="col-md-1 down"></li>
						<li class="col-md-1 down"></li>
						<li class="col-md-1 down"></li>
					</ul>
					<div class="col-md-12" style="height: 500px;margin-top:30px;">
						<ul class="col-md-2" style="height:400px;">
							<li class="line">角色名称 :</li>
							<li class="line">性别 :</li>
							<li class="line">身高 :</li>
							<li class="line">体重 :</li>
							<li class="line">肩宽 :</li>
							<li class="line">胸围 :</li>
							<li class="line">腰围 :</li>
							<li class="line">臀围 :</li>
							<li class="line">鞋码 :</li>
							<li class="line">罩杯 :</li>
						</ul>
						<ul class="col-md-3" style="height:400px;">
							<li class="text"><input type="text"></li>
							<li class="text">
								<input type="checkbox" value="0">男
								<input type="checkbox" value="1">女
							</li>
							<li class="text">
								<input type="text" class="inpu">   cm
							</li>
							<li class="text">
								<input type="text" class="inpu">   kg
							</li>
							<li class="text">
								<input type="text" class="inpu">   cm
							</li>
							<li class="text">
								<input type="text" class="inpu">   cm
							</li>
							<li class="text">
								<input type="text" class="inpu">   cm
							</li>
							<li class="text">
								<input type="text" class="inpu">   cm
							</li>
							<li class="text">
								<input type="text" class="inpu">   例如：36码
							</li>
							<li class="text">
								<input type="text" class="inpu">   例如：80A
							</li>
						</ul>
						<p class="col-md-5" style="margin-top:80px;margin-left:-70px;">
							<img src="/images/pic.jpg" alt="">
						</p>
					</div>
				</div>
			</div>
				
		</div>
 	</section>
<!-- 主体结束 -->
@endsection