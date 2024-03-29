@extends('layout.layout')
@include('layout.navbar')

@section('content')
  <body style="background-color: #1f1f1f;">

    <!-- CONTENT -->
    <div class="detail-container" style="background-color: white; width: 80%; padding: 20px; border-radius: 15px;
    margin-left:auto; margin-right:auto; margin-top: 55px; border: 8px solid #C5FF01;">

    <div class="op-title" style="text-align: center; margin-top: 10px;">
      <h1 style="font-size: 48px;"><b>Pembayaran</b></h1>
    </div>
    
    <div class="form-container" style="margin-top: 40px;">
        <div class="d-flex justify-content-center">
                <form action="{{route('newPesanan')}}" method="POST" enctype="multipart/form-data" class="row">
                    <div class="col"> 
                        @csrf
                        <div class="right-form" style="margin-right: 25px;">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Akun</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nomor Rekening/Handphone</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="008654XXXXXX">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Bukti Pembayaran</label>
                                <input required class="form-control" type="file" id="file" name="img">
                            </div>
                            <!--
                            <div class="text-container" style="text-align: right;">
                                <p><b>Total Belanja:</b></p>
                                <p style="font-size: 32px">Rp 298.000</p>
                            </div> -->
                        </div>
                    </div>

                    <div class="col">
                        <div class="left-form" style="margin-left: 25px;">
                            <div class="text-container">
                                <p><b>Transfer ke rekening berikut sesuai dengan nominal belanja kamu :</b></p>

                                <p style="margin-bottom: -0.1rem"><b>Bank Tujuan :</b></p>
                                <p>Bank Central Asia (BCA)</p>

                                <p style="margin-bottom: -0.1rem"><b>Nama Rekening :</b></p>
                                <p>Tiga Pemuda Berjaya</p>

                                <p style="margin-bottom: -0.1rem"><b>Nomor Rekening :</b></p>
                                <p>0987768909</p>
                            </div>
                        </div>
                    </div>

                    <div class="total" style="text-align: right; margin-right: 55px">
                        <p style="font-size: 24px; margin-bottom: -0.1rem">Total Belanja:</p>
                        <p style="font-size: 40px; margin-bottom: -0.1rem"><b>Rp {{number_format($data['total'])}}</b></p>     
                    </div>
                    
                    
                    <div class="button" style="margin-left: 98px;">
                        <input type="hidden" name="idPengiriman" value="{{$data['idPengiriman']}}">
                        <input type="submit" class="btn btn-primary" style="background-color: #c5ff01; border-color: #c5ff01;
                        color: #1f1f1f; font-weight: bold; width: 91%; margin-top: 20px; border-radius: 8px;" value="Pesan">
                    </div>
                    
                </form>
            </div>

           
        </div>

        <!--
        <div class="confirm-container" style="text-align: center;">
            <input type="submit" class="btn" value="Lanjut" style="--bs-btn-border-color: #C5FF01;
                        --bs-btn-bg: #C5FF01;
                        --bs-btn-hover-bg: #1f1f1f;
                        --bs-btn-color: #000000;
                        --bs-btn-hover-color: #ffffff;
                        --bs-btn-hover-border-color: #1f1f1f;
                        --bs-btn-border-radius: 0px;
                        width: 91%; margin-top:20px; border-radius: 5px; font-weight: bolder;"></button></td>
        </div>
        -->

        
        
    </div>
    <!-- CONTENT -->
    </div>
    
  </body>
  @endsection
