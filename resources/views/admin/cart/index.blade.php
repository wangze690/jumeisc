@extends('admin.index')
@section('title')
		<div class="title" >
			<h3>购物车管理</h3>
		</div>
@endsection
@section('content')
	
	<div class="right" style="margin-top:50px;">
	<table class="table table-striped">
	<thead>
		<tr >
			<td style="border: 1px solid #999;">序号</td>
			<td style="border: 1px solid #999;">图片</td>
			<td style="border: 1px solid #999;">描述</td>
			<td style="border: 1px solid #999;">单价</td>
			<td style="border: 1px solid #999;">数量</td>
			<td style="border: 1px solid #999;">规格</td>
			<td style="border: 1px solid #999;">现价</td>
			<td style="border: 1px solid #999;">原价</td>
			<td style="border: 1px solid #999;">用户id</td>
			<td style="border: 1px solid #999;">商品id</td>
			<td style="border: 1px solid #999;">操作</td>
		</tr>
	</thead>
	<tbody>
	@foreach($carts as $k=>$v)
		<tr >
			<td style="border: 1px solid #999;">{{$v->id}}</td>
			<td style="border: 1px solid #999;"><img src="{{$v->imgs}}" alt=""></td>
			<td style="border: 1px solid #999;">{{$v->cons}}</td>
			<td style="border: 1px solid #999;">{{$v->conts}}</td>
			<td style="border: 1px solid #999;">{{$v->num}}</td>
			<td style="border: 1px solid #999;">{{$v->guige}}</td>
			<td style="border: 1px solid #999;">{{$v->goods_xj}}</td>
			<td style="border: 1px solid #999;">{{$v->goods_yj}}</td>
			<td style="border: 1px solid #999;">{{$v->user_id}}</td>
			<td style="border: 1px solid #999;">{{$v->good_id}}</td>
			<td>
			<a href="/cartmana/{{$v->id}}/edit" class="btn-info btn-sm pull-right">修改</a>
			<form action="/cartmana/{{$v->id}}" method="post" class="del">
			{{method_field('DELETE')}}
			{{csrf_field()}}
			<button class="btn-danger btn-xs pull-right">删除</button>
			</form>
			</td>
		</tr>
		@endforeach
		<nav style="position:absolute; top:1050px; right:80px;">
		  
		 
		</nav>
	</tbody>
	</table>
</div>
@endsection
@section('js')
	<script>
		$('.del').submit(function(){
			var res = confirm('您确定要删除这条数据吗?');
			if(!res)
			{
				return false;
			}
		})
	</script>
@endsection