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
		if ($request->isMethod('get')) {
			return view('admin/Inventory_category/add');
		}elseif($request->isMethod('post')) {
			// 接收数据
			$title = $request->get('title');
			// 验证数据
			$this->validateSelf($request);
			// 可添加字段
			$id = Type::insertGetId(['title'=>$title]);
			if($id !== false) {
				$arr['data'] = ['title'=>$title,'id'=>$id,'url'=>url('admin/type')];

				$arr['status'] = 'success';
			}else {
				$arr['status'] = 'error';
			}
			echo json_encode($arr);
		}
		
	}

	/**
	 * 功能: 展示公司服务列表
	 */
	public function list() {
		$listCols = Type::get();
		return view('admin/type/list',['listCols'=>$listCols]);
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
