@extends('adminlte::page')

@section('title', 'Manage Accessory Page')

@section('content_header')
    <h1 style="text-align:center;font-family:Calibri; font-size: 40px;">Update Accessory</h1>
@stop

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
    {{-- Minimal --}}
    <form style="margin-left: 100px; margin-right:100px; margin-top:50px" action="{{route('accessory.update',$accessory->id)}}" method="POST">
      @csrf
      @method('PUT')
  <div class="form-group row">
    <label for="inputName" class="col-sm-3 col-form-label">Accessory Name</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" name="accesory_name" value="{{$accessory->accesory_name}}" placeholder="Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPrice" class="col-sm-3 col-form-label">Price</label>
    <div class="col-sm-7">
      <input type="numeric" class="form-control" name="accesory_price" value="{{$accessory->accesory_price}}" placeholder="Price">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputDetail" class="col-sm-3 col-form-label">Detail</label>
    <div class="col-sm-7">
    <textarea class="form-control" name="accesory_details"  rows="3" placeholder="Detail">{{$accessory->accesory_details}}</textarea>
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
      <button type="submit" class="btn btn-primary">Update</button>
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