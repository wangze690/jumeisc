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
		<div class="col-md-9">
			<h1>设置账户信息</h1>
			<div class="container center">
				<form id="settings-form" method="post" action="/i/account/settings">
		        <input type="hidden" name="jm_form_hash" id="jm_form_hash" value="506b56ea">
				<div class="avatar_change">
					<img src="./img/0.png" alt="大头像">
					<a href="#" class="changeavatar">修改头像</a>
				</div>

				<div class="input_container">
					<label for="settings-username"><span class="spark">*</span>用户名</label>
					<input required="" type="text" size="30" name="username" id="settings-username" class="t_input" value="赵晶晶asc">
					<!-- <span class="valueMissing">请填写您的用户名</span>
					<span class="patternMismatch">应为4-16个中英文字符，不能以数字开头</span>
					<span class="customError">应为4-16个中英文字符，不能以数字开头</span>  -->
				</div>

				<dl class="formlist">
					<dt>Email</dt>
					<dd>
		            				<span class="data">您还未绑定邮箱</span>
						<a href="#" class="btn_mid_pink">立即绑定</a>
		                			</dd>
				</dl>

				<dl class="formlist">
					<dt>手机号</dt>
					<dd>
		            				<span class="data">176****0324</span>
						<a href="/i/account/mobile_bind" target="_blank">修改</a>
							<span class="hint">已验证</span>
		            			</dd>
				</dl>

				<div class="input_container">
					<label>性别</label>
					<label class="radio">
						<span class="radio_ui">
							<input name="gender" type="radio" id="gender_f" autocomplete="off" value="2" checked="checked">
							<b></b>
						</span>
						女
					</label>
					<label class="radio">
						<span class="radio_ui">
							<input name="gender" type="radio" id="gender_m" autocomplete="off" value="1">
							<b></b>
						</span>
						男
					</label>
				</div>
				<div class="input_container">
					<label><span class="spark">*</span>生日</label>
		            <span class="select_ui">
	            	<select class="form-control">
	                            <option value=""></option>
	                            <option selected="selected" value="2010">2010</option>
	                            <option value="2009">2009</option>
	                            <option value="2008">2008</option>
	                            <option value="2007">2007</option>
	                            <option value="2006">2006</option>
	                            <option value="2005">2005</option>
	                            <option value="2004">2004</option>
	                            <option value="2003">2003</option>
	                            <option value="2002">2002</option>
	                            <option value="2001">2001</option>
	                            <option value="2000">2000</option>
	                            <option value="1999">1999</option>
	                            <option value="1998">1998</option>
	                            <option value="1997">1997</option>
	                            <option value="1996">1996</option>
	                            <option value="1995">1995</option>
	                            <option value="1994">1994</option>
	                            <option value="1993">1993</option>
	                            <option value="1992">1992</option>
	                            <option value="1991">1991</option>
	                            <option value="1990">1990</option>
	                            <option value="1989">1989</option>
	                            <option value="1988">1988</option>
	                            <option value="1987">1987</option>
	                            <option value="1986">1986</option>
	                            <option value="1985">1985</option>
	                            <option value="1984">1984</option>
	                            <option value="1983">1983</option>
	                            <option value="1982">1982</option>
	                            <option value="1981">1981</option>
	                            <option value="1980">1980</option>
	                            <option value="1979">1979</option>
	                            <option value="1978">1978</option>
	                            <option value="1977">1977</option>
	                            <option value="1976">1976</option>
	                            <option value="1975">1975</option>
	                            <option value="1974">1974</option>
	                            <option value="1973">1973</option>
	                            <option value="1972">1972</option>
	                            <option value="1971">1971</option>
	                            <option value="1970">1970</option>
	                            <option value="1969">1969</option>
	                            <option value="1968">1968</option>
	                            <option value="1967">1967</option>
	                            <option value="1966">1966</option>
	                            <option value="1965">1965</option>
	                            <option value="1964">1964</option>
	                            <option value="1963">1963</option>
	                            <option value="1962">1962</option>
	                            <option value="1961">1961</option>
	                            <option value="1960">1960</option>
	                            <option value="1959">1959</option>
	                            <option value="1958">1958</option>
	                            <option value="1957">1957</option>
	                            <option value="1956">1956</option>
	                            <option value="1955">1955</option>
	                            <option value="1954">1954</option>
	                            <option value="1953">1953</option>
	                            <option value="1952">1952</option>
	                            <option value="1951">1951</option>
	                            <option value="1950">1950</option>
	                            <option value="1949">1949</option>
	                        </select></span>

	            <span class="select_ui"><select class="form-control">
	                            <option value=""></option>
	                            <option value="1">1</option>
	                            <option selected="selected" value="2">2</option>
	                            <option value="3">3</option>
	                            <option value="4">4</option>
	                            <option value="5">5</option>
	                            <option value="6">6</option>
	                            <option value="7">7</option>
	                            <option value="8">8</option>
	                            <option value="9">9</option>
	                            <option value="10">10</option>
	                            <option value="11">11</option>
	                            <option value="12">12</option>
	                        </select></span>

	            <span class="select_ui">
	            			<select class="form-control">
	                            <option value=""></option>
	                            <option value="1">1</option>
	                            <option selected="selected" value="2">2</option>
	                            <option value="3">3</option>
	                            <option value="4">4</option>
	                            <option value="5">5</option>
	                            <option value="6">6</option>
	                            <option value="7">7</option>
	                            <option value="8">8</option>
	                            <option value="9">9</option>
	                            <option value="10">10</option>
	                            <option value="11">11</option>
	                            <option value="12">12</option>
	                            <option value="13">13</option>
	                            <option value="14">14</option>
	                            <option value="15">15</option>
	                            <option value="16">16</option>
	                            <option value="17">17</option>
	                            <option value="18">18</option>
	                            <option value="19">19</option>
	                            <option value="20">20</option>
	                            <option value="21">21</option>
	                            <option value="22">22</option>
	                            <option value="23">23</option>
	                            <option value="24">24</option>
	                            <option value="25">25</option>
	                            <option value="26">26</option>
	                            <option value="27">27</option>
	                            <option value="28">28</option>
	                            <option value="29">29</option>
	                            <option value="30">30</option>
	                            <option value="31">31</option>
	                        </select></span>
				<span class="otherError">请填写您的生日</span>
				<div class="act">
					<span class="status_red">准确填写生日，有机会获得更多惊喜哦！</span>
				</div>
			</div>
					
					<div class="input_container">
						<label>隐私</label>
						<label class="checkbox">
							<span class="checkbox_ui">
			                    <input type="checkbox" value="1" id="hide_privacy" name="hide_privacy" checked="checked">
								<b></b>
							</span>
							不显示我的年龄
						</label>
						<label class="checkbox">
							<span class="checkbox_ui">
			                    <input type="checkbox" value="1" id="show_my_products" name="show_my_products" checked="checked">
								<b></b>
							</span>
							在口碑中心显示我的美妆
						</label>
					</div>
				<div class="input_container selectwidth">
				<label for="skin_type"><span class="spark">*</span>你的皮肤属于</label>
	            <span class="select_ui">
	            	<select class="form-control">
	                            <option value=""></option>
	                            <option value="油性皮肤">油性皮肤</option>
	                            <option value="干性皮肤">干性皮肤</option>
	                            <option value="中性皮肤">中性皮肤</option>
	                            <option selected="selected" value="混合性皮肤">混合性皮肤</option>
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
	            	<select class="form-control">
	                            <option value=""></option>
	                            <option value="油性发质">油性发质</option>
	                            <option selected="selected" value="干性发质">干性发质</option>
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
	        	<select class="form-control">
	                            <option value=""></option>
	                            <option value="0-499">0-499</option>
	                            <option selected="selected" value="500-999">500-999</option>
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
					<textarea rows="8" cols="50" id="comment" name="comment"></textarea>
					<!-- <p class="comment_tip">您已输入<span class="dg dg1">0</span>个字符，<span class="tip_text2">还能输入</span><span class="dg dg2">200</span>个字符</p> -->
				    <div style="margin-left: 150px;margin-top: 8px;color: #ed145b;">美丽宣言为个人设置信息,小美不会为您自动填写哦!</div>
				</div>
				<div class="container act">
					<button type="button" class="btn btn-primary">保存修改</button>
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