@extends('admin.index')
@section('title')
<div class="title" >
	<h3>评价列表</h3>
</div>
@endsection
@section('content')
<div class="right" style="margin-top:50px;">
	<table class="table table-striped">
	<thead>
		<tr >
			<td style="border: 1px solid #999;">序号</td>
			<td style="border: 1px solid #999;">用户名</td>
			<td style="border: 1px solid #999;">标题</td>
			<td style="border: 1px solid #999;">内容</td>
			<td style="border: 1px solid #999;">头像</td>
			<td style="border: 1px solid #999;">操作</td>
		</tr>
	</thead>
	<tbody>
		@foreach($pjgl as $k=>$v)
		<tr >
			<td style="border: 1px solid #999;">{{$v->id}}</td>
			<td style="border: 1px solid #999;">{{$v->username}}</td>
			<td style="border: 1px solid #999;">{{$v->title}}</td>
			<td style="border: 1px solid #999;">{{$v->cons}}</td>
			<td style="border: 1px solid #999;"><img width="40" src="{{$v->toutu}}"></td>
			<td style="border: 1px solid #999;">
			<a href="/pjgl/{{$v->id}}/edit" class="btn-info btn-sm pull-left">修改</a>
			<form method="post" action="/pjgl/{{$v->id}}">
			{{method_field('DELETE')}}
			{{csrf_field()}}
			<button class="btn-danger btn-xs">删除</button>
			</form>
			</td>
		</tr>
		@endforeach

	</tbody>
	</table>
	<div class="text-right">
		{{ $pjgl->links() }}
	</div>
</div>
@endsection
