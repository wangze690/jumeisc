@extends('grzx.add')

@section('title')
<title>收藏</title>
@stop

@section('conter')
	<div class="container">
		<div class="col-md-9 sector">
			<h1>我的收藏</h1>
			<div class="col-md-11" style="height:40px; border:1px solid #EFE68B; line-height: 40px; background: #FEFFE5;">
				收藏心仪的产品或品牌，方便你随时找到它们，也有助于根据你的收藏给你更加贴心的推荐
			</div>
			<div class="col-md-11" style="margin-top: 10px;">
				<div style="border:1px solid #dbd6d0; height: 40px; width: 130px; line-height: 40px; text-align: center;" class="h4">我收藏的产品</div>
				<div style="border:1px solid #dbd6d0; padding: 5px; height: auto;">
					<p style="font-size: 14px; margin-left: 10px; margin-top:10px; ">您共收藏了<font color="red">1</font>个产品</p>
					<div style="border:1px solid #dbd6d0; height: auto;">
						<div class="col-md-3" style="margin-top:10px; margin-bottom: 10px;">
							<a href="/xiangqing">
								<img width="200" height="240" src="/img/30.jpg">
							</a>
							<a href="/xiangqing">片仔癀皇后牌珍珠膏20g</a>
							<div style="background: url(/img/31.jpg); height: 40px; width: 199px; margin-top:10px; color: #fff; font-size: 16px; font-weight: bold; line-height: 40px; ">￥56.0</div>
							<a href="/shoucang">取消收藏</a>
						</div>
						<div class="col-md-1"></div>

						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

