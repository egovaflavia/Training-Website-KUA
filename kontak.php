<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bgmasjid4.jpeg');" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
         <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-0">Ikhlas Beramal</h1>
            <h3 class="subheading mb-4 pb-1">Kantor Urusan Agama | Region Padang</h3>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Kontak </span></p>
         </div>
      </div>
   </div>
</section>

<section class="contact-section">
   <div class="container">
      <div class="row block-9">
         <div class="col-lg-8">
            <div class="col-lg-8 ftco-animate comment-form-wrap pt-5">
               <h3 class="h3">Tinggalkan Komentar</h3>
               <p>Untuk menunjang kinerja Kantor Urusan Agama | Region Padang</p>
               <form action="proses_komen.php" class="pt-4 bg-light" method="POST">
                  <div class="container">
                     <div class="form-group">
                        <input name="nama" type="text" class="form-control" placeholder="Nama Anda">
                     </div>
                     <div class="form-group">
                        <input name="email" type="email" class="form-control" placeholder="Email Anda">
                     </div>
                     <div class="form-group">
                        <input name="pekerjaan" type="text" class="form-control" placeholder="Pekerjaan">
                     </div>
                     <div class="form-group">
                        <textarea name="isi" cols="30" rows="7" class="form-control" placeholder="Komentar"></textarea>
                     </div>
                     <div class="form-group">
                        <input name="komen" type="submit" value="Kirim Komentar" class="btn btn-primary py-2 px-5">
                     </div>
                  </div>
               </form>
            </div>
         </div>

         <div class="col-lg-4 sidebar ftco-animate">
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

      </div>
      <div class="row d-flex mb-5 contact-info">
         <div class="col-md-12 mb-4">
            <h2 class="h3">Informasi Lebih Lanjut</h2>
         </div>
         <div class="w-100"></div>
         <div class="col-md-3">
            <p><span>Alamat: </span> Jl. Rimbo Kaluang No.12, Kota Padang, Sumatera Barat, Indonesia </p>
         </div>
         <div class="col-md-3">
            <p><span>Whatsapp: </span> <a href="https://api.whatsapp.com/send?phone=082283669007">0822-8366-9007</a></p>
         </div>
         <div class="col-md-3">
            <p><span>Email: </span> <a href="https://www.google.com">egovaflavia@gmail.com</a></p>
         </div>
         <div class="col-md-3">
            <p><span>Website: </span> <a href="https://www.google.com">www.kuapadang.org</a></p>
         </div>
      </div>
   </div>
</section>