@extends('admin.index')

@section('title')
@endsection

@section('neirong')
	<div class="table-wrapper orders-table section">
                    <div class="row-fluid head">
                        <div class="span12">
                            <h4>用户添加</h4>
                        </div>
                    </div>

                    <div class="row-fluid filter-block">
                        <div class="pull-right">
                            <div class="btn-group pull-right">
                                <button class="glow left large">搜索</button>
                                <button class="glow middle large">Pending</button>
                                <button class="glow right large">Completed</button>
                            </div>
                            <input class="search order-search" placeholder="Search for an order.." type="text">
                        </div>
                    </div>

                    <div class="row-fluid">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="span2">
                                        ID
                                    </th>
                                    <th class="span3">
                                        用户名
                                    </th>
                                    <th class="span3">
                                        <span class="line"></span>
                                        密码
                                    </th>
                                    <th class="span3">
                                        <span class="line"></span>
                                        邮箱
                                    </th>
                                    <th class="span3">
                                        <span class="line"></span>
                                        头像
                                    </th>
                                    <th class="span3">
                                        <span class="line"></span>
                                        状态
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- row -->
                                @foreach($user as $k=>$v)
                                <tr class="first">
                                    <td>
                                        <a href="#">{{$v->id}}</a>
                                    </td>
                                    <td>
                                        {{$v->username}}
                                    </td>
                                    <td>
                                        <a href="#">password</a>
                                    </td>
                                    <td>
                                        <span class="label label-success">{{$v->email}}</span>
                                    </td>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        $ 3,500.00
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection