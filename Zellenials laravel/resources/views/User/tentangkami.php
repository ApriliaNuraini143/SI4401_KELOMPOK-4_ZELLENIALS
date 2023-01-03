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

    <?php require ('../../Templates/navbar-old.php');?>

    </header>

    <!-- NAVBAR -->

    <!-- CONTENT -->
    
    <div class="container" style="margin-top: 150px;">
        <h1 align="center"></h1>
        <div class="row">
          <div class="col-6">
            <a class="navbar-brand" >
              <img
                src="/Zellenials/Assets/favicon.ico"
                alt=""
                width="400"
                height="400"
                class="d-inline-block align-text-top"
                style="object-fit: cover; border-radius: 30%; margin-left: 50px;"
              />
            </a>
            
          </div>

          <div class="col-6 text-light" style="margin-top: 70px;">
            <h1><b>Tentang Kami ~</b></h1>
            <p>Sebuah brand fashion lokal yang didirikan oleh tiga pemuda yang ingin menghadirkan kaos yang berkualitas
              dengan harga yang terjangkau.</p>

            <p>Tingginya harga kaos namun dengan kualitas yang seadanya menjadi motivasi kami untuk menciptakan kaos
              dengan bahan berkualitas, sablon yang terang serta tahan lama yang juga dilengkapi dengan tema streetwear.</p>

            <p>Dukung kami untuk bisa menjadi lebih baik!<br>
            Masukan dari kalian akan sangat berarti bagi kami!</p>
          </div>
        </div>
    </div>

  </body>
  </html>