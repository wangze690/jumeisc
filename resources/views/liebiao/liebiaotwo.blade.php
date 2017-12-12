<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>列表页</title>
	
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/liebiao.css">
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/foot.css">
	<link rel="stylesheet" href="/bootstrap/css/cbht.css">
	<link rel="stylesheet" href="/bootstrap/css/toubu.css">
	<link rel="stylesheet" href="/bootstrap/css/sousuo.css">
	<link rel="stylesheet" href="/bootstrap/css/nav.css">
	<script type="text/javascript" src="/bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="/bootstrap/js/holder.min.js"></script>
	
</head>
<body>
<div class="alls" >
	@include('layouts.toubu')
	@include('layouts.sousuo')
	@include('layouts.nav')
	<!-- 主体内容开始 -->
	<section>
		<!-- 焦点图 -->
		@foreach($sp_3 as $k=>$v)
		<div class="col-md-12 text-center">
			<img src="/bootstrap/images/{{$v->profile}}">
		</div>
		@endforeach

		<!-- 商品 -->
		<div class="container">
			@foreach($sp_1 as $k=>$v)
			<div class="col-md-3 section_2">
				<a href="xiangqing/{{$v->id}}">
					<img class="section_1" src="/img/{{$v->profile}}">
				</a>
				<ul class="section_3">
					<li class="li_1">{{$v->shoptitle}}</li>
					<li class="li_2"><a href="xiangqing/{{$v->id}}">{{$v->shopcons}}</a><span>折</span></li>
					<li>
						<span class="span_1">￥{{$v->shopxj}}</span>
						<span class="span_2">￥{{$v->shopyj}}</span>
						<span class="span_3">包邮</span>
					</li>
				</ul>
			</div>
			@endforeach

			<div class="clearfix"></div>

			@foreach($sp_2 as $k=>$v)
			<div class="col-md-3 section_2">
				<a href="xiangqing/{{$v->id}}">
					<img class="section_1" src="/img/{{$v->profile}}">
				</a>
				<ul class="section_3">
					<li class="li_1">{{$v->shoptitle}}</li>
					<li class="li_2"><a href="xiangqing/{{$v->id}}">{{$v->shopcons}}</a><span>折</span></li>
					<li>
						<span class="span_1">￥{{$v->shopxj}}</span>
						<span class="span_2">￥{{$v->shopyj}}</span>
					</li>
				</ul>
			</div>
			@endforeach

		</div>
	</section>
	<!-- 主体内容结束 -->
	@include('layouts.foot')
</div>

</body>
</html>