@extends('layout.layout')
@include('layout.sidebar')

@section('content')
<body style="background-color: #1f1f1f; display: flex;">

<!-- CONTENT -->

    <!-- CARD -->

    <div class="contentSection" style="height: 100vh;">
    <div class="title">
        <h1 style="color: white; margin: 56px 40px;">View Catalog</h1>
    </div>

    <div class="content" style="display: flex;">
        @foreach ($produks as $p)
        <div class="d-flex justify-content-center" style="margin-top: 20px; margin-left: 30px; ">
            
            <div class="card" style="width: 18rem; margin-right: 30px;">
                <img src="{{asset('storage/uploaded/produk/'.$p->foto_produk)}}" class="card-img-top" alt="" style="max-height:256px; object-fit: cover;">
                <div class="card-body">
                    <p class="card-text">{{$p->nama_produk}}</p>
                    <p class="card-text">{{$p->deskripsi}}</p>
                    <p class="card-text"><b>Rp {{number_format($p->harga)}}</b></p>
                </div>
                <div class="card-footer">
                    <a href="{{route('editProduk',$p->id)}}" class="btn btn-outline-secondary">EDIT</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>



</body>
@endsection
