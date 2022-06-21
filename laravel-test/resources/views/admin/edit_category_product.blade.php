@extends('admin_layout')

@section('show')
@section('edit')
@section('list')
@section('add')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập Nhật Danh Mục
                </header>
               
                    <div class="panel-body">
                        @foreach($edit_category_product as $key => $edit_value)
                        <div class="position-center">
                            <form role="form" action="{{ URL::to('update-category-product/'.$edit_value->category_id) }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Danh Mục</label>
                                    <input name="category_product_name" value="{{$edit_value->category_name}}" type="text" class="form-control"
                                        id="exampleInputEmail1" placeholder="tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                                    <textarea style="resize: none" rows="5" type="text" name="category_product_desc" class="form-control"
                                        id="exampleInputPassword1"  >{{$edit_value->category_desc}}</textarea>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="exampleInputPassword1">hiển thị</label>
                                    <select name="category_product_status" class="form-control m-bot15">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển thị</option>

                                    </select>
                                </div> --}}

                                <button type="submit" name="update_category_product" class="btn btn-info">Cập nhật</button>
                            </form>
                        </div>
                        @endforeach
                    </div>
            </section>

        </div>
    @endsection
