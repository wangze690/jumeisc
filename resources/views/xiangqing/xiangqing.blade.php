<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>详情页</title>
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="/css/xiangqing.css">
	<link rel="stylesheet" href="/bootstrap/css/cbht.css">
	<link rel="stylesheet" href="/bootstrap/css/toubu.css">
	<script src="/bootstrap/js/jquery.js"></script>
	<script src="/bootstrap/js/bootstrap.js"></script>
	<script src="/bootstrap/js/holder.min.js"></script>
</head>
<body>
<!-- 头部开始 -->
@include('layouts.toubu')
@if(session('msg'))
<div class="alert alert-warning alert-dismissible" role="alert ">
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	{{session('msg')}}
</div>
@endif
<!-- 主体内容开始 -->
<section>
	<div class="shousuo">
		<div class="container">
			<div class="col-md-3 na_w">
				<a href="/jumei">
				<img src="/img/1.jpg" alt="">
				</a>
			</div>
			<div class="col-md-7 na_s"></div>
			<div class="col-md-2 na_n">
				<div class="na_car">
					<img src="/bootstrap/images/cart.gif" alt="">
					<input type="button" class="btn gw_o" value="去购物车结算">
				</div>	
			</div>
		</div>
	</div>

	<div class="col-md-12 section_1">
		<div class="col-md-1"></div>
		<div class="col-md-10" >
			<div class="col-md-12 section_2">
				<div class="col-md-7 section_3">
					
					<p class="h4">
					{{$lb->shopcons}}
					</p>
				
					<img class="img_18" src="/img/{{$lb->profile}}">
					<div>
						<p class="p_1">清 洁</p>
						<p class="p_2">清 爽</p>
						<a href="#" class="a_1">分享到 ></a>
					</div>
				</div>
				<div class="col-md-5 section_4">
					<div class="col-md-12 section_5">
						<div class="col-md-5"></div>
						<div class="col-md-7">
							<div class="col-md-8 section_6">
								<img height="50" width="100" src="{{$xiangqing->from_1}}">
							</div>
							<div class="col-md-4">
								<div class="section_7"></div>
								<p style="width: 100px;">{{$xiangqing->from_2}}</p>
								<p style="width: 100px;">{{$xiangqing->from_3}}</p>
							</div>
						</div>
					</div>

					<div class="col-md-12 section_8">
						<div class="col-md-6 text-left"><p class="p_3">￥{{$lb->shopxj}}&nbsp;<font size="2"><s>￥{{$lb->shopyj}}</s></font></p></div>
						<div class="col-md-6 text-right"><a href="#" class="text-d">价格详情></a></div>
					</div>

					<div class="col-md-12 section_9">
						<span class="glyphicon glyphicon-user col-md-6" aria-hidden="true">&nbsp;<font color="red">123</font>人以购买</span>
						<span class="glyphicon glyphicon-comment col-md-6" aria-hidden="true">&nbsp;4.5分(11条评论)</span>
					</div>

					<div class="col-md-12 section_10">
						<p>包邮政策:本商品满299元或2件包邮</p>
						<p>服务政策:本商品支持7天拆封无条件退货</p>
					</div>
					<form action="/jrgwc" method="post" enctype="multipart/form-data">
					<input type="hidden" name="good_id" value="{{$lb->id}}">
					<input type="hidden" name="imgs" value="{{$lb->profile}}">
					<input type="hidden" name="cons" value="{{$lb->shopcons}}">
					<input type="hidden" name="goods_xj" value="{{$lb->shopxj}}">
					<input type="hidden" name="goods_yj" value="{{$lb->shopyj}}">
					 {{csrf_field()}}
					<input type="submit" class="btn btn-danger btn-lg button_1" value="加入购物车 >">
					</form>
				</div>
			</div>

			<div class="col-md-12 section_11">
				<div class="col-md-3 section_12">
					<img src="/img/4.jpg">
					<div class="col-md-5 section_13">
						<p><b>海外直采</b></p>
						<p><b>海关监管</b></p>
					</div>
				</div>

				<div class="col-md-3 section_12">
					<img src="/img/5.jpg">
					<div class="col-md-5 section_13">
						<p><b>闪电发货</b></p>
						<p><b>国内物流</b></p>
					</div>
				</div>

				<div class="col-md-3 section_12">
					<img src="/img/6.jpg">
					<div class="col-md-5 section_13">
						<p><b>海外价格</b></p>
						<p><b>现金支付</b></p>
					</div>
				</div>

				<div class="col-md-3 section_12">
					<img class="img_1" src="/img/7.jpg">
					<div class="col-md-5 section_13">
						<p><b>七天包退</b></p>
						<p><b>国内售后</b></p>
					</div>
				</div>
			</div>

			<div>
			    <ul class="nav nav-pills col-md-12">
			        <li role="presentation" class="text-center daohang"><a href="#">商品信息</a></li>
			        <li role="presentation" class="text-center daohang"><a href="#">商品详情</a></li>
			        <li role="presentation" class="text-center daohang"><a href="#">使用方法</a></li>
			        <li role="presentation" class="text-center daohang"><a href="#">商品实拍</a></li>
			        <li role="presentation" class="text-center daohang"><a href="#">用户口碑</a></li>
			        <li role="presentation" class="text-center daohang"><a href="#">关于极速免税店</a></li>
			    </ul>
			    <div class="col-md-12 section_14">
			    	<div class="col-md-12 section_15">
			    		<p class="text-center">商品信息</p>
			    		<hr />
			    	</div>
		    		<div class="col-md-12">{!!$xiangqing->xinxi!!}</div>
			    	
			    	<div class="col-md-12 section_15 section_16" >
			    		<p class="text-center">商品详情</p>
			    		<hr />
			    	</div>
			    	<div class="col-md-12">{!!$xiangqing->xiangqing!!}</div>
			    	
			    	<div class="col-md-12 section_15 section_16">
			    		<p class="text-center">使用方法</p>
			    		<hr />
			    	</div>
			    	<div class="col-md-12">{!!$xiangqing->fangfa!!}</div>

			    	<div class="col-md-12 section_15 section_16">
			    		<p class="text-center">商品实拍</p>
			    		<hr />
			    	</div>
			    	<div class="col-md-12">{!!$xiangqing->shipai!!}</div>

			    	<div class="col-md-12 section_15 section_16">
			    		<p class="text-center">用户口碑</p>
			    		<hr />
			    	</div>

			    	<div class="col-md-12">
			    		<div class="col-md-6 section_17">
			    			<p class="p_4"><b>4.9/5</b></p>
			    			<span class="glyphicon glyphicon-star-empty span_1" aria-hidden="true"></span>
			    			<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
			    			<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
			    			<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
			    			<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
			    			<p class="p_5"><font color="#ee0d5b">9</font>口碑&nbsp;&nbsp;<font color="#ee0d5b">8936</font>短评</p>
			    		</div>
			    		<div class="col-md-3">
			    			<p class="p_6">该商品使用起来好用吗?与超千万聚美用户分享你的独家心得</p>
			    			<button type="button" class="btn btn-danger button_2">我要写口碑</button>
			    		</div>
			    		<div class="col-md-3"></div>
			    	</div>
			    	@foreach($pingjia as $k=>$v)
			    	<div class="col-md-12 center">
			    		<div class="col-md-1"></div>
			    		<div class="col-md-10 section_19">
			    			<img height="50" width="50" src="{{$v->toutu}}">
			    			<div class="section_20">
			    				<div class="section_21">
			    					<p style="width: 100px;" class="p_7">{{$v->username}}</p>
			    					<img class="img_11" src="/img/24.jpg">
			    					<img src="/img/25.jpg" class="img_12">
			    					<p class="p_8">未知年龄,未知肤质,未知发质</p>
			    					<div class="section_22">
			    						<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
			    						<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
			    						<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
			    						<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
			    						<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
			    					</div>
			    					<img src="/img/26.jpg" class="img_13">
			    				</div>
			    				<div>
			    					<p class="p_9"><b>{{$v->title}}</b></p>
			    					<p class="p_10">{{$v->cons}}</p>
			    					<p>1768阅读 | <font color="#ec199d">13</font>回复 | <font color="#ec199d">1</font>有用</p>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="col-md-1"></div>
			    		
			    	</div>
			    	@endforeach
			    	<div class="col-md-12 section_15 section_16">
			    		<p class="text-center">关于聚美极速免税店</p>
			    		<hr />
			    	</div>
			    	<div class="col-md-12">{!!$xiangqing->jisu!!}</div>

			    	<div class="col-md-12 section_15 section_16">
			    		<p class="text-center">如何联系聚美极速免税店进行售后服务</p>
			    		<hr />
			    	</div>

			    	<div class="col-md-12 section_23">
			    		<div class="col-md-4 text-center section_24">
			    			<span class="glyphicon glyphicon-earphone span_2" aria-hidden="true"></span>
			    			<p class="p_11"><b>电话客服</b></p>
			    			<p class="p_12"><b>400-123-8888</b></p>
			    			<p>(8:00-22:00)</p>
			    		</div>

			    		<div class="col-md-4 text-center section_24">
			    			<span class="glyphicon glyphicon-headphones span_2" aria-hidden="true"></span>
			    			<p class="p_11""><b>在线客服</b></p>
			    			<a class="a_2"><b>点击这里,联系在线客服</b></a>
			    			<p class="p_13">(7×24小时服务)</p>
			    		</div>

			    		<div class="col-md-4 text-center">
			    			<span class="glyphicon glyphicon-user span_2" aria-hidden="true"></span>
			    			<p class="p_11"><b>自动售后</b></p>
			    			<p class="p_14"><b>您可在聚美优品"<a href="">我的订单-售后服务</a>"选择需要售后的订单和商品,接到您的申请后,客服第一时间与您联系</b></p>
			    		</div>
			    	</div>
			    	
			    	<div class="col-md-12 section_15 section_16">
			    		<p class="text-center">聚美极速免税店常见问题</p>
			    		<hr />
			    	</div>

			    	<div class="col-md-12 section_25">
			    		<button type="button" class="btn btn-default btn-lg">点击查看 +</button>
			    	</div>
			    </div>

			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</section>
<!-- 主体内容结束 -->

<!-- 版权开始 -->
<footer class="col-md-12">
	<div class="col-md-1"></div>

	<div class="col-md-3 footer_1">
		<p class="p_15"><b>极速免税点保障</b></p>
		<p class="p_16">海外直邮</p>
		<div class="clearfix"></div>
		<p class="p_17">无忧保险</p>
	</div>

	<div class="col-md-2 footer_1">
		<p class="p_18"><b>新手帮助</b></p>
		<p class="p_19">常见问题</p>
		<div class="clearfix"></div>
		<p class="p_20">违规争议处理</p>
	</div>

	<div class="col-md-2 footer_1">
		<p class="p_21"><b>相关条款</b></p>
		<p class="p_22">极速免税店招商</p>
		<div class="clearfix"></div>
		<p class="p_23">服务条款协议</p>
		<p class="p_23">用户服务协议</p>
	</div>

	<div class="col-md-3 footer_2">
		<p class="p_21"><b>客服联系方式</b></p>
		<p class="glyphicon glyphicon-phone-alt p_24"aria-hidden="true">400-123-8888</p>
		<div class="clearfix"></div>
		<p class="glyphicon glyphicon-headphones p_25" aria-hidden="true">点击咨询在线客服</p>
	</div>
	<div class="col-md-1"></div>

	<div class="col-md-12 text-center footer_3">
		<p>Copyright 2017,版权所有JUMEIGLOBALOCM 客服电话:400-123-8888</p>
	</div>
</footer>
<!-- 版权结束 -->
<!-- 侧边条开始 -->

<!-- 侧边条结束 -->


</body>

</html>