@extends('layout.layout')
@include('layout.navbar')

@section('content')
  <body style="background-color: #1f1f1f;">
    


    <!-- CONTENT -->
    <div class="detail-container" style="background-color: white; width: 80%; padding: 20px; border-radius: 15px;
    margin-left:auto; margin-right:auto; margin-top: 13%; border: 8px solid #C5FF01;">

    <div class="op-title" style="text-align: center; margin-top: 10px;">
      <h1 style="font-size: 48px;"><b>Permintaan Pengembalian Berhasil Diajukan</b></h1>
    </div>

    <div class="form-container" style="margin-top: 20px;">
        <div class="justify-content-center">
                <p style="text-align: center;">No Request {{$invoice}}</P>
            </div>
        </div>        
    </div>

    <div class="checkout-btn" style="text-align: center; color: white;">
            <a href="{{route('orderStatus')}}" class="btn" style="--bs-btn-border-color: #C5FF01; 
                    --bs-btn-bg: #C5FF01;
                    --bs-btn-hover-bg: #1f1f1f;
                    --bs-btn-color: #000000;
                    --bs-btn-hover-color: #ffffff;
                    --bs-btn-hover-border-color: #C5FF01;
                    --bs-btn-border-radius: 0px;
                    width: 80%; margin-top: 40px; border-radius: 8px;"><b>Status Pesanan</b></a>
    </div>
    <!-- CONTENT -->
  </body>
@endsection