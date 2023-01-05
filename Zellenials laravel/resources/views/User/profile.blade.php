@extends('layout.layout')
@include('layout.navbar')

@section('content')

<div class="container" style="margin-top: 23vh; margin-bottom: 24vh;">
    <div class="sub-content" style="color: white;">

      <div class="op-title" style="text-align: left; color:white; margin-top: 50px;">
        <h1 style="font-size: 48px;" class="text-center"><b>Profile</b></h1>
      </div>
      <div class="col-8 mt-4">
        <label for="exampleInputEmail1" class="form-label">Nama Pengguna</label>
        <input readonly type="text" class="form-control-plaintext text-secondary" id="exampleInputEmail1" value="{{session('name')}}">
      </div>
      <div class="col-8 mt-3">
        <label for="exampleInputEmail1" class="form-label">E-mail</label>
        <input readonly type="email" class="form-control-plaintext text-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{session('email')}}">
      </div>
      <br>
        <a href="{{route('editprofil')}}" class="btn btn-primary">Ubah</a>
        <a href="{{route('logout')}}" type="submit" class="btn btn-danger">Logout</a>

    </div>
  </div>
@endsection

