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

    <?php require ('../../Templates/navbar-old.php');?>

    </header>

    <div class="container" style="display: flex; align-items: center;">
    
      <div class="content" style="color: white; width: 100%; border-radius: 15px; margin-top: 40px;">
        <div class="sub-content" style="color: white;">

          <div class="op-title" style="text-align: left; color:white; margin-top: 50px;">
            <h1 style="font-size: 48px;"><b>Profile</b></h1>
          </div>

          <form action="profile.php">    
            <div class="col-12 mt-4">
              <label for="exampleInputEmail1" class="form-label">Nama Pengguna</label>
              <input type="text" class="form-control" id="exampleInputEmail1" value="Masukkan Nama Anda">
            </div>
            <div class="col-12 mt-3">
              <label for="exampleInputEmail1" class="form-label">Alamat E-mail</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="yourname@gmail.com">
            </div>
            <div class="col-12 mt-3">
              <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
              <input type="password" class="form-control" id="exampleInputPassword1" value="********">
            </div>
            <br>
            <button type="submit" class="btn btn-primary mt-3" style="width: 100px; background-color: #C5FF01; border-color: #C5FF01; color: #1f1f1f;"><b>Simpan</b></button>
          </form>

        </div>
      </div>

    </div>
  </body>
</html>