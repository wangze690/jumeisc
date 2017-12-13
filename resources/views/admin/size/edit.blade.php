@extends('admin.index')
@section('title')
		<div class="title" >
			<h1>用户修改</h1>
		</div>
@endsection
@section('content')
		<link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
		<script src="/bootstrap/js/jquery.js"></script>
		<script src="/bootstrap/js/bootstrap.js"></script>
		<script src="/bootstrap/js/holder.min.js"></script>


<div class="right" style="margin-top:50px;">
	<form class="form-horizontal" action="/sizemana/{{$size->id}}" method="post" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">角色名称</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$size->name}}" name="name">
	    </div>
	  </div>
	 <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">性别</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$size->sex}}" name="sex">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">身高</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$size->height}}" name="height">
	    </div>
	  </div>
	   <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">体重</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$size->weight}}" name="weight">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">肩宽</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$size->jiankuan}}" name="jiankuan">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">胸围</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$size->xiongwei}}" name="xiongwei">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">腰围</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$size->yaowei}}" name="yaowei">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">臀围</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$size->tunwei}}" name="tunwei">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">鞋码</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$size->xiema}}" name="xiema">
	    </div>
	  </div>
	   <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">罩杯</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$size->zhaobei}}" name="zhaobei">
	    </div>
	  </div>
	  {{method_field('PUT')}}
	  {{csrf_field()}}
	  <div class="form-group">
	    <div class="col-sm-offset col-sm-8">
	      <button type="submit" class="btn btn-info">Sign in</button>
	    </div>
	  </div>
	</form>
	</div>
@endsection
