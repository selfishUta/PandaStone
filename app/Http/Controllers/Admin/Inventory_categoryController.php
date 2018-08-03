<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Inventory_category;
use Illuminate\Http\Request;

class Inventory_categoryController extends Controller {
	/**
	 * 功能: 展示库存分类主页
	 */
	public function add(Request $request) {
		$invObj = new Inventory_category;
		if ($request->isMethod('get')) {
			// 分类树
			$listArr = $invObj->getInventoryCategoryTree();
			return view('admin/Inventory_category/add',['listArr'=>$listArr]);
		}elseif($request->isMethod('post')) {
			// 接收数据
			$arr = $request->all();

			// TODO ============验证数据
			// $this->validateSelf($request);

			// 可添加字段
			$fieldArr = ['name','intro','shop_id','pid'];
			foreach($arr as $k=>$v) {
				if(in_array($k, $fieldArr)) {
					$invObj->$k = $v;
				}
			}	
			$re = $invObj->save();

			if($re != false) {
				$message = '添加失败';
			}else {
				$message = '添加成功';
			}
			return redirect()->back()->with('message',$message);
		}
		
	}

	/**
	 * 功能: 展示公司服务列表
	 */
	public function list() {
		$invObj = new Inventory_category;
		$listArr = $invObj->getInventoryCategoryTree();
		return view('admin/Inventory_category/list',['listArr'=>$listArr]);
	}


	/**
	 * 功能: 根据id删除服务
	 */
	public function del($id) {
		$re = Type::where('id',$id)->delete();
		if ($re) {
			$message = '';
		}else {
			$message = '删除失败';
		}
		return redirect()->back()->with('message',$message);
	}

	/**
	 * 功能: 根据id编辑服务
	 */
	public function edit($id,Request $request) {
		$type = Type::where('id',$id)->first();
		if ($request->isMethod('get')) {

			return view('admin/type/edit',['cols'=>$type]);
		}elseif($request->isMethod('post')) {
			// 接收数据
			$title = $request->get('title');
			// 验证数据
			$this->validateSelf($request);
			// 更新数据
			$type->title = $title;
			$re = $type->save();
			if($re) {
				$message = '';
			}else {
				$message = '更新失败';
			}
			return redirect()->back()->with('message',$message);
		}
	}

	/**
	 * 功能: 验证字段值
	 */
	private function validateSelf($request) {
		$this->validate($request, [
				'title' => 'required|unique:type|max:50|min:2'
			],
			[
				'title.required' => '名称必须填写',
				'title.unique' => '名称已经存在',
				'title.max' => '名称最大50个字符',
				'title.min' => '名称最小2个字符'
			]
		);
	}

}
