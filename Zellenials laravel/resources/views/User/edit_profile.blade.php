@extends('layout.layout')
@include('layout.navbar')

@section('content')
<div class="container" style="margin-top: 22vh; margin-right: 5vw; margin-left: 25vw;">
  <div class="text-white">
    <h1> Ubah Profile </h1>
    <form action="{{route('updateProfile')}}" method="Post">
      @csrf  
      <div class="col-8">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{$user->nama_user}}">
      </div>
      <div class="col-8">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{$user->email}}">
      </div>
      <div class="col-8">
        <label for="exampleInputPassword1" class="form-label">Password Baru (Optional)</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div> 
</div>
@endsection