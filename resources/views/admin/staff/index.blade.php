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
                @if(session()->has('message'))
                <div id="message">
                    {{session()->get('message')}}<a href="javascript:$('#message').hide(500)">X</a>
                </div>
                @endif
                <h1 class="page-header"><i class="im-table2"></i>员工分类列表</h1>
                <!-- Start .bredcrumb -->
                <ul id="crumb" class="breadcrumb">
                </ul>
                <!-- End .breadcrumb -->
                <!-- Start .table -->
                    <table class="table table-striped" id="usertable">
                        <tr>
                            <th>用户名</th>
                            <th>联系方式</th>
                            <th>email</th>
                            <th>创建时间</th>
                            <th>操作栏</th>
                        </tr>
                        @foreach($staffInfo as $user)
                        <tr>
                            <th>{{$user->username}}</th>
                            <th>{{$user->phone}}</th>
                            <th>{{$user->email}}</th>
                            <th>{{$user->created_at}}</th>
                            <th>
                                <a href="{{url('admin/user/edit',['id' => $user->id])}}" class="btn btn-sm btn-primary">编辑</a>
                                <a href="{{url('admin/user/del',['id' => $user->id])}}" class="btn btn-sm btn-info" id="del_{{$user->id}}">删除</a>
                            </th>
                        </tr>
                        @endforeach
                    </table>
                    <div id="page">
                        {{$staffInfo->appends($_GET)->links()}}
                    </div>
                    <div>
                        <span>总: {{$count}} 条</span>
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
$('[id^=del_]').click(function(){
    return confirm('是否真的删除呢?');
});
@endsection
