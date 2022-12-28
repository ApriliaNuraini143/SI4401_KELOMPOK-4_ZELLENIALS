<style>
.nav{
    background: #c5ff01;
}
.sidebar li .submenu{ 
	list-style: none; 
	margin: 0; 
	padding: 0; 
	padding-left: 1rem; 
	padding-right: 1rem;
}
</style>

<nav class="sidebar card py-2 mb-4">
    <ul class="nav flex-column" id="nav_accordion">
        <li class="nav-item">
            <a class="nav-link" href="#" style="color: #1f1f1f;">Dashboard</a>
        </li>
        <li class="nav-item has-submenu">
            <a class="nav-link" href="#" style="color: #1f1f1f;">Produk</a>
            <ul class="submenu collapse">
                <li><a class="nav-link" href="#" style="color: #1f1f1f;">Tambahkan Produk</a></li>
                <li><a class="nav-link" href="#" style="color: #1f1f1f;">Sunting Produk</a></li>
                <li><a class="nav-link" href="#" style="color: #1f1f1f;">Lihat Produk</a> </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" style="color: #1f1f1f;">Custom Produk</a>
        </li>
    </ul>
</nav>

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