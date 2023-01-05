@extends('layout.layout')
@include('layout.navbar')

@section('content')

<div class="op-title" style="text-align: center; color:white; margin-top: 50px;">
  <h1 style="font-size: 48px;"><b>Ini Semua Pesanan Kamu~</b></h1>
</div>

<div class="detail-container" style="background-color: white; width:90%; padding: 20px; border-radius: 15px;
margin-left:auto; margin-right:auto; margin-top: 40px;">
    <table class="table">
        <thead style="background-color: #C5FF01;" align="center">
            <tr sty>
            <th scope="col">#</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Warna</th>
            <th scope="col">Ukuran</th>
            <th scope="col">Kuantitas</th>
            <th scope="col">Harga</th>
            <th scope="col">Tanggal</th>
            <th scope="col">No. Inv/Req</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody align="center">
            <tr>
            <th scope="row">1</th>
            <td>Brainstorming - Article 2020</td>
            <td>Hitam</td>
            <td>L</td>
            <td>1</td>
            <td>Rp 149.000</td>
            <td>18-12-2022</td>
            <td>ZLNS/1812/0001</td>
            <td><a href="detail-product.php" class="btn" style="--bs-btn-border-color: #C5FF01; width: 80%; border-radius: 8px;
                --bs-btn-bg: #C5FF01;
                --bs-btn-hover-bg: #C5FF01;
                --bs-btn-color: #000000;
                --bs-btn-hover-border-color: #C5FF01;
                --bs-btn-border-radius: 0px;"><b>Beli Lagi</b></a>
                
                <!--<button type="button" class="btn" style="--bs-btn-border-color: #C5FF01;
                --bs-btn-bg: #C5FF01;
                --bs-btn-hover-bg: #C5FF01;
                --bs-btn-color: #000000;
                --bs-btn-hover-border-color: #C5FF01;
                --bs-btn-border-radius: 0px;">Beli Lagi</button>--></td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Money Take Control</td>
            <td>Hitam</td>
            <td>L</td>
            <td>1</td>
            <td>Rp 149.000</td>
            <td>18-12-2022</td>
            <td>ZLNS/1812/0001</td>
            <td><a href="detail-product.php" class="btn" style="--bs-btn-border-color: #C5FF01; width: 80%; border-radius: 8px;
                --bs-btn-bg: #C5FF01;
                --bs-btn-hover-bg: #C5FF01;
                --bs-btn-color: #000000;
                --bs-btn-hover-border-color: #C5FF01;
                --bs-btn-border-radius: 0px;"><b>Beli Lagi</b></a>                  
                <!--<button href="detail-product.php" type="button" class="btn" style="--bs-btn-border-color: #C5FF01;
                --bs-btn-bg: #C5FF01;
                --bs-btn-hover-bg: #C5FF01;
                --bs-btn-color: #000000;
                --bs-btn-hover-border-color: #C5FF01;
                --bs-btn-border-radius: 0px;">Beli Lagi</button>--></td>
            </tr>
        </tbody>
    </table>
</div>