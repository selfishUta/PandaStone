@extends('layouts/admin')
<!-- 主页 -->
@section('content')
<div id="content">
	<!-- Start .content-wrapper -->
	<div class="content-wrapper">
	    <div class="row">
	        <!-- Start .row -->
	        <!-- Start .page-header -->
	        <div class="col-lg-12 heading">
	            <h1 class="page-header"><i class="im-paragraph-justify"></i> Forms</h1>
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
	            <!-- Start .row -->
	            <div class="col-lg-12">
	                <!-- Start col-lg-12 -->
	                <div class="panel panel-default toggle">
	                    <!-- Start .panel -->
	                    <div class="panel-heading">
	                        <h3 class="panel-title">Form fields</h3>
	                    </div>
	                    <div class="panel-body">
	                        <form class="form-horizontal group-border hover-stripped" role="form">
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Text field</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input type="text" class="form-control" placeholder="With autofocus" autofocus="autofocus">
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Email field</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input type="email" class="form-control" placeholder="Type your email">
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Predefined value</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input type="text" class="form-control" value="http://">
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Password field</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input type="password" class="form-control" placeholder="Enter your password">
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Password metter</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input id="password-metter" type="password" class="form-control" placeholder="Enter your password">
	                                    <span class="help-block mt10">
	                        <a href="#" id="generate-password" class="btn btn-default">Generate</a>
	                        <a href="#" id="show-password" class="btn btn-default">Show password</a>
	                        <span id="output-message" class="badge p10 ml15">Enter some password</span>
	                                    </span>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Read-only field</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input type="text" class="form-control" readonly="readonly" placeholder="Only for read">
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Disabled field</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input type="text" class="form-control" disabled="disabled" placeholder="Disabled">
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">With Tooltip</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input type="text" class="form-control tip" title="Field with tooltip" placeholder="Hover for tooltip action">
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Max lenght</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input type="text" class="form-control limitInput" placeholder="Max lenght 20 chars" maxlength="20">
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">With icons</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <div class="row">
	                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	                                            <input type="text" class="form-control left-icon" placeholder="Icon on left">
	                                            <i class="st-heart s16 left-input-icon"></i> 
	                                        </div>
	                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	                                            <input type="text" class="form-control right-icon" placeholder="Icon on right">
	                                            <i class="st-heart s16 right-input-icon"></i> 
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Help texts</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <div class="row">
	                                        <div class="col-lg-4 col-md-4">
	                                            <input type="text" class="form-control">
	                                            <span class="help-block">Left help block</span>
	                                        </div>
	                                        <div class="col-lg-4 col-md-4">
	                                            <input type="text" class="form-control">
	                                            <span class="help-block text-center">Center help block</span>
	                                        </div>
	                                        <div class="col-lg-4 col-md-4">
	                                            <input type="text" class="form-control">
	                                            <span class="help-block text-right">Right help block</span>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group has-success">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Success input</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input type="text" class="form-control" placeholder="Success Field">
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group has-warning">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Warning input</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input type="text" class="form-control" placeholder="Warning Field">
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group has-error">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Error input</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input type="text" class="form-control" placeholder="Error Field">
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Small height size</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input type="text" class="form-control input-sm">
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Large height size</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input type="text" class="form-control input-lg">
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Grid input sizes</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <div class="row">
	                                        <div class="col-lg-6 col-md-6">
	                                            <input type="text" class="form-control" placeholder=".col-lg-6">
	                                        </div>
	                                        <div class="col-lg-3 col-md-3">
	                                            <input type="text" class="form-control" placeholder=".col-lg-3">
	                                        </div>
	                                        <div class="col-lg-3 col-md-3">
	                                            <input type="text" class="form-control" placeholder=".col-lg-3">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Append input group</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">@</span>
	                                        <input type="text" class="form-control" placeholder="Username">
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Prepend input group</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <div class="input-group">
	                                        <input type="text" class="form-control" placeholder="Username">
	                                        <span class="input-group-addon">.00</span>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Both input group</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <div class="input-group">
	                                        <span class="input-group-addon">$</span>
	                                        <input type="text" class="form-control" placeholder="Username">
	                                        <span class="input-group-addon">.00</span>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">With buttons</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <div class="row">
	                                        <div class="col-lg-6 col-md-6">
	                                            <div class="input-group">
	                                                <span class="input-group-btn">
	                                    <button class="btn btn-primary" type="button">Go!</button>
	                                </span>
	                                                <input type="text" class="form-control">
	                                            </div>
	                                        </div>
	                                        <div class="col-lg-6 col-md-6">
	                                            <div class="input-group">
	                                                <input type="text" class="form-control">
	                                                <span class="input-group-btn">
	                                    <button class="btn btn-primary" type="button">Go!</button>
	                                </span>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">With dropdowns</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <div class="row">
	                                        <div class="col-lg-6 col-md-6">
	                                            <div class="input-group">
	                                                <div class="input-group-btn">
	                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span>
	                                                    </button>
	                                                    <ul class="dropdown-menu">
	                                                        <li><a href="#">Action</a>
	                                                        </li>
	                                                        <li><a href="#">Another action</a>
	                                                        </li>
	                                                        <li><a href="#">Something else here</a>
	                                                        </li>
	                                                        <li class="divider"></li>
	                                                        <li><a href="#">Separated link</a>
	                                                        </li>
	                                                    </ul>
	                                                </div>
	                                                <!-- /btn-group -->
	                                                <input type="text" class="form-control">
	                                            </div>
	                                            <!-- /input-group -->
	                                        </div>
	                                        <div class="col-lg-6 col-md-6">
	                                            <div class="input-group">
	                                                <input type="text" class="form-control">
	                                                <div class="input-group-btn">
	                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span>
	                                                    </button>
	                                                    <ul class="dropdown-menu pull-right">
	                                                        <li><a href="#">Action</a>
	                                                        </li>
	                                                        <li><a href="#">Another action</a>
	                                                        </li>
	                                                        <li><a href="#">Something else here</a>
	                                                        </li>
	                                                        <li class="divider"></li>
	                                                        <li><a href="#">Separated link</a>
	                                                        </li>
	                                                    </ul>
	                                                </div>
	                                                <!-- /btn-group -->
	                                            </div>
	                                            <!-- /input-group -->
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Tags</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input type="text" class="form-control tags" value="red, green, yellow">
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">File Upload</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input type="file" class="form-control">
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                        </form>
	                    </div>
	                </div>
	                <!-- End .panel -->
	            </div>
	            <!-- End col-lg-12 -->
	        </div>
	        <!-- End .row -->
	        <div class="row">
	            <!-- Start .row -->
	            <div class="col-lg-12">
	                <!-- Start col-lg-12 -->
	                <div class="panel panel-default toggle">
	                    <!-- Start .panel -->
	                    <div class="panel-heading">
	                        <h3 class="panel-title">Masked Input</h3>
	                    </div>
	                    <div class="panel-body">
	                        <form class="form-horizontal" role="form">
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Phone Field</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input class="form-control" id="mask-phone" type="text">
	                                    <span class="help-block">(999) 999-9999</span>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Phone field + ext.</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input class="form-control" id="mask-phoneExt" type="text">
	                                    <span class="help-block">(999) 999-9999? x99999</span>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">International phone</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input class="form-control" id="mask-phoneInt" type="text">
	                                    <span class="help-block">+40 999 999 999</span>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Date field</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input class="form-control" id="mask-date" type="text">
	                                    <span class="help-block">99/99/9999</span>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">SSN field</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input class="form-control" id="mask-ssn" type="text">
	                                    <span class="help-block">999-99-9999</span>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Product key</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input class="form-control" id="mask-productKey" type="text">
	                                    <span class="help-block">a*-999-a999</span>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Eye Script</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input class="form-control" id="mask-eyeScript" type="text">
	                                    <span class="help-block">~9.99 ~9.99 999</span>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Percent</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input class="form-control" id="mask-percent" type="text">
	                                    <span class="help-block">99%</span>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                        </form>
	                    </div>
	                </div>
	                <!-- End .panel -->
	            </div>
	            <!-- End col-lg-12 -->
	        </div>
	        <!-- End .row -->
	        <div class="row">
	            <!-- Start .row -->
	            <div class="col-lg-12">
	                <!-- Start col-lg-12 -->
	                <div class="panel panel-default toggle">
	                    <!-- Start .panel -->
	                    <div class="panel-heading">
	                        <h3 class="panel-title">Textareas and Selects</h3>
	                    </div>
	                    <div class="panel-body">
	                        <form class="form-horizontal group-border" role="form">
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Normal text area</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <textarea class="form-control" rows="3"></textarea>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Elastic text area</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <textarea class="form-control elastic" rows="3"></textarea>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">With input limit</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <textarea class="form-control limitTextarea" maxlength="250" rows="3"></textarea>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Selects</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <div class="row">
	                                        <div class="col-lg-6 col-md-6">
	                                            <select class="form-control">
	                                                <optgroup label="Alaskan/Hawaiian Time Zone">
	                                                    <option value="AK">Alaska</option>
	                                                    <option value="HI">Hawaii</option>
	                                                </optgroup>
	                                                <optgroup label="Pacific Time Zone">
	                                                    <option value="CA">California</option>
	                                                    <option value="NV">Nevada</option>
	                                                    <option value="OR">Oregon</option>
	                                                    <option value="WA">Washington</option>
	                                                </optgroup>
	                                                <optgroup label="Mountain Time Zone">
	                                                    <option value="AZ">Arizona</option>
	                                                    <option value="CO">Colorado</option>
	                                                    <option value="ID">Idaho</option>
	                                                    <option value="MT">Montana</option>
	                                                    <option value="NE">Nebraska</option>
	                                                    <option value="NM">New Mexico</option>
	                                                    <option value="ND">North Dakota</option>
	                                                    <option value="UT">Utah</option>
	                                                    <option value="WY">Wyoming</option>
	                                                </optgroup>
	                                                <optgroup label="Central Time Zone">
	                                                    <option value="AL">Alabama</option>
	                                                    <option value="AR">Arkansas</option>
	                                                    <option value="IL">Illinois</option>
	                                                    <option value="IA">Iowa</option>
	                                                    <option value="KS">Kansas</option>
	                                                    <option value="KY">Kentucky</option>
	                                                    <option value="LA">Louisiana</option>
	                                                    <option value="MN">Minnesota</option>
	                                                    <option value="MS">Mississippi</option>
	                                                    <option value="MO">Missouri</option>
	                                                    <option value="OK">Oklahoma</option>
	                                                    <option value="SD">South Dakota</option>
	                                                    <option value="TX">Texas</option>
	                                                    <option value="TN">Tennessee</option>
	                                                    <option value="WI">Wisconsin</option>
	                                                </optgroup>
	                                                <optgroup label="Eastern Time Zone">
	                                                    <option value="CT">Connecticut</option>
	                                                    <option value="DE">Delaware</option>
	                                                    <option value="FL">Florida</option>
	                                                    <option value="GA">Georgia</option>
	                                                    <option value="IN">Indiana</option>
	                                                    <option value="ME">Maine</option>
	                                                    <option value="MD">Maryland</option>
	                                                    <option value="MA">Massachusetts</option>
	                                                    <option value="MI">Michigan</option>
	                                                    <option value="NH">New Hampshire</option>
	                                                    <option value="NJ">New Jersey</option>
	                                                    <option value="NY">New York</option>
	                                                    <option value="NC">North Carolina</option>
	                                                    <option value="OH">Ohio</option>
	                                                    <option value="PA">Pennsylvania</option>
	                                                    <option value="RI">Rhode Island</option>
	                                                    <option value="SC">South Carolina</option>
	                                                    <option value="VT">Vermont</option>
	                                                    <option value="VA">Virginia</option>
	                                                    <option value="WV">West Virginia</option>
	                                                </optgroup>
	                                            </select>
	                                            <span class="help-block">Simple select</span>
	                                        </div>
	                                        <div class="col-lg-6 col-md-6">
	                                            <select style="height:200px;" class="form-control" multiple>
	                                                <optgroup label="Alaskan/Hawaiian Time Zone">
	                                                    <option value="AK">Alaska</option>
	                                                    <option value="HI">Hawaii</option>
	                                                </optgroup>
	                                                <optgroup label="Pacific Time Zone">
	                                                    <option value="CA">California</option>
	                                                    <option value="NV">Nevada</option>
	                                                    <option value="OR">Oregon</option>
	                                                    <option value="WA">Washington</option>
	                                                </optgroup>
	                                                <optgroup label="Mountain Time Zone">
	                                                    <option value="AZ">Arizona</option>
	                                                    <option value="CO">Colorado</option>
	                                                    <option value="ID">Idaho</option>
	                                                    <option value="MT">Montana</option>
	                                                    <option value="NE">Nebraska</option>
	                                                    <option value="NM">New Mexico</option>
	                                                    <option value="ND">North Dakota</option>
	                                                    <option value="UT">Utah</option>
	                                                    <option value="WY">Wyoming</option>
	                                                </optgroup>
	                                                <optgroup label="Central Time Zone">
	                                                    <option value="AL">Alabama</option>
	                                                    <option value="AR">Arkansas</option>
	                                                    <option value="IL">Illinois</option>
	                                                    <option value="IA">Iowa</option>
	                                                    <option value="KS">Kansas</option>
	                                                    <option value="KY">Kentucky</option>
	                                                    <option value="LA">Louisiana</option>
	                                                    <option value="MN">Minnesota</option>
	                                                    <option value="MS">Mississippi</option>
	                                                    <option value="MO">Missouri</option>
	                                                    <option value="OK">Oklahoma</option>
	                                                    <option value="SD">South Dakota</option>
	                                                    <option value="TX">Texas</option>
	                                                    <option value="TN">Tennessee</option>
	                                                    <option value="WI">Wisconsin</option>
	                                                </optgroup>
	                                                <optgroup label="Eastern Time Zone">
	                                                    <option value="CT">Connecticut</option>
	                                                    <option value="DE">Delaware</option>
	                                                    <option value="FL">Florida</option>
	                                                    <option value="GA">Georgia</option>
	                                                    <option value="IN">Indiana</option>
	                                                    <option value="ME">Maine</option>
	                                                    <option value="MD">Maryland</option>
	                                                    <option value="MA">Massachusetts</option>
	                                                    <option value="MI">Michigan</option>
	                                                    <option value="NH">New Hampshire</option>
	                                                    <option value="NJ">New Jersey</option>
	                                                    <option value="NY">New York</option>
	                                                    <option value="NC">North Carolina</option>
	                                                    <option value="OH">Ohio</option>
	                                                    <option value="PA">Pennsylvania</option>
	                                                    <option value="RI">Rhode Island</option>
	                                                    <option value="SC">South Carolina</option>
	                                                    <option value="VT">Vermont</option>
	                                                    <option value="VA">Virginia</option>
	                                                    <option value="WV">West Virginia</option>
	                                                </optgroup>
	                                            </select>
	                                            <span class="help-block">Multiple select (Hold CTRL key )</span>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Select2</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <div class="row">
	                                        <div class="col-lg-6 col-md-6">
	                                            <select class="form-control select2">
	                                                <optgroup label="Alaskan/Hawaiian Time Zone">
	                                                    <option value="AK">Alaska</option>
	                                                    <option value="HI">Hawaii</option>
	                                                </optgroup>
	                                                <optgroup label="Pacific Time Zone">
	                                                    <option value="CA">California</option>
	                                                    <option value="NV">Nevada</option>
	                                                    <option value="OR">Oregon</option>
	                                                    <option value="WA">Washington</option>
	                                                </optgroup>
	                                                <optgroup label="Mountain Time Zone">
	                                                    <option value="AZ">Arizona</option>
	                                                    <option value="CO">Colorado</option>
	                                                    <option value="ID">Idaho</option>
	                                                    <option value="MT">Montana</option>
	                                                    <option value="NE">Nebraska</option>
	                                                    <option value="NM">New Mexico</option>
	                                                    <option value="ND">North Dakota</option>
	                                                    <option value="UT">Utah</option>
	                                                    <option value="WY">Wyoming</option>
	                                                </optgroup>
	                                                <optgroup label="Central Time Zone">
	                                                    <option value="AL">Alabama</option>
	                                                    <option value="AR">Arkansas</option>
	                                                    <option value="IL">Illinois</option>
	                                                    <option value="IA">Iowa</option>
	                                                    <option value="KS">Kansas</option>
	                                                    <option value="KY">Kentucky</option>
	                                                    <option value="LA">Louisiana</option>
	                                                    <option value="MN">Minnesota</option>
	                                                    <option value="MS">Mississippi</option>
	                                                    <option value="MO">Missouri</option>
	                                                    <option value="OK">Oklahoma</option>
	                                                    <option value="SD">South Dakota</option>
	                                                    <option value="TX">Texas</option>
	                                                    <option value="TN">Tennessee</option>
	                                                    <option value="WI">Wisconsin</option>
	                                                </optgroup>
	                                                <optgroup label="Eastern Time Zone">
	                                                    <option value="CT">Connecticut</option>
	                                                    <option value="DE">Delaware</option>
	                                                    <option value="FL">Florida</option>
	                                                    <option value="GA">Georgia</option>
	                                                    <option value="IN">Indiana</option>
	                                                    <option value="ME">Maine</option>
	                                                    <option value="MD">Maryland</option>
	                                                    <option value="MA">Massachusetts</option>
	                                                    <option value="MI">Michigan</option>
	                                                    <option value="NH">New Hampshire</option>
	                                                    <option value="NJ">New Jersey</option>
	                                                    <option value="NY">New York</option>
	                                                    <option value="NC">North Carolina</option>
	                                                    <option value="OH">Ohio</option>
	                                                    <option value="PA">Pennsylvania</option>
	                                                    <option value="RI">Rhode Island</option>
	                                                    <option value="SC">South Carolina</option>
	                                                    <option value="VT">Vermont</option>
	                                                    <option value="VA">Virginia</option>
	                                                    <option value="WV">West Virginia</option>
	                                                </optgroup>
	                                            </select>
	                                            <span class="help-block">Basic example</span>
	                                        </div>
	                                        <div class="col-lg-6 col-md-6">
	                                            <select class="form-control select2" multiple>
	                                                <optgroup label="Alaskan/Hawaiian Time Zone">
	                                                    <option value="AK">Alaska</option>
	                                                    <option value="HI">Hawaii</option>
	                                                </optgroup>
	                                                <optgroup label="Pacific Time Zone">
	                                                    <option value="CA">California</option>
	                                                    <option value="NV">Nevada</option>
	                                                    <option value="OR">Oregon</option>
	                                                    <option value="WA">Washington</option>
	                                                </optgroup>
	                                                <optgroup label="Mountain Time Zone">
	                                                    <option value="AZ">Arizona</option>
	                                                    <option value="CO">Colorado</option>
	                                                    <option value="ID">Idaho</option>
	                                                    <option value="MT">Montana</option>
	                                                    <option value="NE">Nebraska</option>
	                                                    <option value="NM">New Mexico</option>
	                                                    <option value="ND">North Dakota</option>
	                                                    <option value="UT">Utah</option>
	                                                    <option value="WY">Wyoming</option>
	                                                </optgroup>
	                                                <optgroup label="Central Time Zone">
	                                                    <option value="AL">Alabama</option>
	                                                    <option value="AR">Arkansas</option>
	                                                    <option value="IL">Illinois</option>
	                                                    <option value="IA">Iowa</option>
	                                                    <option value="KS">Kansas</option>
	                                                    <option value="KY">Kentucky</option>
	                                                    <option value="LA">Louisiana</option>
	                                                    <option value="MN">Minnesota</option>
	                                                    <option value="MS">Mississippi</option>
	                                                    <option value="MO">Missouri</option>
	                                                    <option value="OK">Oklahoma</option>
	                                                    <option value="SD">South Dakota</option>
	                                                    <option value="TX">Texas</option>
	                                                    <option value="TN">Tennessee</option>
	                                                    <option value="WI">Wisconsin</option>
	                                                </optgroup>
	                                                <optgroup label="Eastern Time Zone">
	                                                    <option value="CT">Connecticut</option>
	                                                    <option value="DE">Delaware</option>
	                                                    <option value="FL">Florida</option>
	                                                    <option value="GA">Georgia</option>
	                                                    <option value="IN">Indiana</option>
	                                                    <option value="ME">Maine</option>
	                                                    <option value="MD">Maryland</option>
	                                                    <option value="MA">Massachusetts</option>
	                                                    <option value="MI">Michigan</option>
	                                                    <option value="NH">New Hampshire</option>
	                                                    <option value="NJ">New Jersey</option>
	                                                    <option value="NY">New York</option>
	                                                    <option value="NC">North Carolina</option>
	                                                    <option value="OH">Ohio</option>
	                                                    <option value="PA">Pennsylvania</option>
	                                                    <option value="RI">Rhode Island</option>
	                                                    <option value="SC">South Carolina</option>
	                                                    <option value="VT">Vermont</option>
	                                                    <option value="VA">Virginia</option>
	                                                    <option value="WV">West Virginia</option>
	                                                </optgroup>
	                                            </select>
	                                            <span class="help-block">Multiple select</span>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Dual select box</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <select multiple="multiple" size="10" name="duallistbox" class="duallistbox col-lg-12">
	                                        <optgroup label="Alaskan/Hawaiian Time Zone">
	                                            <option value="AK">Alaska</option>
	                                            <option value="HI">Hawaii</option>
	                                        </optgroup>
	                                        <optgroup label="Pacific Time Zone">
	                                            <option value="CA">California</option>
	                                            <option value="NV">Nevada</option>
	                                            <option value="OR">Oregon</option>
	                                            <option value="WA">Washington</option>
	                                        </optgroup>
	                                        <optgroup label="Mountain Time Zone">
	                                            <option value="AZ">Arizona</option>
	                                            <option value="CO">Colorado</option>
	                                            <option value="ID">Idaho</option>
	                                            <option value="MT" selected>Montana</option>
	                                            <option value="NE">Nebraska</option>
	                                            <option value="NM">New Mexico</option>
	                                            <option value="ND">North Dakota</option>
	                                            <option value="UT">Utah</option>
	                                            <option value="WY">Wyoming</option>
	                                        </optgroup>
	                                        <optgroup label="Central Time Zone">
	                                            <option value="AL">Alabama</option>
	                                            <option value="AR">Arkansas</option>
	                                            <option value="IL">Illinois</option>
	                                            <option value="IA">Iowa</option>
	                                            <option value="KS" selected>Kansas</option>
	                                            <option value="KY">Kentucky</option>
	                                            <option value="LA">Louisiana</option>
	                                            <option value="MN">Minnesota</option>
	                                            <option value="MS">Mississippi</option>
	                                            <option value="MO">Missouri</option>
	                                            <option value="OK">Oklahoma</option>
	                                            <option value="SD">South Dakota</option>
	                                            <option value="TX">Texas</option>
	                                            <option value="TN">Tennessee</option>
	                                            <option value="WI">Wisconsin</option>
	                                        </optgroup>
	                                        <optgroup label="Eastern Time Zone">
	                                            <option value="CT">Connecticut</option>
	                                            <option value="DE">Delaware</option>
	                                            <option value="FL">Florida</option>
	                                            <option value="GA">Georgia</option>
	                                            <option value="IN">Indiana</option>
	                                            <option value="ME">Maine</option>
	                                            <option value="MD">Maryland</option>
	                                            <option value="MA">Massachusetts</option>
	                                            <option value="MI">Michigan</option>
	                                            <option value="NH">New Hampshire</option>
	                                            <option value="NJ">New Jersey</option>
	                                            <option value="NY">New York</option>
	                                            <option value="NC">North Carolina</option>
	                                            <option value="OH">Ohio</option>
	                                            <option value="PA">Pennsylvania</option>
	                                            <option value="RI">Rhode Island</option>
	                                            <option value="SC">South Carolina</option>
	                                            <option value="VT">Vermont</option>
	                                            <option value="VA">Virginia</option>
	                                            <option value="WV">West Virginia</option>
	                                        </optgroup>
	                                    </select>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                        </form>
	                    </div>
	                </div>
	                <!-- End .panel -->
	            </div>
	            <!-- End col-lg-12 -->
	        </div>
	        <!-- End .row -->
	        <div class="row">
	            <!-- Start .row -->
	            <div class="col-lg-12">
	                <!-- Start col-lg-12 -->
	                <div class="panel panel-default toggle">
	                    <!-- Start .panel -->
	                    <div class="panel-heading">
	                        <h3 class="panel-title">Checkboxes and radios</h3>
	                    </div>
	                    <div class="panel-body">
	                        <form class="form-horizontal group-border" role="form">
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Checkboxes</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <label class="checkbox">
	                                        <input type="checkbox" value="option1">unchecked
	                                    </label>
	                                    <label class="checkbox">
	                                        <input type="checkbox" value="option2" checked="checked">checked
	                                    </label>
	                                    <label class="checkbox">
	                                        <input type="checkbox" value="option3" disabled="disabled">disabled
	                                    </label>
	                                    <label class="checkbox">
	                                        <input type="checkbox" value="option4" checked="checked" disabled="disabled">checked and disabled
	                                    </label>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Inline Checkboxes</label>
	                                <label class="checkbox-inline">
	                                    <input type="checkbox" value="option1">unchecked
	                                </label>
	                                <label class="checkbox-inline">
	                                    <input type="checkbox" value="option2" checked="checked">checked
	                                </label>
	                                <label class="checkbox-inline">
	                                    <input type="checkbox" value="option3" disabled="disabled">disabled
	                                </label>
	                                <label class="checkbox-inline">
	                                    <input type="checkbox" value="option4" checked="checked" disabled="disabled">checked and disabled
	                                </label>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Check all</label>
	                                <div class="col-lg-10 col-md-10" id="checkAllExample">
	                                    <label class="checkbox">
	                                        <input class="check-all" type="checkbox" value="option1">Check all
	                                    </label>
	                                    <div class="children">
	                                        <label class="checkbox">
	                                            <input class="check" type="checkbox" value="option2">Option 1
	                                        </label>
	                                        <label class="checkbox">
	                                            <input class="check" type="checkbox" value="option3">Option 2
	                                        </label>
	                                        <label class="checkbox">
	                                            <input class="check" type="checkbox" value="option4">Option 3
	                                        </label>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Radios</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <label class="radio">
	                                        <input type="radio" name="radio" value="option1">unchecked
	                                    </label>
	                                    <label class="radio">
	                                        <input type="radio" name="radio" value="option2" checked="checked">checked
	                                    </label>
	                                    <label class="radio">
	                                        <input type="radio" name="radio" value="option3" disabled="disabled">disabled
	                                    </label>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Inline Radios</label>
	                                <label class="radio-inline">
	                                    <input type="radio" name="radio1" value="option1">unchecked
	                                </label>
	                                <label class="radio-inline">
	                                    <input type="radio" name="radio1" value="option2" checked="checked">checked
	                                </label>
	                                <label class="radio-inline">
	                                    <input type="radio" name="radio1" value="option3" disabled="disabled">disabled
	                                </label>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Switches</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input type="checkbox" class="switch noStyle" name="switch" id="switch" value="option1" checked>
	                                    <input type="checkbox" class="switch noStyle" name="switch" id="switch1" value="option1">
	                                    <input type="checkbox" class="switch noStyle" name="switch" id="switch2" value="option1" disabled>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                        </form>
	                    </div>
	                </div>
	                <!-- End .panel -->
	            </div>
	            <!-- End col-lg-12 -->
	        </div>
	        <!-- End .row -->
	        <div class="row">
	            <!-- Start .row -->
	            <div class="col-lg-12">
	                <!-- Start col-lg-12 -->
	                <div class="panel panel-default toggle">
	                    <!-- Start .panel -->
	                    <div class="panel-heading">
	                        <h3 class="panel-title">Spinners and Pickers</h3>
	                    </div>
	                    <div class="panel-body">
	                        <div class="form-horizontal group-border" role="form">
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Spinners</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <div class="row">
	                                        <div class="col-lg-3 col-md-6">
	                                            <input class="form-control" type="text" id="spinner" value="1">
	                                            <span class="help-block">Basic example</span> 
	                                        </div>
	                                        <div class="col-lg-3 col-md-6">
	                                            <input class="form-control" type="text" id="spinner-decimal" name="spinner-decimal" value="5.06">
	                                            <span class="help-block">Decimal spinner</span> 
	                                        </div>
	                                        <div class="col-lg-3 col-md-6">
	                                            <input class="form-control" type="text" id="spinner-currency" name="spinner-currency" value="5">
	                                            <span class="help-block">Currency spinner</span> 
	                                        </div>
	                                        <div class="col-lg-3 col-md-6">
	                                            <input class="form-control" type="text" id="spinner-time" name="spinner-time" value="08:30 PM">
	                                            <span class="help-block">Time spinner</span> 
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Date time picker</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <div class="row">
	                                        <div class="col-lg-4 col-md-4">
	                                            <div class="input-group">
	                                                <input class="form-control datetime-picker" type="text" value="">
	                                                <span class="input-group-addon"><i class="fa-calendar"></i></span>
	                                            </div>
	                                            <span class="help-block">Basic Usage</span>
	                                        </div>
	                                        <div class="col-lg-4 col-md-4">
	                                            <div class="input-group">
	                                                <input class="form-control datetime-picker1" type="text" value="">
	                                                <span class="input-group-addon"><i class="fa-calendar"></i></span>
	                                            </div>
	                                            <span class="help-block">With today button</span>
	                                        </div>
	                                        <div class="col-lg-4 col-md-4">
	                                            <div class="input-group">
	                                                <input class="form-control datetime-picker2" type="text" value="">
	                                                <span class="input-group-addon"><i class="fa-calendar"></i></span>
	                                            </div>
	                                            <span class="help-block">Without time picker</span>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Date range picker</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <div class="row">
	                                        <div class="col-lg-4 col-md-4">
	                                            <div class="input-group">
	                                                <input class="form-control" id="daterangepicker">
	                                                <span class="input-group-addon"><i class="fa-calendar"></i></span>
	                                            </div>
	                                            <span class="help-block">Basic Usage</span>
	                                        </div>
	                                        <div class="col-lg-4 col-md-4">
	                                            <div class="input-group">
	                                                <input id="reportrange" class="form-control">
	                                                <span class="input-group-addon"><i class="fa-calendar"></i></span>
	                                            </div>
	                                            <span class="help-block">Report range</span>
	                                        </div>
	                                        <div class="col-lg-4 col-md-4">
	                                            <div class="input-group">
	                                                <input class="form-control" id="date-time-picker">
	                                                <span class="input-group-addon"><i class="fa-calendar"></i></span>
	                                            </div>
	                                            <span class="help-block">Date and time picker</span>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Color picker</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <div class="row">
	                                        <div class="col-lg-4 col-md-4">
	                                            <input class="form-control" id="color-picker">
	                                            <span class="help-block">Predefined color</span>
	                                        </div>
	                                        <div class="col-lg-4 col-md-4">
	                                            <input class="form-control" id="showPaletteOnly">
	                                            <span class="help-block">Show pallete only</span>
	                                        </div>
	                                        <div class="col-lg-4 col-md-4">
	                                            <input class="form-control" id="minimalPicker">
	                                            <span class="help-block">Minimal</span> 
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Flat color picker</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input class="form-control" id="flat-color-picker">
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                        </div>
	                    </div>
	                </div>
	                <!-- End .panel -->
	            </div>
	            <!-- End col-lg-12 -->
	        </div>
	        <!-- End .row -->
	        <div class="row">
	            <!-- Start .row -->
	            <div class="col-lg-12">
	                <!-- col-lg-12 start here -->
	                <div class="panel panel-default toggle">
	                    <!-- Start .panel -->
	                    <div class="panel-heading">
	                        <h3 class="panel-title">Form layouts</h3>
	                    </div>
	                    <div class="panel-body">
	                        <div class="page-header">
	                            <h4>Horizontal form</h4>
	                        </div>
	                        <form class="form-horizontal" role="form">
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Full width input</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input type="text" class="form-control">
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Grid inputs</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <div class="row">
	                                        <div class="col-lg-4 col-md-4">
	                                            <input type="text" class="form-control">
	                                        </div>
	                                        <div class="col-lg-4 col-md-4">
	                                            <input type="text" class="form-control">
	                                        </div>
	                                        <div class="col-lg-4 col-md-4">
	                                            <input type="text" class="form-control">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Predefined width:</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input type="text" class="form-control input-mini">
	                                    <pre class="css"><code>.input-mini</code></pre>
	                                    <input type="text" class="form-control input-small">
	                                    <pre class="css"><code>.input-small</code></pre>
	                                    <input type="text" class="form-control input-medium">
	                                    <pre class="css"><code>.input-medium</code></pre>
	                                    <input type="text" class="form-control input-large">
	                                    <pre class="css"><code>.input-large</code></pre>
	                                    <input type="text" class="form-control input-xlarge">
	                                    <pre class="css"><code>.input-xlarge</code></pre>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                        </form>
	                        <div class="page-header">
	                            <h4>Horizontal form
	                                <small>with dividers</small>
	                            </h4>
	                        </div>
	                        <pre class="css"><code>.from-horizontal .group-border</code></pre>
	                        <form class="form-horizontal group-border" role="form">
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Full width input</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input type="text" class="form-control">
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Grid inputs</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <div class="row">
	                                        <div class="col-lg-4 col-md-4">
	                                            <input type="text" class="form-control">
	                                        </div>
	                                        <div class="col-lg-4 col-md-4">
	                                            <input type="text" class="form-control">
	                                        </div>
	                                        <div class="col-lg-4 col-md-4">
	                                            <input type="text" class="form-control">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Grid inputs</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <div class="row">
	                                        <div class="col-lg-6 col-md-6">
	                                            <input type="text" class="form-control">
	                                        </div>
	                                        <div class="col-lg-6 col-md-6">
	                                            <input type="text" class="form-control">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                        </form>
	                        <div class="page-header">
	                            <h4>Horizontal form
	                                <small>with hover-stripped</small>
	                            </h4>
	                        </div>
	                        <pre><code>.from-horizontal .group-border .hover-stripped</code></pre>
	                        <form class="form-horizontal group-border hover-stripped" role="form">
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Full width input</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <input type="text" class="form-control">
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Grid inputs</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <div class="row">
	                                        <div class="col-lg-4 col-md-4">
	                                            <input type="text" class="form-control">
	                                        </div>
	                                        <div class="col-lg-4 col-md-4">
	                                            <input type="text" class="form-control">
	                                        </div>
	                                        <div class="col-lg-4 col-md-4">
	                                            <input type="text" class="form-control">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Grid inputs</label>
	                                <div class="col-lg-10 col-md-10">
	                                    <div class="row">
	                                        <div class="col-lg-6 col-md-6">
	                                            <input type="text" class="form-control">
	                                        </div>
	                                        <div class="col-lg-6 col-md-6">
	                                            <input type="text" class="form-control">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                        </form>
	                        <div class="page-header">
	                            <h4>Vertical form
	                                <small>with dividers</small>
	                            </h4>
	                        </div>
	                        <pre><code>.from-vertical .group-border</code></pre>
	                        <form class="form-vertical group-border" role="form">
	                            <div class="form-group">
	                                <label class="col-sm-12 control-label">Full width input</label>
	                                <input type="text" class="form-control">
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-sm-12 control-label">Grid inputs</label>
	                                <div class="row">
	                                    <div class="col-lg-4 col-md-4">
	                                        <input type="text" class="form-control">
	                                    </div>
	                                    <div class="col-lg-4 col-md-4">
	                                        <input type="text" class="form-control">
	                                    </div>
	                                    <div class="col-lg-4 col-md-4">
	                                        <input type="text" class="form-control">
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-sm-12 control-label">Grid inputs</label>
	                                <div class="row">
	                                    <div class="col-lg-6 col-md-6">
	                                        <input type="text" class="form-control">
	                                    </div>
	                                    <div class="col-lg-6 col-md-6">
	                                        <input type="text" class="form-control">
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                        </form>
	                        <div class="page-header">
	                            <h4>Vertical form
	                                <small>with dividers and hover-stripped</small>
	                            </h4>
	                        </div>
	                        <pre><code>.from-vertical .group-border .hover-stripped</code></pre>
	                        <form class="form-vertical group-border hover-stripped" role="form">
	                            <div class="form-group">
	                                <label class="col-sm-12 control-label">Full width input</label>
	                                <input type="text" class="form-control">
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-sm-12 control-label">Grid inputs</label>
	                                <div class="row">
	                                    <div class="col-lg-4 col-md-4">
	                                        <input type="text" class="form-control">
	                                    </div>
	                                    <div class="col-lg-4 col-md-4">
	                                        <input type="text" class="form-control">
	                                    </div>
	                                    <div class="col-lg-4 col-md-4">
	                                        <input type="text" class="form-control">
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <label class="col-sm-12 control-label">Grid inputs</label>
	                                <div class="row">
	                                    <div class="col-lg-6 col-md-6">
	                                        <input type="text" class="form-control">
	                                    </div>
	                                    <div class="col-lg-6 col-md-6">
	                                        <input type="text" class="form-control">
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                        </form>
	                    </div>
	                </div>
	                <!-- End .panel -->
	            </div>
	            <!-- col-lg-12 end here -->
	        </div>
	        <!-- End .row -->
	        <div class="row">
	            <!-- Start .row -->
	            <div class="col-lg-12">
	                <!-- col-lg-12 start here -->
	                <div class="panel panel-default toggle">
	                    <!-- Start .panel -->
	                    <div class="panel-heading">
	                        <h3 class="panel-title">From grid</h3>
	                    </div>
	                    <div class="panel-body">
	                        <form class="form-horizontal" role="form">
	                            <div class="form-group">
	                                <div class="col-lg-12 col-md-12 col-xs-12">
	                                    <input type="text" class="form-control" placeholder="col-lg-12">
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <div class="col-lg-12">
	                                    <div class="row">
	                                        <div class="col-lg-11 col-md-11 col-xs-12">
	                                            <input type="text" class="form-control" placeholder="col-lg-11">
	                                        </div>
	                                        <div class="col-lg-1 col-md-1 col-xs-12">
	                                            <input type="text" class="form-control" placeholder="col-lg-1">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <div class="col-lg-12">
	                                    <div class="row">
	                                        <div class="col-lg-10 col-md-10 col-xs-12">
	                                            <input type="text" class="form-control" placeholder="col-lg-10">
	                                        </div>
	                                        <div class="col-lg-2 col-md-2 col-xs-12">
	                                            <input type="text" class="form-control" placeholder="col-lg-2">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <div class="col-lg-12">
	                                    <div class="row">
	                                        <div class="col-lg-9 col-md-9 col-xs-12">
	                                            <input type="text" class="form-control" placeholder="col-lg-9">
	                                        </div>
	                                        <div class="col-lg-3 col-md-3 col-xs-12">
	                                            <input type="text" class="form-control" placeholder="col-lg-3">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <div class="col-lg-12">
	                                    <div class="row">
	                                        <div class="col-lg-8 col-md-8 col-xs-12">
	                                            <input type="text" class="form-control" placeholder="col-lg-8">
	                                        </div>
	                                        <div class="col-lg-4 col-md-4 col-xs-12">
	                                            <input type="text" class="form-control" placeholder="col-lg-4">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <div class="col-lg-12">
	                                    <div class="row">
	                                        <div class="col-lg-7 col-md-7 col-xs-12">
	                                            <input type="text" class="form-control" placeholder="col-lg-7">
	                                        </div>
	                                        <div class="col-lg-5 col-md-5 col-xs-12">
	                                            <input type="text" class="form-control" placeholder="col-lg-5">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <div class="col-lg-12">
	                                    <div class="row">
	                                        <div class="col-lg-6 col-md-6 col-xs-12">
	                                            <input type="text" class="form-control" placeholder="col-lg-6">
	                                        </div>
	                                        <div class="col-lg-6 col-md-6 col-xs-12">
	                                            <input type="text" class="form-control" placeholder="col-lg-6">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <div class="col-lg-12">
	                                    <div class="row">
	                                        <div class="col-lg-5 col-md-5 col-xs-12">
	                                            <input type="text" class="form-control" placeholder="col-lg-5">
	                                        </div>
	                                        <div class="col-lg-7 col-md-7 col-xs-12">
	                                            <input type="text" class="form-control" placeholder="col-lg-7">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <div class="col-lg-12">
	                                    <div class="row">
	                                        <div class="col-lg-4 col-md-4 col-xs-12">
	                                            <input type="text" class="form-control" placeholder="col-lg-4">
	                                        </div>
	                                        <div class="col-lg-8 col-md-8 col-xs-12">
	                                            <input type="text" class="form-control" placeholder="col-lg-8">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <div class="col-lg-12">
	                                    <div class="row">
	                                        <div class="col-lg-3 col-md-3 col-xs-12">
	                                            <input type="text" class="form-control" placeholder="col-lg-3">
	                                        </div>
	                                        <div class="col-lg-9 col-md-9 col-xs-12">
	                                            <input type="text" class="form-control" placeholder="col-lg-9">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <div class="col-lg-12">
	                                    <div class="row">
	                                        <div class="col-lg-2 col-md-2 col-xs-12">
	                                            <input type="text" class="form-control" placeholder="col-lg-2">
	                                        </div>
	                                        <div class="col-lg-10 col-md-10 col-xs-12">
	                                            <input type="text" class="form-control" placeholder="col-lg-10">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                            <div class="form-group">
	                                <div class="col-lg-12">
	                                    <div class="row">
	                                        <div class="col-lg-1 col-md-1 col-xs-12">
	                                            <input type="text" class="form-control" placeholder="col-lg-1">
	                                        </div>
	                                        <div class="col-lg-11 col-md-11 col-xs-12">
	                                            <input type="text" class="form-control" placeholder="col-lg-11">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End .form-group  -->
	                        </form>
	                    </div>
	                </div>
	                <!-- End .panel -->
	            </div>
	            <!-- col-lg-12 end here -->
	        </div>
	        <!-- End .row -->
	        <!-- Page End here -->
	    </div>
	    <!-- End .outlet -->
	</div>
	<!-- End .content-wrapper -->
	<div class="clearfix"></div>
	</div>

@endsection