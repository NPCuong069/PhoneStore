@extends('adminlte::page')

@section('title', 'Manage Phone Page')

@section('content_header')
    <h1 style="text-align:center;font-family:Calibri; font-size: 40px;">Phone</h1>
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
      <th scope="col"style="text-align:center;">Function</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td style="text-align:center;">OPPO Reno6 Z 5G</td>
      <td style="text-align:center;">9.490.000₫</td>
      <td>Reno6 Z 5G đến từ nhà OPPO với hàng loạt sự nâng cấp và cải tiến không chỉ ngoại hình bên ngoài mà còn sức mạnh bên trong. </td>
      <td scope="col"style="text-align:center;">OPPO</td>
      <td style="text-align:center;">
        <a type="button" class="btn btn-warning" href="{{ url('/updatePhone')}}">Update</a>
        <br><br>
        <a type="button" class="btn btn-danger" href="#">Delete</a>
      </td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td style="text-align:center;">Samsung Galaxy A23 6GB</td>
      <td style="text-align:center;">5.990.000₫ </td>
      <td>Được Samsung cho ra mắt vào 03/2022 - Samsung Galaxy A23 6GB có một thiết kế trẻ trung cùng bộ thông số kỹ thuật khá ấn tượng trong tầm giá</td>
      <td scope="col"style="text-align:center;">Samsung</td>
      <td style="text-align:center;">
        <a type="button" class="btn btn-warning" href="{{ url('/updatePhone')}}">Update</a>
        <br><br>
        <a type="button" class="btn btn-danger" href="#">Delete</a>
    </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td style="text-align:center;">Samsung Galaxy A12 6GB</td>
      <td style="text-align:center;">4.090.000₫</td>
      <td>Galaxy A12 (6GB/128GB) 2021, một phiên bản smartphone giá rẻ với thiết kế đẹp, cấu hình tốt.</td>
      <td scope="col"style="text-align:center;">Samsung</td>
      <td style="text-align:center;">
        <a type="button" class="btn btn-warning" href="{{ url('/updatePhone')}}">Update</a>
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