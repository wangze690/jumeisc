@extends('admin.index')
@section('title')
		<div class="title" >
			<h3>轮播管理</h3>
		</div>
@endsection
<style type="text/css">
.xiugai{
	height: 30px;
	width: 100px;
	text-align: center;
	line-height: 60px;
}
.shanchu{
	height: 30px;
	width: 100px;
	text-align: center;
}


</style>
@section('content')
	<div class="right" style="margin-top:50px;">
	<table class="table table-striped">
	<thead>
		<tr style="text-align: center;">
			<td style="border: 1px solid #999;">id</td>
			<td style="border: 1px solid #999;">图片</td>
			<td style="border: 1px solid #999;">名称</td>
			<td style="border: 1px solid #999;">操作</td>
		</tr>
	</thead>
	<tbody>
	@foreach($mad as $k=>$v)
		<tr style="text-align: center;">
			<td style="border: 1px solid #999;">{{$v->id}}</td>
			<td style="border: 1px solid #999;"><img src="{{$v->url}}" alt="" width="40px;"></td>
			<td style="border: 1px solid #999;">{{$v->pid}}</td>
			<td style="border: 1px solid #999;">
			<a href="/lunbo/{{$v->id}}/edit" class="btn-info btn-xs pull-right xiugai">修改</a>

			<form action="/lunbo/{{$v->id}}" method="post" class="del">
			{{method_field('DELETE')}}
			{{csrf_field()}}
			<button class="btn-danger btn-xs pull-right shanchu">删除</button>
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
