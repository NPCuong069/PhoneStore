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
      <th scope="col"style="text-align:center;">Name</th>
      <th scope="col"style="text-align:center;">Email</th>
      <th scope="col"style="text-align:center;">Role</th>
      <th scope="col"style="text-align:center;">Function</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($datas as $data)
    <tr>
    <th scope="row">{{$data->id}}</th>
    <td style="text-align:center;">{{$data->name}}</td>
    <td style="text-align:center;">{{$data->email}}</td>
    <td style="text-align:center;">{{$data->role==0?"Admin":"Employee"}}</td>
    <td style="text-align:center;">
      <div class="row">
      @if($data->role==1)
      <div class="col-4">
      </div>
        <div class="col-2">
        <a type="button" class="btn btn-warning" href="{{route('admin.edit',['id'=>$data->id])}}">Update</a>
        </div>
        <div class="col-1">
        <form action="{{route('admin.delete',['id'=>$data->id])}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger" >Delete</button>
        </form>
      </div>
     
  
      @endif
    </div>
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