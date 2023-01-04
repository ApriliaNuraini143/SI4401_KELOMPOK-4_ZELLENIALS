<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="https://kit.fontawesome.com/jquery-3.4.1.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Admin - Edit Product</title>
    </head>

    <body style="background-color: #1f1f1f; display: flex;">

        <!-- SIDEBAR -->

        <header>

            <?php require ('../../Templates/sidebar.php');?>

        </header>

        <!-- SIDEBAR -->

        <!-- CONTENT -->

        <div class="contentSection" style="height: 100vh;">
            <div class="title">
                <h1 style="color: white; margin: 56px 40px;">Sunting Produk</h1>
            </div>

            <div class="content" style="display: flex;">

                <!-- IMAGE CAROUSEL -->

                <div class="imageContainer" style="margin-left: 40px;">
                   <img src="../../Assets/image/BR/BR1.png" class="d-block w-100" alt="..." style="max-width: 300px; border-radius: 16px">
                </div>

                <!-- IMAGE CAROUSEL -->

                <!-- FORM PRODUK -->
        
                <div class="form" style="margin-left: 40px; color: white; width: 860px;">
                    <form action="../Admin/view-product.php">
                        <div class="mb-3">
                            <label for="form-control" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="namakatalog" value="Brainstorming - Article 2020">
                        </div>
    
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Produk</label>
                            <textarea class="form-control" id="deskripsikatalog" rows="3" placeholder="You can’t imagine what’s tremendous world gonna be if we use 100% of our brain while brainstorming."></textarea>
                        </div>
    
                        <div class="mb-3">
                            <label for="form-control" class="form-label">Harga Produk</label>
                            <input type="text" class="form-control" id="namakatalog" value="Rp. 149,000">
                        </div>

                        <div class="mb-3">
                            <label for="form-control" class="form-label">Jenis Kain</label>
                            <input type="text" class="form-control" id="jenisKain" value="New States Apparel 24s">
                        </div>

                        <div class="mb-3">
                            <label for="form-control" class="form-label">Jenis Sablon</label>
                            <input type="text" class="form-control" id="jenisSablon" value="Direct Transfer Film (DTF)">
                        </div>
    
                        <div class="inputImg">
                            <p style="margin-bottom: 0.5rem;">Tambahkan Gambar</p>
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
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" checked>
                                </div>
    
                                <div class="mb-3 form-check">
                                    <label class="form-check-label" for="exampleCheck1" style="margin-right: 16px">M</label>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" checked>
                                </div>
    
                                <div class="mb-3 form-check">
                                    <label class="form-check-label" for="exampleCheck1" style="margin-right: 16px">L</label>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" checked>
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
                            <button type="submit" class="btn btn-primary" style="margin-top: 32px; background-color: #c5ff01; border-color: #c5ff01; color: #1f1f1f; font-weight: bold;" href="/Zellenials/Pages/Admin/view-product.php">Simpan</button>
                            <button type="submit" class="btn btn-primary" style="margin-left: 8px; margin-top: 32px; background-color: Red; border-color: Red; color: White; font-weight: bold;" href="...">Hapus</button>
                    </form>    
                </div>

                <!-- FORM PRODUK -->
            </div>
        </div>

        <!-- CONTENT -->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
    
</html>