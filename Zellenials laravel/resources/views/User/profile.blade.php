@extends('layout.layout')
@include('layout.navbar')

@section('content')
<body style="background-color: #1f1f1f;">
  <div class="content" style="color: white; width: 90%; padding: 20px; border-radius: 15px;
      margin-left:auto; margin-right:auto; margin-top: 40px;">
    <div class="sub-content" style="color: white;">

      <div class="op-title" style="text-align: left; color:white; margin-top: 50px;">
        <h1 style="font-size: 48px;"><b>Profile</b></h1>
      </div>

        <div class="col-8 mt-4">
          <label for="exampleInputEmail1" class="form-label">Nama Pengguna</label>
          <input readonly type="text" class="form-control-plaintext text-white" id="exampleInputEmail1" value="{{session('name')}}">
        </div>
        <div class="col-8 mt-3">
          <label for="exampleInputEmail1" class="form-label">Alamat E-mail</label>
          <input readonly type="email" class="form-control-plaintext text-white" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{session('email')}}">
        </div>
      <br>
        <a href="{{route('editprofil')}}" class="btn btn-primary">Edit</a>
        <a href="{{route('logout')}}" type="submit" class="btn btn-danger">Logout</a>

    </div>
  </div>
  @include('layout.footer')
</body>
@endsection
