Skip to content
Search or jump to…
Pull requests
Issues
Codespaces
Marketplace
Explore
 
@megannih 
ApriliaNuraini143
/
SI4401_KELOMPOK-4_ZELLENIALS
Private
Code
Issues
Pull requests
Actions
Projects
Security
Insights
SI4401_KELOMPOK-4_ZELLENIALS/Zellenials/Pages/User/detail.php
@afdalcitra
afdalcitra Add files via upload
…
Latest commit a783db9 last week
 History
 1 contributor
149 lines (136 sloc)  6.9 KB

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
            <a class="nav-link" href="#">Tentang Kami</a>
            </li>
            <li class="nav-item" style="padding-top: 5px; padding-left: 10px;">
            <a href="#"><img src="/Zellenials/Assets/person-circle.png" alt="person-circle.png"></a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    </header>
    <!-- NAVBAR -->
    <!-- CONTENT -->
    <div class="detail-container" style="background-color: white; width:fit-content; padding: 20px; border-radius: 15px;
    margin-left:auto; margin-right:auto; margin-top: 140px;">
        <table>
            <tr>
                <th rowspan="12"><img src="/Zellenials/Assets/card-img1.png" alt="card-img1.png" style="width: 400px; display:block;"></th>
                <td rowspan="12"></td>
                <td rowspan="12"></td>
                <td rowspan="12"></td>
                <td rowspan="12"></td>
                <td rowspan="12"></td>
                <td rowspan="12"></td>
                <td rowspan="12"></td>
                <td rowspan="12"></td>
                <td><b style=" font-size: 32px;">YUK CUSTOM BAJU KAMU</b></td>
            </tr>
            
            <tr>
                <td style="padding-top:20px; font-size: 24px;"><b></b></td>
            </tr>
            <tr>
                <td>
                <label for="exampleInputEmail1" class="form-label"><b>Email address</b></label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </td>
            </tr>
            <tr>
                <td>
                <label for="exampleInputEmail1" class="form-label"><b>Tambahkan Desain</b></label>
                <div class="input-group mb-3">
  <input type="file" class="form-control" id="inputGroupFile02">
  <label class="input-group-text" for="inputGroupFile02">Upload</label>
</div>
                </td>
            </tr>
            <tr>
                <td>
                <label for="exampleInputEmail1" class="form-label"><b>Pilih Panjang Lengan</b></label>
                <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
    Pilih Panjang Lengan
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><button class="dropdown-item" type="button">Action</button></li>
    <li><button class="dropdown-item" type="button">Another action</button></li>
    <li><button class="dropdown-item" type="button">Something else here</button></li>
  </ul>
</div>
                </td>
            </tr>
            <tr>
                <td>
                <label for="exampleInputEmail1" class="form-label"><b>Tentukan Ukuran Kamu!</b></label>
</div>
                </td>
            </tr>
            <tr>
                <td>
                <label for="exampleInputEmail1" class="form-label">Berat Badan</label>
                <div class="input-group mb-3">
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
  <span class="input-group-text">Kg</span>
</div>
                </td>
                <td>
                <label for="exampleInputEmail1" class="form-label">Tinggi Badan</label>
                <div class="input-group mb-3">
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
  <span class="input-group-text">Cm</span>
</div>
                </td>

            </tr>
            <tr>
                <td style="padding-top:20px; font-size: 24px;"><b>Harga</b></td>
            </tr>
            <tr>
                <td style="font-size: 32px;"> <b>Rp 149.000</b></td>
                <td style="font-size: 32px;">
                <div class="buy-container" style="margin-top: 50px;">
                    <a href="#" class="btn btn-dark btn-lg" style="--bs-btn-border-color: #1f1f1f;
                    --bs-btn-hover-bg: #C5FF01;
                    --bs-btn-color: #ffffff;
                    --bs-btn-hover-border-color: #C5FF01;
                    --bs-btn-border-radius: 0px;"><b>Cek Ukuran</b></a>
                </div></td>
            </tr>
        </table>
    </div>
    <!-- CONTENT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>


