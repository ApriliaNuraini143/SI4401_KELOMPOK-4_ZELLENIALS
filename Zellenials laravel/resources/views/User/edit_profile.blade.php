@extends('layout.layout')
@include('layout.navbar')

@section('content')
<body style="background-color: #1f1f1f;">
  <div class="text-white">
    <h1> Profile </h1>
    <form action="{{route('updateProfile')}}" method="Post">   
      @csrf 
      <div class="col-8">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{$user->nama_user}}">
      </div>
      <div class="col-8">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{$user->email}}">
      </div>
      <div class="col-8">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>
      <br>
      <input type="submit" class="btn btn-primary" value="simpan">
    </form>
  </div>
  @include('layout.footer')
</body>
@endsection
