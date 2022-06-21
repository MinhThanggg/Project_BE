@extends('admin_layout')
@section('show')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh Sách Đơn Hàng
            </div>
            <div>
                <table class="table" ui-jq="footable" ui-options='{
                    "paging": {
                    "enabled": true
                    },
                    "filtering": {
                    "enabled": true
                    },
                    "sorting": {
                    "enabled": true
                    }}'>
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Khách Hàng</th>
                        <th>Sản Phẩm</th>
                        <th>Số Lượng</th>
                        <th>Giá Tiền</th>
                        <th>Ngày Đặt Hàng</th>
                        <th>Email</th>
                        <th>SĐT</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{$order->id_don_hang}}</td>
                                <td>{{$order->ten_khach_hang}}</td>
                                <td>{{$order->san_pham}}</td>
                                <td>{{$order->qyt}}</td>
                                <td>{{$order->gia_tien}}</td>
                                <td>{{$order->ngay_dat_hang}}</td>
                                <td>{{$order->email}}</td>
                                <td>{{$order->phone}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection