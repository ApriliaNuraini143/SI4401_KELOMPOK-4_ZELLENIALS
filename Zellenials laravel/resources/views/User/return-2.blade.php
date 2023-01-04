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

    <!-- NAVBAR -->

    <!-- CONTENT -->
    
    <div class="detail-container" style="background-color: white; width: 80%; height: 570px; padding: 20px; border-radius: 15px;
    margin-left:auto; margin-right:auto; margin-top: 55px; border: 8px solid #C5FF01;">

    <div class="op-title" style="text-align: center; margin-top: 10px;">
      <h1 style="font-size: 48px;"><b>Retur Pesanan</b></h1>
    </div>

    <div class="form-container" style="margin-top: 40px;">
        <div class="justify-content-center">

            <div class="form" style="margin-left: 65px; margin-right: 65px;">
                <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">Pilih Ekspedisi</label>
                        <select class="form-select" aria-label="Default select example" placeholder="Pilihan Ekspedisi">
                            <option value="0" selected>JNE</option>
                            <option value="1">JNT</option>
                            <option value="2">GOSEND</option>
                        </select>
                    </div>
                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label">Alasan Pengembalian</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label">Tambahkan</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
            </div>
        </div>
        </div>
        <!--
        <div class="confirm-container" style="text-align: center;">
            <input type="submit" class="btn" value="Lanjut" style="--bs-btn-border-color: #C5FF01;
                        --bs-btn-bg: #C5FF01;
                        --bs-btn-hover-bg: #1f1f1f;
                        --bs-btn-color: #000000;
                        --bs-btn-hover-color: #ffffff;
                        --bs-btn-hover-border-color: #1f1f1f;
                        --bs-btn-border-radius: 0px;
                        width: 200px; margin-top:20px; border-radius: 5px;"></button></td>
        </div> -->

        <div class="checkout-btn" style="text-align: center; color: white;">
            <a href="return-3.php" class="btn" style="--bs-btn-border-color: #C5FF01; 
                    --bs-btn-bg: #C5FF01;
                    --bs-btn-hover-bg: #1f1f1f;
                    --bs-btn-color: #000000;
                    --bs-btn-hover-color: #ffffff;
                    --bs-btn-hover-border-color: #1f1f1f;
                    --bs-btn-border-radius: 0px;
                    width: 91%; margin-top: 66px; border-radius: 8px;"><b>Lanjut</b></a>
        </div>

        
    </div>
    <!-- CONTENT -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>