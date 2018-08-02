<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ProductCategoryController extends Controller
{
    /**
     * 显示商品分类列表
     * @return 显示商品列表页
     */
    function list() {
        // dd('lala');
        return view("admin.product.productCategory.list");
    }

    /**
     * 添加商品分类
     */
    public function add()
    {
        //查询到所有的分类并将分类显示出来
        return view("admin.product.ProductCategory.add");
    }

    /**
     * 查看商品分类下的所有商品
     */
    public function showProdList($catId)
    {

    }
}
