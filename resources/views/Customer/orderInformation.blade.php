<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
     <!-- <link rel="stylesheet" href="../css/libs/fontawesome-free-5.15.4/css/all.min.css"> -->
     <link rel="stylesheet" href="{{ URL::asset('css/libs/fontawesome-free-5.15.4/css/all.min.css') }}" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <!-- <link rel="stylesheet" href="../../public/css/header.css"> -->
     <link rel="stylesheet" href="{{ URL::asset('css/header.css') }}" />
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>PhoneStore</title>
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
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 
    @if(session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif
 
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-lg-3">
 
        </div>
        <div class="col-lg-6">
            <form  action="{{url('payment')}}"  style ="margin-top:50px" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-4 form-group">
                <h4>Tỉnh</h4>
                <select class="browser-default custom-select" name="matp" id="category">
                    <option selected>Chọn tỉnh</option>
                    @foreach ($data as $item)
                    <option value="{{ $item->matp }}">{{ $item->name }}</option>
                    @endforeach
                 </select>
                </div>
                <div class="col-lg-4 form-group">
                 <h4>Quận/huyện</h4>
                 <select class="browser-default custom-select" name="maqh" id="subcategory">
                  
                </select>
                
            </div>
            <div class="col-lg-4 form-group">
            <h4>Xã/phường</h4>
            <select class="browser-default custom-select" name="xaid" id="subcategory2">
            </select>
        </div>
        </div>
        <div class="row">
            <div class="col-lg-12 form-group">
                <label>Họ tên khách hàng</label>
                <input class="form-control" name="cart_name"size="4" type="text">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 form-group">
                <label>Địa chỉ</label>
                <input class="form-control" name="cart_address"size="4" type="text">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 form-group">
                <label>Số điện thoại</label>
                <input class="form-control" name="phone"size="4" type="text">
            </div>
        </div>
                <div class="row">
                    <div class="col-lg-12 form-group">
                        <label>Tên trên thẻ</label>
                        <input class="form-control" size="4" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 form-group">
                        <label>Mã thẻ</label>
                        <input autocomplete="off" class="form-control" size="20" type="text" name="card_no">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 form-group">
                        <label>CCV</label>
                        <input autocomplete="off" class="form-control" placeholder="ex. 311" size="3" type="text" name="cvv">
                    </div>
                    <div class="col-lg-4 form-group">
                        <label>Tháng hết hạn</label>
                        <input class="form-control" placeholder="MM" size="2" type="text" name="expiry_month">
                    </div>
                    <div class="col-lg-4 form-group">
                        <label>Năm hết hạn</label>
                        <input class="form-control" placeholder="YYYY" size="4" type="text" name="expiry_year">
                        <input class="form-control" hidden="hidden" type="text" name="cart_price" value="{{$total}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-control total btn btn-primary">
                            Tổng tiền: <span class="amount">{{number_format($total)}}đ</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 form-group">
                        <button class="form-control btn btn-success submit-button" type="submit" style="margin-top: 10px;">Thanh toán</button>
                    </div>
                </div>
            </form>
        </div>

</div>

<script type="text/javascript">
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $(document).ready(function () {
    $('#category').on('change',function(e) {
        
    var matp = e.target.value;
    $.ajax({
    url:"/subCat",
    type:"POST",
    data: {
    matp: matp
    },
    success:function (data) {
    $('#subcategory').empty();

    $.each(data.subcategories,function(index,subcategory){
    $('#subcategory').append('<option value="'+subcategory.maqh+'">'+subcategory.name+'</option>');
    })
    }
    })
    });
    });

        $(document).ready(function () {
        $('#subcategory').on('change',function(e) {
        var maqh = e.target.value;
      
    
        $.ajax({
        url:"/subCat2",
        type:"POST",
        data: {
        maqh: maqh
        },
        success:function (data) {
            console.log(data);
        $('#subcategory2').empty();
            
        $.each(data.subcategories2,function(index,subcategory){
        $('#subcategory2').append('<option value="'+subcategory.xaid+'">'+subcategory.name+'</option>');
        })
        }
        })
        });
        });
        </script>
</html>