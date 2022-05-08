@extends('adminlte::page')

@section('title', 'Manage Accessory Page')

@section('content_header')
    <h1 style="text-align:center;font-family:Calibri; font-size: 40px;">Create New Accessory</h1>
@stop

@section('content')
    {{-- Minimal --}}
    <form style="margin-left: 100px; margin-right:100px; margin-top:50px" action="{{route('accessory.store')}}" method="POST">
      @csrf
  <div class="form-group row">
    <label for="inputName" class="col-sm-3 col-form-label">Accessory Name</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" name="accesory_name" placeholder="Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPrice" class="col-sm-3 col-form-label">Price</label>
    <div class="col-sm-7">
      <input type="numeric" class="form-control" name="accesory_price" placeholder="Price">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputDetail" class="col-sm-3 col-form-label">Detail</label>
    <div class="col-sm-7">
    <textarea class="form-control" name="accesory_details" rows="3" placeholder="Detail"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Brand</label>
    <select class="form-control col-sm-7" name="brand_id">
      @foreach ($brands as $brand)
      <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group row">
  <div class="col-sm-3">
    </div>
    <div class="col-sm-4">
      <button type="submit" class="btn btn-primary">Create</button>
    </div>
  </div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop