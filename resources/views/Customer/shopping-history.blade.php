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
    <div class="content">
        <div class="row">
            <div class="col-3">
                <a href="/accessoryDetail">
                    <img src="img/home/taiNgheBluetooth.jpeg" class="image">
                </a>
            </div>

            <div class="col-3">
                <p class="text">Tai nghe Bluetooth</p>
            </div>

            <div class="col-2">
                <p class="text">x 1</p>
            </div>

            <div class="col-2">
                <p class="text" style="color:red;">20.900.000đ</p>
            </div>

            <!--Button-->
            <div class="col-2 buttonMuaLai">
                <a type="button" class="btn btn-info" href="/accessoryDetail" style="float:right">Mua lại</a>
            </div>
        </div>
    </div>

    <br>
    <!--Show product-->
    <div class="content">
        <div class="row">
            <div class="col-3">
                <a href="/accessoryDetail">
                    <img src="img/home/taiNgheBluetooth.jpeg" class="image">
                </a>
            </div>

            <div class="col-3">
                <p class="text">Tai nghe Bluetooth</p>
            </div>

            <div class="col-2">
                <p class="text">x 1</p>
            </div>

            <div class="col-2">
                <p class="text" style="color:red;">20.900.000đ</p>
            </div>

            <!--Button-->
            <div class="col-2 buttonMuaLai">
                <a type="button" class="btn btn-info" href="/accessoryDetail" style="float:right">Mua lại</a>
            </div>
        </div>
    </div>
    <br>

    <!--Show product-->
    <div class="content">
        <div class="row">
            <div class="col-3">
                <a href="/accessoryDetail">
                    <img src="img/home/taiNgheBluetooth.jpeg" class="image">
                </a>
            </div>

            <div class="col-3">
                <p class="text">Tai nghe Bluetooth</p>
            </div>

            <div class="col-2">
                <p class="text">x 1</p>
            </div>

            <div class="col-2">
                <p class="text" style="color:red;">20.900.000đ</p>
            </div>

            <!--Button-->
            <div class="col-2 buttonMuaLai">
                <a type="button" class="btn btn-info" href="/accessoryDetail" style="float:right">Mua lại</a>
            </div>
        </div>
    </div>
    <br>
</div>
@endsection