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
#doSearch{
    margin-left:800px;
    margin-bottom:20px;
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
                @if(session()->has('message'))
                <div id="message">
                    {{session()->get('message')}}<a href="javascript:message();">X</a>
                </div>
                @endif
                <h1 class="page-header"><i class="im-table2"></i>员工分类列表</h1>
                <!-- Start .bredcrumb -->
                <ul id="crumb" class="breadcrumb">
                </ul>
                <!-- End .breadcrumb -->
                <form action="{{url('admin/staff/index')}}" class="form-inline" id="doSearch">
                    <input type="text" name="column" @if(isset($_GET['column'])) value="{{$_GET['column']}}" @endif placeholder="请输入查询的内容" class="form-control">
                    <select name="select" class="form-control">
                        <option value="0">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</option>
                        <option value="1">性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别</option>
                        <option value="2">年&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;龄</option>
                        <option value="3">身份证号</option>
                        <option value="4">入职时间</option>
                    </select>
                    <button type="submit" class="btn btn-sm btn-primary">搜索</button>
                </form>
                <!-- Start .table -->
                    <table class="table table-striped" id="usertable">
                        <tr>
                            <th>用户名</th>
                            <th>姓名</th>
                            <th>性别</th>
                            <th>年龄</th>
                            <th>身份证号</th>
                            <th>入职时间</th>
                            <th>操作栏</th>
                        </tr>
                        @foreach($staffInfo as $staff)
                        <tr>
                            <th>
                                @if(isset($_GET['column']))
                                {!!str_replace($_GET['column'],'<font color="red">'.$_GET['column'].'</font>',mb_substr($staff->username,0,15))!!}
                                @else
                                {{mb_substr($staff->username,0,15)}}
                                @endif
                                @if(mb_strlen($staff->username) > 15)...@endif
                            </th>
                            <th>
                                @if(isset($_GET['column']))
                                {!!str_replace($_GET['column'],'<font color="red">'.$_GET['column'].'</font>',mb_substr($staff->staff_name,0,15))!!}
                                @else
                                {{mb_substr($staff->staff_name,0,15)}}
                                @endif
                                @if(mb_strlen($staff->staff_name) > 15)...@endif
                            </th>
                            <th>
                                @if(isset($_GET['column']))
                                {!!str_replace($_GET['column'],'<font color="red">'.$_GET['column'].'</font>',mb_substr($staff->staff_gender,0,15))!!}
                                @else
                                {{mb_substr($staff->staff_gender,0,15)}}
                                @endif
                                @if(mb_strlen($staff->staff_gender) > 15)...@endif
                            </th>
                            <th>
                                @if(isset($_GET['column']))
                                {!!str_replace($_GET['column'],'<font color="red">'.$_GET['column'].'</font>',mb_substr($staff->staff_age,0,15))!!}
                                @else
                                {{mb_substr($staff->staff_age,0,15)}}
                                @endif
                                @if(mb_strlen($staff->staff_age) > 15)...@endif
                            </th>
                            <th>
                                @if(isset($_GET['column']))
                                {!!str_replace($_GET['column'],'<font color="red">'.$_GET['column'].'</font>',mb_substr($staff->staff_identifier,0,15))!!}
                                @else
                                {{mb_substr($staff->staff_identifier,0,15)}}
                                @endif
                                @if(mb_strlen($staff->staff_identifier) > 15)...@endif
                            </th>
                            <th>
                                @if(isset($_GET['column']))
                                {!!str_replace($_GET['column'],'<font color="red">'.$_GET['column'].'</font>',mb_substr($staff->staff_hiredate,0,15))!!}
                                @else
                                {{mb_substr($staff->staff_hiredate,0,15)}}
                                @endif
                                @if(mb_strlen($staff->staff_hiredate) > 15)...@endif
                            </th>
                            <th>
                                <a href="{{url('admin/staff/edit',['id' => $staff->id])}}" class="btn btn-sm btn-primary">编辑</a>
                                <a href="{{url('admin/staff/del',['id' => $staff->id])}}" class="btn btn-sm btn-danger" id="del_{{$staff->id}}">离职</a>
                            </th>
                        </tr>
                        @endforeach
                    </table>

                    <div>
                        <span>总: {{$count}} 条</span> <font color="red" size="4" style="margin-left: 1000px;">备注:</font> <span>0:男性,1:女性</span>
                    </div>
                    <div id="page">
                        {{$staffInfo->appends($_GET)->links()}}
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
    $('[id^=del_]').click(function(){
        return confirm('员工是否离职?');
    });
</script>


<script src="{{asset('admin')}}/plugins/core/moment/moment.min.js"></script>
<script src="{{asset('admin')}}/plugins/charts/sparklines/jquery.sparkline.js"></script>
<script src="{{asset('admin')}}/plugins/charts/pie-chart/jquery.easy-pie-chart.js"></script>
<script src="{{asset('admin')}}/plugins/forms/icheck/jquery.icheck.js"></script>
<script src="{{asset('admin')}}/plugins/forms/tags/jquery.tagsinput.min.js"></script>
<script src="{{asset('admin')}}/plugins/forms/tinymce/tinymce.min.js"></script>
<script src="{{asset('admin')}}/plugins/misc/highlight/highlight.pack.js"></script>
<script src="{{asset('admin')}}/plugins/misc/countTo/jquery.countTo.js"></script>
<script src="{{asset('admin')}}/plugins/ui/notify/jquery.gritter.js"></script>
<script src="{{asset('admin')}}/js/jquery.sprFlat.js"></script>
<script src="{{asset('admin')}}/js/app.js"></script>
<script src="{{asset('admin')}}/js/pages/notifications.js"></script>

@endsection
