<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CSS3动态背景登录框代码</title>

<link rel="stylesheet" type="text/css" href="/adminstor/css/styles.css">

</head>
<body>

@if(session('msg'))
		<div class="alert alert-warning alert-dismissible" role="alert ">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		{{session('msg')}}
		</div>
	 @endif
<div class="wrapper">
	
	<div class="container">
		<h1>MOOC 后台管理</h1>
		<form class="form" action="/admin/login" method="post">
			<input type="text" placeholder="Username" name="username">
			<input type="password" placeholder="Password" name="password"><br>
			<button type="submit" id="login-button"><strong>登陆</strong></button>
			{{csrf_field()}}
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		
	</ul>
	
</div>



</body>
</html>