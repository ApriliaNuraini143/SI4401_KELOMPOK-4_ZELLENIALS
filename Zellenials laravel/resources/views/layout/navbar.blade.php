<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #C5FF01;">
  <div class="container-fluid">
      <a class="navbar-brand" href="/Zellenials/Pages/User/homepage.php" style="margin-left: 70px;"><b>Zellenials Company</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <?php $page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);?>

      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="margin-right: 70px;">
            @if (session('loggedin',FALSE))
              <li class="nav-item">
              <a class="nav-link <?php if ($page == "homepage.php") echo "active" ?>" aria-current="page" href="../User/homepage.php">Beranda</a>
              </li>
              <li class="nav-item">
              <a class="nav-link <?php if ($page == "tentangkami.php") echo "active" ?>" href="../User/tentangkami.php">Tentang Kami</a>
              </li>
            @else
              <li class="nav-item">
              <a class="nav-link <?php if ($page == "shopping-cart.php") echo "active" ?>" href="../User/shopping-cart.php">Keranjang</a>
              </li>
              <li class="nav-item">
              <a class="nav-link <?php if ($page == "status-order.php") echo "active" ?>" href="../User/status-order.php">Status Pesanan</a>
              </li>
              <li class="nav-item">
              <a class="nav-link <?php if ($page == "my-order.php") echo "active" ?>" href="../User/my-order.php">Pesanan Saya</a>
              </li>
              <li class="nav-item">
              <a class="nav-link <?php if ($page == "return-1.php") echo "active" ?>" href="../User/return-1.php">Retur Pesanan</a>
              </li>
            @endif
            @if (session('loggedin',FALSE))
              <li class="nav-item" style="padding-top: 5px; padding-left: 10px;">
              <a href="#"><img src="{{asset('storage/Assets/person-circle.png')}}" alt="person-circle.png"></a>
              </li>
            @else
              <li class="nav-item">
              <a class="nav-link" href="/Zellenials/Pages/User/my-order.php">Login</a>
              </li>
            @endif
        </ul>
      </div>
  </div>
</nav>