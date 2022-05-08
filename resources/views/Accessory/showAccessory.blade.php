@extends('adminlte::page')

@section('title', 'Manage Accessory Page')

@section('content_header')
    <h1 style="text-align:center;font-family:Calibri; font-size: 40px;">Accessory</h1>
@stop

@section('content')
    {{-- Minimal --}}
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
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
    @foreach ($datas as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td style="text-align:center;">{{$data->accesory_name}}</td>
      <td style="text-align:center;">{{$data->accesory_price}}</td>
      <td>{{$data->accesory_details}}</td>
      @foreach ($brands as $brand)
      @if($brand->id==$data->brand_id)
      <td scope="col"style="text-align:center;">{{$brand->brand_name}}</td>
      @endif
      @endforeach
      <td style="text-align:center;">
        <a type="button" class="btn btn-warning" href="{{route('accessory.edit',$data->id)}}">Update</a>
        <br><br>
        <form action="{{ route('phone.destroy',$data->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
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