<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
      <div class="sidebar-brand-icon">
         <img src="../images/logokua.png" width="50" alt="">
      </div>
      <div class="sidebar-brand-text mx-3">Admin <br>KUA</div>
   </a>

   <!-- Divider -->
   <hr class="sidebar-divider my-0">

   <!-- Nav Item - Dashboard -->
   <li class="nav-item active">
      <a class="nav-link" href="index.php">
         <i class="fas fa-fw fa-tachometer-alt"></i>
         <span>Home</span></a>
   </li>

   <!-- Divider -->
   <hr class="sidebar-divider">

   <!-- Heading -->
   <div class="sidebar-heading">
      Interface
   </div>

   <!-- Nav Item - Pages Collapse Menu -->
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#master" aria-expanded="true" aria-controls="collapsePages">
         <i class="fas fa-fw fa-wrench"></i>
         <span>Master</span>
      </a>
      <div id="master" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="index.php?page=data_admin">Admin</a>
            <a class="collapse-item" href="index.php?page=data_info">Informasi Publik</a>
            <a class="collapse-item" href="index.php?page=data_komentar">Komentar</a>
            <a class="collapse-item" href="index.php?page=data_nikah">Nikah</a>
            <a class="collapse-item" href="index.php?page=data_cerai">Cerai</a>
            <a class="collapse-item" href="index.php?page=data_organisasi">Organisasi</a>
            <a class="collapse-item" href="index.php?page=data_quotes">Quotes</a>
            <a class="collapse-item" href="index.php?page=data_user">User</a>
            <a class="collapse-item" href="index.php?page=data_visimisi">Visi dan Misi</a>
         </div>
      </div>

   </li>
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#laporan" aria-expanded="true" aria-controls="collapsePages">
         <i class="fas fa-fw fa-folder"></i>
         <span>Laporan</span>
      </a>
      <div id="laporan" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="index.php?page=laporan_nikah">Nikah</a>
            <a class="collapse-item" href="index.php?page=laporan_cerai">Cerai</a>
         </div>
      </div>
   </li>

   <!-- Divider -->
   <hr class="sidebar-divider d-none d-md-block">

   <!-- Sidebar Toggler (Sidebar) -->
   <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
   </div>

</ul>
<!-- End of Sidebar -->