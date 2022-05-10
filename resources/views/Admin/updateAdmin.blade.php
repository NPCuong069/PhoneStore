@extends('adminlte::page')

@section('title', 'Admin Page')

@section('content_header')
    <h1 style="text-align:center;font-family:Calibri; font-size: 40px;">Update Admin</h1>
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
    <form style="margin-left: 100px; margin-right:100px; margin-top:50px" method="POST" action="{{route('admin.update',['id'=>$data->id])}}">
      @csrf
  <div class="form-group row">
    <label for="inputName" class="col-sm-3 col-form-label">Full Name</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputName" placeholder="Name" value="{{$data->name}}" name ="name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label" >Password</label>
    <div class="col-sm-7">
      <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" >
    </div>
  </div>
  <div class="form-group row">
    <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Role</label>
    <select class="form-control col-sm-7" id="exampleFormControlSelect1" name="role">
      <option value="0">Admin</option>
      <option value="1" selected="selected">Employee</option>
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