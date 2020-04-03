<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bgmasjid4.jpeg');" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
         <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-0">Ikhlas Beramal</h1>
            <h3 class="subheading mb-4 pb-1">Kantor Urusan Agama | Region Padang</h3>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Login </span></p>
         </div>
      </div>
   </div>
</section>

<section class="contact-section">
   <div class="container">
      <div class="row block-9">
         <div class="col-lg-8">
            <div class="col-lg-7 ftco-animate comment-form-wrap pt-5">
               <h3 class="mb-5">Silahkan Login</h3>
               <form action="" method="POST" class="pt-4 bg-light">
                  <div class="container">
                     <div class="form-group">
                        <input type="text" name="user" class="form-control" placeholder="Username">
                     </div>
                     <div class="form-group">
                        <input type="password" name="pass" class="form-control" placeholder="Password Anda">
                     </div>
                     <div class="form-group">
                        <button type="submit" name="login" class="btn btn-primary py-2 px-4">Login</button>
                     </div>
                     <p>Belum punya Akun ?, Silahkan daftar <a href="backup_index.php?page=registrasi">Disini</a> </p>
                  </div>
               </form>
               <?php
               if (isset($_POST['login'])) {
                  $ambil = $koneksi->query("SELECT * FROM tbl_user WHERE uname='$_POST[user]' AND pass='$_POST[pass]' ");
                  $cek = $ambil->num_rows;
                  if ($cek == 1) {
                     $_SESSION['user'] = $ambil->fetch_assoc();
                     echo
                        "<script>
                        alert('Login Berhasil');
                        window.location='backup_index.php?page=info_publik';
                        </script>";
                  } else {
                     echo
                        "<script>
                        alert('Login Gagal');
                        window.location='backup_index.php?page=login';
                        </script>";
                  }
               }
               ?>
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
   </div>
</section>