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
                <h1 class="page-header"><i class="im-table2"></i>普通用户分类列表</h1>
                <!-- Start .bredcrumb -->
                <ul id="crumb" class="breadcrumb">
                </ul>
                <!-- End .breadcrumb -->
                <form action="{{url('admin/user/index')}}" class="form-inline" id="doSearch">
                    <input type="text" name="column" @if(isset($_GET['column'])) value="{{$_GET['column']}}" @endif placeholder="请输入查询的内容" class="form-control">
                    <select name="select" class="form-control">
                        <option value="0">用户名</option>
                        <option value="1">手机号</option>
                        <option value="2">email</option>
                    </select>
                    <button type="submit" class="btn btn-sm btn-primary">搜索</button>
                </form>
                <!-- Start .table -->
                    <table class="table table-striped" id="usertable">
                        <tr>
                            <th>用户名</th>
                            <th>联系方式</th>
                            <th>email</th>
                            <th>创建时间</th>
                            <th>操作栏</th>
                        </tr>
                        @foreach($userInfo as $user)
                        <tr>
                            <th>
                                @if(isset($_GET['column']))
                                {!!str_replace($_GET['column'],'<font color="red">'.$_GET['column'].'</font>',mb_substr($user->username,0,15))!!}
                                @else
                                {{mb_substr($user->username,0,15)}}
                                @endif
                                @if(mb_strlen($user->username) > 15)...@endif
                            </th>
                            <th>
                                @if(isset($_GET['column']))
                                {!!str_replace($_GET['column'],'<font color="red">'.$_GET['column'].'</font>',mb_substr($user->phone,0,15))!!}
                                @else
                                {{mb_substr($user->phone,0,15)}}
                                @endif
                                @if(mb_strlen($user->phone) > 15)...@endif
                            </th>
                            <th>
                                @if(isset($_GET['column']))
                                {!!str_replace($_GET['column'],'<font color="red">'.$_GET['column'].'</font>',mb_substr($user->email,0,15))!!}
                                @else
                                {{mb_substr($user->email,0,15)}}
                                @endif
                                @if(mb_strlen($user->email) > 15)...@endif
                            </th>
                            <th>{{$user->created_at}}</th>
                            <th>
                                <a href="{{url('admin/user/edit',['id' => $user->id])}}" class="btn btn-sm btn-primary">编辑</a>
                                <a href="{{url('admin/user/del',['id' => $user->id])}}" class="btn btn-sm btn-info" id="del_{{$user->id}}">删除</a>
                            </th>
                        </tr>
                        @endforeach
                    </table>
                    <div id="page">
                        {{$userInfo->appends($_GET)->links()}}
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
