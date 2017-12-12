@extends('admin.index')
@section('title')
		<div class="title" >
			<h3>文章管理</h3>
		</div>
		@endsection
@section('content')
	
	<div class="right" style="margin-top:50px;">
	<table class="table table-striped">
	<thead>
		<tr >
			<td style="border: 1px solid #999;">序号</td>
			<td style="border: 1px solid #999;">分类名称</td>
			<td style="border: 1px solid #999;">操作</td>
		</tr>
	</thead>
	<tbody>
	@foreach($cate as $k=>$v)
		<tr >
			<td style="border: 1px solid #999;">{{$v->id}}</td>
			<td style="border: 1px solid #999;">{{$v->name}}</td>
			<td style="border: 1px solid #999;">
			<a href="/article/{{$v->id}}/edit" class="btn-info btn-sm pull-right">修改</a>
			<form action="/cate/{{$v->id}}" method="post" class="del">
			{{method_field('DELETE')}}
			{{csrf_field()}}
			<button class="btn-danger btn-xs pull-right">删除</button>
			</form>
			</td>
		</tr>
		@endforeach
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