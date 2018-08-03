<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// 前台显示主页
Route::get('/', 'IndexController@index');

// 显示验证码
Route::get('captcha/show', 'CaptchaController@show');

// 后台分组路由
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

	// 后台登陆页面
	Route::get('user/login', 'UserController@login');

	// 后台登陆检查
	Route::post('user/check', 'UserController@check');

	// 后台退出操作
	Route::get('user/logout', 'UserController@logout');

	// 后台首页
	Route::get('/', 'AdminController@index');

	// 后台用户列表
	Route::get('user/list', 'UserController@list');

	// ajax后台展示用户添加页面
	Route::get('user/add', 'UserController@add');

	// 后台用户根据id编辑
	Route::get('user/edit/{id}', 'UserController@edit');

	// 后台用户根据id更新
	Route::post('user/edit/{id}', 'UserController@edit');

	// 后台用户根据id删除
	Route::get('user/del/{id}', 'UserController@del');

	//=================================================================

	// 后台库存分类添加页面
	Route::get('inventory_category/add', 'Inventory_categoryController@add');

	// 后台库存分类添加操作
	Route::post('inventory_category/add', 'Inventory_categoryController@add');

	// 后台库存分类添加页面
	Route::get('inventory_category/list', 'Inventory_categoryController@list');

	// 后台库存分类删除操作
	Route::get('inventory_category/del/{id}', 'Inventory_categoryController@del')->where(['id' => '[1-9]\d*']);

	//=================================================================
	// 后台管理商品模块--商品分类列表
	Route::get("productCategory/list", "ProductCategoryController@list");

	// 后台管理商品模块--商品分类添加展示页
	Route::get("productCategory/add", "ProductCategoryController@add");

	// 后台管理商品模块--添加商品分类
	Route::post("productCategory/doAdd", "ProductCategoryController@doAdd");

	// 商品分类详情页面
	Route::get("productCategory/detail/{id}", "ProductCategoryController@detail");

	// 后台管理商品模块--商品分类编辑展示页
	Route::get("productCategory/edit/{id}", "ProductCategoryController@edit");

	// 后台管理商品模块--编辑商品分类
	Route::post("productCategory/update", "ProductCategoryController@update");

	// 后台管理商品模块--删除商品分类
	Route::get("productCategory/delete", "ProductCategoryController@delete");

	//======================================================================

	// 后台管理用户模块--员工分类列表
	Route::get('user/staff', "UserController@staff");

	//=================================================================

});
