<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人中心</title>
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="./bootstrap/css/nav.css">
	<link rel="stylesheet" href="./bootstrap/css/toubu.css">
	<link rel="stylesheet" href="./bootstrap/css/sousuo.css">
	<link rel="stylesheet" href="./bootstrap/css/foot.css">
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
	
	<!-- 导航开始 -->
	
	<!-- 导航结束 -->
@section('content')	
<div class="alls" style="width: auto;height:1400px; background: #EDE7E1; margin-top:-20px; "> 
<div class="profile">
	<div class="container center">
		<div class="col-md-4 nav">
			<div class="notice">
				<div class="pull-left">
					<img src="{{$userinfos->touxiang}}" alt="" style="width: 48px;height: 48px;">
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
		        <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span><a href="/grzxs
		   		">管理收货地址</a></li>
		        <li><span class="glyphicon glyphicon-user" aria-hidden="true"></span>设置账户信息</li>
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
		<div class="col-md-9">
			<h1>设置账户信息</h1>
			<div class="container center">
			<form id="settings-form" method="post" action="/grzx/{{$userinfos->id}}" enctype="multipart/form-data">
		        
				<div class="avatar_change">
					<img src="{{$userinfos->touxiang}}" height="50" width="50" alt="大头像">
					<input type="file" name="touxiang">
				</div>

				<div class="input_container">
					<label for="settings-username"><span class="spark">*</span>用户名</label>
					<input required="" type="text" size="30" name="name" id="settings-username" class="t_input" value="{{$userinfos->name}}">
					<!-- <span class="valueMissing">请填写您的用户名</span>
					<span class="patternMismatch">应为4-16个中英文字符，不能以数字开头</span>
					<span class="customError">应为4-16个中英文字符，不能以数字开头</span>  -->
				</div>

				<dl class="formlist">
					<dt>Email</dt>
					<dd>
        				<span class="data">{{$userinfos->email}}
        				</span>
            		</dd>
				</dl>

				<dl class="formlist">
					<dt>手机号</dt>
					<dd>
	    				<span class="data">{{$userinfos->phone}}</span>
					<a href="#" target="_blank">修改</a>
				<span class="hint">已验证</span>
	    			</dd>
				</dl>

				<div class="input_container">
					<label>性别</label>
					@if($userinfos->sex == 0)
					<label class="radio">
						<span class="radio_ui">
							<input type="radio" id="gender_f" autocomplete="off" value="0" checked="checked">
							<b></b>
						</span>
						女
					</label>
					@else
					<label class="radio">
						<span class="radio_ui">
							<input type="radio" id="gender_m" autocomplete="off" value="1" checked="checked">
							<b></b>
						</span>
						男
					</label>
					@endif
				</div>
				<div class="input_container">
					<label><span class="spark">*</span>生日</label>
				<span class="otherError" style="margin-top:20px;">{{$userinfos->shengr}} </span>
				
			</div>
					
			<div class="input_container">
				<label>隐私</label>
				<label class="checkbox">
					<span class="checkbox_ui">
	                    <input type="checkbox" value="1" id="hide_privacy" checked="checked">
						<b></b>
					</span>
					不显示我的年龄
				</label>
				<label class="checkbox">
					<span class="checkbox_ui">
	                    <input type="checkbox" value="1" id="show_my_products" checked="checked">
						<b></b>
					</span>
					在口碑中心显示我的美妆
				</label>
			</div>
				<div class="input_container selectwidth">
				<label for="skin_type"><span class="spark">*</span>你的皮肤属于</label>
	            <span class="select_ui">
	            <input type="hidden" value="{{$userinfos->pifu}}" name="pifu">
	            	<select class="form-control">
	                            <option value=""></option>
	                            <option value="油性皮肤">油性皮肤</option>
	                            <option value="干性皮肤">干性皮肤</option>
	                            <option value="中性皮肤">中性皮肤</option>
	                            <option selected="selected" value="混合性皮肤"  name="pifu">{{$userinfos->pifu}}</option>
	                            <option value="敏感型皮肤">敏感型皮肤</option>
	                            <option value="敏感油性皮肤">敏感油性皮肤</option>
	                            <option value="敏感干性皮肤">敏感干性皮肤</option>
	                            <option value="敏感中性皮肤">敏感中性皮肤</option>
	                            <option value="敏感混合性皮肤">敏感混合性皮肤</option>
					</select>
	            </span>

				<span class="valueMissing">请填写你的皮肤类型</span>
			</div>
			<div class="input_container selectwidth">
				<label for="hair_type"><span class="spark">*</span>你的发质属于</label>
	            <span class="select_ui">
	            <input type="hidden" value="{{$userinfos->fazhi}}" name="fazhi">
	            	<select class="form-control">
	                            <option value=""></option>
	                            <option value="油性发质">油性发质</option>
	                            <option selected="selected" value="干性发质" name="fazhi">{{$userinfos->fazhi}}</option>
	                            <option value="中性发质">中性发质</option>
	                            <option value="混合性发质">混合性发质</option>
	                            <option value="受损发质">受损发质</option>
	                            <option value="头屑发质">头屑发质</option>
	                            <option value="无生气发质">无生气发质</option>
	                            <option value="脱落发质">脱落发质</option>
	                        </select></span>
				<span class="valueMissing">请填写你的发质类型</span>
			</div>
			<div class="input_container selectwidth">
				<label for="purchasing_power"><span class="spark">*</span>美容品年消费</label>

	        <span class="select_ui">
	         <input type="hidden" value="{{$userinfos->meir}}" name="meir">
	        	<select class="form-control">
	                            <option value=""></option>
	                            <option value="0-499">0-499</option>
	                            <option selected="selected" value="500-999" name="meir">{{$userinfos->meir}}</option>
	                            <option value="1000-2999">1000-2999</option>
	                            <option value="3000-4999">3000-4999</option>
	                            <option value="5000-6999">5000-6999</option>
	                            <option value="7000-9999">7000-9999</option>
	                            <option value="10000-19999">10000-19999</option>
	                            <option value="20000-29999">20000-29999</option>
	                            <option value="30000以上">30000以上</option>
	                        </select></span>
				<span class="valueMissing">请填写您的美容品年消费</span>
				</div>
				<div class="input_container">
					<label for="comment">美丽宣言</label>
					<textarea rows="8" cols="50" id="comment" name="neir">{{$userinfos->neir}}</textarea>
					<!-- <p class="comment_tip">您已输入<span class="dg dg1">0</span>个字符，<span class="tip_text2">还能输入</span><span class="dg dg2">200</span>个字符</p> -->
				    <div style="margin-left: 150px;margin-top: 8px;color: #ed145b;">美丽宣言为个人设置信息,小美不会为您自动填写哦!</div>
				</div>
				{{csrf_field()}}
				<div class="container act">
					<button type="submit" class="btn btn-info">保存修改</button>
				</div>
				</form>
			</div>
		</div>	
	</div>	
</div>

</div>
@show
<div class="clear"></div>
	<!-- 版权开始 -->
	@include('layouts.foot')

</body>
</html>