<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zellenials | Made by Passion </title>
    <link rel="Zellenials icon" href="/Zellenials/Assets/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body style="background-color: #1f1f1f;">
    
    <!-- NAVBAR -->

    <header>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #C5FF01;">
      <div class="container-fluid">
            <a class="navbar-brand" href="/Zellenials/Pages/User/homepage.php" style="margin-left: 70px;"><b>Zellenials Company</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="margin-right: 70px;">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../User/homepage.php">Beranda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../User/shopping-cart.php">Keranjang</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../User/status-order.php">Status Pesanan</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../User/my-order.php">Pesanan Saya</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../User/return-1.php">Retur Pesanan</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../User/tentangkami.php">Tentang Kami</a>
                </li>
                <li class="nav-item" style="padding-top: 5px; padding-left: 10px;">
                <a href="../User/profile.php"><img src="/Zellenials/Assets/person-circle.png" alt="person-circle.png"></a>
                </li>
            </ul>
          </div>
      </div>
    </nav>

    </header>

    <!-- NAVBAR -->

    <!-- CONTENT -->


    <!-- CAROUSEL -->

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/Zellenials/Assets/carousel-img1.png" class="d-block w-100" alt="carousel-img1.png" style="max-height: 800px;">
        </div>
        <div class="carousel-item">
          <img src="/Zellenials/Assets/carousel-img2.png" class="d-block w-100" alt="carousel-img1.png" style="max-height: 800px;">
        </div>
        <div class="carousel-item">
          <img src="/Zellenials/Assets/carousel-img3.png" class="d-block w-100" alt="carousel-img1.png" style="max-height: 800px;">
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
      <div class="card" style="width: 18rem;">
        <img src="/Zellenials/Assets/card-img1.png" class="card-img-top" alt="card-img1.png" style="max-height:256px; object-fit: cover;">
          <form action="../User/detail-product.php" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                  <h5 class="card-title mb-3">Brainstorming</h5>
                  <p class="card-text">You can't imagine what's tremendous world gonna be if we use 100% of our brain while brainstorming</p>
                  <p class="card-text" style="font-weight: 700; color: green;">Rp 149.000</p>
                  <button type="submit" class="mt-2 btn btn-primary col" style="width:100%; margin: 10px 0px 10px">Lihat Produk</button>
              </div>
          </form>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="/Zellenials/Assets/card-img2.png" class="card-img-top" alt="card-img1.png" style="max-height:256px; object-fit: cover;">
          <form action="../User/detail-product.php" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                  <h5 class="card-title mb-3">Money Take Control</h5>
                  <p class="card-text">Whatever you want, whatever you need, money is the solution</p><br><br>
                  <p class="card-text" style="font-weight: 700; color: green;">Rp 149.000</p>
                  <button type="submit" class="mt-2 btn btn-primary col" style="width:100%; margin: 10px 0px 10px">Lihat Produk</button>
              </div>
          </form>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="/Zellenials/Assets/card-img3.png" class="card-img-top" alt="card-img1.png" style="max-height:256px; object-fit: cover;">
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
      <a href="../User/custom-produk.php" class="btn btn-outline-success btn-lg" style="--bs-btn-border-color: #C5FF01;
      --bs-btn-hover-bg: #C5FF01;
      --bs-btn-color: #C5FF01;
      --bs-btn-hover-border-color: #C5FF01;
      --bs-btn-border-radius: 0px;"><b>Custom Disini!</b></a>
    </div>

    <!-- BUTTON -->

    
    <!-- FOOTER -->

    <div class="d-flex" style="background-color: #C5FF01; margin-top:200px; padding-left: 70px; padding-right: 70px;">
      <div class="p-3">
        <ul class="list-group-border-width: 0px;" style="padding-top: 20px;">
        <li class="list-group-item"><b>Zellenials Company</b></li>
        <li class="list-group-item">Brand lokal yang menjual produk <br>kaos bertemakan streetwear dengan <br>kualitas kain dan sablon yang tinggi.</li>
      </div>
      <div class="p-3 flex-grow-1">
        <ul class="list-group-border-width: 0px;" style="padding-top: 20px;">
        <li class="list-group-item"><b>Produk</b></li>
        <li class="list-group-item">Kaos Streetwear</li>
        <li class="list-group-item">Hoodie</li>
      </div>
      <div class="p-3">
      <ul class="list-group-border-width: 0px;" style="padding-top: 20px;">
        <li class="list-group-item"><b>Kontak</b></li>
        <li class="list-group-item"><img src="/Zellenials/Assets/WhatsApp.png" alt="whatsapp.png"> 085161252804</img></li>
        <li class="list-group-item"><img src="/Zellenials/Assets/Envelope.png" alt="envelope.png"> zellenialscompany@gmail.com</img></li>
        <li class="list-group-item"><img src="/Zellenials/Assets/Instagram.png" alt="instagram.png"> zellenials.co</img></li>
      </div>
    </div>

    <!-- FOOTER -->

    

    <!-- CONTENT -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>