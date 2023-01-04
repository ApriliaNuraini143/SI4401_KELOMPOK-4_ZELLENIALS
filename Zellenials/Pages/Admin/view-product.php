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

            <!-- CARD -->

            <div class="contentSection" style="height: 100vh;">
                <div class="title">
                    <h1 style="color: white; margin: 56px 40px;">View Product</h1>
                </div>

                <div class="content" style="display: flex;">

                    <div class="d-flex justify-content-center" style="margin-left: 40px; gap: 32px;">
                        <div class="card" style="width: 18rem; box-shadow: 4px 4px 4px #C5FF01;">
                            <img src="../../Assets/image/BR/BR1.png" class="card-img-top" alt="card-img1.png" style="max-height:256px; object-fit: cover;">
                            <form action="../Admin/edit-product.php" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Brainstorming</h5>
                                    <p class="card-text">You can't imagine what's tremendous world gonna be if we use 100% of our brain while brainstorming</p>
                                    <p class="card-text" style="font-weight: 700; color: green;">Rp 149.000</p>
                                    <button type="submit" class="mt-2 btn btn-primary col" style="width:100%; margin: 10px 0px 10px">Lihat Produk</button>
                                </div>
                            </form>
                        </div>

                        <div class="card" style="width: 18rem; box-shadow: 4px 4px 4px #C5FF01;">
                            <img src="../../Assets/image/MTC/MTC1.png" class="card-img-top" alt="card-img1.png" style="max-height:256px; object-fit: cover;">
                            <form action="../Admin/edit-product.php" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Money Take Control</h5>
                                    <p class="card-text">Whatever you want, whatever you need, money is the solution</p><br><br>
                                    <p class="card-text" style="font-weight: 700; color: green;">Rp 149.000</p>
                                    <button type="submit" class="mt-2 btn btn-primary col" style="width:100%; margin: 10px 0px 10px">Lihat Produk</button>
                                </div>
                            </form>
                        </div>

                        <div class="card" style="width: 18rem; box-shadow: 4px 4px 4px #C5FF01;">
                            <img src="../../Assets/image/UP/UP1.png" class="card-img-top" alt="BR1.png" style="max-height:256px; object-fit: cover;">
                            <form action="../Admin/edit-product.php" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Under Pressure</h5>
                                    <p class="card-text">Sometimes people need to be under pressure.</p><br><br>
                                    <p class="card-text" style="font-weight: 700; color: green;">Rp 149.000</p>
                                    <button type="submit" class="mt-2 btn btn-primary col" style="width:100%; margin: 10px 0px 10px">Lihat Produk</button>
                                </div>
                            </form>
                        </div>
                </div>

            </div>


    <!-- CARD -->

        <!-- CONTENT -->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
    
</html>