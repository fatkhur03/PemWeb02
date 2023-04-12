
<?php
            $menu = [
                'Dashboard' => '../index.php',
                'Data Produk' => '../produk/index.php',
                'Data Pelanggan' => '../pelanggan/index.php',
                'Data Pembelian' => 'index.php',
                'Data Vendor' => '../vendor/index.php',
                'Data Kartu' => '../kartu/index.php',
                'Profile' => '#',
                'About' => '#',
                'Logout' => '#'
            ];

            $icons = [
                'Dashboard' => 'home',
                'Data Produk' => 'list',
                'Data Pelanggan' => 'list',
                'Data Pembelian' => 'list',
                'Data Vendor' => 'list',
                'Data Kartu' => 'list',
                'Profile' => 'user',
                'About' => 'info-circle',
                'Logout' => 'right-from-bracket'
            ];
        ?>



<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminThur</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Xythur</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            
             
                <?php foreach ($menu as $key => $value): ?>
                <a class="nav-link" href="<?php echo $value ?>"> 
                    <i class="fas fa-<?php echo $icons[    $key] ?>"></i>
                    <?php echo $key ?>
                </a>
                <?php endforeach ?>
            </a>
            
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>