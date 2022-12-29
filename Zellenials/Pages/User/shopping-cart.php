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
                <a class="nav-link" aria-current="page" href="../User/homepage.php">Beranda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="../User/shopping-cart.php">Keranjang</a>
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

    <div class="op-title" style="text-align: center; color:white; margin-top: 50px;">
      <h1 style="font-size: 48px;"><b>Keranjang Belanja Kamu!</b></h1>
    </div>

    <div class="detail-container" style="background-color: white; width:90%; padding: 20px; border-radius: 15px;
    margin-left:auto; margin-right:auto; margin-top: 40px;">
        <table class="table">
            <thead style="background-color: #C5FF01;">
                <tr sty>
                <th scope="col">#</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Warna</th>
                <th scope="col">Ukuran</th>
                <th scope="col">Kuantitas</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Brainstorming - Article 2020</td>
                <td>Hitam</td>
                <td>L</td>
                <td>1</td>
                <td>Rp 149.000</td>
                <td><button type="button" class="btn" style="--bs-btn-border-color: #DC3545;
                    --bs-btn-bg: #DC3545;
                    --bs-btn-hover-bg: #DC3545;
                    --bs-btn-color: #ffffff;
                    --bs-btn-hover-border-color: #DC3545;
                    --bs-btn-border-radius: 0px;">Hapus</button></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Money Take Control</td>
                <td>Hitam</td>
                <td>L</td>
                <td>1</td>
                <td>Rp 149.000</td>
                <td><button type="button" class="btn" style="--bs-btn-border-color: #DC3545;
                    --bs-btn-bg: #DC3545;
                    --bs-btn-hover-bg: #DC3545;
                    --bs-btn-color: #ffffff;
                    --bs-btn-hover-border-color: #DC3545;
                    --bs-btn-border-radius: 0px;">Hapus</button></td>
                </tr>
                <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><b>Rp 298.000</b></td>
                <td><a href="checkout-confirm.php" class="btn" style="--bs-btn-border-color: #C5FF01;
                    --bs-btn-bg: #C5FF01;
                    --bs-btn-hover-bg: #C5FF01;
                    --bs-btn-color: #000000;
                    --bs-btn-hover-border-color: #C5FF01;
                    --bs-btn-border-radius: 0px;"><b>Checkout</b></a></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- CONTENT -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>