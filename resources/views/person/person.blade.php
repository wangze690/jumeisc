@include('layouts.personpublic')
		<div class="col-md-8 div_1" style="height:500px;position: relative;top:30px;left: 50px;background-color: #fff;">
			<div class="col-md-12" style="height: 50px;border-bottom: 1px solid #ccc;">
				<p style="font-size: 20px;margin-top:10px;">修改密码</p>
			</div>
			<div class="col-md-12" style="height:500px;">
				<ul class="col-md-3 col-md-offset-1">
					<li id="query">
						<span style="color: #ed145b;">*</span>
						选择验证身份方式 
					</li>
					<li id="query">
						<span style="color: #ed145b;">*</span>
						手机号 
					</li>
					<li id="query">
						<span style="color: #ed145b;">*</span>
						短信校验码 
					</li>
					<li id="query">
						<span style="color: #ed145b;">*</span>
						新密码
					</li>
					<li id="query">
						<span style="color: #ed145b;">*</span>
						重复密码
					</li>
				</ul>

			<form action="/jumei/person{id}" method="post">
				<ul class="col-md-8" style="height:800px;">
					<li id="chue">
						<input type="radio" value="0"> 手机验证&nbsp;&nbsp;&nbsp;
					    <input type="radio" value="1"> 密码验证
					</li>
					<li id="chue">
						<!-- <span id="phone">15047446816</span> -->
						@foreach($phone as $k => $v)
						<input type="text" name="phone" class="input-sm" value="{{$v->phone}}">
						@endforeach
						&nbsp;&nbsp;&nbsp;
						<a href="#" style="color:#ed145b;">修改</a>
					</li>
					<li id="chue">
						<input type="text" class="input-sm" name="vcode">&nbsp;&nbsp;&nbsp;
						<button class="btn-default btn-sm" id="send" type="button">获取短息验证码</button>
						<p>请输入6位短信验证码</p>
					</li>
					<li id="chue">
						<input type="text" class="input-sm" name="password">
						<p>6-16 个字符，需使用字母、数字或符号组合，不能使用纯数字、纯字母、纯符号</p>
					</li>
					<li id="chue">
						<input type="text" class="input-sm" name="repassword">
						<p>重复密码</p>
					</li>
					{{csrf_field()}}
					<li id="chue">
						<button type="submit" class="btn-success">提交</button>
					</li>
				</ul>
			</form>
		</div>
		</div>
 	</section>
<!-- 主体结束 -->
@show

@include('layouts.foot')

	<script src="/js/jquery.js"></script>
	<script>
	$(function(){
		// 验证码发送
		$('#send').click(function(){
			//获取用户手机号
			var phone = $('input[name=phone]').val();
			// 验证手机号
			var reg = /1\d{10}/;
			if(!reg.test(phone))
			{
				alert('手机号码格式不正确');
				return;
			}
			// 发送ajax
			$.ajax({
				type:'get',
				data:{phone:phone},
				url:'/message',
				success:function(data)
				{
					// alert(data);
					console.log(data);
				}
			})
		});
	});
	
	</script>