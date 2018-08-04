<?php
namespace App\Http\Controllers\Admin;

use App\Staff;
use Illuminate\Http\Request;

class StaffController extends BaseController {

	/**
	 * 功能:员工列表展示
	 */
	public function index(Request $request) {

		$column = $request->get('column') ?? '';

		$select = $request->get('select');

		$cond = array();

		switch ($select) {
		case 0:
			$cond[] = array('staff_name', 'like', '%' . $column . '%');
			break;
		case 1:
			$cond[] = array('staff_gender', $column);
			break;
		case 2:
			$cond[] = array('staff_age', 'like', '%' . $column . '%');
			break;
		case 3:
			$cond[] = array('staff_identifier', 'like', '%' . $column . '%');
			break;
		case 4:
			$cond[] = array('staff_hiredate', 'like', '%' . $column . '%');
			break;
		default:
			break;
		}

		$staffInfo = Staff::where('status', '<', 9)
			->where($cond)
			->orderby('staff_hiredate', 'desc')
			->paginate(2);

		$count = Staff::where('status', '<', 9)
			->where($cond)
			->count();

		return view('admin/staff/index', ['staffInfo' => $staffInfo, 'count' => $count]);
	}

	/**
	 * 功能:编辑员工信息
	 */
	public function edit($id) {

		$staffInfo = Staff::where('id', $id)->first();

		return view('admin/staff/edit', ['staffInfo' => $staffInfo]);
	}

	/**
	 * 功能:编辑员工操作
	 */
	public function doEdit(Request $request) {
		$staffInfo = $request->all();

		unset($staffInfo['_token']);

		$id = $staffInfo['id'];

		unset($staffInfo['id']);

		$res = Staff::where('id', $id)->update($staffInfo);

		$message = $res ? '编辑成功' : '编辑失败';

		return redirect(url('admin/staff/index'))->with('message', $message);
	}

	/**
	 * 功能:员工的删除操作
	 */
	public function del($id) {
		$res = Staff::where('id', $id)->update(['status' => 9, 'staff_leave' => date('Y-m-d H:i:s', time())]);

		$message = $res ? '离职成功' : '离职失败';

		return redirect(url('admin/staff/index'))->with('message', $message);
	}

	/**
	 * 功能:添加员工页面展示
	 */
	public function add(Request $request) {
		return view('admin/staff/add');
	}

	/**
	 * 功能:添加员工操作
	 */
	public function doAdd(Request $request) {
		$this->validate($request,
			[
				'username' => 'required|min:5',
				'password_confirmation' => 'required|min:5',
				'password' => 'required|confirmed:password_confirmation',
				'staff_name' => 'required',
				'staff_gender' => 'required',
				'staff_age' => 'required',
				'staff_identifier' => 'required',
				'staff_phone' => 'required',
				'staff_hiredate' => 'required',
			],
			[
				'username.required' => '账号不能为空',
				'username.min' => '账号不能少于5位',
				'password_confirmation.required' => '密码不能为空',
				'password_confirmation.min' => '密码不能少于5位',
				'password.required' => '确认密码不能为空',
				'password.confirmed' => '两次密码输入不一致',
				'staff_name.required' => '姓名不能为空',
				'staff_gender.required' => '性别不能为空',
				'staff_age.required' => '年龄不能为空',
				'staff_identifier.required' => '身份证不能为空',
				'staff_phone.required' => '手机号不能为空',
				'staff_hiredate.required' => '入职时间不能为空',
			]
		);

		$staffInfo = $request->all();

		$staffInfo['password'] = md5($staffInfo['password']);

		$staffObj = new Staff;

		foreach ($staffInfo as $k => $v) {
			if ($k != '_token' && $k != 'password_confirmation') {
				$staffObj->$k = $v;
			}
		}

		$res = $staffObj->save();

		$message = $res ? '添加成功' : '添加失败';

		return redirect(url('admin/staff/index'))->with('message', $message);
	}
}