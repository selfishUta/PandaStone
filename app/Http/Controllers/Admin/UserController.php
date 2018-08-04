<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller {

	/**
	 * 功能: 展示后台登陆界面
	 */
	public function login() {
		return view('admin/user/login');
	}

	/**
	 * 功能: 用户登录信息检查
	 */
	public function check(Request $request) {
		// 用户名 admin 密码 123456
		$username = trim($request->get('username'));
		$password = trim($request->get('password'));
		$this->validate($request,
			[
				'username' => 'required',
				'password' => 'required|min:5',
			],
			[
				'username.required' => '用户名不能为空',
				'password.required' => '密码不能为空',
				'password.min' => '密码最小5位',
			]
		);
		//$result = User::where('username',$username)->where('password',$password)->count();
		if ($username == 'admin' && $password == '123456') {
			setcookie('adminId', 1, 0, '/');
			setcookie('adminname', $username, 0, '/');

			return redirect(url('admin'));
		} else {
			return redirect(url('admin/user/login'))->with('message', '用户名或密码错误');
		}
	}

	/**
	 * 功能: 展示公司服务列表
	 */
	public function list() {
		$listCols = User::get();
		return view('admin/user/list', ['listCols' => $listCols]);
	}

	/**
	 * 功能: 用户退出操作
	 */
	public function logout() {

		setcookie('adminId', '', time() - 1, '/');
		setcookie('adminname', '', time() - 1, '/');

		return redirect(url('admin/user/login'));
	}

	/**
	 * 功能:普通用户列表展示(关键字查询等)
	 */
	public function index(Request $request) {

		$column = $request->get('column') ?? '';

		$select = $request->get('select');

		$cond = array();

		switch ($select) {
		case '0':
			$cond[] = array('username', 'like', '%' . $column . '%');
			break;
		case '1':
			$cond[] = array('phone', 'like', '%' . $column . '%');
			break;
		case '2':
			$cond[] = array('email', 'like', '%' . $column . '%');
			break;
		default:
			break;
		}

		$userInfo = User::where('status', '<', 9)
			->where($cond)
			->orderby('created_at', 'desc')
			->paginate(1);

		$count = User::where('status', '<', 9)
			->where($cond)
			->count();

		return view('admin/user/index', ['userInfo' => $userInfo, 'count' => $count]);
	}

	/**
	 * 功能:删除普通用户信息
	 */
	public function del($id) {
		$res = User::where('id', $id)->update(['status' => 9]);

		$message = $res ? '删除成功' : '删除失败';

		return redirect(url('admin/user/index'))->with('message', $message);
	}
}