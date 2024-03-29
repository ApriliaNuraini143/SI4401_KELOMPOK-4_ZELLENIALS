@extends('layout.layout')
@include('layout.navbar')

@section('content')
    <!-- CONTENT -->
<body style="background-color: #1f1f1f;">
    <div class="detail-container" style="background-color: white; width: 80%; height: 570px; padding: 20px; border-radius: 15px;
    margin-left:auto; margin-right:auto; margin-top: 55px; border: 8px solid #C5FF01;">

    <div class="op-title" style="text-align: center; margin-top: 10px;">
      <h1 style="font-size: 48px;"><b>Retur Pesanan</b></h1>
    </div>
    <form action="{{route('returnConfirm')}}" method="POST">
        @csrf
    <div class="form-container" style="margin-top: 40px;">
        <div class="d-flex justify-content-center">

            <div class="left-form" style="margin-right: 25px;">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama" style="width: 500px;">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nomor Handphone</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Nomor Handphone">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="yourname@email.com">
                </div>
            </div>
            <div class="right-form" style="margin-left: 25px;">
                <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Alamat" style="width: 500px;">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tanggal Pemesanan</label>
                        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Nama Kabupaten">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">No Invoice</label>
                        <input required type="text" name="invoice" class="form-control" id="exampleFormControlInput1" placeholder="123456">
                    </div>
                </div>
            </div>
        </div>
        <!--
        <div class="nav-link" style="text-align: center;">
            <input type="submit" class="btn" value="Lanjut" style="--bs-btn-border-color: #C5FF01;
                        --bs-btn-bg: #C5FF01;
                        --bs-btn-hover-bg: #1f1f1f;
                        --bs-btn-color: #000000;
                        --bs-btn-hover-color: #ffffff;
                        --bs-btn-hover-border-color: #1f1f1f;
                        --bs-btn-border-radius: 0px;
                        width: 200px; margin-top:20px; border-radius: 5px;" href="../Zellenials/Pages/User/Return-2.php"></button></td>
        </div> -->

        <div class="checkout-btn" style="text-align: center; color: white;">
            <input type="submit" class="btn" style="--bs-btn-border-color: #C5FF01; 
                    --bs-btn-bg: #C5FF01;
                    --bs-btn-hover-bg: #1f1f1f;
                    --bs-btn-color: #000000;
                    --bs-btn-hover-color: #ffffff;
                    --bs-btn-hover-border-color: #1f1f1f;
                    --bs-btn-border-radius: 0px;
                    width: 91%; margin-top: 90px; border-radius: 8px;" value="Lanjut">
        </div>
        
    </div>
    </form> 
    <!-- CONTENT -->

    
<body style="background-color: #1f1f1f;">
@endsection
