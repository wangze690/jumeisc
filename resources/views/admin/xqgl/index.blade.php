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
			<td style="border: 1px solid #999; width: 100px;">序号</td>
			<td style="border: 1px solid #999; width: 100px;">商品ID</td>
			<td style="border: 1px solid #999; width: 100px;">出产地(图)</td>
			<td style="border: 1px solid #999; width: 100px;">出产地(中文)</td>
			<td style="border: 1px solid #999; width: 100px;">出产地(英文)</td>
			<td style="border: 1px solid #999; width: 100px;">商品信息</td>
			<td style="border: 1px solid #999; width: 100px;">商品详情</td>
			<td style="border: 1px solid #999; width: 100px;">使用方法</td>
			<td style="border: 1px solid #999; width: 100px;">商品实拍</td>
			<td style="border: 1px solid #999; width: 100px;">关于聚美极速免税店</td>
			<td style="border: 1px solid #999; width: 100px;">操作</td>
		</tr>
	</thead>
	<tbody>
		@foreach($xqgl as $k=>$v)
		<tr >
			<td style="border: 1px solid #999; width: 100px;">{{$v->id}}</td>
			<td style="border: 1px solid #999; width: 100px;">{{$v->sp_id}}</td>
			<td style="border: 1px solid #999; width: 100px;"><img width="40" src="{{$v->from_1}}"></td>
			<td style="border: 1px solid #999; width: 100px;">{{$v->from_2}}</td>
			<td style="border: 1px solid #999; width: 100px;">{{$v->from_3}}</td>
			<td style="border: 1px solid #999; width: 100px;">{!!$v->xinxi!!}</td>
			<td style="border: 1px solid #999; width: 100px;">{!!$v->xiangqing!!}</td>
			<td style="border: 1px solid #999; width: 100px;">{!!$v->fangfa!!}</td>
			<td style="border: 1px solid #999; width: 100px;">{!!$v->shipai!!}</td>
			<td style="border: 1px solid #999; width: 100px;">{!!$v->jisu!!}</td>
			<td style="border: 1px solid #999; width: 100px;">
			<a href="/xqgl/{{$v->id}}/edit" class="btn-info btn-sm pull-left">修改</a>
			<form method="post" action="/xqgl/{{$v->id}}">
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
		{{ $xqgl->links() }}
	</div>
</div>
@endsection