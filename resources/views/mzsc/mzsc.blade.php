<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>美妆商城首页</title>
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="./bootstrap/css/mzsc.css">
	<link rel="stylesheet" href="./bootstrap/css/cbht.css">
	<link rel="stylesheet" href="./bootstrap/css/toubu.css">
	<link rel="stylesheet" href="./bootstrap/css/sousuo.css">
	<link rel="stylesheet" href="./bootstrap/css/foot.css">
	<link rel="stylesheet" href="./bootstrap/css/nav.css">
	<link rel="stylesheet" href="/bootstrap/css/head.css">
	<script src="./bootstrap/js/jquery.js"></script>
	<script src="./bootstrap/js/bootstrap.js"></script>
	<script src="./bootstrap/js/holder.min.js"></script>
	
</head>
<body>
<div class="big">
	@include('layouts.ggcb')
	
	@include('layouts.toubu')
	
	<div class="clearfix"></div>
	@include('layouts.sousuo')
	<div class="clearfix"></div>
	
	@include('layouts.nav')
	
	<div class="dinner">
		<div class="container">
			<div id="divs">
				<ul>
					<li class="lis pull-left">美妆商城首页</li>
			    	<li class="lia pull-left">个人护理</li>
			        <li class="lib pull-left">护肤</li>
			        <li class="lic pull-left">彩妆</li>
			        <li class="lid pull-left">香氛</li>
			        <p></p>
			    </ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<script>
	$(function(){
		$(".lis,.lia,.lib,.lic,.lid").hover(function(){
			$(this).addClass("lis").siblings(".lis,.lia,.lib,.lic,.lid").removeClass("lis");
			var isa = $(this).position()
			$("p").animate({
				left:isa.left,
				},50);
		})
	});
	</script>

	<section>
		<div class="container" style="position: relative;">
			<div class="col-md-3 dr">
				<h3><b>全部分类</b></h3>
				@foreach($cbnav as $k=>$v)
				<div class="ceb">
					
					
					<dl class="uzi">

						<dt>{{$v->navname}}</dt>
						@foreach($v->two as $q=>$z)
						<dd class="pull-left"><a href="#">{{$z->navname}}</a></dd>
						@endforeach
					</dl>
					
					<!-- <div class="cen_xs">
						<div class="col-md-9 cen_xs_o">
							<h5 class="text-center"><b>国际品牌</b></h5>
							<ul>
								<li class="pull-left">伊丽莎白雅顿</li>            
								<li class="pull-left">兰蔻</li>
								<li class="pull-left">科颜氏</li>
								<li class="pull-left">迪奥</li>
								<li class="pull-left">倩碧</li>
								<li class="pull-left">娇韵诗</li>
								<li class="pull-left">雅诗兰黛</li>
								<li class="pull-left">SK-II</li>
								<li class="pull-left">欧舒丹</li>
								<li class="pull-left">碧欧泉</li>
								<li class="pull-left">娇兰</li>
								<li class="pull-left">贝玲妃</li>
							</ul>
							<div style="width: 650px; border-top:1px dashed #eee; margin-left: 10px;"></div>
							
							<h5 class="text-center"><b>国际品牌</b></h5>
							<ul>
								<li class="pull-left">伊丽莎白雅顿</li>            
								<li class="pull-left">兰蔻</li>
								<li class="pull-left">科颜氏</li>
								<li class="pull-left">迪奥</li>
								<li class="pull-left">倩碧</li>
								<li class="pull-left">娇韵诗</li>
								<li class="pull-left">雅诗兰黛</li>
								<li class="pull-left">SK-II</li>
								<li class="pull-left">欧舒丹</li>
								<li class="pull-left">碧欧泉</li>
								<li class="pull-left">娇兰</li>
								<li class="pull-left">贝玲妃</li>
							</ul>
							<div style="width: 650px; border-top:1px dashed #eee; margin-left: 10px;"></div>

							<h5 class="text-center"><b>国际品牌</b></h5>
							<ul>
								<li class="pull-left">伊丽莎白雅顿</li>            
								<li class="pull-left">兰蔻</li>
								<li class="pull-left">科颜氏</li>
								<li class="pull-left">迪奥</li>
								<li class="pull-left">倩碧</li>
								<li class="pull-left">娇韵诗</li>
								<li class="pull-left">雅诗兰黛</li>
								<li class="pull-left">SK-II</li>
								<li class="pull-left">欧舒丹</li>
								<li class="pull-left">碧欧泉</li>
								<li class="pull-left">娇兰</li>
								<li class="pull-left">贝玲妃</li>
							</ul>
							<div style="width: 650px; border-top:1px dashed #eee; margin-left: 10px;"></div>

							<h5 class="text-center"><b>国际品牌</b></h5>
							<ul>
								<li class="pull-left">伊丽莎白雅顿</li>            
								<li class="pull-left">兰蔻</li>
								<li class="pull-left">科颜氏</li>
								<li class="pull-left">迪奥</li>
								<li class="pull-left">倩碧</li>
								<li class="pull-left">娇韵诗</li>
								<li class="pull-left">雅诗兰黛</li>
								<li class="pull-left">SK-II</li>
								<li class="pull-left">欧舒丹</li>
								<li class="pull-left">碧欧泉</li>
								<li class="pull-left">娇兰</li>
								<li class="pull-left">贝玲妃</li>
							</ul>
							<div style="width: 650px; border-top:1px dashed #eee; margin-left: 10px;"></div>

							<h5 class="text-center"><b>国际品牌</b></h5>
							<ul>
								<li class="pull-left">伊丽莎白雅顿</li>            
								<li class="pull-left">兰蔻</li>
								<li class="pull-left">科颜氏</li>
								<li class="pull-left">迪奥</li>
								<li class="pull-left">倩碧</li>
								<li class="pull-left">娇韵诗</li>
								<li class="pull-left">雅诗兰黛</li>
								<li class="pull-left">SK-II</li>
								<li class="pull-left">欧舒丹</li>
								<li class="pull-left">碧欧泉</li>
								<li class="pull-left">娇兰</li>
								<li class="pull-left">贝玲妃</li>
							</ul>
							<div style="width: 650px; border-top:1px dashed #eee; margin-left: 10px;"></div>

							<h5 class="text-center"><b>国际品牌</b></h5>
							<ul>
								<li class="pull-left">伊丽莎白雅顿</li>            
								<li class="pull-left">兰蔻</li>
								<li class="pull-left">科颜氏</li>
								<li class="pull-left">迪奥</li>
								<li class="pull-left">倩碧</li>
								<li class="pull-left">娇韵诗</li>
								<li class="pull-left">雅诗兰黛</li>
								<li class="pull-left">SK-II</li>
								<li class="pull-left">欧舒丹</li>
								<li class="pull-left">碧欧泉</li>
								<li class="pull-left">娇兰</li>
								<li class="pull-left">贝玲妃</li>
							</ul>
							<div style="width: 650px; border-top:1px dashed #eee; margin-left: 10px;"></div>
						</div>
						<div class="col-md-3 cen_xs_t"></div>
					</div> -->
				</div>
				<div class="clearfix"></div>
				@endforeach	
				
				<div class="ce_tu">
					<img src="./bootstrap/images/20.jpg" width="265px" height="130px" alt="">
				</div>
			</div>
			<div class="col-md-9 ds">
				<div class="ui">
					<div class="lun_b pull-left">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						    <div class="item active">
						      <img src="./bootstrap/images/21.jpg" width="100%" height="100%" alt="...">
						      <div class="carousel-caption">
						      </div>
						    </div>
						    <div class="item">
						      <img src="./bootstrap/images/22.jpg" width="100%" height="100%" alt="...">
						      <div class="carousel-caption">
						      </div>
						    </div>
							<div class="item">
						      <img src="./bootstrap/images/23.jpg" width="100%" height="100%" alt="...">
						      <div class="carousel-caption">
						      </div>
						    </div>
							<div class="item">
						      <img src="./bootstrap/images/024.jpg" width="100%" height="100%" alt="...">
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


					<div class="gu_g pull-left">
						<div class="o">
						<img src="./bootstrap/images/24.jpg" width="188px" height="140px" alt="">
						</div>
						<div class="o">
							<img src="./bootstrap/images/25.jpg" width="188px" height="140px" alt="">
						</div>
						<div class="o">
							<img src="./bootstrap/images/26.jpg" width="188px" height="140px" alt="">
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="xia">
						<ul class="nav nav-tabs" role="tablist">
						    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">推荐商品</a></li>
						    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">独家品牌</a></li>
						    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">欧美品牌</a></li>
						    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">日韩品牌</a></li>
						    <li role="presentation"><a href="#diwuge" aria-controls="diwuge" role="tab" data-toggle="tab">国货品牌</a></li>
						    <li role="presentation"><a href="#diliuge" aria-controls="diliuge" role="tab" data-toggle="tab">洗护品牌</a></li>
					    </ul>

					  <!-- Tab panes -->
					  	<div class="tab-content">
						    <div role="tabpanel" class="tab-pane active" id="home">
						    	<div class="oe">
						    		@foreach($pro as $j=>$h)
									<div class="col-md-2 net"><img src="./bootstrap/images/{{$h->sppro}}" width="135px" height="116px" alt=""></div>
									@endforeach
									
								</div>
						    </div>
						    <div role="tabpanel" class="tab-pane" id="profile">
								<div class="oe">
									@foreach($pro_one as $y=>$g)
									<div class="col-md-2 net"><img src="./bootstrap/images/{{$g->sppro}}" width="135px" height="116px" alt=""></div>
									@endforeach
									
								</div>
						    </div>
						    <div role="tabpanel" class="tab-pane" id="messages">
								<div class="oe">
									@foreach($pro_two as $n=>$m)
									<div class="col-md-2 net"><img src="./bootstrap/images/{{$m->sppro}}" width="135px" height="116px" alt=""></div>
									@endforeach
								</div>
						    </div>
						    <div role="tabpanel" class="tab-pane" id="settings">
								<div class="oe">
									@foreach($pro_one as $y=>$g)
									<div class="col-md-2 net"><img src="./bootstrap/images/{{$g->sppro}}" width="135px" height="116px" alt=""></div>
									@endforeach
								</div>
						    </div>
						    <div role="tabpanel" class="tab-pane" id="diwuge">
								<div class="oe">
									@foreach($pro as $j=>$h)
									<div class="col-md-2 net"><img src="./bootstrap/images/{{$h->sppro}}" width="135px" height="116px" alt=""></div>
									@endforeach
								</div>
						    </div>

						    <div role="tabpanel" class="tab-pane" id="diliuge">
								<div class="oe">
									@foreach($pro_two as $n=>$m)
									<div class="col-md-2 net"><img src="./bootstrap/images/{{$m->sppro}}" width="135px" height="116px" alt=""></div>
									@endforeach
								</div>
						    </div>
					    </div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="container">
			<div class="col-md-4 col-md-offset-4 h2 text-center b_d">精选活动ACTIVITY</div>
		</div>
		
		<div class="container" style="padding: 0px;">
			@foreach($senr as $c=>$e)
			<div class="col-md-6 nmg">
				<img src="./bootstrap/images/{{$e->sppro}}" width="560px" height="280" alt="">
				<ul class="pull-left nmg_w">
					<li class="li_o h4"><b>{{$e->shoptitle}}</b></li>
					<li class="li_t">{{$e->shopcons}}</li>
					<li class="li_s">满<span>{{$e->manmany}}</span>赠<span>{{$e->zengmany}}</span></li>
				</ul>
				<img class="pull-right nmg_z" src="./bootstrap/images/{{$e->xiaopro}}" alt="">
			</div>
			@endforeach
		</div>
		
	</section>
	@include('layouts.foot')
</div>
</body>
</html>