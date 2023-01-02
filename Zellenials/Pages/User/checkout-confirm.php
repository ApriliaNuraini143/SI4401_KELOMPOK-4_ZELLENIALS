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
    <div class="detail-container" style="background-color: white; width:fit-content; padding: 20px; border-radius: 15px;
    margin-left:auto; margin-right:auto; margin-top: 160px;">

    <div class="op-title" style="text-align: center; margin-top: 10px;">
      <h1 style="font-size: 48px;"><b>Pembayaran</b></h1>
    </div>

    <div class="form-container" style="margin-top: 40px;">
        <div class="d-flex justify-content-center">
            <div class="left-form" style="margin-right: 10px;">
                <div class="text-container">
                    <p><b>Transfer ke rekening berikut sesuai dengan nominal belanja kamu</b></p>
                    <p><b>Bank Tujuan :</b></p>
                    <p>Bank Central Asia (BCA)</p>
                    <br>
                    <p><b>Nama Rekening :</b></p>
                    <p>Tiga Pemuda Berjaya</p>
                    <br>
                    <p><b>Nomor Rekening :</b></p>
                    <p>0987768909</p>
                </div>
            </div>
            <div class="right-form" style="margin-left: 10px;">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama" style="width: 400px;">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Handphone</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nomor Handphone">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Bukti Pembayaran</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <div class="text-container" style="text-align: right;">
                    <p><b>Total Belanja:</b></p>
                    <p style="font-size: 32px">Rp 298.000</p>
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