@extends('layout.layout')
@include('layout.navbar')

@section('content')
    <!-- CONTENT -->
<body style="background-color: #1f1f1f;">

    <div class="op-title" style="text-align: center; color:white; margin-top: 50px;">
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
                    <th scope="col">Ukuran</th>
                    <th scope="col">Kuantitas</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">No. Inv/Req</th>
                    <th scope="col" >Status</th>
                </tr>
            </thead>
            <tbody align="center">
                @foreach ($user->produks as $p)
                    @if ($p->pesanan->status == "Retur")
                        @continue
                    @endif
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$p->nama_produk}}</td>
                            <td>{{$p->pesanan->size}}</td>
                            <td>{{$p->pesanan->jumlah}}</td>
                            <td>Rp {{number_format($p->harga*$p->pesanan->jumlah)}}</td>
                            <td>{{$p->pesanan->created_at}}</td>
                            <td>{{$p->pesanan->invoice}}</td>
                            <td style="color: blue;">{{$p->pesanan->status}}</td>
                        </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="detail-container" style="background-color: white; width:90%; padding: 20px; border-radius: 15px;
    margin-left:auto; margin-right:auto; margin-top: 40px;">
        <table class="table">
            <thead style="background-color: #C5FF01;" align="center">
                <tr sty>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Tipe lengan</th>
                    <th scope="col">Ukuran</th>
                    <th scope="col">Kuantitas</th>
                    <th scope="col">Status</th>
                    
                </tr>
            </thead>
            <tbody align="center">
                @foreach ($user->customs as $p)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$user->nama_user}}</td>
                    <td>{{$p->nama_produk}}</th>
                    <td>{{$p->lengan}}</td>
                    <td>{{$p->size}}</td>
                    <td>1</td>
                    <td style="color: blue;">{{$p->status}}</td>
                    
                </tr>
                @endforeach
            
            </tbody>
        </table>
    </div>

    <!-- TABEL STATUS -->

    <!-- CONTENT -->
    
</body>
@endsection