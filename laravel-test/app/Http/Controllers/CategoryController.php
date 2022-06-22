<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function add_category_product()
    {
        return view('admin.add_category_product');
    }

    public function all_category_product()
    {
        $all_category_product = DB::table('tbl_category_product')->orderBy('category_id')->get();
        $manager_category_product = view('admin.all_category_product')->with('all_category_product', $all_category_product);

        return view('admin_layout')->with('admin.all_category_product', $manager_category_product);
    }
    public function save_category_product(Request $request)
    {
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_status'] = $request->category_product_status;

        DB::table('tbl_category_product')->insert($data);
        Session::put('message', 'thêm danh mục thành công');
        return Redirect::to('add_category_product');
    }

    public function edit_category_product($category_product_id)
    {
        $edit_category_product = DB::table('tbl_category_product')->where('category_id',$category_product_id)->get();
        $manager_category_product = view('admin.edit_category_product')->with('edit_category_product', $edit_category_product);

        return view('admin_layout')->with('admin.edit_category_product', $manager_category_product);
    }

    public function update_category_product(Request $request, $category_product_id)
    {
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->update($data);
        Session::put('message', 'Sửa danh mục thành công');
        return Redirect::to('all_category_product');
    }

    public function delete_category_product($category_product_id)
    {
       
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->delete();
        Session::put('message', 'Xoá danh mục thành công');
        return Redirect::to('all_category_product');
    }

    // Function home page
    public function show_category_home($category_id)
    {
        $cate_product = DB::table('tbl_category_product')->orderBy('category_id')->get();
        $category_by_id = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')
        ->where('tbl_product.category_id', $category_id)->get();
        return view('category.show_category')->with('cate_product', $cate_product)->with('category_by_id', $category_by_id);
    }
}
