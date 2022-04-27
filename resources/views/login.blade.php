<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    {{-- @if($error)
    <div> Sai pass</div>
    @endif --}}
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $err)
                {{$err}}
            @endforeach
        </div>
        @endif
    <form action ="/login" method="post">
        @csrf
        {{-- username: <input type ="text" name="username" value={{$username}}> --}}
        {{-- username: <input type ="text" name="username" value="{{old('username')}}" >
        password: <input type ="password" name="password"> --}}
        <h4>Tỉnh</h4>
        <select class="browser-default custom-select" name="category" id="category">
            <option selected>Select category</option>
            @foreach ($data as $item)
            <option value="{{ $item->matp }}">{{ $item->name }}</option>
            @endforeach
         </select>
         <h4>Quận/huyện</h4>
         <select class="browser-default custom-select" name="subcategory" id="subcategory">
          
        </select>
        <h4>Xã/phường</h4>
        <select class="browser-default custom-select" name="subcategory2" id="subcategory2">
    
       </select>
        {{-- upload:<input type ="file" name = "upload"> --}}
        <input type="submit" name = "submit" value="Submit">
    </form>
</body>
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
    console.log(data);
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
</html>