<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>收藏</title>
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
    	
    	<div class="container">
		<div class="col-md-9 sector">
			<h1>我的收藏</h1>
			<div class="col-md-11" style="height:40px; border:1px solid #EFE68B; line-height: 40px; background: #FEFFE5;">
				收藏心仪的产品或品牌，方便你随时找到它们，也有助于根据你的收藏给你更加贴心的推荐
			</div>
			<div class="col-md-11" style="margin-top: 10px;">
				<div style="border:1px solid #dbd6d0; height: 40px; width: 130px; line-height: 40px; text-align: center;" class="h4">我收藏的产品</div>
				<div style="border:1px solid #dbd6d0; padding: 5px; height: auto;">
					<p style="font-size: 14px; margin-left: 10px; margin-top:10px; ">您共收藏了<font color="red">{{$sl}}</font>个产品</p>
					<div style="border:1px solid #dbd6d0; height: auto;">

						@foreach($shoucang as $k=>$v)
						<div class="col-md-3" style="margin-top:10px; margin-bottom: 10px;">
							<img width="200" height="240" src="/img/{{$v->goods->profile}}">
							<div style="height: 40px;">{{$v->goods->shopcons}}</div>
							<div style="background: url(/img/31.jpg); height: 40px; width: 199px; margin-top:10px; color: #fff; font-size: 16px; font-weight: bold; line-height: 40px; ">￥{{$v->goods->shopxj}}</div>
							<form action="/qcshoucang/{{$v->id}}" method="post">
							{{csrf_field()}}
							<input type="submit" class="btn btn-info" value="取消收藏">
							</form>
						</div>
						<div class="col-md-1"></div>
						@endforeach

						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	            
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





