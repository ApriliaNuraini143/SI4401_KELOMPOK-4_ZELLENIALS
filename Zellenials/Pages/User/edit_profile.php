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
            <a class="nav-link active" aria-current="page" href="/Zellenials/Pages/User/homepage.php">Beranda</a>
            </li>
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
            <li class="nav-item">
            <a class="nav-link" href="/Zellenials/Pages/User/tentangkami.php">Tentang Kami</a>
            </li>
            <li class="nav-item" style="padding-top: 5px; padding-left: 10px;">
            <a href="#"><img
                src="assets/logo.jpg"
                alt=""
                width="30"
                height="24"
                class="d-inline-block align-text-top"></a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    </header>

    <h1> Profile </h1>
    <form>    
  <div class="col-8">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="col-8">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="col-8">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>