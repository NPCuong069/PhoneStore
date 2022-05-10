@extends('master_layout')

@section('Home')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    $('#subcategory').append('<option value="'+subcategory.matp+'">'+subcategory.name+'</option>');
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
        $('#subcategory2').append('<option value="'+subcategory.maqh+'">'+subcategory.name+'</option>');
        })
        }
        })
        });
        });
        </script>
<link rel="stylesheet" href="css/home.css">
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
            <form  action="{{url('payment')}}"  data-cc-on-file="false" data-stripe-publishable-key="pk_test_fgfl5fgfg5f8g5fg8fg5" name="frmStripe" id="frmstripe" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-4 form-group">
                <h4>Tỉnh</h4>
                <select class="browser-default custom-select" name="category" id="category">
                    <option selected>Chọn tỉnh</option>
                    @foreach ($data as $item)
                    <option value="{{ $item->matp }}">{{ $item->name }}</option>
                    @endforeach
                 </select>
                </div>
                <div class="col-lg-4 form-group">
                 <h4>Quận/huyện</h4>
                 <select class="browser-default custom-select" name="subcategory" id="subcategory">
                  
                </select>
                
            </div>
            <div class="col-lg-4 form-group">
            <h4>Xã/phường</h4>
            <select class="browser-default custom-select" name="subcategory2" id="subcategory2">
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
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-control total btn btn-primary">
                            Total: <span class="amount">$35</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 form-group">
                        <button class="form-control btn btn-success submit-button" type="submit" style="margin-top: 10px;">Pay Now»</button>
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
    $('#subcategory').append('<option value="'+subcategory.matp+'">'+subcategory.name+'</option>');
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
        $('#subcategory2').append('<option value="'+subcategory.maqh+'">'+subcategory.name+'</option>');
        })
        }
        })
        });
        });
        </script>
@endsection

