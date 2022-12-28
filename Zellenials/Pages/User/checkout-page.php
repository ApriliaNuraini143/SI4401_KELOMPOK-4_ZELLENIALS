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
            <?php if (!$login) :?>
              <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/Zellenials/Pages/User/homepage.php">Beranda</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="/Zellenials/Pages/User/tentangkami.php">Tentang Kami</a>
              </li>
            <?php else : ?>
              <li class="nav-item">
              <a class="nav-link" href="/Zellenials/Pages/User/shopping-cart.php">Keranjang</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="#">Status Pesanan</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="/Zellenials/Pages/User/my-order.php">Pesanan Saya</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="#">Retur Pesanan</a>
              </li>
            <?php endif; ?>
            <?php if ($login) :?>
              <li class="nav-item" style="padding-top: 5px; padding-left: 10px;">
              <a href="#"><img src="/Zellenials/Assets/person-circle.png" alt="person-circle.png"></a>
              </li>
            <?php else : ?>
              <li class="nav-item">
              <a class="nav-link" href="/Zellenials/Pages/User/my-order.php">Login</a>
              </li>
            <?php endif; ?>
        </ul>
        </div>
    </div>
    </nav>

    </header>

    <!-- NAVBAR -->

    <!-- CONTENT -->
    <div class="detail-container" style="background-color: white; width:fit-content; padding: 20px; border-radius: 15px;
    margin-left:auto; margin-right:auto; margin-top: 190px;">

    <div class="op-title" style="text-align: center; margin-top: 10px;">
      <h1 style="font-size: 48px;"><b>Detail Pengiriman</b></h1>
    </div>

    <div class="form-container" style="margin-top: 40px;">
        <div class="d-flex justify-content-center">
            <div class="left-form" style="margin-right: 10px;">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama" style="width: 400px;">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Handphone</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nomor Handphone">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="yourname@email.com">
                </div>
            </div>
            <div class="right-form" style="margin-left: 10px;">
                <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Alamat" style="width: 400px;">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kabupaten</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama Kabupaten">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kode POS</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="123456">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Pilih Ekspedisi</label>
                        <select class="form-select" aria-label="Default select example">
                            <option value="0" selected>JNE</option>
                            <option value="1">JNT</option>
                            <option value="2">GOSEND</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="confirm-container" style="text-align: center;">
            <input type="submit" class="btn" value="Lanjut" style="--bs-btn-border-color: #C5FF01;
                        --bs-btn-bg: #C5FF01;
                        --bs-btn-hover-bg: #1f1f1f;
                        --bs-btn-color: #000000;
                        --bs-btn-hover-color: #ffffff;
                        --bs-btn-hover-border-color: #1f1f1f;
                        --bs-btn-border-radius: 0px;
                        width: 200px; margin-top:20px; border-radius: 5px;"></button></td>
        </div>

        
    </div>
    <!-- CONTENT -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>