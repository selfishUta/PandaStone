@extends("layouts/admin")
@section("content")
<div id="content">
    <!-- Start .content-wrapper -->
    <div class="content-wrapper">
        <div class="row">
            <!-- Start .row -->
            <!-- Start .page-header -->
            <div class="col-lg-12 heading">
                <h1 class="page-header"><i class="im-table2"></i>商品分类列表</h1>
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
  <table class="table table-bordered table-responsive table-hover table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>分类名称</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
        @foreach($allProdCates as $prodCate)
            <tr>
                <td>{{$prodCate['id']}}</td>
                <td>{{$prodCate['name']}}</td>
                <td>
                    <button type="button" class="btn btn-xs btn-success">
                        <a href="{{url('admin/productCategory/detail',['id'=>$prodCate['id']])}}" style="color:white">查看</a>
                    </button>
                    <button type="button" class="btn btn-xs btn-primary">
                        <a href="{{url('admin/productCategory/edit',['id'=>$prodCate['id']])}}" style="color:white">编辑</a>
                    </button>
                    <button type="button" class="btn btn-xs btn-danger">
                        <a href="javascript:void(0);" id="mydelete" style="color:white">删除</a>
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
    <!-- end 商品分类列表 -->
</div>
@endsection
@section("js")
<script type="text/javascript">
    $(document).ready(function(){
        $("#mydelete").click(function(){
            var targetid = this.parentNode;
            console.log('你好');
            console.log(targetid);
            // $.ajax({
            //     type: "POST",
            //     url:"{{url('admin/productCategory/delete')}}",
            //     data:

            // });
        });
    });
</script>
@endsection
