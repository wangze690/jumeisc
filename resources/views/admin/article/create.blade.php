@extends('admin.index')
@section('title')
		<div class="title" >
			<h1>文章添加</h1>
		</div>
@endsection
@section('content')
	<div class="right" style="margin-top:50px;">
	<form class="form-horizontal" action="/article" method="post" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">Title</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="inputPassword3" placeholder="title" name="title">
	    </div>
	  </div>
	 <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">Content</label>
	    <div class="col-sm-5">
	    <textarea name="content" id="inputPassword3" cols="30" rows="10" class="form-control"></textarea>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">Photos</label>
	    <div class="col-sm-5">
	      <input type="file" class="form-control" id="inputPassword3" name="profile">
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
