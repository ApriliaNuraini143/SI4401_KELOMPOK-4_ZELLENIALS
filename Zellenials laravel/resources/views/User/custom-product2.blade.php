<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Zellenials | Product Detail</title>
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

        <div class="detail-container" style="background-color: white; width: 80%; padding: 20px; border-radius: 15px;
        margin-left:auto; margin-right:auto; margin-top: 28px; display: flex; border: 8px solid #C5FF01">

            <!-- IMAGE -->

            <div class="imageContainer" style="margin-left: 40px;">
                <div class="imageContainer" style="max-width: 400px;">
                    <img src="../../Assets/image/short_sleeve/hitam.png" class="d-block w-100" alt="...">
                </div>
            </div>

            <!-- IMAGE -->

            <!-- DETAIL PRODUK -->

            <div class="productDetail">
                <form action="../User/shopping-cart.php" method="POST" enctype="multipart/form-data">
                <h2 style="color: #1f1f1f; margin-left: 40px; margin-top: 16px;"><b>Yuk Kustom Baju Kamu!</b></h2>

                <div class="detail" style="margin-left: 40px; margin-top: 32px;">
                    <label for="exampleInputEmail1" class="form-label"><b>Nama Produk</b></label>
                    <input type="email" class="form-control mb-3" id="exampleInputEmail1" aria-describedby="emailHelp">

                    <label for="exampleInputEmail1" class="form-label"><b>Tambahkan Desain</b></label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>

                    <label for="exampleInputEmail1" class="form-label"><b>Pilih Panjang Lengan</b></label>
                    <div class="dropdown mb-3">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%;">
                            Pilih Panjang Lengan
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2" style="width: 100%;">
                            <li><button class="dropdown-item" type="button" style="width: 100%;">Panjang</button></li>
                            <li><button class="dropdown-item" type="button">Pendek</button></li>
                        </ul>
                    </div>

                    <label for="exampleInputEmail1" class="form-label"><b>Tentukan Ukuran Kamu!</b></label>
                    <br>

                    <div class="size" style="display: flex; gap: 24px;">
                        <div class="berat-badan">
                        <label for="exampleInputEmail1" class="form-label">Berat Badan</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-text">Kg</span>
                            </div>
                        </div>

                        <div class="tinggi-badan">
                        <label for="exampleInputEmail1" class="form-label">Tinggi Badan</label>
                            <div class="input-group">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-text">Cm</span>
                            </div>
                        </div>
                    </div>

                    <label for="exampleInputEmail1" class="form-label mb-3"><b>Ukuran Rekomendasi : M</b></label>

                </div>

                <div class="harga-n-button" style="display: flex; align-items: center;">
                    <div class="harga">
                        <h5 style="color: #1f1f1f; margin-left: 40px;">Harga</h5>
                        <h2 style="color: #1f1f1f; margin-left: 40px; font-weight: bold;">Rp. 149.000</h2>
                    </div>

                    <div class="button" style="margin-left: 98px;">
                        <button type="submit" class="btn btn-primary" style="background-color: #c5ff01; border-color: #c5ff01;
                        color: #1f1f1f; font-weight: bold; width: 300px;">Beli Sekarang!</button>
                    </div>
                </div>

                </form>
            </div>

            <!-- DETAIL PRODUK -->
        </div>

        <!-- CONTENT -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>

</html>