<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = "product_category";

    /**
     * 根据商品分类获取该分类下的所有分类
     * @param  int $id    分类id
     * @param  string $count 分类名称的前缀字符
     * @param  array  $cont  存放容器
     * @return array $cont 递归获取到的分类信息在存放容器中
     */
    public static function getAllCatesByid($id = 0, $count = "", $cont = [])
    {
        $arr = self::select('id', 'name')->where('id', $id)->get();
        $count += "++";
        foreach ($arr as $fcate) {
            $count[] = ['id' => $fcate->id, 'name' => $count . $fcate->name];
            $arr     = self::getAllCatesByid($fcate->id, $count, $cont);
        }
        return $cont;
    }
    //id
    //name
    //intro
    //pid
    //status
    //shop_id
    //created_at
    //updated_at
}
