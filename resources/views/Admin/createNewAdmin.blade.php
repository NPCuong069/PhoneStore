@extends('adminlte::page')

@section('title', 'Admin Page')

@section('content_header')
    <h1 style="text-align:center;font-family:Calibri; font-size: 40px;">Create New Employee</h1>
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
    <form style="margin-left: 100px; margin-right:100px; margin-top:50px" action="{{route('admin.customRegistration')}}" method="POST">
      @csrf
  <div class="form-group row">
    <label for="inputName" class="col-sm-3 col-form-label">Full Name</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" name="name" placeholder="Name" value="{{old('name')}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputName" class="col-sm-3 col-form-label">Email</label>
    <div class="col-sm-7">
      <input type="email" class="form-control" name="email"  placeholder="Email" value="{{old('email')}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
    <div class="col-sm-7">
      <input type="password" class="form-control" name="password"  placeholder="Password" value="{{old('password')}}">
    </div>
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