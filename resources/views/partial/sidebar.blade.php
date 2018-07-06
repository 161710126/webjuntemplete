<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">M Junika Berli</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="gurus" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Guru
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
             <li class="nav-item has-treeview menu-open">
            <a href="eskuls" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Eskul
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
             <li class="nav-item has-treeview menu-open">
            <a href="prestasis" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Prestasi
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <li class="nav-item has-treeview menu-open">
            <a href="fasilitas" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Fasilitas
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
          <li class="nav-item has-treeview menu-open">
            <a href="kategorisartikel" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Artikel
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
             

              
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="nav-link">
                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
              <i class="nav-icon fa fa-circle-o text-danger"></i>
              <p class="text">Logout</p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>