<div class="container">
    <h2> Danh Muc Sản Phẩm</h2>
    <div class="row">
        @foreach ($category_by_id as $key => $pro)
            <div class="col-md-3 content">
                <a href="{{ URL::to('chi-tiet-san-pham/' . $pro->product_id) }}">
                    <a href="#" class="item">
                        <div class="item-product product1">
                            <img class="img-product" src="{{ URL::to('upload/product/' . $pro->product_image) }}">
                            <a href="#" class="Add-to-cart">Add to Cart</a>
                        </div>

                        <div class="product-info">

                            <a href="" class="product-name">{{ $pro->product_name }}</a>
                            <p class="product-price">{{ $pro->product_price }}</p>
                        </div>
                    </a>
                </a>
            </div>
        @endforeach


    </div>

</div>
