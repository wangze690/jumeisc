<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>订单</title>
		<link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
		<!-- <link rel="stylesheet" href="/css/index.css"> -->
		<script src="/bootstrap/js/jquery.js"></script>
		<script src="/bootstrap/js/bootstrap.js"></script>
		<script src="/bootstrap/js/holder.min.js"></script>
	<style>
		ul{
			list-style: none;
		}
		#log{
			float:left;
		}
		#tip{
			float:left;
			margin-left:120px;
			line-height:40px;
			text-align: right;
		}
		#btn{
			width: 80px;
			height:26px;
			border: 1px solid #666;
			float:right;
			margin-right:225px;
			margin-top:45px;
			text-align: center;
		}
		#chue{
			float:left;
			margin-left:20px;
			line-height:50px;
			font-weight: bold;
		}
		#cont{
			float: left;
			margin-left:20px;
			line-height: 30px;
			font-weight: bold;
		}
		.wotou{
			line-height: 100px;
			float: left;
			margin-left: 125px;
		}
		.aid{
			border:5px solid #5bc0de; 
			height: 150px;
			padding: 0px;
		}
		.cur{
			border:5px solid red;
		}
		.texiao{
			border:5px solid #000;
		}
	</style>
</head>
<body style="background-color: #EEE7E1">
<!-- 头部开始 -->
	<div class="touba" style="border-bottom: 2px solid #ccc; background-color: #fff;">
		<div class="container" style=" padding: 0px;">
			<div class="col-md-12" style="height:130px; ">
				<p class="col-sm-2" style="margin-top:30px;margin-left:100px;">
					<img src="/images/log.png" alt="">
				</p>
				<ul class="col-sm-4" style="margin-top: 40px; margin-left:-25px;">
					<li>400-123-8888</li>
					<li>大促期间客服24小时在线</li>
				</ul>
				<ul class="col-sm-4" style="line-height: 40px; text-align: right;">
					<li>欢迎您,JM150WEWWW6816 [退出] | 订单查询</li>
					<li><img src="/images/jindu.png" alt=""></li>
				</ul>
			</div>
		</div>
	</div>
<!-- 头部结束 -->
<!-- 主体开始 -->

	<section>
		<form action="/dingdan" method="post" >
		<div class="container" style="background-color: #fff;margin-top: 10px;">
			<h3><b>地址选择</b></h3>
			@foreach($shouhuodz as $k =>$v)
			<div class="col-md-3" style=";margin-bottom:20px;">
				<div class="dizhi aid" asid="{{$v->id}}">
					<ul style="margin-top: 30px; line-height: 25px;">
					<li>{{$v->name}}</li>
					<li>{{$v->pname}}-{{$v->cname}}-{{$v->xname}} {{$v->detail}}</li>
					<li>{{$v->phone}}</li>
					</ul>
				</div>
			</div>
			
			@endforeach
			<input type="hidden" name="address_id" >
			<div class="clearfix"></div>
			<div style="background-color: #5bc0de; height: 40px; width: 100px; text-align: center; line-height: 40px;"><a href="/grzxs" style="color: #fff;" >+添加新地址</a></div>
			<hr style="border:1px solid #999;">
		<h3 class="pull-left" style="margin-left: 10px;"><b>商品清单</b></h3>
		<a class="pull-right" href="#" style="margin-right: 80px;">返回修改购物车</a>
		<div class="clearfix"></div>
		<div class="container">
			<div class="col-md-11" style="background-color: #eee; height:40px;border-left: 5px solid #ed145b;border:1px solid #999;">
				<p class="col-md-5" style="line-height: 40px;margin-left:-20px;">
					 &nbsp;聚美优品发货
				</p>
				<ul class="col-md-7"">
					<li id="tip">数量</li>
					<li id="tip">单价</li>
				</ul>
			</div>
			<div class="col-md-11" style="height: auto; border:1px solid #999; padding: 0px; line-height: 40px;">

				@foreach($goodsData as $a =>$s)
				<div class="jk" style=" height: 111px; width: 100%; border-bottom: 1px dashed #999;">

					<p class="col-md-5" style="margin-left:-20px; line-height: 100px;">
						 <img src="/img/{{$s->imgs}}" width="100px" height="80px" alt="" style="margin-left:10px;" >
						 <span>{{$s->cons}}</span>
					</p>

					<ul class="col-md-7">
						
						<li class="wotou" >
							<input type="hidden" name="data[{{$s->id}}][id]" value='{{$s->id}}'>
							<input disabled style="width: 40px; height: 20px; text-align: center; line-height: 20px;" value="{{$s->num}}">
							<input type="hidden" name="data[{{$s->id}}][num]" value="{{$s->num}}">
						</li>
						<li class="wotou"><span>￥</span>{{$s->goods_xj}}</li>
					</ul>
				</div>
				@endforeach
			</div>
		
		</div>
	</div>
	<div class="container" style=" background-color: #fff;">
		<div class="col-md-11 nasd" style="border:1px solid #999; margin-left: 15px; margin-top: 10px;background-color: #fff;">
			<ul class="pull-right" style="font-size: 12px;">
				<li style="margin-top: 10px;">总商品金额:¥<span>{{$tootle}}</span></li>
				<li style="margin-top: 10px;">应付总额:¥<span>{{$tootle}}</span></li>
			</ul>
		</div>
		<div class="col-md-11 nasd" style=" border:1px solid #999; margin-left: 15px;background-color: #eee;">
			<a href="/cart">返回修改购物车</a>
			<ul class="pull-right" style="font-size: 12px;">
				<li style="margin-top: 10px;">应付总额:¥<span style="font-size: 20px; color: #ed415b"><b>{{$tootle}}</b></span></li>
				{{csrf_field()}}
				<li style="margin-top: 10px;"><button class="btn btn-danger" style="background-color: #ed415b; border-radius:0px; width: 130px;">确认交易</button></li>
			</ul>
		</div>
	</div>
	</form>
</section>

<!-- 主体结束 -->
<!-- 尾部开始 -->
	<footer class="col-md-12" style="height:200px;background-color:#ccc;margin-top:100px;">
		<p style="color: #fff; margin-top: 30px;margin-left:140px;">
			COPYRIGHT © 2010-2017 北京创锐文化传媒有限公司 JUMEI.COM 保留一切权利。 客服热线：400-123-8888 
		</p>
		<p style="color: #fff;margin-left:140px;">
			京公网安备 11010102001226 | 京ICP证111033号 | 食品流通许可证 SP1101051110165515（1-1） | 营业执照
		</p>
		<ul style="margin-left:80px;margin-top:30px;">
			<li id="chue"><img src="/images/aaa.png" alt=""></li>
			<li id="chue"><img src="/images/aaa.png" alt=""></li>
			<li id="chue"><img src="/images/aaa.png" alt=""></li>
			<li id="chue"><img src="/images/aaa.png" alt=""></li>
			<li id="chue"><img src="/images/aaa.png" alt=""></li>
		</ul>
	</footer>
	
<!-- 尾部结束 -->
</body>
</html>


<script src="/js/jquery.js"></script>
<script type="text/javascript">
$('.aid').hover(function(){
	$(this).addClass('texiao');
},function(){
	$(this).removeClass('texiao');
}).click(function(){
	$('.aid').removeClass('texiao');
	$('.aid').removeClass('cur');
	$(this).addClass('cur');
	//获取当前的地址id
	asid = $(this).attr('asid');
	$('input[name=address_id]').val(asid);
});
</script>