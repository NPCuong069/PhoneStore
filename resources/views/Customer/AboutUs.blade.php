@extends('master_layout')
@section('Product')

@section('Home')
    <link rel="stylesheet" href="{{ URL::asset('css/libs/fontawesome-free-5.15.4/css/all.min.css') }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/AboutUs.css') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Document</title>


<body>
    <h1 style="text-align: center; font-weight:bolder;">Về chúng tôi</h1>
    <section>
        <!-- img slider start -->
        <div class="khoi-slide">
            <div class="cac-slide">
                <!-- radio button start -->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <!-- radio button end -->
                <!-- slide img start -->
                <div class="slide first">
                    <img src="css/imgHeaderFooter/AboutUs1.png" alt="img">
                </div>
                <div class="slide">
                    <img src="css/imgHeaderFooter/AboutUs2.png" alt="img">
                </div>
                <!-- slide img end -->
                <!-- automatic nav start -->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                </div>
                <!-- automatic nav end -->
            </div>
            <!-- manual navigation start -->
            <div class="navigation-manual">
                <!--manual thủ công-->
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
            </div>
            <!-- manual navigation end -->
        </div>
    </section>
    <section>
        <div class="container-fluid" style="margin-top: -30px;">
            <div class="row" style=" margin-right: 52px; margin-left: -15px;">
                <div class="table col">
                    <i class="fas fa-handshake"></i>
                    <div>
                        <h4>Lời Cam Kết về Chất lượng Sản phẩm</h4>
                        <p>+ Luôn có hàng mới & hàng cũ đã qua sử dụng, nhiều lựa chọn phong phú cho khách hàng</p>
                        <p>+ Luôn có giá tốt nhất cho khách hàng, kèm theo chất lượng tuyệt vời & hậu mãi từ những sản phẩm chúng tôi bán ra</p>
                        <p>+ Khách hàng mua nhiều máy 1 lúc, khách hàng thân thiết luôn có giá tốt</p>
                    </div>
                </div>
                <div class="table col">
                <i class="fas fa-star"></i>
                    <div>
                        <h4>Phong cách phục vụ</h4>
                        <p>+ Shop có đội ngũ nhân viên kinh doanh chuyên nghiệp, luôn tư vấn khách hàng một cách ân cần, nhiệt tình và vui vẻ luôn làm khách hàng hài lòng tuyệt đối</p>
                        <p>+ Shop luôn đặt lợi ích của quý khách hàng lên hàng đầu</p>
                    </div>
                </div>
                <div class="table col">
                <i class="fas fa-cart-arrow-down"></i>
                    <div>
                        <h4>Lợi thế dành cho người mua hàng</h4>
                        <p>+ Nhận đặt hàng điện thoại từ Hàn Quốc khi những model đó bạn không tìm thấy trong web​site</p>
                        <p>+ Giá không phải là yếu tố quyết định- Hãy xem chất lượng máy kèm phụ kiện & đòi hỏi ở chế độ bảo hành, dịch vụ hậu mãi, thái độ phục vụ mà bạn chọn nơi mua máy</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- jquery auto img -->
    <script type="text/javascript">
        var counter = 1;
        setInterval(function() {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 2) {
                counter = 1;
            }
        }, 10000);
    </script>
</body>

@endsection