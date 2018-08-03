<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
	protected $table = 'user';
	public $timestamps = false;
	/**
	 * 功能:通过关键字查询
	 *
	 * @return object       查询的结果
	 */
	public function getKeyResult($column) {

		$userInfo = User::where('status', 0)
			->where('username', $column)
			->Orwhere('phone', $column)
			->Orwhere('email', $column)
			->paginate(1);

		return $userInfo;
	}
}
