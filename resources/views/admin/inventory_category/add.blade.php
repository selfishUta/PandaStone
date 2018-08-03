@extends('layouts/admin')
<!-- 主页 -->
@section('content')
<div id="content">
	<!-- Start .content-wrapper -->
	<div class="content-wrapper">
	    <div class="row">
	        <!-- Start .row -->
	        <!-- Start .page-header -->
	        <div class="col-lg-12 heading">
	            <h1 class="page-header"><i class="im-paragraph-justify"></i>库存管理</h1>
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
	            <!-- Start .row -->
	            <div class="col-lg-12">
	                <!-- Start col-lg-12 -->
	                <div class="panel panel-default toggle">
	                    <!-- Start .panel -->
	                    <div class="panel-heading">
	                        <h3 class="panel-title">添加库存分类</h3>
	                    </div>
	                    <div class="panel-body">
	                        <form class="form-horizontal group-border hover-stripped" action="{{url('admin/inventory_category/add')}}" method="post" role="form">
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">分类名称</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input type="text" class="form-control" placeholder="分类名称" autofocus="autofocus" name="name">
	                                </div>
	                            </div>
	      						 <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">分类描述</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <textarea class="form-control" rows="3" name="intro"></textarea>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">父分类</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <div class="row">
	                                        <div class="col-lg-6 col-md-6">
	                                            <select class="form-control" name="pid">
	                                                <option value="0">顶级分类</option>
	                                                @foreach($listArr as $v)
	                                                <option value="{{$v['id']}}">{{$v['name']}}</option>
	                                                @endforeach
	                                            </select>
	                                            <span class="help-block"></span>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">店铺</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <div class="row">
	                                        <div class="col-lg-6 col-md-6">
	                                            <select class="form-control" name="shop_id">
	                                                <optgroup label="模拟实验">
	                                                    <option value="0">模拟店铺</option>
	                                                </optgroup>
	                                                <optgroup label="模拟不要选">
	                                                    <option value="AZ">1</option>
	                                                    <option value="CO">2</option>
	                                                </optgroup>
	                                            </select>
	                                            <span class="help-block"></span>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group -->
	                            <div class="form-group">
                                    <div class="col-lg-offset-2">
                                    	{{csrf_field()}}
                                        <button class="btn btn-default ml15" type="submit">添加</button>
                                    </div>
                                </div>
                                <!-- End .form-group  -->
	                        </form>
	                    </div>
	                </div>
	                <!-- End .panel -->
	            </div>
	            <!-- End col-lg-12 -->
	        </div>
	        <!-- End .row -->
	
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
<script src="{{asset('admin')}}/plugins/forms/switch/jquery.onoff.min.js"></script>
<script src="{{asset('admin')}}/plugins/forms/maxlength/bootstrap-maxlength.js"></script>
<script src="{{asset('admin')}}/plugins/forms/bootstrap-filestyle/bootstrap-filestyle.js"></script>
<script src="{{asset('admin')}}/plugins/forms/color-picker/spectrum.js"></script>
<script src="{{asset('admin')}}/plugins/forms/daterangepicker/daterangepicker.js"></script>
<script src="{{asset('admin')}}/plugins/forms/datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script src="{{asset('admin')}}/plugins/forms/globalize/globalize.js"></script>
<script src="{{asset('admin')}}/plugins/forms/maskedinput/jquery.maskedinput.js"></script>
<script src="{{asset('admin')}}/plugins/forms/select2/select2.js"></script>
<script src="{{asset('admin')}}/plugins/forms/dual-list-box/jquery.bootstrap-duallistbox.js"></script>
<script src="{{asset('admin')}}/plugins/forms/password/jquery-passy.js"></script>
<script src="{{asset('admin')}}/plugins/forms/checkall/jquery.checkAll.js"></script>
<script src="{{asset('admin')}}/plugins/misc/highlight/highlight.pack.js"></script>
<script src="{{asset('admin')}}/plugins/misc/countTo/jquery.countTo.js"></script>
<script src="{{asset('admin')}}/js/jquery.sprFlat.js"></script>
<script src="{{asset('admin')}}/js/app.js"></script>
<script src="{{asset('admin')}}/js/pages/forms.js"></script>
@endsection