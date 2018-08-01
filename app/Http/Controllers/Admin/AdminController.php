<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends BaseController
{
    /**
     * 后台管理首页
     */
    public function index() {
    	return view('admin/index');
    }
}
