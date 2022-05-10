@extends('master_layout')
@section('Product')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/all_product.css">

<div class="container">
    <!--Page Header-->
    <div class="page-header" style="background-image: url('images/products/iphone.jpg'); background-color: #3C63A4;">
        <h3 class="page-subtitle">Just the right amount of everything<h3>
                <h1 class="page-title">Phone</h1>
    </div>

    <br>
    <div class="row">
    
        <div class="col-2">
            <div class="category">
                <p class="title-category">Danh mục sản phẩm</p>
                <hr>
                <ul class="menu-category">
                    @foreach ($brands as $brand)
                    <li>
                        <a href="{{ route('customerPhoneIndexByBrand',['brand'=>$brand->id]) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg>
                            {{$brand->brand_name}}
                            <a>
                    </li>
                    @endforeach
                  
                </ul>
            </div>
        </div>

        <div class="col-10">
            <!--Show product phone-->
            <div class="row">
                @foreach ($datas as $data)
                <div class="col-3" style="margin-top: 50px">
                    <div class="item">
                        <a href="{{ route('phoneDetail', ['id' => $data->id]) }}">
                            <img src="http://localhost:8000/storage/images/{{$data->phone_image}}"style="width:180px;height:200px">
                        </a>
                        <a href="/phoneDetail" class="product-title">{{$data->phone_name}}</a>
                        <p class="price">{{number_format($data->phone_price)}}đ</p>
                        <a type="button" class="btn btn-warning" href="{{ route('phoneDetail', ['id' => $data->id]) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-down-square" viewBox="0 0 16 16">
                                <path
                                    d="M3.626 6.832A.5.5 0 0 1 4 6h8a.5.5 0 0 1 .374.832l-4 4.5a.5.5 0 0 1-.748 0l-4-4.5z" />
                                <path
                                    d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2z" />
                            </svg>
                            Chi tiết
                        </a>
                        <a type="button" class="btn btn-success" href="{{ route('addPhoneToCart', ['phoneid' => $data->id]) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-cart2" viewBox="0 0 16 16">
                                <path
                                    d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                            </svg>
                            Giỏ hàng
                        </a>
                    </div>
                </div>
                @endforeach
 
            </div>

            <!--Show product phone-->
           
            </div>
        </div>
    </div>
</div>

</div>
<br>

@endsection