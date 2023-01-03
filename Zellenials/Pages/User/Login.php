<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zellenials | Made by Passion </title>
    <link rel="Zellenials icon" href="/Zellenials/Assets/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body style="background-color: #1f1f1f; height: 100%;">
    
    <!-- NAVBAR -->

    <header>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #C5FF01;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/Zellenials/Pages/User/homepage.php" style="margin-left: 70px;"><b>Zellenials Company</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    </header>

    <!-- NAVBAR -->

    <!-- CONTENT -->
    
    <div class="content" style="background-color: #1f1f1f; margin: 80px; height: 620px; border: 8px solid #C5FF01; border-radius: 15px">
        <div class="container-fluid" style="color:#ffffff">
            <div class="row">
                <div class="col-md-6 align-self-center" >
                    <br>
                    <h1 style="text-align:left; font-weight: bolder; font-size: 72px; margin-left: 80px; margin-top:50px">Temukan Baju<br>Favorit Mu Disini!</h2>
                </div>
                <div class="col-md-6 align-self-end p-5" style="margin-top:100px; margin-right: 0px;">
                    <div style="background-color: #1f1f1f;">
                        <div class="card-body">
                            <h2 class="mb-4">Masuk Yuk</h2>
                            <form action="homepage.php" method="post">
                                <div class="form-group mb-3">
                                    <label for="email" class="mb-2">Email</label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password" class="mb-2">Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="form-group mb-3" style="display: flex; gap: 24px; align-items: center;">
                                    <div class="button">
                                        <button class="btn mt-2 btn-primary px-4" link rel="stylesheet" href="../Zellenials/Pages/User/homepage.php" style="background-color:#C5FF01; border-color: #C5FF01; color: black; font-weight: bolder;" name="login">Login</button>
                                    </div>

                                    <div class="register-btn mt-4">
                                        <p>Belum Punya Akun? <a href="../User/Registrasi.php" style="color: white;">Yuk Daftar!</a></p>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>