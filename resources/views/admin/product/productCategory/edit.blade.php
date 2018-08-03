@extends("layouts/admin")
@section("content")
<div id="content">
    <!-- Start .content-wrapper -->
    <div class="content-wrapper">
        <div class="row">
            <!-- Start .row -->
            <!-- Start .page-header -->
            <div class="col-lg-12 heading">
                <h1 class="page-header"><i class="im-table2"></i>编辑商品分类</h1>
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
    <!-- start 商品分类列表 -->
        <!-- 商品分类详情页，显示商品分类的所有信息，添加商品功能 ，查看分类下的所有商品-->
        <hr>
        <form action="{{url('admin/productCategory/update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            {{csrf_field()}}
    <!-- start 产品分类ID -->
    <div class="form-group">
      <div class="col-md-2">
        <label class="control-label">产品分类ID:</label>
      </div>
      <div class="col-md-5">
        <input type="hidden" class="form-control" name="id" value="{{$cate->id}}">
      </div>
    </div>
    <!-- end 产品分类ID -->
    <!-- start 名称 -->
    <div class="form-group">
      <div class="col-md-2">
        <label class="control-label">产品分类名称:</label>
      </div>
      <div class="col-md-5">
        <input class="form-control" name="name" value="{{$cate->name}}">
      </div>
    </div>
    <!-- end 名称 -->
    <!-- start 简介 -->
    <div class="form-group">
      <div class="col-md-2">
        <label class="control-label">分类简介:</label>
      </div>
      <div class="col-md-5">
        <textarea class="form-control" name="intro">{{$cate->intro}}</textarea>
      </div>
    </div>
    <!-- end 简介 -->
    <!-- start 父级分类 -->
    <div class="form-group">
      <div class="col-md-2">
        <label class="control-label">父类:</label>
      </div>
      <div class="col-md-5">
        <select name="pid" class="form-control" name="pid" value="{{$cate->pid}}" disabled="">
            <option value="0">顶级分类</option>
            @foreach($prodCates as $category)
            <option value="{{$cate->id}}">{{$category['name']}}</option>
            @endforeach
        </select>
      </div>
    </div>
    <!-- end 父级分类 -->
    <!-- start 状态 -->
    <div class="form-group">
      <div class="col-md-2">
        <label class="control-label">分类状态:</label>
      </div>
      <div class="col-md-5">
        <input class="form-control"name="status" value = "{{$cate->status}}"/>
      </div>
    </div>
    <!-- end 状态 -->
    <!-- start 店铺 -->
    <div class="form-group">
      <div class="col-md-2">
        <label class="control-label">店铺:</label>
      </div>
      <div class="col-md-5">
        <input class="form-control"name="shop_id" value = "{{$cate->shop_id}}" disabled=""/>
      </div>
    </div>
    <!-- end 状态 -->
    <!-- start 创建时间 -->
    <div class="form-group">
      <div class="col-md-2">
        <label class="control-label">创建时间:</label>
      </div>
      <div class="col-md-5">
        <input class="form-control"name="created_at" value = "{{$cate->created_at}}" disabled=""/>
      </div>
    </div>
    <!-- end 创建时间 -->
        <!-- start 更新时间 -->
    <div class="form-group">
      <div class="col-md-2">
        <label class="control-label">更新时间:</label>
      </div>
      <div class="col-md-5">
        <input class="form-control"name="updated_at" value = "{{$cate->updated_at}}" disabled=""/>
      </div>
    </div>
    <!-- end 更新时间 -->
    <!-- start 添加、取消按钮 -->
    <div class="form-group">
      <div class="col-md-10 col-md-offset-2">
        <input type="submit" value="修改" class="btn btn-primary">
        <input type="reset" value="取消" class="btn btn-default">
      </div>
    </div>
    <!-- end 添加、取消按钮 -->
</form>
<hr>
</div>
@endsection
@section("js")
@endsection
