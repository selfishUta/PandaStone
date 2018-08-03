@extends('layouts/admin')
@section('link')
<link href="{{asset('admin')}}/css/fonts_os400.css" rel="stylesheet" type="text/css" />
<link href="{{asset('admin')}}/css/fonts_os700.css" rel="stylesheet" type="text/css" />
<link href="{{asset('admin')}}/css/fonts_ds400.css" rel="stylesheet" type="text/css" />
<link href="{{asset('admin')}}/css/fonts_ds700.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div id="content">
	<!-- Start .content-wrapper -->
	<div class="content-wrapper">
	    <div class="row">
	        <!-- Start .row -->
	        <!-- Start .page-header -->
	        <div class="col-lg-12 heading">
	            <h1 class="page-header"><i class="im-table2"></i> 库存管理</h1>
	            <!-- Start .bredcrumb -->
	            <ul id="crumb" class="breadcrumb">
	            </ul>
	            <!-- End .breadcrumb -->
	            <!-- Start .option-buttons -->
	            <div class="option-buttons">
	                <div class="btn-toolbar" role="toolbar">
	                    <div class="btn-group">
	                        <a id="clear-localstorage" class="btn tip" title="Reset panels position">
	                            <i class="ec-refresh color-red s24"></i>
	                        </a>
	                    </div>
	                    <div class="btn-group dropdown">
	                        <a class="btn dropdown-toggle" data-toggle="dropdown" id="dropdownMenu1"><i class="br-grid s24"></i></a>
	                        <div class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
	                            <div class="option-dropdown">
	                                <div class="shortcut-button">
	                                    <a href="#">
	                                        <i class="im-pie"></i>
	                                        <span>Earning Stats</span>
	                                    </a>
	                                </div>
	                                <div class="shortcut-button">
	                                    <a href="#">
	                                        <i class="ec-images color-dark"></i>
	                                        <span>Gallery</span>
	                                    </a>
	                                </div>
	                                <div class="shortcut-button">
	                                    <a href="#">
	                                        <i class="en-light-bulb color-orange"></i>
	                                        <span>Fresh ideas</span>
	                                    </a>
	                                </div>
	                                <div class="shortcut-button">
	                                    <a href="#">
	                                        <i class="ec-link color-blue"></i>
	                                        <span>Links</span>
	                                    </a>
	                                </div>
	                                <div class="shortcut-button">
	                                    <a href="#">
	                                        <i class="ec-support color-red"></i>
	                                        <span>Support</span>
	                                    </a>
	                                </div>
	                                <div class="shortcut-button">
	                                    <a href="#">
	                                        <i class="st-lock color-teal"></i>
	                                        <span>Lock area</span>
	                                    </a>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="btn-group dropdown">
	                        <a class="btn dropdown-toggle" data-toggle="dropdown" id="dropdownMenu2"><i class="ec-pencil s24"></i></a> 
	                        <div class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu2">
	                            <div class="option-dropdown">
	                                <div class="row">
	                                    <p class="col-lg-12">Quick post</p>
	                                    <form class="form-horizontal" role="form">
	                                        <div class="form-group">
	                                            <div class="col-lg-12">
	                                                <input type="text" class="form-control" placeholder="Enter title">
	                                            </div>
	                                        </div>
	                                        <!-- End .form-group  -->
	                                        <div class="form-group">
	                                            <div class="col-lg-12">
	                                                <textarea class="form-control wysiwyg" placeholder="Enter text"></textarea>
	                                            </div>
	                                        </div>
	                                        <!-- End .form-group  -->
	                                        <div class="form-group">
	                                            <div class="col-lg-12">
	                                                <input type="text" class="form-control tags1" placeholder="Enter tags">
	                                            </div>
	                                        </div>
	                                        <!-- End .form-group  -->
	                                        <div class="form-group">
	                                            <div class="col-lg-12">
	                                                <button class="btn btn-default btn-xs">Save Draft</button>
	                                                <button class="btn btn-success btn-xs pull-right">Publish</button>
	                                            </div>
	                                        </div>
	                                        <!-- End .form-group  -->
	                                    </form>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="btn-group">
	                        <a class="btn dropdown-toggle" data-toggle="dropdown" id="dropdownMenu3"><i class="ec-help s24"></i></a>
	                        <div class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu3">
	                            <div class="option-dropdown">
	                                <p>First time visitor ? <a href="#" id="app-tour" class="btn btn-success ml15">Take app tour</a> 
	                                </p>
	                                <hr>
	                                <p>Or check the <a href="#" class="btn btn-danger ml15">FAQ</a>
	                                </p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <!-- End .option-buttons -->
	        </div>
	        <!-- End .page-header -->
	    </div>
	    <!-- End .row -->
	    <div class="outlet">
	        <!-- Start .outlet -->
	        <!-- Page start here ( usual with .row ) -->
	        <div class="row">
	            <div class="col-lg-12">
	                <!-- col-lg-12 start here -->
	                <div class="panel panel-default plain toggle panelClose panelRefresh">
	                    <!-- Start .panel -->
	                    <div class="panel-heading white-bg">
	                        <h4 class="panel-title">分类列表</h4>
	                    </div>
	                    <div class="panel-body">
	                        <table class="table display">
	                            <thead>
	                                <tr>
	                                    <th>分类名</th>
	                                    <th>父类</th>
	                                    <th>库存简介</th>
	                                    <th>状态</th>
	                                    <th>店铺</th>
	                                    <th>添加时间</th>
	                                    <th>更新时间</th>
	                                    <th>操作</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                            	@foreach($listArr as $v)
	                                <tr class="odd gradeX">
	                                    <td>{{$v['name']}}</td>
	                                    <td>{{$v['pname']}}</td>
	                                    <td>{{$v['intro']}}</td>
	                                    <td class="center">{{$v['status']}}</td>
	                                    <td class="center">{{$v['shop_id']}}</td>
	                                    <td class="center">{{$v['created_at']}}</td>
	                                    <td class="center">{{$v['updated_at']}}</td>
	                                    <td class="center">
	                                    	<a href="">编辑</a>
	                                    	<a href="">删除</a>
	                                    </td>
	                                </tr>
	                                @endforeach
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	                <!-- End .panel -->
	            </div>
	            <!-- col-lg-12 end here -->
	        </div>
	        <!-- Page End here -->
	    </div>
	    <!-- End .outlet -->
	</div>
	<!-- End .content-wrapper -->
	<div class="clearfix"></div>
	</div>
@endsection
@section('js')
<script src="{{asset('admin')}}/plugins/core/moment/moment.min.js"></script>
<script src="{{asset('admin')}}/plugins/charts/sparklines/jquery.sparkline.js"></script>
<script src="{{asset('admin')}}/plugins/charts/pie-chart/jquery.easy-pie-chart.js"></script>
<script src="{{asset('admin')}}/plugins/forms/icheck/jquery.icheck.js"></script>
<script src="{{asset('admin')}}/plugins/forms/tags/jquery.tagsinput.min.js"></script>
<script src="{{asset('admin')}}/plugins/forms/tinymce/tinymce.min.js"></script>
<script src="{{asset('admin')}}/plugins/tables/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('admin')}}/plugins/tables/datatables/jquery.dataTablesBS3.js"></script>
<script src="{{asset('admin')}}/plugins/tables/datatables/tabletools/ZeroClipboard.js"></script>
<script src="{{asset('admin')}}/plugins/tables/datatables/tabletools/TableTools.js"></script>
<script src="{{asset('admin')}}/plugins/misc/highlight/highlight.pack.js"></script>
<script src="{{asset('admin')}}/plugins/misc/countTo/jquery.countTo.js"></script>
<script src="{{asset('admin')}}/js/jquery.sprFlat.js"></script>
<script src="{{asset('admin')}}/js/app.js"></script>
<script src="{{asset('admin')}}/js/pages/data-tables.js"></script>
@endsection