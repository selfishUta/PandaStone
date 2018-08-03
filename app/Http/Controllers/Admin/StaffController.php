<?php
namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;

class StaffController extends BaseController {

	/**
	 * 功能:员工列表展示
	 */
	public function staff(Request $request) {

		$staffInfo = User::where('status', '<', 9)
			->paginate(1);

		$count = User::where('status', '<', 9)->count();

		return view('admin/staff/index', ['staffInfo' => $staffInfo, 'count' => $count]);
	}
}