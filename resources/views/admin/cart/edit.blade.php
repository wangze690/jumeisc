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
	<form class="form-horizontal" action="/cartmana/{{$carts->id}}" method="post" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">用户id</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$carts->user_id}}" name="user_id">
	    </div>
	  </div>
	 <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">商品id</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$carts->good_id}}" name="good_id">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">数量</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$carts->num}}" name="num">
	    </div>
	  </div>
	   <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">单价</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$carts->conts}}" name="conts">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">图片</label>
	    <div class="col-sm-5">
	      <img src="{{$carts->imgs}}" alt="">
	      <input type="file" class="form-control" id="inputPassword3" value="" name="imgs">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">描述</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$carts->cons}}" name="cons">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">现价</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$carts->goods_xj}}" name="goods_xj">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">原价</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$carts->goods_yj}}" name="goods_yj">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">规格</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$carts->guige}}" name="guige">
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
