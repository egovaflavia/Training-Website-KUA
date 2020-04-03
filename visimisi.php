<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bgmasjid4.jpeg');" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
         <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-0">Ikhlas Beramal</h1>
            <h3 class="subheading mb-4 pb-1">Kantor Urusan Agama | Region Padang</h3>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Informasi Publik </span></p>
         </div>
      </div>
   </div>
</section>

<section class="contact-section">
   <div class="container ">
      <div class="row ">
         <div class="col-lg-4 ftco-animate comment-form-wrap pt-5">
            <div class="sidebar-box ftco-animate">
               <h3>Update Info Publik</h3>
               <?php
               $ambil = $koneksi->query("SELECT * FROM tbl_info LEFT JOIN tbl_admin ON tbl_info.id_admin=tbl_admin.id_admin ORDER BY tbl_info.id_info DESC LIMIT 0,5");
               while ($pecah = $ambil->fetch_assoc()) {
                  ?>
               <div class="block-21 mb-4 d-flex">
                  <a href="backup_index.php?page=info_publik_detail&id=<?php echo $pecah['id_info'] ?>">
                     <img class="blog-img mr-4" src="admin/foto_info/<?php echo $pecah['foto_info']; ?>" alt="">
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
         <?php
         $ambil = $koneksi->query("SELECT * FROM tbl_visimisi");
         $pecah = $ambil->fetch_assoc();
         ?>
         <div class="col-md-8 ftco-animate comment-form-wrap pt-5">
            <h3 class="mb-4">Visi</h3>
            <p><?php echo $pecah['visi']; ?></p>

            <hr>
            <h3 class="mb-4 mt-5">Misi</h3>
            <p><?php echo $pecah['misi']; ?></p>
         </div>
      </div>
   </div>
</section>