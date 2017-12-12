

@include('layouts.toubu')
@include('layouts.sousuo')
@include('layouts.nav')

@section('lunbo')
<!-- 轮播开始 -->

<link rel="stylesheet" href="/css/index.css">
<link rel="stylesheet" href="/bootstrap/css/toubu.css">
<link rel="stylesheet" href="/bootstrap/css/sousuo.css">
<link rel="stylesheet" href="/bootstrap/css/nav.css">
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
	<script src="/bootstrap/js/jquery.js"></script>
	<script src="/bootstrap/js/bootstrap.js"></script>
	<script src="/bootstrap/js/holder.min.js"></script>
	<div class="col-md-12" style="height:320px;">
		<div id="carousel-example-generic" class="carousel slide col-md-12" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="holder.js/140px300" alt="...">
		      <div class="carousel-caption">
		      </div>
		    </div>
		    <div class="item">
		      <img src="holder.js/140px300?theme=sky" alt="...">
		      <div class="carousel-caption">
		      </div>
		    </div>
		  </div>
		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
<!-- 轮播结束 -->
@show
@section('content')
<!-- 主体开始 -->
	<section class="col-md-12" style="height:auto;background-color: #eeeeee;position: relative; z-index: 10px;">
		<div class="col-sm-6 col-md-offset-3" style="height:70px;">
			<div class="bg-danger col-sm-6" style="height:60px;background-color: #666;">
				<p style="font-size:30px;color:#fff;text-align:center;line-height: 60px;">今日疯抢</p>
			</div>
			<p style="position: absolute;top:54px;left:150px;"><img src="/images/sanjiao.png" alt=""></p>
			<div class="col-sm-6" style="height:60px;border: 1px solid #666;">
				<p style="font-size:30px;color:#333;text-align:center;line-height: 60px;">明日预告 <span class="badge" style="background-color: #ed145b;">15</span></p>
			</div>
		</div>	
		  @foreach($shop1 as $k=>$v)
			<div class="col-md-5" style="height:250px;margin-left:70px;">
				<img src="/images/{{$v->profile}}" alt="">
			</div>
		  @endforeach
			<div class="clearfix"></div>
			<div class="col-sm-10 col-md-offset-1" style="height:50px;">
				<ul>
				   @foreach($shop2 as $k=>$v)
					<li id="tip"><img src="/images/{{$v->profile}}" alt=""></li>
				   @endforeach
				</ul>
			</div>
		<div class="col-md-8 col-md-offset-2" style="height:50px;margin-top:40px;">
			<p style="font-size: 30px;color:#000; text-align: center;">每日必看 MUST CHECK OUT</p>
		</div>
		@foreach($shop3 as $k=>$v)
		<div class="col-md-10 col-md-offset-1" style="height:350px;background-color:#fff;margin-top:30px;">
			<div class="col-sm-5" style="height:350px;">
				<img src="/images/{{$v->profile}}" style="margin-left:-30px;" alt="">
			</div>
			<div class="col-sm-5" style="background-color: #fff;border:1px solid #ccc; box-shadow: 0px 0px 5px 0px; height:350px; margin-left: 150px;margin-top:20px;">
				<div class="col-md-6 col-md-offset-3" style="height:25px;background-color: #000; color:#fff;">
					距特卖结束
					 <span id="t_h"></span>
					 <span id="t_m"></span>
					 <span id="t_s"></span>
				</div>
				<p class="col-sm-12" style="font-size: 17px;color: #666;margin-top:20px;line-height: 30px;">
					{{$v->shopcons}}
				</p>
				<ul style="float:left; margin-top:30px;">
					<li style="font-size: 30px;margin-left:20px;">¥{{$v->shopxj}} 
						<s style="font-size: 14px;">¥{{$v->shopyj}}</s></li>
					<li style="margin-left:10px;"><img src="/images/big.jpg" alt=""></li>
				</ul>
				<ul style="float:right;margin-top:30PX;margin-right:20px;">
					<li style="width: 120px;height:40px;background-color:#ed145b; color:#fff;text-align: center;line-height: 40px;margin-top:10px; ">加入购物车</li>
					<li style="font-size: 14px;margin-top:10px;">
					<span style="font-size:25px;color:#b9966a;">740</span>人已经购买
					</li>
				</ul>
			</div>
		</div>


	@endforeach	
		
		<div class="col-md-10 col-md-offset-1" style="border-bottom: 2px solid #000;margin-top:50px;">
			<div class="col-sm-2" style="height:30px;background-color: #000;font-size:20px;color:#fff;margin-left:-15px;text-align: center;line-height: 30px;">今日上新单品</div>
			<div class="col-sm-10" style="font-size:20px;"> HOT DEALS TODAY
				<p style="float:right;color:#ed145b;font-size:14px;">每日十点上新</p>
			</div>
		</div>
		@foreach($shop4 as $k=>$v)
		<div class="cocl-md-10 col-md-offset-1" style="height:800px;">
			<div class="pull-left"  id="news" style="margin-left: 10px;margin-top: 20px;">
				<div id="dis">加入购物车</div>
				<div id="dic">{{$v->shopcons}}</div>
				<div style="margin-top:40px;">
					<img src="/images/shop.jpg" alt="">
					<ul style="margin-left:20px;">
						<li>{{$v->shoptitle}}</li>
						<li style="font-size:18px;color:#ed145b;margin-top:10px;">¥{{$v->shopxj}}</li>
					</ul>
				</div>
			</div>
			<div class="pull-left" style="height:450px;margin-left:18px;width: 350px;margin-top: 20px;" id="news">
				<div id="dis">加入购物车</div>
				<div id="dic">{{$v->shopcons}}</div>
				<div style="margin-top:40px;">
					<img src="/images/shop.jpg" alt="">
					<ul style="margin-left:20px;">
						<li>{{$v->shoptitle}}</li>
						<li style="font-size:18px;color:#ed145b;margin-top:10px;">¥{{$v->shopxj}}</li>
					</ul>
				</div>
			</div>
			<div class="pull-left" style="height:450px;margin-left:16px;width: 350px;margin-top: 20px;" id="news">
				<div id="dis">加入购物车</div>
				<div id="dic">{{$v->shopcons}}</div>
				<div style="margin-top:40px;">
					<img src="/images/shop.jpg" alt="">
					<ul style="margin-left:20px;">
						<li>{{$v->shoptitle}}</li>
						<li style="font-size:18px;color:#ed145b;margin-top:10px;">¥{{$v->shopxj}}</li>
					</ul>
				</div>
			</div>
		</div>
		@endforeach
 	</section>
<!-- 主体结束 -->
@show
<!-- 尾部开始 -->
	@include('layouts.foot')
<!-- 尾部结束 -->
@section('js')
@show
</body>
<script src="/js/jquery.js"></script>
	<script>
		function getRTime(){
			var EndTime = new Date('3017/10/28 12:59:59');
			var NowTime = new Date();
			var t = EndTime.getTime() - NowTime.getTime();
			
			//var d=Math.floor(t/1000/60/60/24);
			var h=Math.floor(t/1000/60/60%24);
			var m=Math.floor(t/1000/60%60);
			var s=Math.floor(t/1000%60);
			
		//document.getElementById("t_d").innerHTML = d + "天";	
		document.getElementById("t_h").innerHTML = h + "	";
		document.getElementById("t_m").innerHTML = m + "分";
		document.getElementById("t_s").innerHTML = s + "秒";
		}
		setInterval(getRTime,1000);
	</script>
</html>