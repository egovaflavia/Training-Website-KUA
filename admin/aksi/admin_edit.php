<div class="card shadow mb-4 col-md-6">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Input Data Admin</h6>
   </div>
   <div class="card-body">
      <?php
      $id = $_GET['id'];

      $ambil = $koneksi->query("SELECT * FROM tbl_admin WHERE id_admin=$id");
      $pecah = $ambil->fetch_assoc();
      
      ?>
      <form action="" method="POST" class="user">
         <div class="form-group">
            <label class="font-weight-bold">Nama Admin</label>
            <input value="<?= $pecah['id_admin'] ?>" name="id_admin" type="hidden" class="form-control">
            <input value="<?= $pecah['nama_admin'] ?>" name="nama" type="text" class="form-control">
         </div>
         <div class="form-group">
            <label class="font-weight-bold">Username</label>
            <input value="<?= $pecah['username'] ?>" name="uname" type="text" class="form-control">
         </div>
         <div class="form-group">
            <label class="font-weight-bold">Passowrd</label>
            <input value="<?= $pecah['password'] ?>" name="pass" type="password" class="form-control">
         </div>
         <button type="submit" name="simpan" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
               <i class="fas fa-check"></i>
            </span>
            <span class="text">Simpan</span>
         </button>
         <button type="reset" name="reset" class="btn btn-danger btn-icon-split">
            <span class="icon text-white-50">
               <i class="fas fa-circle"></i>
            </span>
            <span class="text">Reset</span>
         </button>
      </form>
   </div>
</div>
<?php
if (isset($_POST['simpan'])) {
   $id = $_GET['id'];
   $ambil = $koneksi->query("UPDATE `tbl_admin` SET `nama_admin`='$_POST[nama]',`username`='$_POST[uname]',`password`='$_POST[pass]' WHERE id_admin=$id");
   if ($ambil) {
      echo "<script>
      alert('Data Tersimpan');
      window.location='?page=data_admin';
      </script>";
   } else {
      echo "<script>
      alert('Data Gagal Tersimpan');
      window.location='?page=data_admin';
      </script>";
   }
}
?>