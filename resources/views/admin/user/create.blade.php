@extends('admin.index')

@section('title')
@endsection

@section('neirong')
<div id="pad-wrapper" class="new-user">
                <div class="row-fluid header">
                    <h3>用户添加</h3>
                </div>

                <div class="row-fluid form-wrapper">
                    <!-- left column -->
                    <div class="span9 with-sidebar">
                        <div class="container">
                            <form class="new_user_form inline-input" action="/user" method="post" enctype="multipart/form-data">
                                <div class="span12 field-box">
                                    <label>用户名:</label>
                                    <input class="span9" type="text" name="username">
                                </div>
                                <div class="span12 field-box">
                                    <label>密码:</label>
                                    <input class="span9" type="password" name="password">
                                </div>
                                <div class="span12 field-box">
                                    <label>确认密码:</label>
                                    <input class="span9" type="password" name="repassword">
                                </div>
                                <div class="span12 field-box">
                                    <label>邮箱:</label>
                                    <input class="span9" type="text" name="email">
                                </div>
                                <div class="span12 field-box">
                                    <label>头像:</label>
                                    <input class="span9" type="file" name="profile">
                                </div>
                                {{csrf_field()}}
                                <div class="span11 field-box actions">
                                    <input class="btn-glow primary" value="&nbsp;&nbsp;添加&nbsp;&nbsp;" type="submit">
                                    
                                    <input value="&nbsp;&nbsp;重置&nbsp;&nbsp;" class="btn-glow primary" type="reset">
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- side right column -->
                   
                </div>
            </div>
	
@endsection