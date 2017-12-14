<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>保湿</title>
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/baoshi.css">
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
	<div class="alls">
	@include('layouts.toubu')
	@include('layouts.sousuo')
	@include('layouts.nav')
		<section>
			<div class="container">

				<div class="section_1">
					<span>
						<a href="">化妆品首页 ></a>
					</span>
					<span>
						<input type="text" name="text" value="保湿">
						<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					</span>
				</div>

				<div class="section_2">
					<div class="section_3">在<font color="#ed145b">保湿</font>中筛选</div>

					<div class="section_4">
						<div class="col-md-1 section_5">品牌:</div>
						<div class="col-md-11 section_6">
							
							@foreach($pinpai as $k=>$v)
							<a class="col-md-1" href="">{{$v->name}}</a>
							@endforeach
							
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="section_4">
						<div class="col-md-1 section_5">分类:</div>
						<div class="col-md-11 section_6">
							
							@foreach($fenlei as $k=>$v)
							<a class="col-md-2" href="">{{$v->name}}</a>
							@endforeach
							
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="section_4">
						<div class="col-md-1 section_5">功效:</div>
						<div class="col-md-11 section_6">

							@foreach($gongxiao as $k=>$v)
							<a class="col-md-1" href="">{{$v->name}}</a>
							@endforeach
							
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="section_4">
						<div class="col-md-1 section_5">价格:</div>
						<div class="col-md-11 section_6">

							@foreach($jiage as $k=>$v)
							<a class="col-md-2" href="">{{$v->jiage}}</a>
							@endforeach
							
						</div>
						<div class="clearfix"></div>
					</div>

				</div>

				<div class="section_2">
					<ul>
						<li class="li_1"><b>排序:</b></li>
						<li class="li_1"><a href="">默认<span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></a></li>
						<li class="li_1"><a href="">价格<span class="glyphicon glyphicon-unchecked" aria-hidden="true"></a></li>
						<li class="li_1"><a href="">销量<span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></a></li>
						<li class="li_1"><a href="">人气<span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></a></li>
						<li class="li_1"><a href="">上架时间<span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></a></li>
						<li class="li_1"><a href=""><span class="glyphicon glyphicon-unchecked" aria-hidden="true">只看特品</a></li>
					</ul>
					<div class="clearfix"></div>
					<div>
						@foreach($shop as $k=>$v)
						<div class="col-md-3 section_7">
							<a href="/xiangqing/{{$v->id}}">
								<img width="230" height="270" src="/img/{{$v->profile}}">
							</a>
							<a href="/xiangqing/{{$v->id}}">{{$v->shopcons}}</a>
							<p><font color="#ed145b" size="5">￥{{$v->shopxj}}</font> <s>￥{{$v->shopyj}}</s></p>
							<p>月销83</p>
							<div>
								<span>
									<button class="btn button_1 jrgwc">加入购物车</button>
								</span>
								<span>
									<button class="btn button_2 shoucang">收藏</button>
									<input type="hidden" value="{{$v->id}}">
								</span>
							</div>
						</div>
						@endforeach
					</div>

					<div class="clearfix"></div>
					
					<div class="text-right">
					    <ul class="pagination">
					    	<li>
					      		<a href="#" aria-label="Previous">
					        		<span aria-hidden="true">&laquo;</span>
					      		</a>
					    	</li>
					    	<li><a href="#">1</a></li>
					    	<li><a href="#">2</a></li>
					    	<li><a href="#">3</a></li>
					    	<li><a href="#">4</a></li>
					    	<li><a href="#">...</a></li>
					    	<li><a href="#">118</a></li>
					    	<li>
					      		<a href="#" aria-label="Next">
					        		<span aria-hidden="true">&raquo;</span>
					     		</a>
					   		</li>
					  	</ul>	
					</div>

				</div>

				<div class="col-md-12 section_8">
					<div class="input-group input_1">
						<input type="text" class="form-control" placeholder="保湿" aria-describedby="basic-addon2">
						<span class="input-group-addon" id="basic-addon2">搜索</span>
					</div>
				</div>

			</div>

		</section>
		@include('layouts.foot')
	</div>
</body>
<script type="text/javascript"></script>
<script>
	$('.jrgwc').click(function(){
		var sp_id = $(this).parent().parent().find('input[type=hidden]').val();
		$.ajax({
			type:'get',
			url:'/jrgwc',
			data:{'sp_id':sp_id},
			success:function(mess){	
				if(mess == 1)
				{
					alert('加入购物车成功');
				}
				else
				{
					var ppp=confirm("您还未登录,请先登录");
					location.href="/denglu";
				}	
			}
		})
	})

	$('.shoucang').click(function(){
		var sp_id = $(this).parent().parent().find('input[type=hidden]').val();
		$.ajax({
			type:'get',
			url:'/jrsc',
			data:{'sp_id':sp_id},
			success:function(msg){
				if(msg == 1)
				{
					alert('添加收藏成功');
				}
				else
				{
					var ppp=confirm("您还未登录,请先登录");
					location.href="/denglu";
				}
			}
		})
	})
</script>
</html>