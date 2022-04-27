@extends('adminlte::page')

@section('title', 'Manage Accessory Page')

@section('content_header')
    <h1 style="text-align:center;font-family:Calibri; font-size: 40px;">Accessory</h1>
@stop

@section('content')
    {{-- Minimal --}}
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col"style="text-align:center;">Name</th>
      <th scope="col"style="text-align:center;">Price</th>
      <th scope="col"style="text-align:center;">Detail</th>
      <th scope="col"style="text-align:center;">Brand</th>
      <th scope="col"style="text-align:center;">Image</th>
      <th scope="col"style="text-align:center;">Function</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td style="text-align:center;">Tai nghe Bluetooth True Wireless Rezo F15</td>
      <td style="text-align:center;">560.000₫</td>
      <td>
        Kiểu dáng gọn nhẹ, đeo vừa vặn, dễ mang theo. 
        Chất âm sinh động, mạnh mẽ. 
        Tín hiệu kết nối không dây mượt mà với công nghệ Bluetooth 5.0.
      </td>
      <td scope="col"style="text-align:center;">Mozard</td>
      <td style="text-align:center;">
        <a type="button" class="btn btn-warning" href="{{ url('/updateAccessory')}}">Update</a>
        <br><br>
        <a type="button" class="btn btn-danger" href="#">Delete</a>
      </td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td style="text-align:center;">Loa Bluetooth Mozard E8</td>
      <td style="text-align:center;">665.000₫</td>
      <td>
        Thiết kế với kiểu dáng hình trụ bo tròn đẹp mắt.
        Công nghệ Bluetooth 5.0 kết nối mượt mà trong khoảng cách 10 m.
        Công suất 15 W cho âm thanh phát ra lớn và sống động.
      </td>
      <td scope="col"style="text-align:center;">Samsung</td>
      <td style="text-align:center;">
        <a type="button" class="btn btn-warning" href="{{ url('/updateAccessory')}}">Update</a>
        <br><br>
        <a type="button" class="btn btn-danger" href="#">Delete</a>
    </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td style="text-align:center;">Pin sạc dự phòng 7500 mAh AVA+ LJ JP199</td>
      <td style="text-align:center;">179.000₫</td>
      <td>
        Thiết kế thời trang, nhỏ nhắn, dễ mang theo.
        Sử dụng lõi pin Li-Ion an toàn, bền tốt.
        Nguồn ra có 2 cổng USB 5V – 2A.</td>
      <td scope="col"style="text-align:center;">AVA+</td>
      <td style="text-align:center;">
        <a type="button" class="btn btn-warning" href="{{ url('/updateAccessory')}}">Update</a>
        <br><br>
        <a type="button" class="btn btn-danger" href="#">Delete</a>
    </td>
    </tr>
  </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop