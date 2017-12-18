@extends('admin.index')
@section('title')
		<div class="title" >
			<h3>站点管理</h3>
		</div>
@endsection
@section('content')
	
	<div class="right" style="margin-top:50px;">
	<table class="table table-striped">
	<thead>
		<tr >
			<td style="border: 1px solid #999;">序号</td>
			<td style="border: 1px solid #999;">标题</td>
			<td style="border: 1px solid #999;">域名</td>
			<td style="border: 1px solid #999;">电话</td>
			<td style="border: 1px solid #999;">描述</td>
			<td style="border: 1px solid #999;">状态</td>
			<td style="border: 1px solid #999;">操作</td>
		</tr>
	</thead>
	<tbody>
	@foreach($zhandian as $k=>$v)
		<tr >
			<td style="border: 1px solid #999;">{{$v->id}}</td>
			<td style="border: 1px solid #999;">{{$v->title}}</td>
			<td style="border: 1px solid #999;">{{$v->yuming}}</td>
			<td style="border: 1px solid #999;">{{$v->tel}}</td>
			<td style="border: 1px solid #999;">{{$v->content}}</td>
			<td style="border: 1px solid #999;">{{$v->ztid}}</td>
			<td>
			<a href="/zhandian/{{$v->id}}/edit" class="btn-info btn-sm pull-right">修改</a>
			<form action="/zhandian/{{$v->id}}" method="post" class="del">
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