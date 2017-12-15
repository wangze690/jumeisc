<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人中心</title>
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="./bootstrap/css/nav.css">
	<link rel="stylesheet" href="./bootstrap/css/toubu.css">
	<link rel="stylesheet" href="./bootstrap/css/sousuo.css">
	<link rel="stylesheet" href="./css/add.css">
	<link rel="stylesheet" href="./css/user.css">
	<script src="./bootstrap/js/jquery.js"></script>
	<script src="./bootstrap/js/bootstrap.js"></script>
	<script src="./bootstrap/js/holder.min.js"></script>
</head>
<body>
	
	<!-- 头部开始 -->
	
	<!-- 头部结束 -->
	@include('layouts.toubu')
	@include('layouts.sousuo')
	@include('layouts.nav')
<div class="alls" style="width: auto;height:1400px; background: #EDE7E1; margin-top:-20px;"> 
<div class="profile">
	<div class="container center">
		<div class="col-md-4 nav">
			<div class="notice">
				<div class="pull-left">
					<img src="./img/0.png" alt="" style="width: 48px;height: 48px;">
	        	</div>
	        	<div class="pull-right">
	        		<p style="line-height: 20px;color: #"><a href="#">那个女孩</a></p>
	        		<p><a href="#">普通用户</a></p>
	        	</div>
	        	<p class="uid">用户ID: 191393426</p>
	        </div>
	        <div class="container section">
	        <ul>
		        <h2>我的聚美优品<b></b></h2>
		       	<li><span class="glyphicon glyphicon-list" aria-hidden="true"></span>我的订单</li>
		        <li><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>我的心愿单</li>
		        <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span><a href="/shoucang">我的收藏</a></li>
		        <li><span class="glyphicon glyphicon-road" aria-hidden="true"></span>我的会员等级</li>
		        <li><span class="glyphicon glyphicon-tag" aria-hidden="true"></span>我的现金劵</li>
		        <li><span class="glyphicon glyphicon-yen" aria-hidden="true"></span>我的红包</li>
		        <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span>我的金币</li>
		        <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span>我的尺码</li>
		        <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span>订阅邮件短信</li>
		        <h2>管理个人账户<b></b></h2>
		        <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span>我的现金劵</li>
		        <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span>我的红包</li>
		        <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span>我的金币</li>
		        <li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><a href="/grzx">设置账户信息</a></li>
		        <h2>售后服务<b></b></h2>
		        <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span>我的现金劵</li>
		        <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span>我的红包</li>
		        <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span>我的金币</li>
		        <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span>我的尺码</li>
		        <h2>聚美惊喜<b></b></h2>
		        <li><span class="glyphicon glyphicon-gift" aria-hidden="true"></span>我的喜从盒来</li>
		        </ul>
	        </div>
    	</div>
    	
    	@section('conter')
		 <div class="container">
				<div class="col-md-10 sector">
					<h1>管理收货地址</h1>
					<h3 style="font-size:16px;font-weight:700;">新增收货地址</h3>
					<div class="col-md-6 col-md-offset-1">
	                	<form class="form-horizontal" method="post" action="/grzxss">
						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-2 control-label">* 姓名</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="inputEmail3" name="name"> 
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-2 control-label">* 手机号</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="inputEmail3" name="phone">
						    </div>
						  </div>
						  
						  <div class="form-group">
		                 	<label for="inputPassword3" class="col-sm-2 control-label">* 收货地址</label>
		                    <div class='col-md-4'>
	                        <select name="province" id="" class="form-control ">
	                            <option value="">请选择</option>
	                        </select>
	                      </div>

	                    <div class='col-md-3'>
	                        <select name="city" id="" class="form-control ">
	                            <option value="">请选择</option>
	                        </select>
	                    </div>
	                    <div class='col-md-3'>
	                        <select name="xian" id="" class="form-control ">
	                            <option value="">请选择</option>
	                        </select>
	                    </div>
		            </div>      
		                  <div class="form-group">
		                    <label for="exampleInputEmail1" class="col-sm-2 control-label">详细地址</label>
		                    <textarea name="detail"></textarea>
		                  </div>
		                  <div class="checkbox">
		                    <label>
		                      <input type="checkbox" value="1" name="is_default"> 是否为默认收货地址
		                    </label>
		                  </div>
		                   {{csrf_field()}}
		                  <div class="container">
							<button type="submit" class="btn" style="background: #EE1658;color: #fff;">保存收货地址</button>
						  </div>
					<div class='col-md-12 dizhi'>
							<h3 style="font-size:16px;font-weight:700;">已保存的地址</h3>
							<div class="row" style="background:#F9F8F7; border: 1px solid #ccc;">
							  <div class="col-xs-6 col-md-2">收货人</div>
							  <div class="col-xs-6 col-md-6">地址</div>
							  <div class="col-xs-6 col-md-2">电话号</div>				  
							  <div class="col-xs-6 col-md-2">操作</div>
							</div>
							@foreach($shouhuodz as $k=>$v)
							<div class="row rows" style="background:#fff;border: 1px solid #ccc;">
							  <div class="col-xs-6 col-md-2">{{$v->name}}</div>
							  <div class="col-xs-6 col-md-6">{{$v->pname}}{{$v->cname}}{{$v->xname}}{{$v->detail}}</div>
							  <div class="col-xs-6 col-md-2">{{$v->phone}}</div>
							  <button class="col-xs-6 col-md-2 del" cid="{{$v->id}}" type="button" style="color:#fff;background:#999;margin-top: 5px;margin-left: 15px;height: 30px;width: 90px;">&nbsp;删除</button>

							</div>
							 @endforeach
						</div>
					</form>
				</div>
	            </div>
	    @show

	            
		</div>			
	</div>	
</div>	
</div>	                  
                
<script>
function init() {
    //
    $.ajax({
        type:'get',
        url: '/getarea',
        dataType:'json',
        data: {pid:0},
        success: function(data){
            for(var i=0;i<data.length;i++){
                var option = $('<option value="'+data[i].id+'">'+data[i].area_name+'</option>')
                //将option插入到省的select中
                $('select[name=province]').append(option);
            }
        }
    })
}
init();

$('select[name=province]').change(function(){
    $('select[name=city]').html('<option value="">请选择</option>')
    //获取当前省的id
    var id = $(this).val();
    //发送ajax获取当前省所对应的市的信息
    $.ajax({
        type:'get',
        url: '/getarea',
        dataType:'json',
        data: {pid:id},
        success: function(data){
            for(var i=0;i<data.length;i++){
                var option = $('<option value="'+data[i].id+'">'+data[i].area_name+'</option>')
                //将option插入到省的select中
                $('select[name=city]').append(option);
            }
        }
    })
});

$('select[name=city]').change(function(){
    $('select[name=xian]').html('<option value="">请选择</option>')
    //获取当前省的id
    var id = $(this).val();
    //发送ajax获取当前省所对应的市的信息
    $.ajax({
        type:'get',
        url: '/getarea',
        dataType:'json',
        data: {pid:id},
        success: function(data){
            for(var i=0;i<data.length;i++){
                var option = $('<option value="'+data[i].id+'">'+data[i].area_name+'</option>')
                //将option插入到省的select中
                $('select[name=xian]').append(option);
            }
        }
    })
});

</script>
<script src="/js/jquery.js"></script>
<script>
 $del = $('.del').click(function(){
	var id = $(this).attr('cid');
	var tr = $(this).parents('.rows');
	$.ajax({
		type:'get',
		url:'/delete',
		data:{'id':id},
		success:function(data)
		{
			if(data == 1)
			{
				tr.fadeOut(1000);
			}
		}
	})
});
</script>



	</div>
		
</div>
</div>
@include('layouts.foot')
</body>
</html>