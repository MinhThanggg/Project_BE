@extends('admin_layout')

@section('show')
@section('edit')
@section('list')
@section('add')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm Sản Phẩm
                </header>

                <div class="panel-body">
                    <div class="position-center">

                        @foreach ($edit_product as $key => $pro)
                            <form role="form" action="{{ URL::to('update-product/'.$pro->product_id) }}" method="post"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                                    <input name="product_name" type="text" class="form-control" id="exampleInputEmail1"
                                        value="{{ $pro->product_name }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình Sản Phẩm</label>
                                    <input name="product_image" type="file" class="form-control" id="exampleInputEmail1">
                                    <img src="{{ URL::to('upload/product/' . $pro->product_image) }}" alt=""
                                        width="100" height="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô Tả Sản Phẩm</label>
                                    <textarea style="resize: none" rows="5" type="text" name="product_desc" class="form-control"
                                        id="exampleInputPassword1">{{ $pro->product_desc }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nội Dung Sản Phẩm</label>
                                    <textarea style="resize: none" rows="5" type="text" name="product_content" class="form-control"
                                        id="exampleInputPassword1">{{ $pro->product_content }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá Sản Phẩm</label>
                                    <input name="product_price" type="text" class="form-control" id="exampleInputEmail1"
                                        value="{{ $pro->product_price }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Danh Mục Sản Phẩm</label>
                                    <select name="product_cate" class="form-control m-bot15">
                                        @foreach ($cate_product as $key => $cate)
                                            @if ($cate->category_id == $pro->category_id)
                                                <option selected value="{{ $cate->category_id }}">{{ $cate->category_name }}
                                                </option>
                                            @else
                                                <option value="{{ $cate->category_id }}">{{ $cate->category_name }}
                                                </option>
                                            @endif
                                        @endforeach

                                    </select>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="exampleInputPassword1">hiển thị</label>
                                    <select name="category_product_status" class="form-control m-bot15">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển thị</option>

                                    </select>
                                </div> --}}

                                <button type="submit" name="update_product" class="btn btn-info">Cập Nhật</button>
                            </form>
                        @endforeach
                    </div>

                </div>
            </section>

        </div>
    @endsection
