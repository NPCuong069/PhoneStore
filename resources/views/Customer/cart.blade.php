@extends('master_layout')

@section('Cart')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/cart.css">

<div class="container">
    <!---Title cart-->
    <div class="row">
        <div class="col-12">
            <h2 style="color: #3C63A4; text-align: center"><b>Giỏ hàng</b></h2>
        </div>
    </div>
    <br>
    <!--Show product-->
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" style="padding-left:40px">Sản Phẩm</th>
                    <th></th>
                    <th scope="col" style="padding-left:30px">Giá</th>
                    <th scope="col" style="padding-left:70px">Số lượng</th>
                    <th scope="col" style="text-align:center">Giá tổng cộng</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        <img src="img/home/taiNgheBluetooth.jpeg" style="width:150px">
                    </th>
                    <td>iphone 13 mini 5G 128GB</td>
                    <td style="color: red">20.900.000đ</td>
                    <td>
                        <input type="number" value="2" min="1">
                    </td>
                    <td style="text-align: center">
                        20.900.000đ
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="img/home/taiNgheBluetooth.jpeg" style="width:150px">
                    </th>
                    <td>iphone 13 mini 5G 128GB</td>
                    <td style="color: red">20.900.000đ</td>
                    <td>
                        <input type="number" value="2" min="1">
                    </td>
                    <td style="text-align: center">
                        20.900.000đ
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="img/home/taiNgheBluetooth.jpeg" style="width:150px">
                    </th>
                    <td>iphone 13 mini 5G 128GB</td>
                    <td style="color: red">20.900.000đ</td>
                    <td>
                        <input type="number" value="2" min="1">
                    </td>
                    <td style="text-align: center">
                        20.900.000đ
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <!--Cart Total-->
    <div class="row">
        <div class="col-12 cart-total">
            <div class="total">
                <span class="tongChiPhi">Tổng chi phí </span>
                <span class="money"> 100.000.000đ </span>
            </div>
            <div class="buttonThanhToan">
                <a type="button" class="btn btn-success" href="#">Tiến hành thanh toán</a>
            </div>
        </div>
    </div>
</div>
<br>
@endsection