@extends('admin.index')
@section('title')
		<div class="title" >
			<h1>商品修改</h1>
		</div>
@endsection
@section('content')
		<link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
		<script src="/bootstrap/js/jquery.js"></script>
		<script src="/bootstrap/js/bootstrap.js"></script>
		<script src="/bootstrap/js/holder.min.js"></script>


	<div class="right" style="margin-top:50px;">
			<form class="form-horizontal" action="/spgli/{{$mk->id}}" method="post" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">商品名称</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$mk->shoptitle}}" name="shoptitle">
	    </div>
	  </div>
	   <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">商品介绍</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$mk->shopcons}}" name="shopcons">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">商品现价</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$mk->shopxj}}" name="shopxj">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">商品原价</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$mk->shopyj}}" name="shopyj">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">商品位置</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$mk->pid}}" name="pid">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">商品图片</label>
	    <div class="col-sm-5">
	      <img src="{{$mk->profile}}" width="100px" height="80px" alt="">
	      <input type="file" class="form-control" id="inputPassword3" name="profile">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">商品满价</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$mk->manmany}}" name="manmany">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">商品赠价</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$mk->zengmany}}" name="zengmany">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">商品大图</label>
	    <div class="col-sm-5">
	      <img src="{{$mk->sppro}}" width="100px" height="80px" alt="">
	      <input type="file" class="form-control" id="inputPassword3" name="sppro">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">商品小图</label>
	    <div class="col-sm-5">
	      <img src="{{$mk->xiaopro}}" width="100px" height="80px" alt="">
	      <input type="file" class="form-control" id="inputPassword3" name="xiaopro">
	    </div>
	  </div>
	  {{method_field('PUT')}}
	  {{csrf_field()}}
	  <div class="form-group">
	    <div class="col-sm-offset col-sm-8">
	      <button type="submit" class="btn btn-info">修改</button>
	    </div>
	  </div>

	</form>
	</div>
@endsection
