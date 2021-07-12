  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url(); ?>home" class="brand-link">
      <img src="<?php echo base_url(); ?>assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">TPM v2.0</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Sysmimin</a>
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
          <!-- ***** Menu 1 ***** -->
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>pages/userguidence" class="nav-link 
            <?php if ($activelink == "User Guidence") {
              echo ' active';
            } ?>">
              <i class="nav-icon fas fa-book"></i>
              <p class="font-weight-bold">
                User Guidence
              </p>
            </a>
          </li>
          <!-- ***** Menu 2 ***** -->
          <li class="nav-item
          <?php if ($activelink == "Input Work Order" | $activelink == "Input Pengerjaan Work Order") {
            echo ' menu-open';
          } ?>">
            <a href="#" class="nav-link 
            <?php if ($activelink == "Input Work Order" | $activelink == "Input Pengerjaan Work Order") {
              echo ' active';
            } ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p class="font-weight-bold">
                Work Order
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>workorder/input" class="nav-link
                <?php if ($activelink == "Input Work Order") {
                  echo ' active';
                } ?>">
                  <i class="fas fa-caret-right nav-icon"></i>
                  <p>Input WO</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>workorder/pengerjaan" class="nav-link
                <?php if ($activelink == "Input Pengerjaan Work Order") {
                  echo ' active';
                } ?>">
                  <i class="fas fa-caret-right nav-icon"></i>
                  <p>Input Pengerjaan WO</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>workorder/#" class="nav-link">
                  <i class="fas fa-caret-right nav-icon"></i>
                  <p>Input Spare Part WO</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>workorder/#" class="nav-link">
                  <i class="fas fa-caret-right nav-icon"></i>
                  <p>Cetak Work Order</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- ***** Menu 3 ***** -->
          <li class="nav-item
          <?php if ($activelink == "Input Mesin" | $activelink == "Input Spare Part") {
            echo ' menu-open';
          } ?>">
            <a href="#" class="nav-link 
            <?php if ($activelink == "Input Mesin" | $activelink == "Input Spare Part") {
              echo ' active';
            } ?>">
              <i class="nav-icon fas fa-coins"></i>
              <p class="font-weight-bold">
                Menu Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>master/inputMesin" class="nav-link
                <?php if ($activelink == "Input Mesin") {
                  echo ' active';
                } ?>">
                  <i class="fas fa-caret-right nav-icon"></i>
                  <p>Input Mesin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>master/inputSparepart" class="nav-link
                <?php if ($activelink == "Input Spare Part") {
                  echo ' active';
                } ?>">
                  <i class="fas fa-caret-right nav-icon"></i>
                  <p>Input Spare Part</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>master/#" class="nav-link">
                  <i class="fas fa-caret-right nav-icon"></i>
                  <p>Input Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>master/#" class="nav-link">
                  <i class="fas fa-caret-right nav-icon"></i>
                  <p>Registrasi</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- ***** Menu 4 ***** -->
          <li class="nav-item
          <?php if ($activelink == "Input Mesin" | $activelink == "Input Spare Part") {
            echo ' menu-open';
          } ?>">
            <a href="#" class="nav-link 
            <?php if ($activelink == "Input Mesin" | $activelink == "Input Spare Part") {
              echo ' active';
            } ?>">
              <i class="nav-icon fas fa-pen-fancy"></i>
              <p class="font-weight-bold">
                Edit Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>master/inputMesin" class="nav-link
                <?php if ($activelink == "Input Mesin") {
                  echo ' active';
                } ?>">
                  <i class="fas fa-caret-right nav-icon"></i>
                  <p>Input Mesin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>master/inputSparepart" class="nav-link
                <?php if ($activelink == "Input Spare Part") {
                  echo ' active';
                } ?>">
                  <i class="fas fa-caret-right nav-icon"></i>
                  <p>Input Spare Part</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>master/#" class="nav-link">
                  <i class="fas fa-caret-right nav-icon"></i>
                  <p>Input Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>master/#" class="nav-link">
                  <i class="fas fa-caret-right nav-icon"></i>
                  <p>Registrasi</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- ***** Menu 5 ***** -->
          <li class="nav-item
          <?php if ($activelink == "Input Mesin" | $activelink == "Input Spare Part") {
            echo ' menu-open';
          } ?>">
            <a href="#" class="nav-link 
            <?php if ($activelink == "Input Mesin" | $activelink == "Input Spare Part") {
              echo ' active';
            } ?>">
              <i class="nav-icon fas fa-file-import"></i>
              <p class="font-weight-bold">
                Import Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>master/inputMesin" class="nav-link
                <?php if ($activelink == "Input Mesin") {
                  echo ' active';
                } ?>">
                  <i class="fas fa-caret-right nav-icon"></i>
                  <p>Input Mesin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>master/inputSparepart" class="nav-link
                <?php if ($activelink == "Input Spare Part") {
                  echo ' active';
                } ?>">
                  <i class="fas fa-caret-right nav-icon"></i>
                  <p>Input Spare Part</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>master/#" class="nav-link">
                  <i class="fas fa-caret-right nav-icon"></i>
                  <p>Input Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>master/#" class="nav-link">
                  <i class="fas fa-caret-right nav-icon"></i>
                  <p>Registrasi</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- ***** Menu 6 ***** -->
          <li class="nav-item
          <?php if ($activelink == "Input Mesin" | $activelink == "Input Spare Part") {
            echo ' menu-open';
          } ?>">
            <a href="#" class="nav-link 
            <?php if ($activelink == "Input Mesin" | $activelink == "Input Spare Part") {
              echo ' active';
            } ?>">
              <i class="nav-icon fas fa-eye"></i>
              <p class="font-weight-bold">
                Lihat Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>master/inputMesin" class="nav-link
                <?php if ($activelink == "Input Mesin") {
                  echo ' active';
                } ?>">
                  <i class="fas fa-caret-right nav-icon"></i>
                  <p>Input Mesin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>master/inputSparepart" class="nav-link
                <?php if ($activelink == "Input Spare Part") {
                  echo ' active';
                } ?>">
                  <i class="fas fa-caret-right nav-icon"></i>
                  <p>Input Spare Part</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>master/#" class="nav-link">
                  <i class="fas fa-caret-right nav-icon"></i>
                  <p>Input Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>master/#" class="nav-link">
                  <i class="fas fa-caret-right nav-icon"></i>
                  <p>Registrasi</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php if ($activelink == 'Input Work Order') {
                              $new_id = $doc_wo['id_no'] + 1;
                              echo $activelink . ' ( ID : ' . $new_id . ' )';
                            } else {
                              echo $activelink;
                            }; ?></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->