@extends('layout.layout')
@include('layout.navbar')

@section('content')
  <body style="background-color: #1f1f1f;">

    <!-- CONTENT -->
    
    <div class="detail-container" style="background-color: white; width: 80%; height: 570px; padding: 20px; border-radius: 15px;
    margin-left:auto; margin-right:auto; margin-top: 55px; border: 8px solid #C5FF01;">

    <div class="op-title" style="text-align: center; margin-top: 10px;">
      <h1 style="font-size: 48px;"><b>Retur Pesanan</b></h1>
    </div>
    <form action="{{route('returnDone')}}" method="POST" enctype="multipart/form-data">
      @csrf


    
    <div class="form-container" style="margin-top: 40px;">
        <div class="justify-content-center">

            <div class="form" style="margin-left: 65px; margin-right: 65px;">
                <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">Pilih Ekspedisi</label>
                        <select class="form-select" aria-label="Default select example" name="expedisi" placeholder="Pilihan Ekspedisi">
                            <option value="0" selected>JNE</option>
                            <option value="1">JNT</option>
                            <option value="2">GOSEND</option>
                        </select>
                    </div>
                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label">Alasan Pengembalian</label>
                    <input type="text" name="alasan" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label">Tambahkan</label>
                    <input type="file" class="form-control" required name="picRetur" id="exampleFormControlInput1" placeholder="">
                </div>
            </div>
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
                        width: 200px; margin-top:20px; border-radius: 5px;"></button></td>
        </div> -->

        <div class="checkout-btn" style="text-align: center; color: white;">
          <input type="hidden" name="invoice" value="{{$invoice}}">
            <input type="submit" class="btn" style="--bs-btn-border-color: #C5FF01; 
                    --bs-btn-bg: #C5FF01;
                    --bs-btn-hover-bg: #1f1f1f;
                    --bs-btn-color: #000000;
                    --bs-btn-hover-color: #ffffff;
                    --bs-btn-hover-border-color: #1f1f1f;
                    --bs-btn-border-radius: 0px;
                    width: 91%; margin-top: 66px; border-radius: 8px;" value="Lanjut">
        </div>

        
    </div>
  </form>
    <!-- CONTENT -->

  </body>
  @endsection
