<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="/css/liebiaosan.css">
	<script src="/bootstrap/js/jquery.js"></script>
	<script src="/bootstrap/js/bootstrap.js"></script>
	<script src="/bootstrap/js/holder.min.js"></script>
	<link rel="stylesheet" href="/bootstrap/css/toubu.css">
	<link rel="stylesheet" href="/bootstrap/css/sousuo.css">
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/foot.css">
</head>
<style>
    body {
        position: relative;
        height:2000px;
    }

    .daohang {
        height: auto;
        width: 112px;
        position: fixed;
        left: 20px;
        top: 100px;
        z-index:100;
       }
    .daohang li {
    	width: 112px;
        height: 45px;
        border: 1px solid black;
        font-weight: 800;
        text-align: center;
        font-size: 14px;

    }
    a{
    	color: #000;
    }
	
	.content{
		height:2000px;
	}
	
    .content li {
    	width: 960px;
        height: 1000px;
        margin-bottom: 20px;
        margin-left: 100px;
    }
    </style>

<body data-spy="scroll" data-target="#navbar-example">
@include('layouts.toubu')
<div class="alls">
	<div style="background: #fff;" id="fived">
		<div class="container">
			<div class="col-md-6">
				<a href="/mzsc"><img src="./img/1.jpg" alt=""></a>
			</div>
			<div class="col-md-6 pull-right">
				<div class="na_car pull-right">
					<img src="./bootstrap/images/cart.gif" alt="">
					<input type="button" class="btn gw_o" value="去购物车结算">
				</div>	
			</div>
		</div>
		<div class="col-md-12 tu" >
			<img src="./img/526.jpg" alt="" style="width: 100%;height: 100%;">
		</div>

		
		<div id="navbar-example">
		    <ul class="daohang nav nav-tabs" role="tablist">
				<img src="./img/520.jpg" alt="">
		        <li><a href="#one">热卖推荐</a></li>
		        <li><a href="#two">女士手提包</a></li>
		        <li><a href="#three">女士斜跨包</a></li>
		        <li><a href="#four">女士钱包</a></li>
		        <li><a href="#five">男士钱包</a></li>
		        <li><a href="#fives">双肩包</a></li>
		        <li><a href="#fived" style="background:black; color: #fff;">返回顶部</a></li>
		    </ul>
	    </div>
	    <div class="container center">
	        <ul class="content text-center" style="margin-top: 600px;">
	            <li id="one" style="background:#fff;">
					<img src="./img/tiao1.jpg" alt="" style="margin-bottom:20px;">
					@foreach($shop as $k => $p)
					<div class="col-md-4 bk">
						<div>
							<img src="./img/{{$p->profile}}" style="width:290px;height: 300px;">

							<h5>{{$p->shopcons}}</h5>
							<p class="price">
								<p style="float:left;margin-left:5px;color:#ec1b5d;">
									<span style="font-size:14px;">¥</span>
									<span style="font-size: 32px;font-weight:500;">¥{{$p->shopxj}}</span>
									<span style="color: #666;"><s>¥{{$p->shopyj}}</s></span>
								</p>
									<button class="btn bu_o" style="float:right;margin-right: 5px;background:#ec1b5d;color:#fff;">去看看</button>
							</p>
						</div>
					</div>
					@endforeach
					
				</li>

	            <li id="two" style="background:#fff;">
	            	<img src="./img/tiao2.jpg" alt="">
	            	@foreach($shops as $ks => $ps)
					<div class="col-md-4 bk">
						<div>
							<img src="./img/{{$ps->profile}}" style="width:290px;height: 300px;">

							<h5>{{$ps->shopcons}}</h5>
							<p class="price">
								<p style="float:left;margin-left:5px;color:#ec1b5d;">
									<span style="font-size:14px;">¥</span>
									<span style="font-size: 32px;font-weight:500;">¥{{$ps->shopxj}}</span>
									<span style="color: #666;"><s>¥{{$ps->shopyj}}</s></span>
								</p>
									<button class="btn bu_o" style="float:right;margin-right: 5px;background:#ec1b5d;color:#fff;">去看看</button>
							</p>
						</div>
					</div>
					@endforeach
	            </li>
	            <li id="three" style="background:#fff;">
	            	<img src="./img/tiao3.jpg" alt="">
	            	
					

	            	
	            </li>
	            <li id="four" style="background:#fff;">
	            	<img src="./img/tiao4.jpg" alt="">
	            	
	            </li>
	            <li id="five" style="background:#fff;">
	            	<img src="./img/522.jpg" alt="">
	            	
	            </li>
	            <li id="fives" style="background:#fff;">
	            	<img src="./img/tiao5.jpg" alt="">
	            	
	            </li>
	        </ul>
	    </div>
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

    <script>
    	//绑定单击事件
    	$('.daohang li').click(function(){
    		//获取当前元素的href属性
    		var href = $(this).find('a').attr('href');
    		//获取右侧对应的li元素
    		var li = $(href);
    		//获取当前li元素距离文档顶部的偏移量
    		var t = li.offset().top;
    		//窗口滚动到该位置
    		$('body').animate({scrollTop: t}, 1000);

    		return false;
    	})
    </script>

	</div>
</div>
</html>
