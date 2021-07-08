<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" style="color:white;">
        <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-biking"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Shop Bike</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('toko/dashboard')?>">
         <i class="fas fa-home"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

     

      <!-- Heading -->
      <div class="sidebar-heading">
        Kategori
      </div>


    

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('toko/merk/merk_sepeda')?>">
        <i class="fas fa-bicycle"></i>
          <span>Sepeda</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('toko/merk/merk_aksesoris')?>">
        <i class="fas fa-cubes"></i>
          <span>Aksesoris</span></a>
      </li>
    
      
      <!-- Nav Item - Pages Collapse Menu -->
      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="post" action="<?php echo base_url('merk/cari') ?>">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" name="cari">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  cari
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
       

            <div class="navbar">
              <ul class="nav navbar-nav navbar-right">
              
                <li>
                <i class="fas fa-shopping-cart"></i>
                  <?php
                  $keranjang = 'Keranjang ' .'('. $this->cart->total_items().')'?>
                
                <?php echo anchor('toko/dashboard/detail_keranjang', $keranjang)  ?>
                </li>
              </ul>
              <div class="topbar-divider d-none d-sm-block"></div>
               <!-- Nav Item - User Information -->
                <ul class="na navbar-nav navbar-right">
                  <?php if($this->session->userdata('username')) { ?>
                  
                  <li>
                  <i class="fas fa-user"></i>
                  <?php echo $this->session->userdata('username') ?> </li>
                  <li class="ml-2"><?php echo anchor('toko/auth/logout',' Logout'); ?></li>
                  
                  <?php } else {?>
                  <li><?php echo anchor('toko/auth/login',' Login'); ?></li>
                  <?php } ?>
                </ul>
            </div>
            
           

           
          </ul>

        </nav>
        <!-- End of Topbar -->
