@extends('adminlte::page')

@section('title', 'Admin Page')

@section('content_header')
    <h1 style="text-align:center;font-family:Calibri; font-size: 40px;">Admin</h1>
@stop

@section('content')
    {{-- Minimal --}}
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col"style="text-align:center;">Full name</th>
      <th scope="col"style="text-align:center;">Passwword</th>
      <th scope="col"style="text-align:center;">Role</th>
      <th scope="col"style="text-align:center;">Function</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td style="text-align:center;">Cường</td>
      <td style="text-align:center;">0896494632</td>
      <td style="text-align:center;">Admin</td>
      <td style="text-align:center;">
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td style="text-align:center;">Minh</td>
      <td style="text-align:center;">0378649463</td>
      <td style="text-align:center;">Employee</td>
      <td style="text-align:center;">
        <a type="button" class="btn btn-warning" href="{{ url('/updateAdmin')}}">Update</a>
        <a type="button" class="btn btn-danger">Delete</a>
    </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td style="text-align:center;">Vỹ</td>
      <td style="text-align:center;">0344465673</td>
      <td style="text-align:center;">Employee</td>
      <td style="text-align:center;">
        <a type="button" class="btn btn-warning" href="{{ url('/updateAdmin')}}">Update</a>
        <a type="button" class="btn btn-danger">Delete</a>
    </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td style="text-align:center;">Minh cute</td>
      <td style="text-align:center;">0344465456</td>
      <td style="text-align:center;">Employee</td>
      <td style="text-align:center;">
        <a type="button" class="btn btn-warning" href="{{ url('/updateAdmin')}}">Update</a>
        <a type="button" class="btn btn-danger">Delete</a>
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