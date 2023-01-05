@extends('layout.layout')
@include('layout.navbar')

@section('content')
  <div class="text-white">
    <h1> Profile </h1>
    <form>    
      <div class="col-8">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="col-8">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="col-8">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
@endsection