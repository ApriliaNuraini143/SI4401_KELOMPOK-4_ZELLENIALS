<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="https://kit.fontawesome.com/jquery-3.4.1.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Admin - Add Product</title>
    </head>

    <body style="background-color: #1f1f1f; display: flex;">

        <!-- SIDEBAR -->

        <div class="sideBarSection" style="font-weight:600; height: 100%;">
            <nav class="sidebarContent" style="position: relative; width: 232px; height: 920px; left:0; background: #c5ff01;">
                <div class="logo">
                    <img src="Logo.jpeg" style="margin: 46px 72px 40px 72px; width: 74px; border-radius: 100%;">
                </div>
                <ul style="list-style: none;">
                    <li style="line-height: 48px; border-bottom: 1px solid black;"><a style="color: #1f1f1f; text-decoration: none" href="#">Dashboard</a></li>
                    <li style="line-height: 48px; border-bottom: 1px solid black;">
                        <a style="color: #1f1f1f; text-decoration: none" href="#">Produk</a>
                        <ul style="line-height: 48px; border-bottom: 1px solid black;"><a style="color: #1f1f1f; text-decoration: none;" href="#">Tambahkan Produk</a></ul>
                        <ul style="line-height: 48px; border-bottom: 1px solid black;"><a style="color: #1f1f1f; text-decoration: none" href="#">Sunting Produk</a></ul>
                        <ul><a style="color: #1f1f1f; text-decoration: none" href="#">Lihat Produk</a></ul>
                    </li>
                    <li style="line-height: 48px; border-bottom: 1px solid black;">
                        <a style="color: #1f1f1f; text-decoration: none" href="#">Custom Produk</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- SIDEBAR -->

        <!-- CONTENT -->

        <div class="contentSection" style="height: 100vh;">
            <div class="title">
                <h1 style="color: white; margin: 56px 40px;">Tambahkan Produk</h1>
            </div>

            <div class="content" style="display: flex;">

                <!-- IMAGE CAROUSEL -->
        
                <div class="imageContainer" style="margin-left: 40px;">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner" style="max-width: 300px; border-radius: 16px">
                            <div class="carousel-item active">
                            <img src="addCatalogue.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="addCatalogue.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="addCatalogue.png" class="d-block w-100" alt="...">
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

                <!-- IMAGE CAROUSEL -->

                <!-- FORM PRODUK -->
        
                <div class="form" style="margin-left: 40px; color: white; width: 860px;">
                    <form>
                        <div class="mb-3">
                            <label for="form-control" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="namakatalog" placeholder="Apa nama produknya?">
                        </div>
    
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Produk</label>
                            <textarea class="form-control" id="deskripsikatalog" rows="3" placeholder="Tuliskan deskripsi produknya."></textarea>
                        </div>
    
                        <div class="mb-3">
                            <label for="form-control" class="form-label">Harga Produk</label>
                            <input type="text" class="form-control" id="namakatalog" placeholder="Rp. xxx,xxx">
                        </div>
    
                        <div class="inputImg">
                            <p style="margin-bottom: 0.5rem;">Tambahkan Gambar 1</p>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>

                            <p style="margin-bottom: 0.5rem;">Tambahkan Gambar 2</p>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>

                            <p style="margin-bottom: 0.5rem;">Tambahkan Gambar 3</p>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
                        </div>
    
                        <div class="inputSize">
                            <p style="margin-bottom: 0.5rem;">Ukuran yang Tersedia</p>
                            
                            <div class="checkBox" style="display: flex;">
                                <div class="mb-3 form-check">
                                    <label class="form-check-label" for="exampleCheck1" style="margin-right: 16px">S</label>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                </div>
    
                                <div class="mb-3 form-check">
                                    <label class="form-check-label" for="exampleCheck1" style="margin-right: 16px">M</label>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                </div>
    
                                <div class="mb-3 form-check">
                                    <label class="form-check-label" for="exampleCheck1" style="margin-right: 16px">L</label>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                </div>
    
                                <div class="mb-3 form-check">
                                    <label class="form-check-label" for="exampleCheck1" style="margin-right: 16px">XL</label>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                </div>
    
                                <div class="mb-3 form-check">
                                    <label class="form-check-label" for="exampleCheck1" style="margin-right: 16px">XXL</label>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                </div>
                            </div>
    
                        </div>
                            <button type="submit" class="btn btn-primary" style="margin-top: 32px; background-color: #c5ff01; border-color: #c5ff01; color: #1f1f1f; font-weight: bold;">Tambahkan</button>
                    </form>    
                </div>

                <!-- FORM PRODUK -->

            </div>
        </div>

        <!-- CONTENT -->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>

</html>