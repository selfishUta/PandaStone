@extends("layouts/admin")
@section('css')
#usertable th{
    text-align:center;
}
#usertable tr:first-child th{
    color:#000;
    font-size:16px;
    font-weight:bold;
}
#page{
    margin-top:10px;
    margin-left:500px;
}
#message{
    border:2px solid orange;
    background:#ccc;
    color:white;
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
                <h1 class="page-header"><i class="im-table2"></i>编辑员工信息</h1>
                <!-- Start .bredcrumb -->
                <ul id="crumb" class="breadcrumb">
                </ul>
                <!-- End .breadcrumb -->
                <!-- Start .table -->
                <div class="row">
                    <div class="col-md-7 col-md-offset-2">
                        <form action="{{url('admin/staff/doEdit')}}" method="post" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-md-2">
                                    <label class="control-label">账号</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="username" value="{{$staffInfo->username}}" placeholder="" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2">
                                    <label class="control-label">姓名</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="staff_name" value="{{$staffInfo->staff_name}}"  class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2">
                                    <label class="control-label">性别</label>
                                </div>
                                <div class="col-md-7">
                                    <select name="staff_gender" class="form-control">
                                        <option value="0">男</option>
                                        <option value="1">女</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2">
                                    <label class="control-label">年龄</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="staff_age" value="{{$staffInfo->staff_age}}"  class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2">
                                    <label class="control-label">身份证号</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="staff_identifier" value="{{$staffInfo->staff_identifier}}"  class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2">
                                    <label class="control-label">联系方式</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="staff_phone" value="{{$staffInfo->staff_phone}}"  class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2">
                                    <label class="control-label">入职时间</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="staff_hiredate" value="{{$staffInfo->staff_hiredate}}"  class="form-control" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2">

                                </div>
                                <div class="col-md-7">
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{$staffInfo->id}}">
                                    <input type="submit" name="" value="编辑" class="btn btn-sm btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End .table -->
            </div>
            <!-- End .page-header -->
        </div>
        <!-- End .row -->
    </div>
    <!-- End .content-wrapper -->
    <div class="clearfix"></div>
</div>
@endsection
@section("js")
<script type="text/javascript">
    $('[name=staff_gender]').val('{{$staffInfo->staff_gender}}');
</script>
@endsection
