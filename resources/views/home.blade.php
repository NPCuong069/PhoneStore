@extends('master_layout')

@section('Home')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/home.css">
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->

    <div class="carousel-inner">
      <div class="item active">
        <a href="/phoneDetail">
          <img src="img/home/home6.jpg"  style="width:100%;">
        </a>
      </div>

      <div class="item">
        <a href="/accessoryDetail">
          <img src="img/home/home7.jpg" style="width:100%;">
        </a>
      </div>
    
      <div class="item">
        <a href="/accessoryDetail">
          <img src="img/home/home4.jpg"  style="width:1200px;">
        </a>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!--Title phone-->
  <div class="row">                
      <div class="content col-12">
        <div class="homepage-category-line">
        <a href="/phoneIndex">
          <h2 class="title">Điện thoại</h2>
        </a>
        </div>
      </div>
  </div>

  <!--Show product phone-->
  <div class="row">
    @foreach ($phones as $phone)
    <div class="col-3">
      <div class="item">
        <a href="{{ route('phoneDetail', ['id' => $phone->id]) }}">
          <img src="http://localhost:8000/storage/images/{{$phone->phone_image}}" style="width:200px;height:200px">
        </a>
        <a href="/phoneDetail" class="product-title">{{$phone->phone_name}}</a>
        <p class="price">{{number_format($phone->phone_price)}}đ</p>
      </div>
      {{-- {{dd(session()->all());}} --}}
    </div>
    @endforeach
  </div>

  <!--Title accessory-->
  <div class="row">                
      <div class="content col-12">
        <div class="homepage-category-line">
          <a href="/accessoryIndex">
            <h2 class="title">Phụ kiện</h2>
          </a>
        </div>
      </div>
  </div>



  <!--Show product phone-->
  <div class="row">
    @foreach ($accessories as $accessory)
    <div class="col-3">
      <div class="item">
        <a href="{{ route('accessoryDetail', ['id' => $accessory->id]) }}">
          <img src="http://localhost:8000/storage/images/{{$accessory->accessory_image}}"style="width:200px;height:200px">
        </a>
        <a href="{{ route('accessoryDetail', ['id' => $accessory->id]) }}" class="product-title">{{$accessory->accesory_name}}</a>
        <p class="price">{{number_format($accessory->accesory_price)}}đ</p>
      </div>
    </div>

   
    @endforeach
  </div>

</div>

@endsection