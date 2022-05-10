@extends('master_layout')

@section('Shopping-history')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/shoppingHistory.css">

<div class="container">
    <!---Title cart-->
        @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
    <div class="row">
        <div class="col-12">
            <h2 style="color: #3C63A4; text-align: center"><b>Vui lòng nhập số điện thoại</b></h2>
        </div>
    </div>

    <br>

    <!--Show product-->
    <form action="{{route('getCart')}}" method="POST"  method="post">
        @csrf
        <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Số điện thoại</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="phone">
            </div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Xác nhận</button>
              </div>
          </div>
         
    </form>
</div>
@endsection