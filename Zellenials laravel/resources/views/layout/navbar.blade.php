<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #C5FF01;">
  <div class="container-fluid">
      <a class="navbar-brand" href="/" style="margin-left: 70px;"><b>Zellenials Company</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <?php $page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);?>

      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="margin-right: 70px;">
            @if (!session('loggedin',FALSE))
              <li class="nav-item">
              <a class="nav-link <?php if ($page == "homepage.php") echo "active" ?>" aria-current="page" href="{{route('home')}}">Beranda</a>
              </li>
              <li class="nav-item">
              <a class="nav-link <?php if ($page == "tentangkami.php") echo "active" ?>" href="{{route('aboutUs')}}">Tentang Kami</a>
              </li>
            @else
              <li class="nav-item">
              <a class="nav-link <?php if ($page == "homepage.php") echo "active" ?>" aria-current="page" href="{{route('home')}}">Beranda</a>
              </li>
              <li class="nav-item">
              <a class="nav-link <?php if ($page == "tentangkami.php") echo "active" ?>" href="{{route('aboutUs')}}">Tentang Kami</a>
              </li>
              <li class="nav-item">
              <a class="nav-link <?php if ($page == "shopping-cart.php") echo "active" ?>" href="{{route('keranjang')}}">Keranjang</a>
              </li>
              <li class="nav-item">
              <a class="nav-link <?php if ($page == "status-order.php") echo "active" ?>" href="{{route('status-pesanan')}}">Status Pesanan</a>
              </li>
              <li class="nav-item">
              <a class="nav-link <?php if ($page == "my-order.php") echo "active" ?>" href="{{route('pesanan-saya')}}">Pesanan Saya</a>
              </li>
              <li class="nav-item">
              <a class="nav-link <?php if ($page == "return-1.php") echo "active" ?>" href="{{route('retur1')}}">Retur Pesanan</a>
              </li>
            @endif
            @if (session('loggedin',FALSE))
              <li class="nav-item" style="padding-top: 5px; padding-left: 10px;">
                <a href="{{route('profil')}}"><img src="{{asset('img/person-circle.png')}}" alt="person-circle.png"></a>
            @else
              <li class="nav-item">
              <a class="nav-link" href="login">Login</a>
              </li>
            @endif
        </ul>
      </div>
  </div>
</nav>