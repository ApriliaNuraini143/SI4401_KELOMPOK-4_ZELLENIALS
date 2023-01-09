@extends('layout.layout')
@include('layout.navbar')
@section('content')
<body style="background-color: #1f1f1f;">
  <style>
    .act-btn {
      background-color: #C5FF01;
      align-items: center;
      justify-content: center;
      display: flex;
      width: 80px;
      height: 80px;
      border-radius: 50%;
      -webkit-border-radius: 50%;
      transition: ease all 0.3s;
      position: fixed;
      right: 70px;
      bottom: 80px;
    }
  </style>

  <a href="https://wa.me/+6285161254631" class="act-btn">
    <img src="{{asset('img/whatsapp-big.png')}}" alt="contact-us" width="50px">
  </a>

  <!-- CONTACT BUTTON -->

  <!-- CONTENT -->

  <!-- CAROUSEL -->

  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('img/jumbotron/BR.png')}}" class="d-block w-100" alt="image-caraousel1" style="max-height: 100%;">
      </div>
      <div class="carousel-item">
        <img src="{{asset('img/jumbotron/MTC.png')}}" class="d-block w-100" alt="image-caraousel2" style="max-height: 100%;">
      </div>
      <div class="carousel-item">
        <img src="{{asset('img/jumbotron/UP.png')}}" class="d-block w-100" alt="image-caraousel3" style="max-height: 800px;">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- CAROUSEL -->

  <!-- CARD -->

  <div class="op-title" style="text-align: center; color:white; margin-top: 75px;">
    <h1 style="font-size: 86px;"><b>Koleksi Semua Article</b></h1>
    <h1 style="font-size: 86px;"><b>Supaya Kamu Tambah Kece!</b></h1>
  </div>

  <div class="d-flex justify-content-center" style="margin-top: 75px; gap: 32px;">
    @foreach ($produks as $p)   
      <div class="row-cols-3">
        <div class="col-3">
          <div class="card" style="width: 18rem; box-shadow: 4px 4px 4px #C5FF01;">
            <img src="{{asset('storage/uploaded/produk/'.$p->foto_produk)}}" class="card-img-top" alt="{{$p->nama_produk}}" style="height:256px;max-height:256px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title mb-3">{{$p->nama_produk}}</h5>
                    <p class="card-text">{{$p->deskripsi}}</p>
                    <p class="card-text" style="font-weight: 700; color: green;">Rp {{number_format($p->harga)}}</p>
                    <a href="{{route('detailProduk',$p->id)}}" class="mt-2 btn btn-primary col" style="width:100%; margin: 10px 0px 10px">Lihat Produk</a>
                </div>
          </div>
        </div>
      </div>

    @endforeach
  </div>
  <!-- CARD -->

  <!-- BUTTON -->

  <div class="op-title" style="text-align: center; color:white; margin-top: 300px;">
    <h1 style="font-size: 86px;"><b>Mau Custom Design? Bisa!</b></h1>
  </div>

  <div class="d-flex justify-content-center" style="margin-top: 50px;">
    <a href="{{route('custom')}}" class="btn btn-outline-success btn-lg" style="--bs-btn-border-color: #C5FF01;
    --bs-btn-hover-bg: #C5FF01;
    --bs-btn-color: #C5FF01;
    --bs-btn-hover-border-color: #C5FF01;
    --bs-btn-border-radius: 0px;"><b>Custom Disini!</b></a>
  </div>

  <!-- BUTTON -->

  @include('layout.footer')
</body>
@endsection

