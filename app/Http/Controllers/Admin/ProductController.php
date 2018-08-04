<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Admin\BaseController;
use App\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends BaseController
{
    /**
     * 构造函数，生成一个新的产品对象
     */
    public function __construct()
    {

    }

    /**
     * 产品列表，展示所有的产品();
     * 产品状态: status 9 删除，上架，下架，售罄，报警
     * @return [type] [description]
     */
    public function index()
    {
        return view("admin.product.product.index");
    }

    /**
     * 产品的添加页面
     * 产品有id
     * 产品有sku号
     * 产品有简介
     * 产品有价格
     * 产品有销量
     * 产品可以选择对应的库存
     * 产品可以有多张图片
     */
    public function create()
    {
        $prodCates = ProductCategory::getAllCatesByid();
        return view("admin.product.product.create", ['prodCates' => $prodCates]);
    }

    /**
     * 保存产品
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function save(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        dd($data);
    }

    public function edit($id)
    {
        dd($id);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        dd($data);
    }

    public function delete(Request $request)
    {
        $data = $request->all();
        dd($data);
    }

    public function search(Requset $request)
    {
        $data = $request->all();
        dd($data);
    }
}
