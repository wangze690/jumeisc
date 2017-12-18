@extends('admin.index')
@section('title')
		<div class="title" >
			<h3>分类列表</h3>
		</div>
		@endsection
@section('content')
	
	<div class="right" style="margin-top:50px;">
	<table class="table table-striped">
	<thead>
		<tr >
			<td style="border: 1px solid #999;">序号</td>
			<td style="border: 1px solid #999;">商品名称</td>
			<td style="border: 1px solid #999;">商品介绍</td>
			<td style="border: 1px solid #999;">商品现价</td>
			<td style="border: 1px solid #999;">商品原价</td>
			<td style="border: 1px solid #999;">商品图片</td>
			<td style="border: 1px solid #999; width: 150px;">操作</td>
		</tr>
	</thead>
	<tbody>
	@foreach($spsp as $k=>$v)
		<tr >
			<td style="border: 1px solid #999;">{{$v->id}}</td>
			<td style="border: 1px solid #999;">{{$v->shoptitle}}</td>
			<td style="border: 1px solid #999;">{{$v->shopcons}}</td>
			<td style="border: 1px solid #999;">{{$v->shopxj}}</td>
			<td style="border: 1px solid #999;">{{$v->shopyj}}</td>
			<td style="border: 1px solid #999;"><img src="/images/{{$v->profile}}" width="100" height="80" alt=""></td>
			<td style="border: 1px solid #999;">
			<a href="/spgli/{{$v->id}}/edit" class="btn-info btn-sm pull-left">修改</a>
			<form action="/spgli/{{$v->id}}" method="post" class="del">
			{{method_field('DELETE')}}
			{{csrf_field()}}
			<button class="btn-danger btn-sm pull-right">删除</button>
			</form>
			</td>
		</tr>
		@endforeach
	</tbody>
	</table>
	<div>
		{{$spsp->links()}}
	</div>
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