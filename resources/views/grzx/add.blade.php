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
<div class="alls" style="width: auto;height:1400px; background: #EDE7E1; margin-top:-20px; "> 
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
		        <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span>我的收藏</li>
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
				<div class="col-md-9 sector">
					<h1>设置账户信息</h1>
					<h3 style="margin:15px 7px;font-size:16px;font-weight:700;">新增收货地址</h3>
					<form class="shipping_address" action="/i/account/add_address" method="post">
					<input type="hidden" name="edit" class="edit" id="edit" value="">
					<input type="hidden" name="cert_id"> 
					<div class="input_container">
						<label for="recipient_name"><span class="spark">*</span>收件人姓名：</label>
						<input type="text" size="20" class="t_input recipient_name" id="recipient_name" name="recipient_name" value="">
			                </div>
					<div class="input_container input_address_select">
						<label for="select_province"><span class="spark">*</span>收货地址：</label>
			                        <!-- 新的四级地区模板，2014年9月10日购物车上线后弃用，将此文件内容合并入province_city.tpl -->
			<div class="district_selector">
			    <span class="select_ui"><div class="select_arrow"></div><div class="select_text_ui" style="min-width: 8.5em;">省/直辖市</div><select class="f-input select_province" data-default="省/直辖市"><option value="">省/直辖市</option><option value="11">北京市</option><option value="12">天津市</option><option value="13">河北省</option><option value="14">山西省</option><option value="15">内蒙古自治区</option><option value="21">辽宁省</option><option value="22">吉林省</option><option value="23">黑龙江省</option><option value="31">上海市</option><option value="32">江苏省</option><option value="33">浙江省</option><option value="34">安徽省</option><option value="35">福建省</option><option value="36">江西省</option><option value="37">山东省</option><option value="41">河南省</option><option value="42">湖北省</option><option value="43">湖南省</option><option value="44">广东省</option><option value="45">广西壮族自治区</option><option value="46">海南省</option><option value="50">重庆市</option><option value="51">四川省</option><option value="52">贵州省</option><option value="53">云南省</option><option value="54">西藏自治区</option><option value="61">陕西省</option><option value="62">甘肃省</option><option value="63">青海省</option><option value="64">宁夏回族自治区</option><option value="65">新疆维吾尔自治区</option></select></span>
			    <span class="select_ui"><div class="select_arrow"></div><div class="select_text_ui" style="min-width: 1.5em;">市</div><select class="f-input select_city" data-default="市">
			        <option value="">市</option>
			    </select></span>
			    <span class="select_ui"><div class="select_arrow"></div><div class="select_text_ui" style="min-width: 3.5em;">区/县</div><select class="f-input select_area" data-default="区/县">
			        <option value="">区/县</option>
			    </select></span>
			    <span class="select_ui" style="display: none;"><div class="select_arrow"></div><div class="select_text_ui" style="min-width: 5.5em;">乡镇/街道</div><select class="f-input select_district" data-default="乡镇/街道">
			        <option value="">乡镇/街道</option>
			    </select></span>
			</div>

						<input type="hidden" name="structured_code" id="area" value="">
					</div>
					<div class="input_container">
						<label for="recipient_street"><span class="spark">*</span>详细地址：</label>
						<textarea rows="3" cols="60" class="t_input recipient_street" style="height:auto;resize:none;" id="recipient_street" name="recipient_street"></textarea>
					</div>
					<div class="input_container">
						<label for="recipient_hp"><span class="spark">*</span>手机号码：</label>
						<input type="tel" size="20" class="t_input recipient_hp" id="recipient_hp" name="recipient_hp" value="" maxlength="11">
					</div>
					<div class="act">
						<input type="submit" value="保存收货地址" name="commit" id="shipping_address_submit" class="formbutton">&nbsp;
						<a style="display: none;" href="#" id="edit_cancel">取消</a>
					</div>
				</form>
				</div>
		</div>
</div>
</div>
@include('layouts.footer')
</body>
</html>