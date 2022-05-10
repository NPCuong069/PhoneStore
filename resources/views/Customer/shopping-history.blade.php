@extends('master_layout')

@section('Shopping-history')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/shoppingHistory.css">

<div class="container">
    <!---Title cart-->

    <div class="row">
        <div class="col-12">
            <h2 style="color: #3C63A4; text-align: center"><b>Lịch sử đơn hàng</b></h2>
        </div>
    </div>
    <br>

 
    <!--Show product-->
    @if(count($carts)<1)
     <div class="content">
    <p class="text">Chưa có đơn hàng nào</p>
     </div>
    @endif
    @foreach ($carts as $cart)
        <div class="content">
            <div class="row">
                <div class="col-2">
                    <p class="text"><b>Tên khách hàng</b></p>
                </div>
           
                <div class="col-2">
                    <p class="text"><b>Ngày đặt đơn</b></p>
                </div>
    
                <div class="col-2">
                    <p class="text"><b>Tổng thanh toán</b></p>
                </div>
    
                <!--Button-->
                <div class="col-3">
                    <p class="text"><b>Tình trạng đơn hàng</b></p>
                </div>
                <div class="col-3">
                    <p class="text"><b>Địa chỉ giao hàng</b></p>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <p class="text">{{$cart->cart_name}}</p>
                </div>
           
                <div class="col-2">
                    <p class="text">{{$cart->cart_date}}</p>
                </div>
    
                <div class="col-2">
                    <p class="text" style="color:red;">{{number_format($cart->cart_price)}}đ</p>
                </div>
                <div class="col-3">
                    <p class="text">{{$cart->cart_address}}</p>
                </div>
                <!--Button-->
                <div class="col-3">
                    <p class="text">{{($cart->cart_status==1)?"Chưa giao":(($cart->cart_status==2)?"Đang giao":"Đã giao")}}</p>
                </div>
            </div>
        </div>
    
    
    @endforeach
    <br>
    <!--Show product-->
  
    <br>
</div>
@endsection