<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bgmasjid4.jpeg');" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
         <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-0">Ikhlas Beramal</h1>
            <h3 class="subheading mb-4 pb-1">Kantor Urusan Agama | Region Padang</h3>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Registrasi</span></p>
         </div>
      </div>
   </div>
</section>

<section class=" contact-section">
   <div class="container">
      <div class="row block-9">
         <div class="col-lg-8">
            <div class="col-lg-7 ftco-animate comment-form-wrap pt-5">
               <h2 class="h3">Silahkan Registrasi</h2>
               <div class="col-lg-6 order-md-last d-flex">
                  <form action="" method="POST" class="pt-4 bg-light">
                     <div class="container">
                        <div class="form-group">
                           <input name="uname" type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                           <input name="pass" type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                           <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                           <input name="email" type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                           <textarea name="alamat" clas="form-control" cols="28" rows="5" placeholder="   Alamat"></textarea>
                        </div>
                        <div class="form-group">
                           <input name="nohp" type="text" class="form-control" placeholder="No. Handphone">
                        </div>
                        <div class="form-group">
                           <input type="submit" value="Daftar" name="regisrasi" class="btn btn-primary py-3 px-5">
                        </div>
                     </div>
                  </form>
                  <?php
                  if (isset($_POST['regisrasi'])) {
                     $ambil = $koneksi->query("INSERT INTO `tbl_user`(  `uname`,
                                                                        `pass`,
                                                                        `nama`, 
                                                                        `email`, 
                                                                        `alamat`, 
                                                                        `nohp`) VALUES (
                                                                           '$_POST[uname]',
                                                                           '$_POST[pass]',
                                                                           '$_POST[nama]',
                                                                           '$_POST[email]',
                                                                           '$_POST[alamat]',
                                                                           '$_POST[nohp]')");
                     if ($ambil) {
                        echo "<script>
                           alert('Data Tersimpan, Silahkan Login');
                           window.location='?page=login';
                           </script>";
                     } else {
                        echo "<script>
                           alert('Data Gagal Tersimpan');
                           window.location='?page=login';
                           </script>";
                     }
                  }
                  ?>
               </div>
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
</section>