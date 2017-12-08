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
		<div class="container">
			<div class="col-md-3 dr">
				<div class="ceb">
					<h3><b>全部分类</b></h3>
					<dl class="uzi">
						<dt>推荐品牌</dt>
						<dd class="pull-left"><a href="#">欧莱雅</a></dd>
						<dd class="pull-left"><a href="#">菲诗小铺</a></dd>
						<dd class="pull-left"><a href="#">雅诗兰黛</a></dd>
						<dd class="pull-left"><a href="#">兰蔻</a></dd>
						<dd class="pull-left"><a href="#">韩束</a></dd>
						<dd class="pull-left"><a href="#">倩碧</a></dd>
						<dd class="pull-left"><a href="#">雅顿</a></dd>
						<dd class="pull-left"><a href="#">佰草集</a></dd>
					</dl>
				</div>
				<div class="clearfix"></div>	
				<div class="ceb">
					<dl class="uzi">
						<dt>护肤</dt>
						<dd class="pull-left"><a href="#">洁面</a></dd>
						<dd class="pull-left"><a href="#">化妆水</a></dd>
						<dd class="pull-left"><a href="#">精华</a></dd>
						<dd class="pull-left"><a href="#">乳液</a></dd>
						<dd class="pull-left"><a href="#">面霜</a></dd>
						<dd class="pull-left"><a href="#">眼霜</a></dd>
						<dd class="pull-left"><a href="#">面膜</a></dd>
						<dd class="pull-left"><a href="#">护肤套装</a></dd>
					</dl>
				</div>
				<div class="clearfix"></div>	
				<div class="ceb">
					<dl class="uzi">
						<dt>彩妆</dt>
						<dd class="pull-left"><a href="#">卸妆</a></dd>
						<dd class="pull-left"><a href="#">防晒</a></dd>
						<dd class="pull-left"><a href="#">BB霜</a></dd>
						<dd class="pull-left"><a href="#">粉饼</a></dd>
						<dd class="pull-left"><a href="#">眼影</a></dd>
						<dd class="pull-left"><a href="#">睫毛膏</a></dd>
						<dd class="pull-left"><a href="#">唇彩</a></dd>
						<dd class="pull-left"><a href="#">腮红</a></dd>
						<dd class="pull-left"><a href="#">彩妆套装</a></dd>
					</dl>
				</div>
				<div class="clearfix"></div>	
				<div class="ceb">
					<dl class="uzi">
						<dt>香氛</dt>
						<dd class="pull-left"><a href="#">女士香水</a></dd>
						<dd class="pull-left"><a href="#">男士香水</a></dd>
						<dd class="pull-left"><a href="#">中性香水</a></dd>
						<dd class="pull-left"><a href="#">Q版香水</a></dd>
						<dd class="pull-left"><a href="#">香水套装</a></dd>
					</dl>
				</div>
				<div class="clearfix"></div>	
				<div class="ceb">
					<dl class="uzi">
						<dt>个人护理</dt>
						<dd class="pull-left"><a href="#">洗发</a></dd>
						<dd class="pull-left"><a href="#">护法</a></dd>
						<dd class="pull-left"><a href="#">沐浴</a></dd>
						<dd class="pull-left"><a href="#">润肤乳</a></dd>
						<dd class="pull-left"><a href="#">牙膏</a></dd>
						<dd class="pull-left"><a href="#">发膜</a></dd>
						<dd class="pull-left"><a href="#">脱毛</a></dd>
						<dd class="pull-left"><a href="#">护理套装</a></dd>
					</dl>
				</div>
				<div class="clearfix"></div>	
				<div class="ceb">
					<dl class="uzi">
						<dt>男士专区</dt>
						<dd class="pull-left"><a href="#">洁面</a></dd>
						<dd class="pull-left"><a href="#">爽肤水</a></dd>
						<dd class="pull-left"><a href="#">乳液</a></dd>
						<dd class="pull-left"><a href="#">面霜</a></dd>
						<dd class="pull-left"><a href="#">精华</a></dd>
						<dd class="pull-left"><a href="#">洗发</a></dd>
						<dd class="pull-left"><a href="#">沐浴</a></dd>
						<dd class="pull-left"><a href="#">男香</a></dd>
					</dl>
				</div>
				<div class="clearfix"></div>	
				<div class="ceb">
					<dl class="uzi">
						<dt>奢品美妆</dt>
						<dd class="pull-left"><a href="#">雅诗兰黛</a></dd>
						<dd class="pull-left"><a href="#">奥迪</a></dd>
						<dd class="pull-left"><a href="#">海澜之谜</a></dd>
						<dd class="pull-left"><a href="#">希思黎</a></dd>
					</dl>
				</div>
				<div class="clearfix"></div>
				<div class="ce_tu">
					<img src="./bootstrap/images/20.jpg" width="265px" height="160px" alt="">
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
						    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">推荐商品</a></li>
						    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">推荐商品</a></li>
						    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">推荐商品</a></li>
						    <li role="presentation"><a href="#diwuge" aria-controls="diwuge" role="tab" data-toggle="tab">推荐商品</a></li>
					    </ul>

					  <!-- Tab panes -->
					  	<div class="tab-content">
						    <div role="tabpanel" class="tab-pane active" id="home">
						    	<div class="oe">
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-4 net"><img src="holder.js/100px120" alt=""></div>

									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-4 net"><img src="holder.js/100px120" alt=""></div>

									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-4 net"><img src="holder.js/100px120" alt=""></div>
								</div>
						    </div>
						    <div role="tabpanel" class="tab-pane" id="profile">
								<div class="oe">
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-4 net"><img src="holder.js/100px120" alt=""></div>

									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-4 net"><img src="holder.js/100px120" alt=""></div>

									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-4 net"><img src="holder.js/100px120" alt=""></div>
								</div>
						    </div>
						    <div role="tabpanel" class="tab-pane" id="messages">
								<div class="oe">
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-4 net"><img src="holder.js/100px120" alt=""></div>

									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-4 net"><img src="holder.js/100px120" alt=""></div>

									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-4 net"><img src="holder.js/100px120" alt=""></div>
								</div>
						    </div>
						    <div role="tabpanel" class="tab-pane" id="settings">
								<div class="oe">
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-4 net"><img src="holder.js/100px120" alt=""></div>

									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-4 net"><img src="holder.js/100px120" alt=""></div>

									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-4 net"><img src="holder.js/100px120" alt=""></div>
								</div>
						    </div>
						    <div role="tabpanel" class="tab-pane" id="diwuge">
								<div class="oe">
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-4 net"><img src="holder.js/100px120" alt=""></div>

									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-4 net"><img src="holder.js/100px120" alt=""></div>

									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-2 net"><img src="holder.js/100px120" alt=""></div>
									<div class="col-md-4 net"><img src="holder.js/100px120" alt=""></div>
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
		<div class="container">
			<div class="col-md-6 nmg">
				<img src="holder.js/100px280" alt="">
				<ul class="pull-left nmg_w">
					<li class="li_o h4"><b>自然堂旗舰店</b></li>
					<li class="li_t">你本来就很美</li>
					<li class="li_s">满<span>199</span>赠<span>199</span></li>
				</ul>
				<img class="pull-right nmg_z" src="holder.js/100x100" alt="">
			</div>
			<div class="col-md-6 nmgs">
				<img src="holder.js/100px280" alt="">
				<ul class="pull-left nmg_w">
					<li class="li_o h4"><b>自然堂旗舰店</b></li>
					<li class="li_t">你本来就很美</li>
					<li class="li_s">满<span>199</span>赠<span>199</span></li>
				</ul>
				<img class="pull-right nmg_z" src="holder.js/100x100" alt="">
			</div>
		</div>
		<div class="container">
			<div class="col-md-6 nmg">
				<img src="holder.js/100px280" alt="">
				<ul class="pull-left nmg_w">
					<li class="li_o h4"><b>自然堂旗舰店</b></li>
					<li class="li_t">你本来就很美</li>
					<li class="li_s">满<span>199</span>赠<span>199</span></li>
				</ul>
				<img class="pull-right nmg_z" src="holder.js/100x100" alt="">
			</div>
			<div class="col-md-6 nmgs">
				<img src="holder.js/100px280" alt="">
				<ul class="pull-left nmg_w">
					<li class="li_o h4"><b>自然堂旗舰店</b></li>
					<li class="li_t">你本来就很美</li>
					<li class="li_s">满<span>199</span>赠<span>199</span></li>
				</ul>
				<img class="pull-right nmg_z" src="holder.js/100x100" alt="">
			</div>
		</div>
		<div class="container">
			<div class="col-md-6 nmg">
				<img src="holder.js/100px280" alt="">
				<ul class="pull-left nmg_w">
					<li class="li_o h4"><b>自然堂旗舰店</b></li>
					<li class="li_t">你本来就很美</li>
					<li class="li_s">满<span>199</span>赠<span>199</span></li>
				</ul>
				<img class="pull-right nmg_z" src="holder.js/100x100" alt="">
			</div>
			<div class="col-md-6 nmgs">
				<img src="holder.js/100px280" alt="">
				<ul class="pull-left nmg_w">
					<li class="li_o h4"><b>自然堂旗舰店</b></li>
					<li class="li_t">你本来就很美</li>
					<li class="li_s">满<span>199</span>赠<span>199</span></li>
				</ul>
				<img class="pull-right nmg_z" src="holder.js/100x100" alt="">
			</div>
		</div>
		<div class="container">
			<div class="col-md-6 nmg">
				<img src="holder.js/100px280" alt="">
				<ul class="pull-left nmg_w">
					<li class="li_o h4"><b>自然堂旗舰店</b></li>
					<li class="li_t">你本来就很美</li>
					<li class="li_s">满<span>199</span>赠<span>199</span></li>
				</ul>
				<img class="pull-right nmg_z" src="holder.js/100x100" alt="">
			</div>
			<div class="col-md-6 nmgs">
				<img src="holder.js/100px280" alt="">
				<ul class="pull-left nmg_w">
					<li class="li_o h4"><b>自然堂旗舰店</b></li>
					<li class="li_t">你本来就很美</li>
					<li class="li_s">满<span>199</span>赠<span>199</span></li>
				</ul>
				<img class="pull-right nmg_z" src="holder.js/100x100" alt="">
			</div>
		</div>
		<div class="container">
			<div class="col-md-6 nmg">
				<img src="holder.js/100px280" alt="">
				<ul class="pull-left nmg_w">
					<li class="li_o h4"><b>自然堂旗舰店</b></li>
					<li class="li_t">你本来就很美</li>
					<li class="li_s">满<span>199</span>赠<span>199</span></li>
				</ul>
				<img class="pull-right nmg_z" src="holder.js/100x100" alt="">
			</div>
			<div class="col-md-6 nmgs">
				<img src="holder.js/100px280" alt="">
				<ul class="pull-left nmg_w">
					<li class="li_o h4"><b>自然堂旗舰店</b></li>
					<li class="li_t">你本来就很美</li>
					<li class="li_s">满<span>199</span>赠<span>199</span></li>
				</ul>
				<img class="pull-right nmg_z" src="holder.js/100x100" alt="">
			</div>
		</div>
	</section>
	@include('layouts.foot')
</div>
</body>
</html>