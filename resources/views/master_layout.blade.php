<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhoneStore</title>
    <link rel="stylesheet" href="css/libs/fontawesome-free-5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/imgHeaderFooter">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
<!--Start header-->
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
                    <li><a href="/home">Trang Chủ</a></li>
                    <li><a href="/phoneIndex">Sản Phẩm</a></li>
                    <li><a href="/cartPhone">Lịch sử đơn hàng</a></li>
                    <li><a href="/aboutUs">Về chúng tôi</a></li>
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
                        <a href="/cartCustomer">
                            <i class="fa fa-shopping-cart" style="font-size: 19px; line-height:70px;"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
    <br>
<!--End header-->
@yield('Home')
@yield('Product')
@yield('Product-detail')
@yield('Cart')
@yield('Shopping-history')
<!--Start footer-->
<footer class="container-fluid" style="padding-right: 0px;padding-left: 27px; margin-top: 50px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 block-c-1"> 
                <!-- lg dành cho pc và lap -->
                <img src="{{ URL::asset('css/imgHeaderFooter/screenshot_1650441246.png') }}" alt="logo" width="70px" height="55px">
                <p>Shop chúng tôi là cửa hàng luôn xem quý khách là Thượng Đế / Shop chúng tôi chỉ cung cấp hàng chất lượng cao</p>
                <i class="fab fa-facebook-f" style="background-color: #4267B2; padding: 5px 10px"></i>
                <i class="fab fa-instagram" style="background-color: #3b6994; padding: 5px 8px;"></i>
                <i class="fab fa-twitter" style="background-color: #2478ba; padding: 5px 5px;"></i>
                <i class="fab fa-flickr" style="background-color: #e5086f; padding: 5px 7px;"></i>
            </div>
            <div class="col-lg-3 block-c-2" style="padding-left: 40px;">
                <h5 style="margin-bottom: 10px; font-weight:bolder;">Liên hệ</h5>
                <div class="row">
                    <div class="col-lg-1"><i class="fa fa-map-marker"></i></div>
                    <div class="col-lg-10">123 hihi, Phường haha, Quận hehe, Tp.HCM</div>
                </div>
                <div class="row">
                    <div class="col-lg-1"><i class="fas fa-mobile-alt"></i></div>
                    <div class="col-lg-10">096 696 9999</div>
                </div>
                <div class="row">
                    <div class="col-lg-1"><i class="fa fa-envelope-open"></i></div>
                    <div class="col-lg-10">Greenwich123@fpt.edu.vn</div>
                </div>
            </div>
            <div class="col-lg-3 block-c-3" style="padding-left: 40px;">
                <h5 style="margin-bottom: 10px; font-weight:bolder;">Tổng đài hỗ trợ (Miễn phí gọi)</h5>
                <ul class="footer-list">
                    <li class="footer-item">
                        <span>Gọi mua:</span><a href="tel:1800.1060" class="footer-item_link">1800.1060</a> (7:30 - 22:00)
                    </li>
                    <li class="footer-item">
                        <span>Kỹ thuật:</span><a href="tel:1800.1763" class="footer-item_link">1800.1763</a> (7:30 - 22:00)
                    </li>
                    <li class="footer-item">
                        <span>Khiếu nại:</span><a href="tel:1800.1062" class="footer-item_link">1800.1062</a> (7:30 - 22:00)
                    </li>
                    <li class="footer-item">
                        <span>Bảo hành:</span><a href="tel:1800.1064" class="footer-item_link">1800.1064</a> (7:30 - 22:00)
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 block-c-4" style="padding-left: 40px;">
                <h5 style="margin-bottom: 10px; font-weight:bolder;">Tin tức</h5>
                <div class="row">
                    <div class="col-lg-12 f-social">
                        <a href="https://www.facebook.com/thegioididongcom" class="link-fb">
                            <i class="fab fa-facebook" style="color:#2478ba;"></i> 9999.9k Fan
                        </a>
                        <a href="https://www.youtube.com/user/TGDDVideoReviews" class="link-ytb">
                            <i class="fab fa-youtube" style="color: red; border-left: 2px solid gray; padding-left: 5px;"></i> 1.000.000 Đăng ký
                        </a>
                    </div>
                </div>
                <div class="row blockB">
                    <p class="sup">Website cùng tập đoàn</p>
                    <div><img src="{{ URL::asset('css/imgHeaderFooter/screenshot_1650441247.png') }}" alt="img"></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--End footer-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
