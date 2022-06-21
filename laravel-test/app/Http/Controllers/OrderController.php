<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function index() {
        return view('order_layout.add_order');
    }

    public function insert(Request $request) {
        $data = array();
        $price = array();
        $data1 = array();
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        
        $id=DB::select("SHOW TABLE STATUS LIKE 'tbl_diachi'");
        $next_id=$id[0]->Auto_increment;
        $price2 = 0;
        $price1 = 0;
        $price = DB::table('tbl_sanpham')->where('san_pham','=',$request->sanpham)->get('gia_tien');
        $price0 = json_decode(json_encode($price), True);
        foreach($price0 as $key => $value) {
            $price1 = $value;
        }
        foreach($price1 as $key) {
            $price2 = $key;
        }
        $data['ten_khach_hang'] = $request->khachhang;
        $data['san_pham'] = $request->sanpham;
        $data['qyt'] = $request->qyt;
        $data['gia_tien'] = (Double) $price2;
        $data['dia_chi'] = $next_id;
        $data['ngay_dat_hang'] = $dt->toDateString();
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        DB::table('tbl_donhang')->insert($data);

        $data1['so_nha'] = $request->sonha;
        $data1['duong'] = $request->duong;
        $data1['huyen'] = $request->huyen;
        $data1['thanh_pho'] = $request->thanhpho;
        DB::table('tbl_diachi')->insert($data1);

        return Redirect::to('order');
    }

    public function getProductOnInsert() {
        $allProducts = DB::table('tbl_sanpham')->get();
        $products = view('order_layout.add_order')->with('products', $allProducts);
        return view('admin_layout')->with('order_layout.add_order', $products);
    }
}
