<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #C5FF01;">
      <div class="container-fluid">
          <a class="navbar-brand" href="/Zellenials/Pages/User/homepage.php" style="margin-left: 70px;"><b>Zellenials Company</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="margin-right: 70px;">
                <?php if (!$login) :?>
                  <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/Zellenials/Pages/User/homepage.php">Beranda</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="/Zellenials/Pages/User/tentangkami.php">Tentang Kami</a>
                  </li>
                <?php else : ?>
                  <li class="nav-item">
                  <a class="nav-link" href="/Zellenials/Pages/User/shopping-cart.php">Keranjang</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="/Zellenials/Pages/User/status-order.php">Status Pesanan</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="/Zellenials/Pages/User/my-order.php">Pesanan Saya</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="/Zellenials/Pages/User/return-1.php">Retur Pesanan</a>
                  </li>
                <?php endif; ?>
                <?php if ($login) :?>
                  <li class="nav-item" style="padding-top: 5px; padding-left: 10px;">
                  <a href="#"><img src="/Zellenials/Assets/person-circle.png" alt="person-circle.png"></a>
                  </li>
                <?php else : ?>
                  <li class="nav-item">
                  <a class="nav-link" href="/Zellenials/Pages/User/my-order.php">Login</a>
                  </li>
                <?php endif; ?>
            </ul>
          </div>
      </div>
    </nav>