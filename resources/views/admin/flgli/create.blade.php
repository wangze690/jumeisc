@extends('admin.index')
@section('title')
		<div class="title" >
			<h1>分类添加</h1>
		</div>
@endsection
@section('content')
	<div class="right" style="margin-top:50px;">
	<form class="form-horizontal" action="/flgli" method="post" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">分类名称</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" placeholder="name" name="navname">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">父级分类</label>
	    <div class="col-sm-5">
	      <select class="form-control" name="pid">
			<option value="0">顶级分类</option>
			@foreach($flgl as $k => $v)
			<option value="{{$v->id}}">{{$v->navname}}</option>
			@endforeach
	      </select>
	    </div>
	  </div>
	  {{csrf_field()}}
	  <div class="form-group">
	    <div class="col-sm-offset col-sm-8">
	      <button type="submit" class="btn btn-info">Sign in</button>
	    </div>
	  </div>
	</form>
	</div>
@endsection
