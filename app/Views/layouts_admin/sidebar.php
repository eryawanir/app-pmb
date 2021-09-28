<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?php echo base_url('dashboard'); ?>" class="brand-link">
    <img src="/assets/adminlte3/dist/img/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Admin PMB</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/assets/adminlte3/dist/img/user1-128x128.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?= $nama; ?></a>
      </div>
    </div>

    <!-- Sidebar menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Dashboard -->
        <li class="nav-item">
          <a href="<?php echo base_url('dashboard') ?>" class="nav-link <?= ($page == 'dashboard') ?: 'active'; ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <!-- Informasi -->
        <li class="nav-item">
          <a href="<?= base_url('informasi'); ?>" class="nav-link <?= ($page == 'informasi') ?: 'active'; ?>">
            <i class="nav-icon fas fa-info-circle">
              <p>Informasi</p>
            </i>
          </a>
        </li>
        <!-- Data Fakultas -->
        <li class="nav-item">
          <a href="<?= base_url('datafakultas'); ?>" class="nav-link <?= ($page == 'datafakultas') ?: 'active'; ?>">
            <i class="nav-icon fas fa-university">
              <p>Data Fakultas</p>
            </i>
          </a>
        </li>
        <!-- Data Prodi -->
        <li class="nav-item has-tree-view <?= ($page == 'dataprodi') ?: 'menu-open'; ?>">
          <a href="#" class="nav-link <?= ($page == 'dataprodi') ?: 'active'; ?>">
            <p>
              Data Prodi
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <?php
          // Creating URI Instances
          $uri = service('uri');
          //Koneksi ke database tanpa menggunakan Models
          $db = \Config\Database::connect();
          //Menampilkan semua data fakultas untuk menu pada sidebar
          $query = $db->query('SELECT * FROM fakultas');
          $results = $query->getResultArray(); ?>

          <?php foreach ($results as $menu) : ?>
            <?php $idFakultas = $menu['id']; ?>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('dataprodi/index/' . $idFakultas); ?>" class="nav-link <?= ($uri->getTotalSegments() == 3) ?: ($idFakultas == $uri->getSegment(3)) ?: 'active'; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?= $menu['nama_fakultas']; ?></p>
                </a>
              </li>
            </ul>
          <?php endforeach; ?>
        </li>

        <!-- Data Pendaftaran -->
        <li class="nav-item">
          <a href="<?= base_url('datapendaftaran'); ?>" class="nav-link <?= ($page == 'datapendaftaran') ?: 'active'; ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>Data Pendaftaran</p>
          </a>
        </li>
      </ul>
    </nav>
  </div>

</aside>