  <!-- Main Sidebar Container -->
  <aside class="main-sidebar bg-gray-dark sidebar-dark-lightblue elevation-4">
      <!-- Brand Logo -->
      <a href="index.html" class="brand-link text-center">
          <span class="brand-text font-weight">Inventory Gudang</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">Admin</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="index.php" class="nav-link <?php if ($thisPage == 'Dashboard') echo 'active' ?>">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="data_barang.php" class="nav-link <?php if ($thisPage == 'DataBarang') echo 'active' ?>">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                              Data Barang
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="tambah_barang.php" class="nav-link <?php if ($thisPage == 'TambahBarang') echo 'active' ?>">
                          <i class="nav-icon fas fa-copy"></i>
                          <p>
                              Tambah Barang Baru
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="barang_masuk.php" class="nav-link <?php if ($thisPage == 'barang_masuk') echo 'active' ?>">
                          <i class="nav-icon fas fa-chevron-up"></i>
                          <p>
                              Input Barang Masuk
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="barang_keluar.php" class="nav-link <?php if ($thisPage == 'barang_keluar') echo 'active' ?>">
                          <i class="nav-icon fas fa-chevron-down"></i>
                          <p>
                              Input Barang Keluar
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="riwayat_transaksi.php" class="nav-link <?php if ($thisPage == 'riwayat_transaksi') echo 'active' ?>">
                          <i class="nav-icon fas fa-address-book"></i>
                          <p>Riwayat Transaksi</p>
                      </a>
                  </li>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>