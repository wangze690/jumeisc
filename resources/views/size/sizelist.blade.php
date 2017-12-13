@include('layouts.personpublic')
@section('title')
	<title>尺码信息</title>
@endsection

@section('content')
<!-- 主体开始 -->
<style>

	.chue{
		line-height: 50px;
	}
	.down{
		border-left: 1px solid #ccc;
		border-bottom: 1px solid #ccc;
		height:80px;
		text-align: center;
		line-height: 80px;
	}
	.line{
		line-height: 50px;
		text-align: right;
	}
	.text{
		line-height: 30px;
		text-align: left;
		margin-top:17px;
		width: 150px;
	}
	.inpu{
		width: 60px;
	}
</style>
		<div class="col-md-8 div_1" style="height:auto;position: relative;top:30px;left: 50px;background-color: #fff;">
			<div class="col-md-12" style="height: 50px;border-bottom: 1px solid #ccc;">
				<p style="font-size: 20px;margin-top:10px;">尺寸信息</p>
			</div>
			<div class="col-md-12" style="height:1200px;">
				<div class="col-md-2" style="height:50px;border-left: 1px solid #ccc;border-top: 1px solid #ccc;border-right: 1px solid #ccc; margin-top:20px;text-align: center;line-height: 50px;">
					<p style="color:#ed145b; ">尺码信息</p>
				</div>
				<div class="col-md-2" style="height:50px;border-top: 1px solid #ccc;border-bottom: 1px solid #ccc;border-right: 1px solid #ccc; margin-top:20px;text-align: center;line-height: 50px;background-color: #f8f6f4;">
					<p>测量帮助</p>
				</div>
				<div class="col-md-8" style="height:50px;border-bottom: 1px solid #ccc; margin-top:20px;">
				</div>
				<div class="col-md-12" style="height:1000px;border-bottom: 1px solid #ccc;border-left: 1px solid #ccc;border-right: 1px solid #ccc; ">
					<div class="col-md-12" style="height:50px; background-color: #eee;margin-top:20px;">
						<p class="col-md-2 chue">角色名称</p>
						<p class="col-md-1 chue">性别</p>
						<p class="col-md-1 chue">身高</p>
						<p class="col-md-1 chue">体重</p>
						<p class="col-md-1 chue">肩宽</p>
						<p class="col-md-1 chue">胸围</p>
						<p class="col-md-1 chue">腰围</p>
						<p class="col-md-1 chue">臀围</p>
						<p class="col-md-1 chue">鞋码</p>
						<p class="col-md-1 chue">罩杯</p>
						<p class="col-md-1 chue">操作</p>
					</div>
				@foreach($size as $k=>$v)
					<ul class="list">
						<li class="col-md-2 down">{{$v->name}}</li>
						<li class="col-md-1 down">{{$v->sex}}</li>
						<li class="col-md-1 down">{{$v->height}}</li>
						<li class="col-md-1 down">{{$v->weight}}</li>
						<li class="col-md-1 down">{{$v->jiankuan}}</li>
						<li class="col-md-1 down">{{$v->xiongwei}}</li>
						<li class="col-md-1 down">{{$v->yaowei}}</li>
						<li class="col-md-1 down">{{$v->tunwei}}</li>
						<li class="col-md-1 down">{{$v->xiema}}</li>
						<li class="col-md-1 down">{{$v->zhaobei}}</li>
						<li class="col-md-1 down">
							<button class="btn btn-info del" cid="{{$v->id}}" type="button">
								删除
							</button>
						</li>
					</ul>
				@endforeach
					<div class="col-md-12" style="height: 500px;margin-top:30px;">
						<ul class="col-md-2" style="height:400px;">
							<li class="line">角色名称 :</li>
							<li class="line">性别 :</li>
							<li class="line">身高 :</li>
							<li class="line">体重 :</li>
							<li class="line">肩宽 :</li>
							<li class="line">胸围 :</li>
							<li class="line">腰围 :</li>
							<li class="line">臀围 :</li>
							<li class="line">鞋码 :</li>
							<li class="line">罩杯 :</li>
						</ul>
					<form action="/jumei/sizelist" method="post">
						<ul class="col-md-3" style="height:400px;">
							<li class="text"><input type="text" name="name"></li>
							<li class="text">
								<input type="radio" value="0" name="sex">男
								<input type="radio" value="1" name="sex">女
							</li>
							<li class="text">
								<input type="text" class="inpu" name="height">   cm
							</li>
							<li class="text">
								<input type="text" class="inpu" name="weight">   kg
							</li>
							<li class="text">
								<input type="text" class="inpu" name="jiankuan">   cm
							</li>
							<li class="text">
								<input type="text" class="inpu" name="xiongwei">   cm
							</li>
							<li class="text">
								<input type="text" class="inpu" name="yaowei">   cm
							</li>
							<li class="text">
								<input type="text" class="inpu" name="tunwei">   cm
							</li>
							<li class="text">
								<input type="text" class="inpu" name="xiema">   例如：36码
							</li>
							<li class="text">
								<input type="text" class="inpu" name="zhaobei">   例如：80A
							</li>
							{{csrf_field()}}
							<li class="text" style="margin-top:30px;">
								<button class="btn btn-default" type="submit">保存</button>
								<button class="btn btn-default btn-info">取消</button>
							</li>
						</ul>
					</form>
						<p class="col-md-5" style="margin-top:80px;margin-left:-70px;">
							<img src="/images/pic.jpg" alt="">
						</p>
						
					</div>
				</div>
			</div>
				
		</div>
 	</section>
<!-- 主体结束 -->
@include('layouts.foot')
<script src="/js/jquery.js"></script>
<script>
 $del = $('.del').click(function(){
	var cid = $(this).attr('cid');
	var tr = $(this).parents('.list');
	$.ajax({
		type:'get',
		url:'/sizelist/delete',
		data:{'cid':cid},
		success:function(data)
		{
			console.log(data);
			if(data == '1')
			{
				tr.fadeOut(1000);
			}
		}
	})
});
</script>