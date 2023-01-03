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
                            <li style="line-height: 32px; border-bottom: 1px solid black;"><a class="nav-link" href="add-product" style="color: #1f1f1f;">Tambahkan Produk</a></li>
                            <li style="line-height: 32px; border-bottom: 1px solid black;"><a class="nav-link" href="edit-product" style="color: #1f1f1f;">Sunting Produk</a></li>
                            <li><a class="nav-link" href="view-product" style="color: #1f1f1f;">Lihat Produk</a> </li>
                        </ul>
                    </li>
                    <li class="nav-item" style="line-height: 32px; border-bottom: 1px solid black;">
                        <a class="nav-link" href="custom-product" style="color: #1f1f1f;">Custom Produk</a>
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

            <!-- CARD -->

            <div class="contentSection" style="height: 100vh;">
            <div class="title">
                <h1 style="color: white; margin: 56px 40px;">View Catalog</h1>
            </div>

            <div class="content" style="display: flex;">

                <div class="d-flex justify-content-center" style="margin-top: 20px; margin-left: 30px; ">

                <div class="card" style="width: 18rem; margin-right: 30px;">
                <img src="/Zellenials/Assets/card-img1.png" class="card-img-top" alt="card-img1.png" style="max-height:256px; object-fit: cover;">
                <div class="card-body">
                    <p class="card-text">Brainstorming</p>
                    <p class="card-text">You can't imagine what's tremendous world gonna be if we use 100% of our brain while brainstorming</p>
                    <p class="card-text"><b>Rp 149.000</b></p>
                </div>
                </div>
                
                <div class="card" style="width: 18rem;">
                <img src="/Zellenials/Assets/card-img2.png" class="card-img-top" alt="card-img2.png" style="max-height:256px; object-fit: cover;">
                <div class="card-body">
                    <p class="card-text">Money Take Control</p>
                    <p class="card-text">Whatever you want, whatever you need, money is the solution</p>
                    <p class="card-text"><b>Rp 149.000</b></p>
                </div>
                </div>
                
                <div class="card" style="width: 18rem; margin-left: 30px;">
                <img src="/Zellenials/Assets/card-img3.png" class="card-img-top" alt="card-img3.png" style="max-height:256px; object-fit: cover;">
                <div class="card-body">
                    <p class="card-text">Under Pressure</p>
                    <p class="card-text">Sometimes people need to be under pressure</p>
                    <p class="card-text"><b>Rp 299.000</b></p>
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