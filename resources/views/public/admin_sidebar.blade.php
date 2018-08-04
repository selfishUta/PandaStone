<div id="sidebar">
    <!-- Start .sidebar-inner -->
    <div class="sidebar-inner">
        <!-- Start #sideNav -->
        <ul id="sideNav" class="nav nav-pills nav-stacked">
            <li class="top-search">
                <form>
                    <input type="text" name="search" placeholder="Search ...">
                    <button type="submit"><i class="ec-search s20"></i>
                    </button>
                </form>
            </li>
            <li><a href="index.html">Dashboard <i class="im-screen"></i></a>
            </li>
            <li><a href="charts.html">Charts <i class="st-chart"></i></a>
            </li>
            <li>
                <a href="#"> 管理商品分类<i class="im-paragraph-justify"></i></a>
                <ul class="nav sub">
                    <li><a href="{{url('admin/productCategory/list')}}"><i class="ec-pencil2"></i>商品分类列表</a>
                    </li>
                    <li><a href="{{url('admin/productCategory/add')}}"><i class="im-checkbox-checked"></i>添加商品分类</a>
                    </li>
                   <li><a href="{{url('admin/product/create')}}"><i class="im-checkbox-checked"></i>添加商品</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"> 库存分类管理 <i class="im-paragraph-justify"></i></a>
                <ul class="nav sub">
                    <li><a href="{{url('admin/inventory_category/add')}}"><i class="ec-pencil2"></i>添加分类</a>
                    </li>
                    <li><a href="{{url('admin/inventory_category/list')}}"><i class="ec-pencil2"></i>分类列表</a>
                    </li>
                </ul>
            </li>
            <li><a href="#"> 用户分类管理 <i class="im-paragraph-justify"></i></a>
                <ul class="nav sub">
                    <li><a href="{{url('admin/user/index')}}"><i class="ec-pencil2"></i> 普通用户分类列表 </a>
                    </li>
                </ul>
            </li>
            <li><a href="#"> 员工分类管理 <i class="im-paragraph-justify"></i></a>
                <ul class="nav sub">
                    <li><a href="{{url('admin/staff/index')}}"><i class="ec-pencil2"></i> 员工成员列表</a>
                    </li>
                    <li><a href="{{url('admin/staff/add')}}"><i class="ec-pencil2"></i> 添加员工</a>
                    </li>
                </ul>
            </li>
            <li><a href="file.html"><i class="en-upload"></i> File Manager</a>
            </li>
            <li><a href="gallery.html"><i class="im-images"></i> Gallery</a>
            </li>
            <li><a href="widgets.html"><i class="st-diamond"></i> Widgets </a>
            </li>
            <li><a href="#"><i class="ec-location"></i> Maps</a>
                <ul class="nav sub">
                    <li><a href="maps-google.html"><i class="im-map2"></i> Google maps</a>
                    </li>
                    <li><a href="maps-vector.html"><i class="en-location2"></i> Vector maps</a>
                    </li>
                </ul>
            </li>
            <li><a href="#">Pages <i class="st-files"></i></a>
                <ul class="nav sub">
                    <li><a href="invoice.html"><i class="st-file"></i> Invoice</a>
                    </li>
                    <li><a href="profile.html"><i class="ec-user"></i> Profile page</a>
                    </li>
                    <li><a href="search.html"><i class="ec-search"></i> Search page</a>
                    </li>
                    <li><a href="blank.html"><i class="im-file4"></i> Blank page</a>
                    </li>
                    <li><a href="login.html"><i class="ec-locked"></i> Login page</a>
                    </li>
                    <li><a href="lockscreen.html"><i class="ec-locked"></i> Lock screen</a>
                    </li>
                    <li>
                        <a href="#"><i class="st-files"></i> Error pages</a>
                        <ul class="nav sub">
                            <li><a href="400.html"><i class="st-file-broken"></i> Error 400</a>
                            </li>
                            <li><a href="401.html"><i class="st-file-broken"></i> Error 401</a>
                            </li>
                            <li><a href="403.html"><i class="st-file-broken"></i> Error 403</a>
                            </li>
                            <li><a href="404.html"><i class="st-file-broken"></i> Error 404</a>
                            </li>
                            <li><a href="405.html"><i class="st-file-broken"></i> Error 405</a>
                            </li>
                            <li><a href="500.html"><i class="st-file-broken"></i> Error 500</a>
                            </li>
                            <li><a href="503.html"><i class="st-file-broken"></i> Error 503</a>
                            </li>
                            <li><a href="offline.html"><i class="st-window"></i> Offline</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Bonus <i class="im-gift"></i></a>
                <ul class="nav sub">
                    <li><a href="landing.html"><i class="im-airplane"></i> Landing page</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- End #sideNav -->
        <!-- Start .sidebar-panel -->
        <div class="sidebar-panel">
            <h4 class="sidebar-panel-title"><i class="im-fire"></i> Server usage</h4>
            <div class="sidebar-panel-content">
                <ul class="server-stats">
                    <li>
                        <span class="txt">Disk space</span>
                        <span class="percent">78</span>
                        <div id="usage-sparkline" class="sparkline">Loading...</div>
                        <div class="pie-chart" data-percent="78"></div>
                    </li>
                </ul>
                <ul class="server-stats">
                    <li>
                        <span class="txt">CPU</span>
                        <span class="percent">56</span>
                        <div id="cpu-sparkline" class="sparkline">Loading...</div>
                        <div class="pie-chart" data-percent="56"></div>
                    </li>
                </ul>
                <ul class="server-stats">
                    <li>
                        <span class="txt">Memory</span>
                        <span class="percent">14</span>
                        <div id="ram-sparkline" class="sparkline">Loading...</div>
                        <div class="pie-chart" data-percent="14"></div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End .sidebar-panel -->
    </div>
    <!-- End .sidebar-inner -->
</div>
