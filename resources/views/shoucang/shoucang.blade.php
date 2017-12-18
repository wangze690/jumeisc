
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
					<p style="font-size: 14px; margin-left: 10px; margin-top:10px; ">您共收藏了<font color="red">{{$sl}}</font>个产品</p>
					<div style="border:1px solid #dbd6d0; height: auto;">

						@foreach($shoucang as $k=>$v)
						<div class="col-md-3" style="margin-top:10px; margin-bottom: 10px;">
							<img width="200" height="240" src="/img/{{$v->goods->profile}}">
							<div style="height: 40px;">{{$v->goods->shopcons}}</div>
							<div style="background: url(/img/31.jpg); height: 40px; width: 199px; margin-top:10px; color: #fff; font-size: 16px; font-weight: bold; line-height: 40px; ">￥{{$v->goods->shopxj}}</div>
							<form action="/qcshoucang/{{$v->id}}" method="post">
							{{csrf_field()}}
							<input type="submit" class="btn btn-info" value="取消收藏">
							</form>
						</div>
						<div class="col-md-1"></div>
						@endforeach

						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop


