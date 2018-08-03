<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductCategoryController extends Controller
{
    protected $prodCates;

    public function __construct()
    {
        $this->prodCates = ProductCategory::getAllCatesByid();
    }
    /**
     * 显示商品分类列表
     * @return 显示商品列表页
     */
    function list() {
        $allProdCates = ProductCategory::getAllCatesByid();
        return view("admin.product.productCategory.list", ['allProdCates' => $allProdCates]);
    }
    /**
     * 展示添加商品分类
     */
    public function add()
    {
        //查询到所有的分类并将分类显示出来
        $allProdCate = ProductCategory::getAllCatesByid();
        return view("admin.product.ProductCategory.add", ['prodCates' => $allProdCate]);
    }

    /**
     * 添加商品分类
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function doAdd(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        //店铺id
        $data['shop_id'] = 1;
        //表单验证
        //----------------------------------------------------
        $rules = [
            'name'  => 'required|unique:product_category|max:255',
            'intro' => 'required',
        ];
        $messages = [
            'required'    => '不能为空',
            'name.unique' => '名称已存在',
            'name.max'    => '字数不能超过5个',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect('post/create')
                ->withErrors($validator)
                ->withInput();
        }
        //----------------------------------------------------
        $prodCate = new ProductCategory();
        foreach ($data as $k => $v) {
            $prodCate->$k = $v;
        }
        $re = $prodCate->save();
        if ($re) {
            $message = "添加成功";
        } else {
            $message = "添加失败";
        }
        return redirect()->back()->with('message', $message);
    }

    public function edit($id)
    {
        $theProdCate = ProductCategory::where('id', $id)->first();
        $allProdCate = ProductCategory::getAllCatesByid();
        return view("admin.product.ProductCategory.edit", ['cate' => $theProdCate, 'prodCates' => $allProdCate]);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        //表单验证
        //----------------------------------------------------
        $rules = [
            'name'  => 'required|unique:product_category|max:255',
            'intro' => 'required',
        ];
        $messages = [
            'required'    => '不能为空',
            'name.unique' => '名称已存在',
            'name.max'    => '字数不能超过5个',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        //----------------------------------------------------
        $prodCate = ProductCategory::find($data['id']);
        unset($data['id']);
        foreach ($data as $k => $v) {
            $prodCate->$k = $v;
        }
        $re = $prodCate->save();
        if ($re) {
            $message = "修改成功";
        } else {
            $message = "修改失败";
        }
        return redirect('admin/productCategory/list')->with('message', $message);
    }
/**
 * 查看商品分类下的所有商品
 */
    public function showProdList($catId)
    {

    }

    public function detail($cateId)
    {
        $cate = ProductCategory::where('id', $cateId)->first();
        return view("admin.product.productCategory.detail", ['cate' => $cate, 'prodCates' => $this->prodCates]);
    }

    public function delete(Request $request)
    {
        $id   = $request['id'];
        $data = ProductCategory::find($id);
        $re   = $data->where('id', $id)->update(['status' => 9]);
        if ($re) {
            $data = [
                'success' => true,
                'msg'     => '删除成功',
                'data'    => $id,
            ];
            echo json_encode($data);
        } else {
            $data = [
                'success' => false,
                'msg'     => '删除失败',
                'data'    => null,
            ];
            echo json_decode($data);
        }
    }
}
