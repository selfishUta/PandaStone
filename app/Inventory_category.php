<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory_category extends Model {
	protected $table = 'inventory_category';
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';

	/**
	 * 功能: 展示无极限分类列表
	 */
	public function getInventoryCategoryTree($pid = 0, $num = 0, $pstr = '') {
		// 接受数据数组
		$arr = [];
		// 获取一级分类
		$cols = $this->select('inventory_category.*', 't1.name as pname')
			->where('inventory_category.pid', '=', $pid)
			->where('inventory_category.status', '<', 9)
			->leftjoin('inventory_category as t1', 't1.id', '=', 'inventory_category.pid')
			->get();
		$str = str_repeat('--', $num);
		$num++;
		foreach ($cols as $v) {
			$p = $pstr . '>' . $v->id;
			$arr[] = [
				'id' => $v->id,
				'name' => $str . $v->name,
				'pid' => $v->pid,
				'pname' => $v->pname ?? '顶级分类',
				'intro' => $v->intro ?? '',
				'status' => $v->status,
				'shop_id' => $v->shop_id,
				'created_at' => $v->created_at,
				'updated_at' => $v->updated_at,
				'categorystr' => $p . '>',
			];
			// 获取子分类
			$colson = $this->getInventoryCategoryTree($v->id, $num, $p);
			$arr = array_merge($arr, $colson);
		}
		return $arr;
	}
}
