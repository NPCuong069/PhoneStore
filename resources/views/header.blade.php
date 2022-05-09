<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../css/libs/fontawesome-free-5.15.4/css/all.min.css"> -->
    <link rel="stylesheet" href="{{ URL::asset('css/libs/fontawesome-free-5.15.4/css/all.min.css') }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="../../public/css/header.css"> -->
    <link rel="stylesheet" href="{{ URL::asset('css/header.css') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid top-mot">
        <div class="row top-mot-content">
            <div class="col-12 top-bar">
                <ul style="padding-left: 11px;">
                    <li>
                        <a href="tel:0935036595">
                            <i class="fas fa-phone-volume" style="font-size:16px; color: grey;line-height:30px;"></i>
                            <span style="font-size: 12px; vertical-align:1px;">096 696 9999</span>
                            <!-- vertical-align: cân chỉnh theo chiều dọc/text align: cân chỉnh chiều ngang-->
                        </a>
                    </li>
                    <li class="top-bar-1">
                        <a href="#">
                            <i class="fas fa-envelope" style="font-size: 16px; color: grey; line-height:30px ;"></i>
                            <span style="font-size: 13px; vertical-align:1px;">&nbsp;Greenwich123@fpt.edu.vn</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <header>
        <div class="container-fluid top-hai">
            <div class="row top-hai-content">
                <div class="col-1 top-hai-item ">
                    <img src="{{ URL::asset('css/imgHeaderFooter/screenshot_1650441246.png') }}" style="padding-left:25px; max-height: 76px;border-radius: 30%; display: block; width: auto; margin-top: 1px;">
                </div>
                <div class="col-9 top-haidrop-item ">
                    <ul>
                        <li><a href="./home.php">Trang Chủ</a></li>
                        <li><a href="./sanpham.php">Sản Phẩm</a></li>
                        <li><a href="#">Lịch sử đơn hàng</a></li>
                        <li><a href="#">Về chúng tôi</a></li>
                    </ul>
                </div>
                <div class="col-2  top-hai-item-icon">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-search" style="font-size: 19px; line-height: 60px;"></i>
                            </a>
                        </li>
                        <li class="cart">
                            <a href="#">
                                <i class="fa fa-shopping-cart" style="font-size: 19px; line-height:70px;"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
</body>
</html>