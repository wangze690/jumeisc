@extends('admin.index')
@section('title')
		<div class="title" >
			<h1>轮播添加</h1>
		</div>
@endsection
@section('content')
	<div class="right" style="margin-top:50px;">
	<form class="form-horizontal" action="/lunbo" method="post" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">位置</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" placeholder="显示位置" name="pid">
	    </div>
	  </div>
	 
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">Photos</label>
	    <div class="col-sm-5">
	      <input type="file" class="form-control" id="inputPassword3" name="url">
	    </div>
	  </div>
	  {{csrf_field()}}
	  <div class="form-group">
	    <div class="col-sm-offset col-sm-8">
	      <button type="submit" class="btn btn-info">提 交</button>
	    </div>
	  </div>
	</form>
	</div>
@endsection