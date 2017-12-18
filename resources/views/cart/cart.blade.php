<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>购物车</title>
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
			margin-left:75px;
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
	</style>
</head>
<body>
<!-- 头部开始 -->
	<div class="col-md-12" style="height:130px; border-bottom: 2px solid #ccc;">
		<p class="col-sm-2" style="margin-top:30px;margin-left:100px;">
			<a href="/jumei"><img src="/images/log.png" alt=""></a>
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
<!-- 头部结束 -->
<!-- 主体开始 -->
	<section>
		<ul style="margin-left:100px;" class="col-md-6">
			<li style="font-size: 15px;line-height: 50px;"><img src="/images/slog.png" alt="">			已超过购物车保留时间,请尽快结算.
			</li>
			<li style="color:#fa8801;"><img src="/images/slog5.png" alt="">
				新用户首单满39元包邮,自营非食品类满两件或满299元包邮
			</li>
		</ul>
		<ul class="col-md-5" style="margin-top:30px;margin-left:-50px;">
			<li id="log"><img src="/images/slog1.png" alt="">
				真品防伪码
			</li>
			<li id="log"><img src="/images/slog2.png" alt="">
				30天无条件退货
			</li>
			<li id="log"><img src="/images/slog3.png" alt="">
				美妆满两件或满299包邮
			</li>
		</ul>
		<div class="col-md-10 col-md-offset-1" style="height:auto;">
			<div class="col-sm-12 bg-info" style="height:40px;border-left: 5px solid #ed145b; ">
				<p class="col-md-6" style="line-height: 40px;margin-left:-20px;">
					 &nbsp;聚美优品发货
				</p>
				<ul class="col-md-6">
					<li id="tip">聚美价(元)</li>
					<li id="tip">数量</li>
					<li id="tip">小计(元)</li>
					<li id="tip">操作</li>
				</ul>
			</div>
		@foreach($carts as $k => $v)
		<form action="/dingdan/conform" method="post">
			<div class="col-sm-12 goods" style="height:120px;border: 1px solid #ccc;">
				<p style="float:left;line-height: 120px;">
					<input type="checkbox" name="data[{{$v->id}}][id]" value="{{$v->id}}">

				</p>
				<p style="float:left;line-height: 120px; margin-left:30px; width: 120px;">
					<img width="50" src="/img/{{$v->imgs}}" alt="">
				</p>
				<ul style="float:left;margin-left:-20px;margin-top:40px;" class="col-md-5">
					<li>{{$v->cons}}</li>
					<li>{{$v->guige}}</li>
				</ul>
				<ul class="col-md-1" style="margin-top: 40px;">
					<li style="font-size:16px;font-weight: bold;">{{$v->goods_xj}}</li>
					<li><s>{{$v->goods_yj}}</s></li>
				</ul>
				<ul style="margin-top: 40px;" class="col-md-2">
					<li>
						<div id="btn" style="position: absolute; top: -30px; left: 50px;">
							<button class="btn-info jian" style="float: left;" type="button">
								-
							</button>
								<input name="data[{{$v->id}}][num]" type="text" value="{{$v->num}}" style="width: 20px; border: 0px;">
							<button class="btn-info jia" style="float: right;" type="button">
								+
							</button>
						</div>
					</li>
				</ul>
				<ul class="col-md-1" style="margin-top: 40px;">
					<li style="color:#ed145b;">
						¥1399
					</li>
					<li>省368元</li>
				</ul>
				{{csrf_field()}}
				<ul class="col-md-1" style="margin-top: 40px; margin-left:20px;">
					<li>
						<button style="border: 0px;background-color: #fff;" class="del" cid="{{$v->id}}" type="button">
							<img src="/images/btn.png" alt="">
						</button>
					</li>
				</ul>				
			</div>
		@endforeach
			<div class="col-sm-12 bg-info" style="height:40px;border-left: 5px solid #ed145b;">
				<ul class="col-md-6">
					<li style="float:left;font-size: 16px;line-height: 40px;font-weight: bold;">
						商品金额:
					</li>
					<li style="color:#ed145b;float:left;font-size: 16px;line-height: 40px;font-weight: bold; margin-left:20px;">
						¥ {{$nums}}
					</li>
				</ul>
			</div>
		</div>
		<div class="col-md-10 col-md-offset-1" style="height:50px;margin-top:20px;">
			<div class="col-md-12 bg-info" style="height:50px;">
				<ul>
					<li id="chue">继续购物</li>
					<li id="chue">| 清空选中商品</li>
				</ul>
				<ul style="float: right;">
					<li id="cont">共 <span style="color:#ed145b;">2</span> 件商品</li>
					<li id="cont">商品应付总额:
						<span style="color:#ed145b;">¥</span>
						<span style="color:#ed145b;">{{$nums}}</span>
					</li>
					<li id="cont" >
						<button type="submit" style="width: 100px;height:50px;background-color:#ed145b;color:#fff; margin-top:-10px;margin-right:-10px;font-size: 18px;text-align: center;line-height: 50px;">结算</button>
					</li>
				</ul>
			</div>
		</form>

		</div>
	</section>
<!-- 主体结束 -->
<!-- 尾部开始 -->
@section('footer')
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
@show	
<!-- 尾部结束 -->
</body>
</html>
<script src="/js/jquery.js"></script>
<script>
 $del = $('.del').click(function(){
	var cid = $(this).attr('cid');
	var tr = $(this).parents('.goods');
	$.ajax({
		type:'get',
		url:'/cart/delete',
		data:{'cid':cid},
		success:function(data)
		{
			if(data == '1')
			{
				tr.fadeOut(1000);
			}
		}
	})
});

// 减
$('.jian').click(function(){
	var num = $(this).parent().find('input');
	if(parseInt(num.val())>1){
			
		var new_num=parseInt(num.val())-1;
		num.val(new_num);
	}
	else
	{
		num.val(1);
	}
	
});
// 加
$('.jia').click(function(){
	var num = $(this).parent().find('input');
	
	var new_num=parseInt(num.val())+1;
	num.val(new_num);

});   

</script>