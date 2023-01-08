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
    <div class="card" style="width: 18rem; box-shadow: 4px 4px 4px #C5FF01;">
      <img src="{{asset('img/image/BR/BR1.png')}}" class="card-img-top" alt="card-img1.png" style="max-height:256px; object-fit: cover;">
        <form action="../User/detail-product.php" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <h5 class="card-title mb-3">Brainstorming</h5>
                <p class="card-text">You can't imagine what's tremendous world gonna be if we use 100% of our brain while brainstorming</p>
                <p class="card-text" style="font-weight: 700; color: green;">Rp 149.000</p>
                <button type="submit" class="mt-2 btn btn-primary col" style="width:100%; margin: 10px 0px 10px">Lihat Produk</button>
            </div>
        </form>
    </div>

    <div class="card" style="width: 18rem; box-shadow: 4px 4px 4px #C5FF01;">
      <img src="{{asset('img/image/MTC/MTC1.png')}}" class="card-img-top" alt="card-img1.png" style="max-height:256px; object-fit: cover;">
        <form action="../User/detail-product.php" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <h5 class="card-title mb-3">Money Take Control</h5>
                <p class="card-text">Whatever you want, whatever you need, money is the solution</p><br><br>
                <p class="card-text" style="font-weight: 700; color: green;">Rp 149.000</p>
                <button type="submit" class="mt-2 btn btn-primary col" style="width:100%; margin: 10px 0px 10px">Lihat Produk</button>
            </div>
        </form>
    </div>

    <div class="card" style="width: 18rem; box-shadow: 4px 4px 4px #C5FF01;">
      <img src="{{asset('img/image/UP/UP1.png')}}" class="card-img-top" alt="BR1.png" style="max-height:256px; object-fit: cover;">
        <form action="../User/detail-product.php" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <h5 class="card-title mb-3">Under Pressure</h5>
                <p class="card-text">Sometimes people need to be under pressure.</p><br><br>
                <p class="card-text" style="font-weight: 700; color: green;">Rp 149.000</p>
                <button type="submit" class="mt-2 btn btn-primary col" style="width:100%; margin: 10px 0px 10px">Lihat Produk</button>
            </div>
        </form>
    </div>
  </div>

  <!-- CARD -->

  <!-- BUTTON -->

  <div class="op-title" style="text-align: center; color:white; margin-top: 300px;">
    <h1 style="font-size: 86px;"><b>Mau Custom Design? Bisa!</b></h1>
  </div>

  <div class="d-flex justify-content-center" style="margin-top: 50px;">
    <a href="../User/custom-product.php" class="btn btn-outline-success btn-lg" style="--bs-btn-border-color: #C5FF01;
    --bs-btn-hover-bg: #C5FF01;
    --bs-btn-color: #C5FF01;
    --bs-btn-hover-border-color: #C5FF01;
    --bs-btn-border-radius: 0px;"><b>Custom Disini!</b></a>
  </div>

  <!-- BUTTON -->
  @include('layout.footer')
  </body>
@endsection
