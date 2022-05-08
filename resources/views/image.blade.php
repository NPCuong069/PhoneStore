@extends('adminlte::page')

@section('title', 'Home Page')

@section('content_header')
    <h1 style="text-align:center;font-family:Calibri; font-size: 40px;">Images</h1>
@stop

@section('content')
    {{-- Placeholder, sm size and prepend icon --}}
    {{-- <form action="{{url('cart')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <x-adminlte-input-file name="ifPholder" igroup-size="sm" placeholder="Choose a file...">
        <x-slot name="prependSlot">
            <div class="input-group-text bg-lightblue">
                <i class="fas fa-upload"></i>
            </div>
        </x-slot>
    </x-adminlte-input-file>
    <input type="hidden" name="base64" id="inputBase64">
    <div class="col-md-6">
        <button type="submit" class="btn btn-success">Upload</button>
    </div>
</form> --}}
<form method="POST" id="form_upload" action="{{ route('upload.base64') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <input name="imageName" class="form-control" placeholder="Image Name"/>
    </div>
    <div class="form-group">
        <input type="file" name="image" class="form-control">
    </div>
    <button type="submit" id="send_data" class="btn">Upload & Save</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop