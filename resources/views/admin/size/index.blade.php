@extends('admin.index')
@section('title')
		<div class="title" >
			<h3>我的尺寸管理</h3>
		</div>
@endsection
@section('content')
	
	<div class="right" style="margin-top:50px;">
	<table class="table table-striped">
	<thead>
		<tr >
			<td style="border: 1px solid #999;"序号</td>
			<td style="border: 1px solid #999;">姓名</td>
			<td style="border: 1px solid #999;">性别</td>
			<td style="border: 1px solid #999;">身高</td>
			<td style="border: 1px solid #999;">体重</td>
			<td style="border: 1px solid #999;">肩宽</td>
			<td style="border: 1px solid #999;">胸围</td>
			<td style="border: 1px solid #999;">腰围</td>
			<td style="border: 1px solid #999;">臀围</td>
			<td style="border: 1px solid #999;">鞋码</td>
			<td style="border: 1px solid #999;">罩杯</td>
			<td style="border: 1px solid #999;">操作</td>
		</tr>
	</thead>
	<tbody>
	@foreach($size as $k=>$v)
		<tr >
			<td style="border: 1px solid #999;">{{$v->id}}</td>
			<td style="border: 1px solid #999;">{{$v->name}}</td>
			<td style="border: 1px solid #999;">{{$v->sex}}</td>
			<td style="border: 1px solid #999;">{{$v->height}}</td>
			<td style="border: 1px solid #999;">{{$v->weight}}</td>
			<td style="border: 1px solid #999;">{{$v->jiankuan}}</td>
			<td style="border: 1px solid #999;">{{$v->xiongwei}}</td>
			<td style="border: 1px solid #999;">{{$v->yaowei}}</td>
			<td style="border: 1px solid #999;">{{$v->tunwei}}</td>
			<td style="border: 1px solid #999;">{{$v->xiema}}</td>
			<td style="border: 1px solid #999;">{{$v->zhaobei}}</td>
			<td>
			<a href="/sizemana/{{$v->id}}/edit" class="btn-info btn-sm pull-right">修改</a>
			<form action="/sizemana/{{$v->id}}" method="post" class="del">
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