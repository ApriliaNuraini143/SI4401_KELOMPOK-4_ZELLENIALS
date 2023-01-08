@extends('layout.layout')
@include('layout.sidebar')

@section('content')

<body style="background-color: #1f1f1f; display: flex;">
    <!-- CONTENT -->

    <div class="contentSection" style="height: 100vh;">
        <div class="title">
            <h1 style="color: white; margin: 56px 40px;">Custom Product</h1>
        </div>

    <!-- TABEL CUSTOM -->

        <div class="detail-container" style="background-color: white; width: 1200px; padding: 20px; border-radius: 15px;
        margin-left:40px; margin-right:20px; margin-top: 40px;">
            <table class="table">
                <thead style="background-color: #C5FF01;" align="center">
                    <tr sty>
                        <th scope="col">#</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Warna</th>
                        <th scope="col">Ukuran</th>
                        <th scope="col">Kuantitas</th>
                        <th scope="col">Status</th>
                        <th scope="col">Gambar Desain</th>
                        <th scope="col">Config</th>
                    </tr>
                </thead>
                <tbody align="center">
                @foreach ($customs as $c)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$c->nama_produk}}</td>
                        <td>{{$c->lengan}}</td>
                        <td>{{$c->size}}</td>
                        <td>1</td>
                        <td style="color: blue;">Menunggu Konfirmasi</td>
                        <td><a type="submit" class="btn btn-primary"
                        style="margin-top: 0px; background-color: green;
                        border-color: green; color: white; font-weight: bold;"
                        href="/download/custom/{{$c->foto_produk}}">Download Gambar</a></td>
                        <td><button type="submit" class="btn btn-primary"
                        style="margin-top: 0px; background-color: blue;
                        border-color: blue; color: white; font-weight: 400;">Edit</button>
                        <button type="submit" class="btn btn-primary"
                        style="margin-top: 0px; background-color: red;
                        border-color: red; color: white; font-weight: 400;"
                        onclick="if (confirm('Yakin ingin menghapus order tersebut ?')) {window.location.href = '{{route('deleteOrder',$c->id)}}';}">X</button></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
@endsection
