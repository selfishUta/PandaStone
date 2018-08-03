@extends("layouts/admin")
@section("css")
.mytextarea {
    width: 316px;
    height: 457px;
    resize: none;
}
@endsection
@section("content")
<div id="content">
    <!-- Start .content-wrapper -->
    <div class="content-wrapper">
        <div class="row">
            <!-- Start .row -->
            <!-- Start .page-header -->
            <div class="col-lg-12 heading">
                <h1 class="page-header"><i class="im-table2"></i>添加商品分类</h1>
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
    </div>
    <!-- End .content-wrapper -->
    <div class="clearfix"></div>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(isset($message))
    <span><font color="red">$message</font></span>
    @endif
    <form action="doAdd" method="post" enctype="multipart/form-data" class="form-horizontal">
        {{csrf_field()}}
    <!-- start 名称 -->
    <div class="form-group">
      <div class="col-md-2">
        <label class="control-label">产品分类名称:</label>
      </div>
      <div class="col-md-5">
        <input class="form-control" type="text" name="name">
      </div>
      <div class="col-md-5">
        <span class="help-block">请填写分类名称</span>
      </div>
    </div>
    <!-- end 名称 -->
    <!-- start 简介 -->
    <div class="form-group">
      <div class="col-md-2">
        <label class="control-label">分类简介:</label>
      </div>
      <div class="col-md-5">
        <textarea class="form-control"name="intro"></textarea>
      </div>
      <div class="col-md-5">
        <span class="help-block">请填写分类简介</span>
      </div>
    </div>
    <!-- end 简介 -->
    <!-- start 父级分类 -->
    <div class="form-group">
      <div class="col-md-2">
        <label class="control-label">父类:</label>
      </div>
      <div class="col-md-5">
        <select name="pid" class="form-control">
            <option value="0">顶级分类</option>
            @foreach($prodCates as $cate)
            <option value="{{$cate['id']}}">{{$cate['name']}}</option>
            @endforeach
        </select>
      </div>
      <div class="col-md-5">
        <span class="help-block">请选择父类</span>
      </div>
    </div>
    <!-- end 父级分类 -->
    <div class="form-group">
      <div class="col-md-10 col-md-offset-2">
        <input type="submit" value="添加" class="btn btn-primary">
        <input type="reset" value="取消" class="btn btn-default">
      </div>
    </div>
</form>
</div>
@endsection
@section("js")
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
