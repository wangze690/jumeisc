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

    }
    a{
    	color: #000;
    }
	
	.content{
		height:2000px;
	}
	
    .content li {
    	width: 960px;
        height: 900px;
        margin-bottom: 20px;
        margin-left: 100px;
    }
    </style>

<body data-spy="scroll" data-target="#navbar-example">
@include('layouts.toubu')
<div class="alls">
	<div style="background: #fff;">
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
		<div class="col-md-12 text-center">
			<img src="holder.js/1400x450">
		</div>

		<div class="container text-center">
			<img src="holder.js/900x300">
		</div>
		<div id="navbar-example">
		    <ul class="daohang nav nav-tabs" role="tablist">
				<img src="./img/520.jpg" alt="">
		        <li><a href="#one">热卖推荐</a></li>
		        <li><a href="#two">女士手提包</a></li>
		        <li><a href="#three">女士斜跨包</a></li>
		        <li><a href="#four">女士钱包</a></li>
		        <li><a href="#five">男士钱包</a></li>
		        <li><a href="#fives">饰品</a></li>
		        <li><a href="#fived" style="background:black; color: #fff;">返回顶部</a></li>
		    </ul>
	    </div>
	    <div class="container">
	        <ul class="content text-center">
	            <li id="one" style="background:yellowgreen;margin-top:20px;">
					<img src="./img/tiao1.jpg" alt="" style="margin-bottom:20px;">
					<div class="col-md-4">
						<div class="bk">
							<img src="./img/525.jpg" style="width:290px;height: 300px;">
							<h5>COACH 蔻驰 皮质加帆布黑色女士手提包</h5>
							<p class="p_o">
								<span class="sp_dw">￥</span>
								<span class="sp_o">62</span>
								<span class="sp_t"><s>￥70</s></span>
								<button class="btn bu_o">去看看</button>
							</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="bk">
							<img src="holder.js/280x300">
							<h5>
								<b>
									无印良品MUJI敏感肌化妆水滋润型，打造春季滋润肌肤<span class="sp">促</span>
								</b>
							</h5>
							<p class="p_o">
								<span class="sp_dw">￥</span>
								<span class="sp_o">62</span>
								<span class="sp_t"><s>￥70</s></span>
								<button class="btn bu_o">去看看</button>
							</p>
						</div>
					</div>
					<div class="col-md-4 mb">
						<div class="bk">
							<img src="holder.js/280x300">
							<h5>
								<b>
									无印良品MUJI敏感肌化妆水滋润型，打造春季滋润肌肤<span class="sp">促</span>
								</b>
							</h5>
							<p class="p_o">
								<span class="sp_dw">￥</span>
								<span class="sp_o">62</span>
								<span class="sp_t"><s>￥70</s></span>
								<button class="btn bu_o">去看看</button>
							</p>
						</div>
					</div>
					</li>
	            <li id="two" style="background:cyan">
	            	<img src="./img/tiao2.jpg" alt="">
	            	<div class="col-md-4 mb">
						<div class="bk">
							<img src="holder.js/300x300">
							<h5>
								<b>
									无印良品MUJI敏感肌化妆水滋润型，打造春季滋润肌肤<span class="sp">促</span>
								</b>
							</h5>
							<p class="p_o">
								<span class="sp_dw">￥</span>
								<span class="sp_o">62</span>
								<span class="sp_t"><s>￥70</s></span>
								<button class="btn bu_o">去看看</button>
							</p>
						</div>
					</div>
	            </li>
	            <li id="three" style="background:purple">
	            	<img src="./img/tiao3.jpg" alt="">
	            	<div class="col-md-4 mb">
						<div class="bk">
							<img src="holder.js/300x300">
							<h5>
								<b>
									无印良品MUJI敏感肌化妆水滋润型，打造春季滋润肌肤<span class="sp">促</span>
								</b>
							</h5>
							<p class="p_o">
								<span class="sp_dw">￥</span>
								<span class="sp_o">62</span>
								<span class="sp_t"><s>￥70</s></span>
								<button class="btn bu_o">去看看</button>
							</p>
						</div>
					</div>
	            	
	            </li>
	            <li id="four" style="background:pink">
	            	<img src="./img/tiao4.jpg" alt="">
	            </li>
	            <li id="five" style="background:black">
	            	<img src="./img/tiao5.jpg" alt="">
	            </li>
	            <li id="fives" style="background:black">
	            	<img src="./img/tiao6.jpg" alt="">
	            </li>
	        </ul>
	    </div>
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
