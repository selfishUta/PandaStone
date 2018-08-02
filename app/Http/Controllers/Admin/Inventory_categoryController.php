<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Inventory_category;
use Illuminate\Http\Request;

class Inventory_categoryController extends Controller {
	/**
	 * 功能: 展示库存分类主页
	 */
	public function add() {
		return view('admin/inventory_category/add');
	}

}