@extends('admin.index')
@section('title')
		<div class="title" >
			<h1>用户添加</h1>
		</div>
@endsection
@section('content')
	<div class="right" style="margin-top:50px;">
	<form class="form-horizontal" action="/user" method="post" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">phone</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" placeholder="phone" name="phone">
	    </div>
	  </div>
	 <div class="form-group" style="margin-top:20px; ">
	    <label for="inputPassword3" class="col-sm-2 control-label">profile</label>
	    <input type="file" class="inputPassword3" name="touxiang">
	      <input type="text" class="form-control" id="inputPassword3" placeholder="name" name="username">
	    </div>
	  </div>
	 <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
	    <div class="col-sm-5">
	      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">repassword</label>
	    <div class="col-sm-5">
	      <input type="password" class="form-control" id="inputPassword3" placeholder="repassword">
	    </div>
	  </div>
	   <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">email</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" placeholder="email" name="email">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">file</label>
	    <div class="col-sm-5">
	      <input type="file" class="form-control" id="inputPassword3" name="profile">
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
