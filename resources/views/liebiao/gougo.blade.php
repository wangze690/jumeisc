<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gougo</title>
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="./bootstrap/css/liebiao.css">
	<link rel="stylesheet" href="./bootstrap/css/gougo.css">
	<link rel="stylesheet" href="./bootstrap/css/toubu.css">
	<link rel="stylesheet" href="./bootstrap/css/sousuo.css">
	<link rel="stylesheet" href="./bootstrap/css/nav.css">
	<link rel="stylesheet" href="./bootstrap/css/cbht.css">
	<script src="./bootstrap/js/jquery.js"></script>
	<script src="./bootstrap/js/bootstrap.js"></script>
	<script src="./bootstrap/js/holder.min.js"></script>
</head>
<body>
	<div class="big">
		<!-- 头部开始 -->
		@include('layouts.toubu')
		<!-- 头部结束 -->
		<!-- 搜索开始 -->
		@include('layouts.sousuo')
		<!-- 搜索结束 -->
		<!-- 导航开始 -->
		@include('layouts.nav')
		<!-- 导航结束 -->
		<!-- 主体内容 -->
		<section>
			<div class="mf_one">
				<img src="./bootstrap/images/section_1.jpg" alt="">
				<a href="#"></a>
			</div>
			<div class="mf_two">
				<img src="./bootstrap/images/section_two.jpg" alt="">
				<a href="#" class="qw"></a>
				<a href="#" class="qe"></a>
				<a href="#" class="qr"></a>
				<a href="#" class="qt"></a>
				<a href="#" class="qy"></a>
				<a href="#" class="qu"></a>
			</div>
			
			<div class="mf_thr">
				<img src="./bootstrap/images/section_shr.jpg" alt="">
				<div class="container woqu">
					@foreach($pinpai as $i=>$o)
					<div class="col-md-3 woqu_o">
						<div class="baoz">
							<img src="./bootstrap/images/{{$o->datu}}" width="260px" height="260px" alt="">
							<img class="pull-left" src="./bootstrap/images/{{$o->xiaotu}}" width="60px" height="40px" style="margin-top: 10px;" alt="">
							<ul class="pull-right">
								<li>{{$o->name}}</li>
								<li class="" style="font-size: 18px; color: #FF8920;">{{$o->jiesao}}</li>
							</ul>
							<button class="btn">入场疯抢</button>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			
			<div class="mf_thr">
				<img src="./bootstrap/images/section_shr.jpg" alt="">
				<div class="container woqu">
					@foreach($pinpai as $i=>$o)
					<div class="col-md-3 woqu_o">
						<div class="baoz">
							<img src="./bootstrap/images/{{$o->datu}}" width="260px" height="260px" alt="">
							<img class="pull-left" src="./bootstrap/images/{{$o->xiaotu}}" width="60px" height="40px" style="margin-top: 10px;" alt="">
							<ul class="pull-right">
								<li>{{$o->name}}</li>
								<li class="" style="font-size: 18px; color: #FF8920;">{{$o->jiesao}}</li>
							</ul>
							<button class="btn">入场疯抢</button>
						</div>
					</div>
					@endforeach
				</div>
			</div>

			<div class="mf_thr">
				<img src="./bootstrap/images/section_shr.jpg" alt="">
				<div class="container woqu">
					@foreach($pinpai as $i=>$o)
					<div class="col-md-3 woqu_o">
						<div class="baoz">
							<img src="./bootstrap/images/{{$o->datu}}" width="260px" height="260px" alt="">
							<img class="pull-left" src="./bootstrap/images/{{$o->xiaotu}}" width="60px" height="40px" style="margin-top: 10px;" alt="">
							<ul class="pull-right">
								<li>{{$o->name}}</li>
								<li class="" style="font-size: 18px; color: #FF8920;">{{$o->jiesao}}</li>
							</ul>
							<button class="btn">入场疯抢</button>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="">
				<img src="./bootstrap/images/sectionhh.png" alt="">
			</div>
			
			<div class="fhzy">
				<a href="#"><img src="./bootstrap/images/souye.png" alt=""></a>
			</div>
		</section>
		<!-- 主体结束 -->
		<!-- 尾部开始 -->
		@include('layouts.foot')
		<!-- 尾部结束 -->
	</div>
</body>
</html>