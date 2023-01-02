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

    <div class="op-title" style="text-align: center; color:white; margin-top: 50px;">
      <h1 style="font-size: 48px;"><b>Keranjang Belanja Kamu!</b></h1>
    </div>

    <div class="detail-container" style="background-color: white; width:90%; padding: 20px; border-radius: 15px;
    margin-left:auto; margin-right:auto; margin-top: 40px;">
        <table class="table">
            <thead style="background-color: #C5FF01;" align="center">
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
            <tbody align="center" style="align-items: center;">
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
            </tbody>
        </table>
    </div>

    <div class="total-belanja" style="background-color: white; width:90%; height: 140px ; border-radius: 15px;
    margin-left:auto; margin-right:auto; margin-top: 40px; display: flex; align-item: center; justify-items: center; border: 8px solid #C5FF01">
      <div class="notes" style="width: 60%; margin-top: auto; margin-bottom: auto;" align="center">
        <h3 style="font-size: 24px;">Periksa Kembali Pesanan Kamu Sebelum Melanjutkan ✅</h3>
      </div>

      <div class="total" style="background-color: #1f1f1f; color: white; margin-top: auto; margin-bottom: auto; padding: 16px; width: 30%;">
        <h4 style="font-size: 24px; margin-left: 16px;">Total Belanjaan :</h4>
        <h3 style="font-size: 40px; margin-left: 16px;">Rp. 298.000</h3>
      </div>

      <div class="checkout-btn" style="background-color: #1f1f1f; color: white; margin-top: auto; margin-bottom: auto; padding: 46px 60px 40.5px 5px; width: 20%;">
      <a href="checkout-page.php" class="btn" style="--bs-btn-border-color: #C5FF01; width: 100%; border-radius: 8px;
                    --bs-btn-bg: #C5FF01;
                    --bs-btn-hover-bg: #C5FF01;
                    --bs-btn-color: #000000;
                    --bs-btn-hover-border-color: #C5FF01;
                    --bs-btn-border-radius: 0px;"><b>Checkout</b></a>
      </div>

    </div>

    <!-- CONTENT -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>