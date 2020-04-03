<div class="card shadow mb-4 col-md-6">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit Data User</h6>
   </div>
   <div class="card-body">
      <?php
      $id = $_GET['id'];
      $ambil = $koneksi->query("SELECT * FROM `tbl_user` WHERE id_user=$id");
      $pecah = $ambil->fetch_assoc();
      ?>
      <form action="" method="POST" class="user">
         <div class="form-group">
            <label class="font-weight-bold">Username</label>
            <input value="<?= $pecah['id_user'] ?>" name="id_user" type="hidden" class="form-control">
            <input value="<?= $pecah['uname'] ?>" name="uname" type="text" class="form-control">
         </div>
         <div class="form-group">
            <label class="font-weight-bold">Password</label>
            <input value="<?= $pecah['pass'] ?>" name="pass" type="text" class="form-control">
         </div>
         <div class="form-group">
            <label class="font-weight-bold">Nama Lengkap</label>
            <input value="<?= $pecah['nama'] ?>" name="nama" type="text" class="form-control">
         </div>
         <div class="form-group">
            <label class="font-weight-bold">Alamat</label>
            <input value="<?= $pecah['alamat'] ?>" name="alamat" type="text" class="form-control">
         </div>
         <div class="form-group">
            <label class="font-weight-bold">No Handphone</label>
            <input value="<?= $pecah['nohp'] ?>" name="nohp" type="text" class="form-control">
         </div>
         <button type="submit" name="edit" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
               <i class="fas fa-check"></i>
            </span>
            <span class="text">Edit</span>
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
if (isset($_POST['edit'])) {
   $id = $_GET['id'];
   $ambil = $koneksi->query("UPDATE `tbl_user` SET `uname`='$_POST[uname]',`pass`='$_POST[pass]',`nama`='$_POST[nama]',`alamat`='$_POST[alamat]',`nohp`='$_POST[nohp]' WHERE `id_user`=$id");
   if ($ambil) {
      echo "<script>
      alert('Data Tersimpan');
      window.location='?page=data_user';
      </script>";
   } else {
      echo "<script>
      alert('Data Gagal Tersimpan');
      window.location='?page=data_user';
      </script>";
   }
}
?>