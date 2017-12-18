@extends('admin.index')
@section('title')
<div class="title" >
	<h1>详情修改</h1>
</div>
@endsection
@section('content')
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>
<div class="right" style="margin-top:50px;">
	<form class="form-horizontal" action="/xqgl/{{$xqgl->id}}" method="post" enctype="multipart/form-data">
  		<div class="form-group">
    	<label for="inputPassword3" class="col-sm-2 control-label">商品ID</label>
    		<div class="col-sm-5">
      		<input type="text" class="form-control" id="inputPassword3" value="{{$xqgl->sp_id}}" name="sp_id">
    		</div>
  		</div>
  		<div><img height="100" src="{{$xqgl->from_1}}"></div>
  		<div class="form-group">
    	<label for="inputPassword3" class="col-sm-2 control-label">出产地(图)</label>
    		<div class="col-sm-5">
      		<input type="file" class="form-control" id="inputPassword3" name="from_1">
    		</div>
  		</div>
  		<div class="form-group">
    	<label for="inputPassword3" class="col-sm-2 control-label">出产地(中文)</label>
    		<div class="col-sm-5">
      		<input type="text" class="form-control" id="inputPassword3" value="{{$xqgl->from_2}}" name="from_2">
    		</div>
  		</div>
  		<div class="form-group">
    	<label for="inputPassword3" class="col-sm-2 control-label">出产地(英文)</label>
    		<div class="col-sm-5">
      		<input type="text" class="form-control" id="inputPassword3" value="{{$xqgl->from_3}}" name="from_3">
    		</div>
  		</div>
  		<div class="form-group">
    	<label for="inputPassword3" class="col-sm-2 control-label">商品信息</label>
    		<div class="col-sm-5">
      		<script id="xinxi" name="xinxi" type="text/plain" style="width:900px;height:500px;">{!!$xqgl->xinxi!!}</script>
    		</div>
  		</div>
  		<div class="form-group">
    	<label for="inputPassword3" class="col-sm-2 control-label">商品详情</label>
    		<div class="col-sm-5">
      		<script id="xiangqing" name="xiangqing" type="text/plain" style="width:900px;height:500px;">{!!$xqgl->xiangqing!!}</script>
    		</div>
  		</div>
  		<div class="form-group">
    	<label for="inputPassword3" class="col-sm-2 control-label">使用方法</label>
    		<div class="col-sm-5">
      		<script id="fangfa" name="fangfa" type="text/plain" style="width:900px;height:500px;">{!!$xqgl->fangfa!!}</script>
    		</div>
  		</div>
  		<div class="form-group">
    	<label for="inputPassword3" class="col-sm-2 control-label">商品实拍</label>
    		<div class="col-sm-5">
      		<script id="shipai" name="shipai" type="text/plain" style="width:900px;height:500px;">{!!$xqgl->shipai!!}</script>
    		</div>
  		</div>
  		<div class="form-group">
    	<label for="inputPassword3" class="col-sm-2 control-label">关于聚美极速免税店</label>
    		<div class="col-sm-5">
      		<script id="jisu" name="jisu" type="text/plain" style="width:900px;height:500px;">{!!$xqgl->jisu!!}</script>
    		</div>
  		</div>
  		{{method_field('PUT')}}
  		{{csrf_field()}}
  		<div class="form-group">
    		<div class="col-sm-offset col-sm-8">
      			<button type="submit" class="btn btn-info">修改</button>
    		</div>
 		 </div>
	</form>
</div>
<script type="text/javascript">
var ue = UE.getEditor('xinxi');
var ue = UE.getEditor('xiangqing');
var ue = UE.getEditor('fangfa');
var ue = UE.getEditor('shipai');
var ue = UE.getEditor('jisu');
</script>
@endsection