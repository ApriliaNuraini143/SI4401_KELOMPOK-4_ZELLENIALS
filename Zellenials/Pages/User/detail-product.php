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
            
        <?php require
            'C:\xampp\htdocs\Tubes WAD\SI4401_KELOMPOK-4_ZELLENIALS\Zellenials\Templates\navbar-old.php';
        ?> <!-- help me with this -->

        </header>

        <!-- NAVBAR -->

        <!-- CONTENT -->

        <div class="detail-container" style="background-color: white; width: 90%; padding: 20px; border-radius: 15px;
        margin-left:auto; margin-right:auto; margin-top: 40px; display: flex;">

            <!-- IMAGE CAROUSEL -->

            <div class="imageContainer" style="margin-left: 40px;">
                <div class="imageContainer">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner" style="max-width: 300px; border-radius: 16px">
                        <div class="carousel-item active">
                            <img src="/Zellenials/Assets/card-img1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/Zellenials/Assets/card-img2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/Zellenials/Assets/card-img3.png" class="d-block w-100" alt="...">
                        </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- IMAGE CAROUSEL -->

            <!-- DETAIL PRODUK -->

            <div class="productDetail">
                <form action="../User/shopping-cart.php" method="POST" enctype="multipart/form-data">
                <h2 style="color: #1f1f1f; margin-left: 40px; margin-top: 16px;">Brainstorming - Article 2020</h2>

                <div class="detail" style="margin-left: 40px; margin-top: 32px;">
                    <h5>Deskripsi Produk</h5>
                    <p>You can’t imagine what’s tremendous world gonna be if we use 100% of our brain while brainstorming.</p>

                    <h5>Jenis Kain</h5>
                    <p>New States Apparel 24s.</p>

                    <h5>Jenis Sablon</h5>
                    <p>Direct Transfer Film (DTF)</p>

                    <!-- RADIO BUTTON -->

                    <h5>Ukuran yang Tersedia</h5>
                    <div class="radioButton" style="display:flex; gap: 52px;">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                            XS
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                            S
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                            M
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                            L
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                            XL
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                            XXL
                            </label>
                        </div>
                    </div>

                    <!-- RADIO BUTTON -->
    
                </div>

                <h5 style="color: #1f1f1f; margin-left: 40px; margin-top: 32px;">Harga</h5>
                <h2 style="color: #1f1f1f; margin-left: 40px; font-weight: bold;">Rp. 149.000</h2>

                <button type="submit" class="btn btn-primary" style="background-color: #c5ff01; border-color: #c5ff01; color: #1f1f1f; font-weight: bold; margin-left: 40px; margin-top: 32px; margin-bottom: 32px;">Beli Sekarang</button>
                </form>
            </div>

            <!-- DETAIL PRODUK -->
        </div>

        <!-- CONTENT -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>

</html>