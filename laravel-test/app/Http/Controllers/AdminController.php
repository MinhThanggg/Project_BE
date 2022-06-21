<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Contracts\View\View as ViewView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View as FacadesView;

use function Ramsey\Uuid\v1;

class AdminController extends Controller
{
    public function index(){
        return view('order_layout.list_orders');
    }

    public function edit(){
        return view('order_layout.edit_order');
    }

    public function list(){
        return view('order_layout.list_order');
    }

    public function getAddress() {
        $allAdress = DB::table('tbl_diachi')->get();
        $adress = view('order_layout.list_order')->with('adresses', $allAdress);
        
        return view('admin_layout')->with('order_layout.list_order', $adress);
    }

    public function getAllOrder() {
        $allOrder = DB::table('tbl_donhang')->get();
        $orders = view('order_layout.all_orders')->with('orders', $allOrder);
        return view('admin_layout')->with('order_layout.all_orders', $orders);
    }

    

    public function getAllOrderList() {
        $listOrder = DB::table('tbl_donhang')->get();
        $listorders = view('order_layout.list_order')->with('list_order', $listOrder);
        return view('admin_layout')->with('order_layout.list_order', $listorders);
    }
}
