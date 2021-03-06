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
.help-block {
    color:red;
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
                <h1 class="page-header"><i class="im-table2"></i>添加员工信息</h1>
                <!-- Start .bredcrumb -->
                <ul id="crumb" class="breadcrumb">
                </ul>
                <!-- End .breadcrumb -->
                <!-- Start .table -->
                <div class="row">
                    <div class="col-md-7 col-md-offset-2">
                        <form action="{{url('admin/staff/doAdd')}}" method="post" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-md-2">
                                    <label class="control-label">账号</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="username" value="{{old('username')}}" placeholder="请输入账号" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <span class="help-block">{{$errors->first('username')}}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2">
                                    <label class="control-label">密码</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" placeholder="请输入密码" class="form-control">
                                </div>
                                <div class="col-md-3">
                                     <span class="help-block">{{$errors->first('password_confirmation')}}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2">
                                    <label class="control-label">确认密码</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="password" name="password" value="{{old('password')}}" placeholder="请输入确认密码" class="form-control">
                                </div>
                                <div class="col-md-3">
                                     <span class="help-block">{{$errors->first('password')}}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2">
                                    <label class="control-label">姓名</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="staff_name" value="{{old('staff_name')}}" placeholder="请输入员工姓名" class="form-control">
                                </div>
                                <div class="col-md-3">
                                     <span class="help-block">{{$errors->first('staff_name')}}</span>
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
                                <div class="col-md-3">
                                     <span class="help-block">{{$errors->first('staff_gender')}}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2">
                                    <label class="control-label">年龄</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="staff_age" value="{{old('staff_age')}}" class="form-control" placeholder="请输入员工年龄">
                                </div>
                                <div class="col-md-3">
                                     <span class="help-block">{{$errors->first('staff_age')}}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2">
                                    <label class="control-label">身份证号</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="staff_identifier" value="{{old('staff_identifier')}}" class="form-control" placeholder="请输入员工身份证号" >
                                </div>
                                <div class="col-md-3">
                                     <span class="help-block">{{$errors->first('staff_identifier')}}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2">
                                    <label class="control-label">联系方式</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="staff_phone" value="{{old('staff_phone')}}" class="form-control" placeholder="请输入员工手机号">
                                </div>
                                <div class="col-md-3">
                                     <span class="help-block">{{$errors->first('staff_phone')}}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2">
                                    <label class="control-label">入职时间</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="staff_hiredate" value="{{old('staff_hiredate')}}" class="form-control" placeholder="请选择时间">
                                </div>
                                <div class="col-md-3">
                                     <span class="help-block">{{$errors->first('staff_hiredate')}}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2">

                                </div>
                                <div class="col-md-7">
                                    {{csrf_field()}}
                                    <input type="submit" name="" value="添加" class="btn btn-sm btn-primary">
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
    $('[name=staff_hiredate]').datepicker({
        changeMonth:true,
        changeYear:true,
        dateFormat:'yy-mm-dd'
    });
</script>
@endsection
