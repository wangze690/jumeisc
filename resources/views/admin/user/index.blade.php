@extends('admin.index')
@section('title')
		<div class="title" >
			<h3>用户管理</h3>
		</div>
		@endsection
@section('content')
	
	<div class="right" style="margin-top:50px;">
	<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
			<form action="/user">
		        <div class="row">
		            <div class="col-sm-3">
		                <div class="dataTables_length" id="dataTables-example_length">
		                    <label>每页显示
		                        <select name="num" aria-controls="dataTables-example" class="form-control input-sm">
		                            <option value="10" @if($num == 10) selected @endif>10</option>
		                            <option value="25" @if($num == 25) selected @endif>25</option>
		                            <option value="50" @if($num == 50) selected @endif>50</option>
		                            <option value="100" @if($num == 100) selected @endif>100</option>
		                        </select> 条</label>
		                </div>
		            </div>
		            <div class="col-sm-9 text-right">
		                <div id="dataTables-example_filter" class="dataTables_filter">
		                    <label>关键字:
		                        <input type="search"  name="keywords" class="form-control input-sm" />
		                        &nbsp;<button type="submit" class="btn btn-sm btn-info">搜索</button>
		                    </label>
		                </div>
		            </div>
		        </div>
		    </form>
	<table class="table table-striped">
	<thead>
		<tr >
			<td style="border: 1px solid #999;">id</td>
			<td style="border: 1px solid #999;">phone</td>
			<td style="border: 1px solid #999;">头像</td>
			<td style="border: 1px solid #999;">操作</td>
		</tr>
	</thead>
	<tbody>
	@foreach($users as $k=>$v)
		<tr >
			<td style="border: 1px solid #999;">{{$v->id}}</td>
			<td style="border: 1px solid #999;">{{$v->phone}}</td>
			<td style="border: 1px solid #999;"><img src="{{$v->touxiang}}" style="width: 30px;height: 30px;"></td>
			<td style="border: 1px solid #999;">
			<a href="/user/{{$v->id}}/edit" class="btn-info btn-sm pull-right">修改</a>
			<form action="/user/{{$v->id}}" method="post" class="del">
			{{method_field('DELETE')}}
			{{csrf_field()}}
			<button class="btn-danger btn-xs pull-right">删除</button>
			</form>
			</td>
		</tr>
		@endforeach
	</tbody>
	</table>
	<div class="row">
	    <div class="col-lg-12 text-right">
	        <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">{{ $users->appends(['num'=>$num, 'keywords'=>$keywords])->links() }}
	            
	        </div>
	    </div>
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