<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bgmasjid4.jpeg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
        <h1 class="mb-0">Ikhlas Beramal</h1>
        <h3 class="subheading mb-4 pb-1">Kantor Urusan Agama | Region Padang</h3>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span><a href="backup_index.php?page=info_publik">Informasi Publik</a></span> <i class="ion-ios-arrow-forward"></i> Detail Informasi Publik</p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-degree-bg">
  <div class="container">
    <div class="row">
      <?php
      $id = $_GET['id'];
      $ambil = $koneksi->query("SELECT * FROM tbl_info LEFT JOIN tbl_admin ON tbl_info.id_admin=tbl_admin.id_admin WHERE tbl_info.id_info=$id");
      while ($pecah = $ambil->fetch_assoc()) {
        ?>
        <div class="col-lg-8 ftco-animate">
          <p>
            <img class="img-fluid" width="800" src="admin/foto_info/<?php echo $pecah['foto_info']; ?>" alt="">
          </p>
          <h2 class="mb-3"><?= $pecah['judul'] ?></h2>
          <span class="icon-calendar"></span> <?= $pecah['tgl_info']; ?> <span class="icon-person"></span> <?= $pecah['nama_admin']; ?>
          <p align="justify" style="font-family: Arial"><?= $pecah['isi'] ?></p>
        <?php } ?>
        </div> <!-- .col-md-8 -->
        <div class="col-lg-4 sidebar ftco-animate">
          <div class="sidebar-box ftco-animate">
            <h3>Update Info Publik</h3>
            <?php
            $ambil = $koneksi->query("SELECT * FROM tbl_info LEFT JOIN tbl_admin ON tbl_info.id_admin=tbl_admin.id_admin ORDER BY tbl_info.id_info DESC LIMIT 0,3");
            while ($pecah = $ambil->fetch_assoc()) {
              ?>
              <div class="block-21 mb-4 d-flex">
                <a href="backup_index.php?page=info_publik_detail&id=<?php echo $pecah['id_info'] ?>">
                  <img height="200" class="blog-img mr-4" src="admin/foto_info/<?php echo $pecah['foto_info']; ?>" alt="">
                </a>
                <div class="text">
                  <h3 class="heading"><a href="backup_index.php?page=info_publik_detail&id=<?php echo $pecah['id_info'] ?>"><?= $pecah['judul']; ?></a>
                  </h3>
                  <div class="meta">
                    <div><a href="backup_index.php?page=info_publik_detail&id=<?php echo $pecah['id_info'] ?>"><span class="icon-calendar"></span><?= $pecah['tgl_info']; ?> </a></div>
                    <div><a href="backup_index.php?page=info_publik_detail&id=<?php echo $pecah['id_info'] ?>"><span class="icon-person"></span> <?= $pecah['nama_admin']; ?></a></div>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
    </div>
  </div>
</section>