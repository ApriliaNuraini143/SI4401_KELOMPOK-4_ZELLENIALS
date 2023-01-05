@extends('layout.layout')
@include('layout.navbar')

@section('content')

<div class="op-title" style="text-align: center; color:white; margin-top: 10vh;">
    <h1 style="font-size: 48px;"><b>Ini Status Pesanan Kamu~</b></h1>
</div>

<!-- TABEL STATUS -->

<div class="detail-container" style="background-color: white; width: 90%; padding: 20px; border-radius: 15px;
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
                <th scope="col" >Status</th>
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
            <td style="color: blue;">Menunggu Konfirmasi</td>
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
            <td style="color: blue;">Menunggu Konfirmasi</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection