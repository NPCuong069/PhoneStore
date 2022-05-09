@extends('master_layout')

@section('Product-detail')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script  script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/product-detail.css">

    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="showImage">
                    <img src="img/home/taiNgheBluetooth.jpeg" width="500px"/>
                </div>
            </div>

            <div class="col-5">
                <div class="content">
                    <h2 class="title" style="text-align:center">Tai nghe Bluetooth Oppo</h2>
                    <hr>
                    <div class="content-detail">
                        <p><b>Brand:</b> Oppo</p>
                        <div class="price">
                            <b>Giá bán:</b>
                            <span class="price-detail"><b>20.900.000đ</b></span>
                        </div>
                        <div class="discription">
                            <b>Miêu tả:</b> 
                            <p> PU: 10th Intel Core™ i3-10110U (2.10GHz, up to 4.10GHz, 4MB Cache),
                                RAM: 8GB DDR4 2667MHz ( Upgrade 16GB )
                                Ổ cứng: 1TB HDD ( Upgrade Pice + Sata )
                                Màn hình: 14.0" FHD(1920x1080) IPS Anti-Glare 250nits Non-Touch
                                VGA: Integrated Intel® UHD Graphics</p>
                        </div>
                    </div>
                    <hr>
                    <a type="button" class="btn btn-success" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                          <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                        </svg>
                          Thêm vào giỏ hàng
                    </a>
                </div>
            </div>

        </div>
    </div>
    <br>
@endsection