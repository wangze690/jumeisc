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
			<form class="form-horizontal" action="/user/{{$user->id}}" method="post" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">name</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$user->username}}" name="username">
	    </div>
	  </div>
	   <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">email</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" value="{{$user->email}}" name="email">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">photo</label>
	    <div class="col-sm-5">
	      <img src="{{$user->profile}}" alt="">
	      <input type="file" class="form-control" id="inputPassword3" name="profile">
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
