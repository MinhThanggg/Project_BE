@extends('admin_layout')
@section('edit')
<section class="panel">
    <header class="panel-heading">
        Sửa Đơn Hàng
    </header>
    <div class="panel-body">
        <div class="position-center">
            <form class="form-horizontal" action="{{ URL::to('add')}}" method="GET" role="form">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-sm-3 control-label">Tên Khách Hàng</label>
                    <div class="col-sm-6">
                        <input name="khachhang" type="text" class="form-control"  required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Sản Phẩm</label>
                    <?php $value = ""?>
                    <div class="col-lg-6">
                        <select class="form-control input-sm m-bot15" name="sanpham">
                            @foreach ($products as $item)
                            <option value="{{$item->san_pham}}">{{$item-> san_pham }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="inputSuccess">QYT</label>
                    <div class="col-lg-2">
                        <input name="qyt" type="number" class="form-control" placeholder="" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Số Nhà</label>
                    <div class="col-sm-2">
                        <input name="sonha" type="text" class="form-control" required>
                    </div>
                    <label class="col-sm-1 control-label">Đường</label>
                    <div class="col-sm-3">
                        <input name="duong" type="text" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Quận/Huyện/Thị Xã/Thành Phố</label>
                    <div class="col-sm-6">
                        <input name="huyen" type="text" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Tỉnh</label>
                    <div class="col-sm-6">
                        <input name="thanhpho" type="text" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail1" class="col-sm-3 control-label">Email</label>
                    <div class="col-lg-6">
                        <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail1" class="col-sm-3 control-label">Số Điện Thoại</label>
                    <div class="col-lg-6">
                        <input type="number" class="form-control" name="phone" required>
                    </div>
                </div>

                <div class="form-group justify-center">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button type="submit" class="btn btn-danger">Sửa</button>
                    </div>
                </div>
        </form>
        </div>
    </div>
</section>
@endsection