@extends('layouts/admin')
@section('link')
<link href="{{asset('admin')}}/css/fonts_os400.css" rel="stylesheet" type="text/css" />
<link href="{{asset('admin')}}/css/fonts_os700.css" rel="stylesheet" type="text/css" />
<link href="{{asset('admin')}}/css/fonts_ds400.css" rel="stylesheet" type="text/css" />
<link href="{{asset('admin')}}/css/fonts_ds700.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div id="content">
	<!-- Start .content-wrapper -->
	<div class="content-wrapper">
	    <div class="row">
	        <!-- Start .row -->
	        <!-- Start .page-header -->
	        <div class="col-lg-12 heading">
	            <h1 class="page-header"><i class="im-table2"></i> Data Tables</h1>
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
	            <div class="col-lg-12">
	                <!-- col-lg-12 start here -->
	                <div class="panel panel-default plain toggle panelClose panelRefresh">
	                    <!-- Start .panel -->
	                    <div class="panel-heading white-bg">
	                        <h4 class="panel-title">Data table</h4>
	                    </div>
	                    <div class="panel-body">
	                        <table class="table display" id="datatable">
	                            <thead>
	                                <tr>
	                                    <th>Rendering engine</th>
	                                    <th>Browser</th>
	                                    <th>Platform(s)</th>
	                                    <th>Engine version</th>
	                                    <th>CSS grade</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr class="odd gradeX">
	                                    <td>Trident</td>
	                                    <td>Internet Explorer 4.0</td>
	                                    <td>Win 95+</td>
	                                    <td class="center">4</td>
	                                    <td class="center">X</td>
	                                </tr>
	                                <tr class="even gradeC">
	                                    <td>Trident</td>
	                                    <td>Internet Explorer 5.0</td>
	                                    <td>Win 95+</td>
	                                    <td class="center">5</td>
	                                    <td class="center">C</td>
	                                </tr>
	                                <tr class="odd gradeA">
	                                    <td>Trident</td>
	                                    <td>Internet Explorer 5.5</td>
	                                    <td>Win 95+</td>
	                                    <td class="center">5.5</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="even gradeA">
	                                    <td>Trident</td>
	                                    <td>Internet Explorer 6</td>
	                                    <td>Win 98+</td>
	                                    <td class="center">6</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="odd gradeA">
	                                    <td>Trident</td>
	                                    <td>Internet Explorer 7</td>
	                                    <td>Win XP SP2+</td>
	                                    <td class="center">7</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="even gradeA">
	                                    <td>Trident</td>
	                                    <td>AOL browser (AOL desktop)</td>
	                                    <td>Win XP</td>
	                                    <td class="center">6</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Firefox 1.0</td>
	                                    <td>Win 98+ / OSX.2+</td>
	                                    <td class="center">1.7</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Firefox 1.5</td>
	                                    <td>Win 98+ / OSX.2+</td>
	                                    <td class="center">1.8</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Firefox 2.0</td>
	                                    <td>Win 98+ / OSX.2+</td>
	                                    <td class="center">1.8</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Firefox 3.0</td>
	                                    <td>Win 2k+ / OSX.3+</td>
	                                    <td class="center">1.9</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Camino 1.0</td>
	                                    <td>OSX.2+</td>
	                                    <td class="center">1.8</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Camino 1.5</td>
	                                    <td>OSX.3+</td>
	                                    <td class="center">1.8</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Netscape 7.2</td>
	                                    <td>Win 95+ / Mac OS 8.6-9.2</td>
	                                    <td class="center">1.7</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Netscape Browser 8</td>
	                                    <td>Win 98SE+</td>
	                                    <td class="center">1.7</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Netscape Navigator 9</td>
	                                    <td>Win 98+ / OSX.2+</td>
	                                    <td class="center">1.8</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Mozilla 1.0</td>
	                                    <td>Win 95+ / OSX.1+</td>
	                                    <td class="center">1</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Mozilla 1.1</td>
	                                    <td>Win 95+ / OSX.1+</td>
	                                    <td class="center">1.1</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Mozilla 1.2</td>
	                                    <td>Win 95+ / OSX.1+</td>
	                                    <td class="center">1.2</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Mozilla 1.3</td>
	                                    <td>Win 95+ / OSX.1+</td>
	                                    <td class="center">1.3</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Mozilla 1.4</td>
	                                    <td>Win 95+ / OSX.1+</td>
	                                    <td class="center">1.4</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Mozilla 1.5</td>
	                                    <td>Win 95+ / OSX.1+</td>
	                                    <td class="center">1.5</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Mozilla 1.6</td>
	                                    <td>Win 95+ / OSX.1+</td>
	                                    <td class="center">1.6</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Mozilla 1.7</td>
	                                    <td>Win 98+ / OSX.1+</td>
	                                    <td class="center">1.7</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Mozilla 1.8</td>
	                                    <td>Win 98+ / OSX.1+</td>
	                                    <td class="center">1.8</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Seamonkey 1.1</td>
	                                    <td>Win 98+ / OSX.2+</td>
	                                    <td class="center">1.8</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Epiphany 2.20</td>
	                                    <td>Gnome</td>
	                                    <td class="center">1.8</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Webkit</td>
	                                    <td>Safari 1.2</td>
	                                    <td>OSX.3</td>
	                                    <td class="center">125.5</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Webkit</td>
	                                    <td>Safari 1.3</td>
	                                    <td>OSX.3</td>
	                                    <td class="center">312.8</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Webkit</td>
	                                    <td>Safari 2.0</td>
	                                    <td>OSX.4+</td>
	                                    <td class="center">419.3</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Webkit</td>
	                                    <td>Safari 3.0</td>
	                                    <td>OSX.4+</td>
	                                    <td class="center">522.1</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Webkit</td>
	                                    <td>OmniWeb 5.5</td>
	                                    <td>OSX.4+</td>
	                                    <td class="center">420</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Webkit</td>
	                                    <td>iPod Touch / iPhone</td>
	                                    <td>iPod</td>
	                                    <td class="center">420.1</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Webkit</td>
	                                    <td>S60</td>
	                                    <td>S60</td>
	                                    <td class="center">413</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Presto</td>
	                                    <td>Opera 7.0</td>
	                                    <td>Win 95+ / OSX.1+</td>
	                                    <td class="center">-</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Presto</td>
	                                    <td>Opera 7.5</td>
	                                    <td>Win 95+ / OSX.2+</td>
	                                    <td class="center">-</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Presto</td>
	                                    <td>Opera 8.0</td>
	                                    <td>Win 95+ / OSX.2+</td>
	                                    <td class="center">-</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Presto</td>
	                                    <td>Opera 8.5</td>
	                                    <td>Win 95+ / OSX.2+</td>
	                                    <td class="center">-</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Presto</td>
	                                    <td>Opera 9.0</td>
	                                    <td>Win 95+ / OSX.3+</td>
	                                    <td class="center">-</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Presto</td>
	                                    <td>Opera 9.2</td>
	                                    <td>Win 88+ / OSX.3+</td>
	                                    <td class="center">-</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Presto</td>
	                                    <td>Opera 9.5</td>
	                                    <td>Win 88+ / OSX.3+</td>
	                                    <td class="center">-</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Presto</td>
	                                    <td>Opera for Wii</td>
	                                    <td>Wii</td>
	                                    <td class="center">-</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Presto</td>
	                                    <td>Nokia N800</td>
	                                    <td>N800</td>
	                                    <td class="center">-</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Presto</td>
	                                    <td>Nintendo DS browser</td>
	                                    <td>Nintendo DS</td>
	                                    <td class="center">8.5</td>
	                                    <td class="center">C/A
	                                        <sup>1</sup>
	                                    </td>
	                                </tr>
	                                <tr class="gradeC">
	                                    <td>KHTML</td>
	                                    <td>Konqureror 3.1</td>
	                                    <td>KDE 3.1</td>
	                                    <td class="center">3.1</td>
	                                    <td class="center">C</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>KHTML</td>
	                                    <td>Konqureror 3.3</td>
	                                    <td>KDE 3.3</td>
	                                    <td class="center">3.3</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>KHTML</td>
	                                    <td>Konqureror 3.5</td>
	                                    <td>KDE 3.5</td>
	                                    <td class="center">3.5</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeX">
	                                    <td>Tasman</td>
	                                    <td>Internet Explorer 4.5</td>
	                                    <td>Mac OS 8-9</td>
	                                    <td class="center">-</td>
	                                    <td class="center">X</td>
	                                </tr>
	                                <tr class="gradeC">
	                                    <td>Tasman</td>
	                                    <td>Internet Explorer 5.1</td>
	                                    <td>Mac OS 7.6-9</td>
	                                    <td class="center">1</td>
	                                    <td class="center">C</td>
	                                </tr>
	                                <tr class="gradeC">
	                                    <td>Tasman</td>
	                                    <td>Internet Explorer 5.2</td>
	                                    <td>Mac OS 8-X</td>
	                                    <td class="center">1</td>
	                                    <td class="center">C</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Misc</td>
	                                    <td>NetFront 3.1</td>
	                                    <td>Embedded devices</td>
	                                    <td class="center">-</td>
	                                    <td class="center">C</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Misc</td>
	                                    <td>NetFront 3.4</td>
	                                    <td>Embedded devices</td>
	                                    <td class="center">-</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeX">
	                                    <td>Misc</td>
	                                    <td>Dillo 0.8</td>
	                                    <td>Embedded devices</td>
	                                    <td class="center">-</td>
	                                    <td class="center">X</td>
	                                </tr>
	                                <tr class="gradeX">
	                                    <td>Misc</td>
	                                    <td>Links</td>
	                                    <td>Text only</td>
	                                    <td class="center">-</td>
	                                    <td class="center">X</td>
	                                </tr>
	                                <tr class="gradeX">
	                                    <td>Misc</td>
	                                    <td>Lynx</td>
	                                    <td>Text only</td>
	                                    <td class="center">-</td>
	                                    <td class="center">X</td>
	                                </tr>
	                                <tr class="gradeC">
	                                    <td>Misc</td>
	                                    <td>IE Mobile</td>
	                                    <td>Windows Mobile 6</td>
	                                    <td class="center">-</td>
	                                    <td class="center">C</td>
	                                </tr>
	                                <tr class="gradeC">
	                                    <td>Misc</td>
	                                    <td>PSP browser</td>
	                                    <td>PSP</td>
	                                    <td class="center">-</td>
	                                    <td class="center">C</td>
	                                </tr>
	                                <tr class="gradeU">
	                                    <td>Other browsers</td>
	                                    <td>All others</td>
	                                    <td>-</td>
	                                    <td class="center">-</td>
	                                    <td class="center">U</td>
	                                </tr>
	                            </tbody>
	                            <tfoot>
	                                <tr>
	                                    <th>Rendering engine</th>
	                                    <th>Browser</th>
	                                    <th>Platform(s)</th>
	                                    <th>Engine version</th>
	                                    <th>CSS grade</th>
	                                </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                </div>
	                <!-- End .panel -->
	            </div>
	            <!-- col-lg-12 end here -->
	        </div>
	        <div class="row">
	            <div class="col-lg-12">
	                <!-- col-lg-12 start here -->
	                <div class="panel panel-default plain toggle panelClose panelRefresh">
	                    <!-- Start .panel -->
	                    <div class="panel-heading white-bg">
	                        <h4 class="panel-title">With Table tools</h4>
	                    </div>
	                    <div class="panel-body">
	                        <table class="table display" id="datatable1">
	                            <thead>
	                                <tr>
	                                    <th>Rendering engine</th>
	                                    <th>Browser</th>
	                                    <th>Platform(s)</th>
	                                    <th>Engine version</th>
	                                    <th>CSS grade</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr class="odd gradeX">
	                                    <td>Trident</td>
	                                    <td>Internet Explorer 4.0</td>
	                                    <td>Win 95+</td>
	                                    <td class="center">4</td>
	                                    <td class="center">X</td>
	                                </tr>
	                                <tr class="even gradeC">
	                                    <td>Trident</td>
	                                    <td>Internet Explorer 5.0</td>
	                                    <td>Win 95+</td>
	                                    <td class="center">5</td>
	                                    <td class="center">C</td>
	                                </tr>
	                                <tr class="odd gradeA">
	                                    <td>Trident</td>
	                                    <td>Internet Explorer 5.5</td>
	                                    <td>Win 95+</td>
	                                    <td class="center">5.5</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="even gradeA">
	                                    <td>Trident</td>
	                                    <td>Internet Explorer 6</td>
	                                    <td>Win 98+</td>
	                                    <td class="center">6</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="odd gradeA">
	                                    <td>Trident</td>
	                                    <td>Internet Explorer 7</td>
	                                    <td>Win XP SP2+</td>
	                                    <td class="center">7</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="even gradeA">
	                                    <td>Trident</td>
	                                    <td>AOL browser (AOL desktop)</td>
	                                    <td>Win XP</td>
	                                    <td class="center">6</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Firefox 1.0</td>
	                                    <td>Win 98+ / OSX.2+</td>
	                                    <td class="center">1.7</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Firefox 1.5</td>
	                                    <td>Win 98+ / OSX.2+</td>
	                                    <td class="center">1.8</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Firefox 2.0</td>
	                                    <td>Win 98+ / OSX.2+</td>
	                                    <td class="center">1.8</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Firefox 3.0</td>
	                                    <td>Win 2k+ / OSX.3+</td>
	                                    <td class="center">1.9</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Camino 1.0</td>
	                                    <td>OSX.2+</td>
	                                    <td class="center">1.8</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Camino 1.5</td>
	                                    <td>OSX.3+</td>
	                                    <td class="center">1.8</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Netscape 7.2</td>
	                                    <td>Win 95+ / Mac OS 8.6-9.2</td>
	                                    <td class="center">1.7</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Netscape Browser 8</td>
	                                    <td>Win 98SE+</td>
	                                    <td class="center">1.7</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Netscape Navigator 9</td>
	                                    <td>Win 98+ / OSX.2+</td>
	                                    <td class="center">1.8</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Mozilla 1.0</td>
	                                    <td>Win 95+ / OSX.1+</td>
	                                    <td class="center">1</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Mozilla 1.1</td>
	                                    <td>Win 95+ / OSX.1+</td>
	                                    <td class="center">1.1</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Mozilla 1.2</td>
	                                    <td>Win 95+ / OSX.1+</td>
	                                    <td class="center">1.2</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Mozilla 1.3</td>
	                                    <td>Win 95+ / OSX.1+</td>
	                                    <td class="center">1.3</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Mozilla 1.4</td>
	                                    <td>Win 95+ / OSX.1+</td>
	                                    <td class="center">1.4</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Mozilla 1.5</td>
	                                    <td>Win 95+ / OSX.1+</td>
	                                    <td class="center">1.5</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Mozilla 1.6</td>
	                                    <td>Win 95+ / OSX.1+</td>
	                                    <td class="center">1.6</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Mozilla 1.7</td>
	                                    <td>Win 98+ / OSX.1+</td>
	                                    <td class="center">1.7</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Mozilla 1.8</td>
	                                    <td>Win 98+ / OSX.1+</td>
	                                    <td class="center">1.8</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Seamonkey 1.1</td>
	                                    <td>Win 98+ / OSX.2+</td>
	                                    <td class="center">1.8</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Gecko</td>
	                                    <td>Epiphany 2.20</td>
	                                    <td>Gnome</td>
	                                    <td class="center">1.8</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Webkit</td>
	                                    <td>Safari 1.2</td>
	                                    <td>OSX.3</td>
	                                    <td class="center">125.5</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Webkit</td>
	                                    <td>Safari 1.3</td>
	                                    <td>OSX.3</td>
	                                    <td class="center">312.8</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Webkit</td>
	                                    <td>Safari 2.0</td>
	                                    <td>OSX.4+</td>
	                                    <td class="center">419.3</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Webkit</td>
	                                    <td>Safari 3.0</td>
	                                    <td>OSX.4+</td>
	                                    <td class="center">522.1</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Webkit</td>
	                                    <td>OmniWeb 5.5</td>
	                                    <td>OSX.4+</td>
	                                    <td class="center">420</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Webkit</td>
	                                    <td>iPod Touch / iPhone</td>
	                                    <td>iPod</td>
	                                    <td class="center">420.1</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Webkit</td>
	                                    <td>S60</td>
	                                    <td>S60</td>
	                                    <td class="center">413</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Presto</td>
	                                    <td>Opera 7.0</td>
	                                    <td>Win 95+ / OSX.1+</td>
	                                    <td class="center">-</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Presto</td>
	                                    <td>Opera 7.5</td>
	                                    <td>Win 95+ / OSX.2+</td>
	                                    <td class="center">-</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Presto</td>
	                                    <td>Opera 8.0</td>
	                                    <td>Win 95+ / OSX.2+</td>
	                                    <td class="center">-</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Presto</td>
	                                    <td>Opera 8.5</td>
	                                    <td>Win 95+ / OSX.2+</td>
	                                    <td class="center">-</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Presto</td>
	                                    <td>Opera 9.0</td>
	                                    <td>Win 95+ / OSX.3+</td>
	                                    <td class="center">-</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Presto</td>
	                                    <td>Opera 9.2</td>
	                                    <td>Win 88+ / OSX.3+</td>
	                                    <td class="center">-</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Presto</td>
	                                    <td>Opera 9.5</td>
	                                    <td>Win 88+ / OSX.3+</td>
	                                    <td class="center">-</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Presto</td>
	                                    <td>Opera for Wii</td>
	                                    <td>Wii</td>
	                                    <td class="center">-</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Presto</td>
	                                    <td>Nokia N800</td>
	                                    <td>N800</td>
	                                    <td class="center">-</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Presto</td>
	                                    <td>Nintendo DS browser</td>
	                                    <td>Nintendo DS</td>
	                                    <td class="center">8.5</td>
	                                    <td class="center">C/A
	                                        <sup>1</sup>
	                                    </td>
	                                </tr>
	                                <tr class="gradeC">
	                                    <td>KHTML</td>
	                                    <td>Konqureror 3.1</td>
	                                    <td>KDE 3.1</td>
	                                    <td class="center">3.1</td>
	                                    <td class="center">C</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>KHTML</td>
	                                    <td>Konqureror 3.3</td>
	                                    <td>KDE 3.3</td>
	                                    <td class="center">3.3</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>KHTML</td>
	                                    <td>Konqureror 3.5</td>
	                                    <td>KDE 3.5</td>
	                                    <td class="center">3.5</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeX">
	                                    <td>Tasman</td>
	                                    <td>Internet Explorer 4.5</td>
	                                    <td>Mac OS 8-9</td>
	                                    <td class="center">-</td>
	                                    <td class="center">X</td>
	                                </tr>
	                                <tr class="gradeC">
	                                    <td>Tasman</td>
	                                    <td>Internet Explorer 5.1</td>
	                                    <td>Mac OS 7.6-9</td>
	                                    <td class="center">1</td>
	                                    <td class="center">C</td>
	                                </tr>
	                                <tr class="gradeC">
	                                    <td>Tasman</td>
	                                    <td>Internet Explorer 5.2</td>
	                                    <td>Mac OS 8-X</td>
	                                    <td class="center">1</td>
	                                    <td class="center">C</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Misc</td>
	                                    <td>NetFront 3.1</td>
	                                    <td>Embedded devices</td>
	                                    <td class="center">-</td>
	                                    <td class="center">C</td>
	                                </tr>
	                                <tr class="gradeA">
	                                    <td>Misc</td>
	                                    <td>NetFront 3.4</td>
	                                    <td>Embedded devices</td>
	                                    <td class="center">-</td>
	                                    <td class="center">A</td>
	                                </tr>
	                                <tr class="gradeX">
	                                    <td>Misc</td>
	                                    <td>Dillo 0.8</td>
	                                    <td>Embedded devices</td>
	                                    <td class="center">-</td>
	                                    <td class="center">X</td>
	                                </tr>
	                                <tr class="gradeX">
	                                    <td>Misc</td>
	                                    <td>Links</td>
	                                    <td>Text only</td>
	                                    <td class="center">-</td>
	                                    <td class="center">X</td>
	                                </tr>
	                                <tr class="gradeX">
	                                    <td>Misc</td>
	                                    <td>Lynx</td>
	                                    <td>Text only</td>
	                                    <td class="center">-</td>
	                                    <td class="center">X</td>
	                                </tr>
	                                <tr class="gradeC">
	                                    <td>Misc</td>
	                                    <td>IE Mobile</td>
	                                    <td>Windows Mobile 6</td>
	                                    <td class="center">-</td>
	                                    <td class="center">C</td>
	                                </tr>
	                                <tr class="gradeC">
	                                    <td>Misc</td>
	                                    <td>PSP browser</td>
	                                    <td>PSP</td>
	                                    <td class="center">-</td>
	                                    <td class="center">C</td>
	                                </tr>
	                                <tr class="gradeU">
	                                    <td>Other browsers</td>
	                                    <td>All others</td>
	                                    <td>-</td>
	                                    <td class="center">-</td>
	                                    <td class="center">U</td>
	                                </tr>
	                            </tbody>
	                            <tfoot>
	                                <tr>
	                                    <th>Rendering engine</th>
	                                    <th>Browser</th>
	                                    <th>Platform(s)</th>
	                                    <th>Engine version</th>
	                                    <th>CSS grade</th>
	                                </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                </div>
	                <!-- End .panel -->
	            </div>
	            <!-- col-lg-12 end here -->
	        </div>
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
<script src="{{asset('admin')}}/plugins/tables/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('admin')}}/plugins/tables/datatables/jquery.dataTablesBS3.js"></script>
<script src="{{asset('admin')}}/plugins/tables/datatables/tabletools/ZeroClipboard.js"></script>
<script src="{{asset('admin')}}/plugins/tables/datatables/tabletools/TableTools.js"></script>
<script src="{{asset('admin')}}/plugins/misc/highlight/highlight.pack.js"></script>
<script src="{{asset('admin')}}/plugins/misc/countTo/jquery.countTo.js"></script>
<script src="{{asset('admin')}}/js/jquery.sprFlat.js"></script>
<script src="{{asset('admin')}}/js/app.js"></script>
<script src="{{asset('admin')}}/js/pages/data-tables.js"></script>
@endsection