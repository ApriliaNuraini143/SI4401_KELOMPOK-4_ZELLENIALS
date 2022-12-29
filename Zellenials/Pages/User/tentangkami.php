<!doctype html>
<?php
	session_start();
    if (isset($_SESSION['admin'])){
        $admin = $_SESSION['admin'];
    }else{
        $admin = FALSE;
    }
    ?>
    
    <?php
    if ($admin) {
        echo $admin;
        header("location: admin/homepage.php");
        exit;

    }
    $login = isset($_SESSION['state']);
    $remember = isset($_COOKIE['email']);
    if ($remember) {
        $email = $_COOKIE['email'];
        $password = $_COOKIE['pass'];
    }
?>
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
                  <a class="nav-link active" href="../User/tentangkami.php">Tentang Kami</a>
                  </li>
                  <li class="nav-item" style="padding-top: 5px; padding-left: 10px;">
                  <a href="../User/profile.php"><img src="/Zellenials/Assets/person-circle.png" alt="person-circle.png"></a>
                  </li>
              </ul>
            </div>
        </div>
      </nav>
    </header>
    <br>
    <br>
    <div class="container" >
        <h1 align="center"></h1>
        <div class="row">
          <div class="col-6">
            <a class="navbar-brand" >
              <img
                src="/Zellenials/Assets/favicon.ico"
                alt=""
                width="500"
                height="400"
                class="d-inline-block align-text-top"
                style="object-fit: cover; border-radius: 10%;"
              />
            </a>
            
          </div>
          <div class="col-6 text-light">
            <p>
              <h1>TENTANG KAMI</h1>
              Sebuah brand fashion lokal yang didirikan oleh tiga pemuda yang ingin menghadirkan kaos yang berkualitas dengan harga yang terjangkau.  
              
              Tingginya harga kaos namun dengan kualitas yang seadanya menjadi motivasi kami untuk menciptakan kaos dengan bahan berkualitas, sablon yang terang serta tahan lama yang juga dilengkapi dengan tema streetwear.
              
              Dukung kami untuk bisa menjadi lebih baik!
              Masukan dari kalian akan sangat berarti bagi kami!
            </p>
          </div>
        </div>
      </div>
  </body>
  </html>