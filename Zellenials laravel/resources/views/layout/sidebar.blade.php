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
    <nav class="sidebar card py-2 mb-4" style="position: retalive; width: 15vw; height: 100vh; left:0; background: #c5ff01;">
        <div class="logo">
            <img src="{{asset('img/favicon.ico')}}" style="margin: 46px 72px 40px 72px; width: 74px; border-radius: 100%;">
        </div>

        <ul class="nav flex-column" id="nav_accordion" style="list-style: none; margin-left: 10px;">
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}" style="color: #1f1f1f;">Dashboard</a>
            </li>
            <li class="nav-item has-submenu">
                <a class="nav-link" href="#" style="color: #1f1f1f;">Produk</a>
                <ul class="submenu collapse">
                    <li><a class="nav-link" href="{{route('addItem')}}" style="color: #1f1f1f;">Tambahkan Produk</a></li>
                    <li><a class="nav-link" href="{{route('view')}}" style="color: #1f1f1f;">Lihat Produk</a> </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('viewCustom')}}" style="color: #1f1f1f;">Custom Produk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link button" href="{{route('logout')}}">Logout</a>
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
