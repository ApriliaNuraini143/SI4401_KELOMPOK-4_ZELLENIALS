<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="https://kit.fontawesome.com/jquery-3.4.1.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Admin - Custom Produk</title>
    </head>

    <body style="background-color: #1f1f1f; display: flex;">

        <!-- SIDEBAR -->

        <style>
        .nav{
            background: #c5ff01;
        }
        .sidebar li .submenu{ 
            list-style: none; 
            margin: 0; 
        }
        </style>

        <div class="sideBarSection" style="font-weight:600;">
            <nav class="sidebar card py-2 mb-4" style="position: retalive; width: 232px; height: 880px; left:0; background: #c5ff01;">
                <div class="logo">
                    <img src="/Zellenials/Assets/favicon.ico" style="margin: 46px 72px 40px 72px; width: 74px; border-radius: 100%;">
                </div>

                <ul class="nav flex-column" id="nav_accordion" style="list-style: none; margin-left: 10px;">
                    <li class="nav-item" style="line-height: 32px; border-bottom: 1px solid black;">
                        <a class="nav-link" href="../Admin/dashboard.php" style="color: #1f1f1f;">Dashboard</a>
                    </li>
                    <li class="nav-item has-submenu" style="line-height: 32px; border-bottom: 1px solid black;">
                        <a class="nav-link" href="#" style="color: #1f1f1f;">Produk</a>
                        <ul class="submenu collapse">
                            <li style="line-height: 32px; border-bottom: 1px solid black;"><a class="nav-link" href="../Admin/add-product.php" style="color: #1f1f1f;">Tambahkan Produk</a></li>
                            <li style="line-height: 32px; border-bottom: 1px solid black;"><a class="nav-link" href="../Admin/edit-product.php" style="color: #1f1f1f;">Sunting Produk</a></li>
                            <li><a class="nav-link" href="../Admin/view-product.php" style="color: #1f1f1f;">Lihat Produk</a> </li>
                        </ul>
                    </li>
                    <li class="nav-item" style="line-height: 32px; border-bottom: 1px solid black;">
                        <a class="nav-link" href="../Admin/custom-product.php" style="color: #1f1f1f;">Custom Produk</a>
                    </li>
                </ul>
            </nav>
        </div>

        <script>
        document.addEventListener("DOMContentLoaded", function(){
        document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
            
            element.addEventListener('click', function (e) {

            let nextEl = element.nextElementSibling;
            let parentEl  = element.parentElement;	

                if(nextEl) {
                    e.preventDefault();	
                    let mycollapse = new bootstrap.Collapse(nextEl);
                    
                    if(nextEl.classList.contains('show')){
                    mycollapse.hide();
                    } else {
                        mycollapse.show();
                        // find other submenus with class=show
                        var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                        // if it exists, then close all of them
                        if(opened_submenu){
                        new bootstrap.Collapse(opened_submenu);
                        }
                    }
                }
            }); // addEventListener
        }) // forEach
        }); 
        // DOMContentLoaded  end
        </script>

        <!-- SIDEBAR -->

        <!-- CONTENT -->

        <div class="contentSection" style="height: 100vh;">
            <div class="title">
                <h1 style="color: white; margin: 56px 40px;">Custom Product</h1>
            </div>

        <!-- TABEL CUSTOM -->

            <div class="detail-container" style="background-color: white; width: 1200px; padding: 20px; border-radius: 15px;
            margin-left:40px; margin-right:20px; margin-top: 40px;">
                <table class="table">
                    <thead style="background-color: #C5FF01;" align="center">
                        <tr sty>
                          <th scope="col">#</th>
                          <th scope="col">Nama Produk</th>
                          <th scope="col">Warna</th>
                          <th scope="col">Ukuran</th>
                          <th scope="col">Kuantitas</th>
                          <th scope="col">Status</th>
                          <th scope="col">Gambar Desain</th>
                          <th scope="col">Config</th>
                        </tr>
                    </thead>
                    <tbody align="center">
                        <tr>
                        <th scope="row">1</th>
                        <td>Brainstorming - Article 2020</td>
                        <td>Hitam</td>
                        <td>L</td>
                        <td>1</td>
                        <td style="color: blue;">Menunggu Konfirmasi</td>
                        <td><button type="submit" class="btn btn-primary"
                        style="margin-top: 0px; background-color: green;
                        border-color: green; color: white; font-weight: bold;">Download Gambar</button></td>
                        <td><button type="submit" class="btn btn-primary"
                        style="margin-top: 0px; background-color: blue;
                        border-color: blue; color: white; font-weight: 400;">Edit</button>
                        <button type="submit" class="btn btn-primary"
                        style="margin-top: 0px; background-color: red;
                        border-color: red; color: white; font-weight: 400;">X</button></td>
                        </tr>

                        <tr>
                        <th scope="row">2</th>
                        <td>Money Take Control</td>
                        <td>Hitam</td>
                        <td>L</td>
                        <td>1</td>
                        <td style="color: blue;">Menunggu Konfirmasi</td>
                        <td><button type="submit" class="btn btn-primary"
                        style="margin-top: 0px; background-color: green;
                        border-color: green; color: white; font-weight: bold;">Download Gambar</button></td>
                        <td><button type="submit" class="btn btn-primary"
                        style="margin-top: 0px; background-color: blue;
                        border-color: blue; color: white; font-weight: 400;">Edit</button>
                        <button type="submit" class="btn btn-primary"
                        style="margin-top: 0px; background-color: red;
                        border-color: red; color: white; font-weight: 400;">X</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
      
        <!-- CONTENT -->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
    
</html>