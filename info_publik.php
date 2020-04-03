<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bgmasjid4.jpeg');" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
         <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-0">Ikhlas Beramal</h1>
            <h3 class="subheading mb-4 pb-1">Kantor Urusan Agama | Region Padang</h3>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Informasi Publik </span> </p>
         </div>
      </div>
   </div>
</section>

<section class="contact-section">
   <div class="container">
      <div class="row block-9">
         <div class="comment-form-wrap pt-5">
            <h3 class="h3">Informasi Publik</h3>
            <p>Informasi yang di publikasikan merupakan kebijakan KUA Padang</p>
            <div class="row d-flex">
               <?php
               $ambil = $koneksi->query("SELECT * FROM tbl_info LEFT JOIN tbl_admin ON tbl_info.id_admin=tbl_admin.id_admin ORDER BY tbl_info.id_info ASC");
               while ($pecah = $ambil->fetch_assoc()) {
                  $isi = substr($pecah['isi'], 0, 20);
                  $year = $pecah['tgl_info'] = date('Y');
                  $month = $pecah['tgl_info'] = date('M');
                  $day = $pecah['tgl_info'] = date('d');
                  ?>
                  <div class="col-lg-4 d-flex ftco-animate">
                     <div class="blog-entry justify-content-end">
                        <a href="backup_index.php?page=info_publik_detail&id=<?php echo $pecah['id_info'] ?>">
                           <img class="block-20" src="admin/foto_info/<?php echo $pecah['foto_info']; ?>" alt="">
                        </a>
                        <div class=" text d-flex float-right d-block">
                           <div class="topper text-center pt-4 px-3">
                              <span class="day"><?php echo $day; ?></span>
                              <span class="mos"><?php echo $month; ?></span>
                              <span class="yr"><?php echo $year; ?></span>
                           </div>
                           <div class="desc p-4">
                              <h3 class="heading mt-2"><a href="backup_index.php?page=info_publik_detail&id=<?php echo $pecah['id_info'] ?>"><?php echo $pecah['judul']; ?></a></h3>
                              <p><?php echo $isi; ?> ... <a href="backup_index.php?page=info_publik_detail&id=<?php echo $pecah['id_info'] ?>">Baca Selengkapnya</a>
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php } ?>
            </div>
         </div>
      </div>
   </div>
</section>