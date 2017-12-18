@extends('admin.index')
@section('title')
<div class="title" >
	<h1>评价修改</h1>
</div>
@endsection
@section('content')
<div class="right" style="margin-top:50px;">
	<form class="form-horizontal" action="/pjgl/{{$xgpj->id}}" method="post" enctype="multipart/form-data">
	  	<div class="form-group">
	    	<label for="inputPassword3" class="col-sm-2 control-label">用户名</label>
	    	<div class="col-sm-5">
	      		<input type="text" class="form-control" id="inputPassword3" value="{{$xgpj->username}}" name="username">
	   	 	</div>
	  	</div>
	  	<div class="form-group">
	    	<label for="inputPassword3" class="col-sm-2 control-label">标题</label>
	    	<div class="col-sm-5">
	      		<input type="text" class="form-control" id="inputPassword3" value="{{$xgpj->title}}" name="title">
	   		</div>
	  	</div>
	  	<div class="form-group">
	    	<label for="inputPassword3" class="col-sm-2 control-label">内容</label>
	    	<div class="col-sm-5">
	      		<textarea class="form-control" name="cons">{{$xgpj->cons}}</textarea>
	    	</div>
	  	</div>
	  	<img height="100" src="{{$xgpj->toutu}}" alt="">
	  	<div class="form-group">
	    	<label for="inputPassword3" class="col-sm-2 control-label">头像</label>
	    	<div class="col-sm-5">
	      		<input type="file" class="form-control" id="inputPassword3" name="toutu">
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