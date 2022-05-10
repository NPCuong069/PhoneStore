@extends('adminlte::page')

@section('title', 'Admin Page')

@section('content_header')
    <h1 style="text-align:center;font-family:Calibri; font-size: 40px;">Cart</h1>
@stop

@section('content')
    {{-- Minimal --}}
    <table class="table">
  <thead class="thead-dark">
    <tr>    
      <th scope="col">ID</th>
      <th scope="col"style="text-align:center;">Customer name</th>
      <th scope="col"style="text-align:center;">Phone</th>
      <th scope="col"style="text-align:center;">Status</th>
      <th scope="col"style="text-align:center;">Address</th>
      <th scope="col"style="text-align:center;">Price</th>
      <th scope="col"style="text-align:center;">Change Status</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($datas as $data)
    <tr>
    <th scope="row">{{$data->id}}</th>
    <td style="text-align:center;">{{$data->cart_name}}</td>
    <td style="text-align:center;">{{$data->phone}}</td>
    <td style="text-align:center;">{{($data->cart_status==1)?"Paid":(($data->cart_status==2)?"Delivering":"Delivered")}}</td>
    <td style="text-align:center;">{{$data->cart_address}}</td>
    <td style="text-align:center;">{{number_format($data->cart_price)}}đ</td>
    <td style="text-align:center;">
      <a type="button" class="btn btn-default" href="{{ route('cart.paid', ['id' => $data->id]) }}">Paid</a>
      <a type="button" class="btn btn-primary" href="{{ route('cart.delivering', ['id' => $data->id]) }}">Delivering</a>
      <a type="button" class="btn btn-warning" href="{{ route('cart.delivered', ['id' => $data->id]) }}">Delivered</a>
  </td>
</tr>
    
    @endforeach

  </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop