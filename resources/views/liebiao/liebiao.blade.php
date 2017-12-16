<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>列表页</title>
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="./bootstrap/css/liebiao.css">
	<link rel="stylesheet" href="./bootstrap/css/toubu.css">
	<link rel="stylesheet" href="./bootstrap/css/sousuo.css">
	<link rel="stylesheet" href="./bootstrap/css/nav.css">
	<link rel="stylesheet" href="./bootstrap/css/cbht.css">
	<script src="./bootstrap/js/jquery.js"></script>
	<script src="./bootstrap/js/bootstrap.js"></script>
	<script src="./bootstrap/js/holder.min.js"></script>
	
</head>
<body>
@include('layouts.ggcb')
<div class="big">
@include('layouts.toubu')
@include('layouts.sousuo')
@include('layouts.nav') 
	<div class="dinner text-center">
		<img src="./bootstrap/images/17.jpg" width="1899" alt="">
	</div>
	<div class="dinner">
		<div class="container" style="margin-top: 20px;">
			@foreach($biao as $o=>$p)
			<div class="col-md-4 mb">
				<div class="bk">
					<img src="./bootstrap/images/{{$p->profile}}" width="300" height="300" alt="">
					<h5>
						<b>
							{{$p->shopcons}}<span class="sp">促</span>
						</b>
					</h5>
					<p class="p_o">
						<span class="sp_dw">￥</span>
						<span class="sp_o">{{$p->shopxj}}</span>
						<span class="sp_t"><s>{{$p->shopyj}}</s></span>
						<button class="btn bu_o">去看看</button>
					</p>
				</div>
			</div>
			@endforeach
		</div>	
	</div>
	<section>
		<div class="container">
			<div class="col-md-4 col-md-offset-4 rng">
				<button class="btn vn">返回急速免税店</button>
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="col-md-3 skt">
				<h4>极速免税店保障</h4>
				<ul>
					<li>海外直邮</li>
					<li>无忧保障</li>
				</ul>
			</div>
			<div class="col-md-3 skt">
				<h4>新手帮助</h4>
				<ul>
					<li>常见问题</li>
					<li>违规争议处理</li>
				</ul>
			</div>
			<div class="col-md-3 skt">
				<h4>新手帮助</h4>
				<ul>
					<li>极速免税店招商</li>
					<li>服务条款协议</li>
					<li>用户服务协议</li>
				</ul>
			</div>
			<div class="col-md-3 skts">
				<h4>客服联系方式</h4>
				<ul>
					<li><i class="glyphicon glyphicon-earphone "></i>&nbsp;&nbsp;400-123-8888</li>
					<li><i class="glyphicon glyphicon-user "></i>&nbsp;&nbsp;点击咨询在线客服</li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="nice text-center">Copyright 2017, 版权所有JUMEIGLOBAL.COM 客服电话：400-123-8888</div>
		</div>
	</footer>
</div>
</body>
</html>