
<nav>
<div class="container">
	<div class="col-md-8 dao">
		<ul class="nav nav-pills">
			@foreach($nav as $k=>$v)
			<li role="presentation"><a href="{{$v->url}}">{{$v->navname}}</a></li>
			@endforeach
		</ul>
	</div>
	<div class="col-md-4 dao_t">
	..
	</div>
</div>
</nav>
<div class="clearfix"></div>
