@extends('admin_layout')
@section('list')
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Sửa Hóa Đơn
      </div>
      <div class="table-responsive">
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
                <th>ID</th>
                <th>Khách Hàng</th>
                <th>Sản Phẩm</th>
                <th>Số Lượng</th>
                <th>Giá Tiền</th>
                <th>Ngày Đặt Hàng</th>
                <th>Email</th>
                <th>SĐT</th
            </tr>
          </thead>
          <tbody>
            @foreach ($list_order as $order)
                <tr>
                    <td>{{$order->id_don_hang}}</td>
                    <td>{{$order->ten_khach_hang}}</td>
                    <td>{{$order->san_pham}}</td>
                    <td>{{$order->qyt}}</td>
                    <td>{{$order->gia_tien}}</td>
                    <td>{{$order->ngay_dat_hang}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->phone}}</td>
                    <td>
                        <div class="panel-body">
                            <div class="position-center ">
                                <div class="text-center">
                                    <a href="edit/{{$order->id_don_hang}}" data-toggle="modal" class="btn btn-success">Sửa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection