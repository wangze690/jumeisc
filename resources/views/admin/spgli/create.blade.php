@extends('admin.index')
@section('title')
		<div class="title" >
			<h1>文章添加</h1>
		</div>
@endsection
@section('content')
	<div class="right" style="margin-top:50px;">
	<form class="form-horizontal" action="/spgli" method="post" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">商品名称</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" name="shoptitle">
	    </div>
	  </div>
	 <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">商品介绍</label>
	    <div class="col-sm-5">
	    <textarea name="shopcons" id="inputPassword3" cols="30" rows="10" class="form-control"></textarea>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">商品位置</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" name="pid">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">商品现价</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" name="shopxj">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">商品原价</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" name="shopyj">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">商品图片</label>
	    <div class="col-sm-5">
	      <input type="file" class="form-control" id="inputPassword3" name="profile">
	    </div>
	  </div>
	  {{csrf_field()}}
	  <div class="form-group">
	    <div class="col-sm-offset col-sm-8">
	      <button type="submit" class="btn btn-info" style="width: 100px;">添加</button>
	    </div>
	  </div>
	</form>
	</div>
@endsection