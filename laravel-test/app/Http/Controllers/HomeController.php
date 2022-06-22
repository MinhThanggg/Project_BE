<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

session_start();

class HomeController extends Controller
{
    public function index()
    {
        $cate_product = DB::table('tbl_category_product')->orderBy('category_id')->get();
        $all_product = DB::table('tbl_product')->orderBy('product_id','desc')->limit(8)->get();
        return view('home')->with('cate_product', $cate_product)->with('all_product', $all_product);
    }
}
