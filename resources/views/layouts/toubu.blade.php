
<header>
<div class="container">
    <div class="col-md-3 tb_o">
        <ul>
            @if(!session('id'))
            <li class="pull-left">欢迎来到聚美！</li>
            <li class="pull-left"><a href="/denglu">登录</a></li>
            <li class="pull-left"><a href="/zhuce">快速注册</a></li>
            @else
            <li class="pull-left">欢迎回来: <a href="/center">{{session('phone')}}</a> <span>退出</span></li>
            @endif
        </ul>
    </div>
    <div class="col-md-4 tb_o"></div>
    <div class="col-md-5 tb_s">
        <ul>
            <li class="pull-left"><a href="">正品保证</a></li>
            <li class="pull-left"><a href="">订单查询</a></li>
            <li class="pull-left"><i class="glyphicon glyphicon-heart"></i>&nbsp;<a href="">收藏的品牌</a></li>
            <li class="pull-left"><a href="">我的聚美</a></li>
            <li class="pull-left"><a href="">手机聚美</a></li>
            <li class="pull-left"><a href="">更多</a></li>
        </ul>
    </div>
</div>
</header>
<script type="text/javascript" src="/bootstrap/js/jquery.js"></script>
<script type="text/javascript">
    $('span').click(function(){
        $.ajax({
            type:'get',
            url:'/qcsession',
            data:{'id',session('id')},
            success:function(mess){

            }
        })
    })
</script>