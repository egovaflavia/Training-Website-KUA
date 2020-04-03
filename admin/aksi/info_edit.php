<div class="card shadow mb-4 col-md-6">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Input Data Informasi Publik</h6>
   </div>
   <div class="card-body">
      <?php
      $id = $_GET['id'];
      $ambilinfo = $koneksi->query("SELECT * FROM `tbl_info` WHERE id_info=$id");
      $pecahinfo = $ambilinfo->fetch_assoc();
      ?>
      <form action="" method="POST" class="user" enctype="multipart/form-data">
         <div class="form-group">
            <label class="font-weight-bold">Nama Admin</label>
            <select name="nama" class="form-control">
               <?php
               $ambiladmin = $koneksi->query("SELECT * FROM tbl_admin");
               while ($pecahadmin = $ambiladmin->fetch_assoc()) {
                  ?>
                  <option value="<?= $pecahadmin['id_admin'] ?>"><?= $pecahadmin['nama_admin']; ?></option>
               <?php } ?>
            </select>
         </div>
         <div class="form-group">
            <label class="font-weight-bold">Tanggal</label>
            <input value="<?= $pecahinfo['tgl_info']; ?>" name="tgl" type="date" class="form-control">
         </div>
         <div class="form-group">
            <label class="font-weight-bold">Judul</label>
            <input value="<?= $pecahinfo['judul']; ?>" name="judul" type="text" class="form-control">
         </div>
         <div class="form-group">
            <label class="font-weight-bold">Isi</label>
            <textarea name="isi" cols="45" class="form-control" rows="10"><?= $pecahinfo['isi']; ?></textarea>
         </div>
         <div class="form-group">
            <label class="font-weight-bold">Foto</label>
            <input name="foto_info" type="file">
         </div>
         <button type="submit" name="edit" class="btn btn-primary btn-icon-split">
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
if (isset($_POST['edit'])) {
   $nama_info = $_FILES['foto_info']['name'];
   $lokasi = $_FILES['foto_info']['tmp_name'];
   $id = $_GET['id'];
   if (!empty($lokasi)) {
      move_uploaded_file($lokasi, "foto_info/$nama_info");
      $ambilupdate = $koneksi->query("UPDATE `tbl_info` SET `id_admin`='$_POST[nama]',`tgl_info`='$_POST[tgl]',`judul`='$_POST[judul]',`isi`='$_POST[isi]',`foto_info`='$nama_info' WHERE `id_info`=$id");
   } else {
      $ambilupdate = $koneksi->query("UPDATE `tbl_info` SET `id_admin`='$_POST[nama]',`tgl_info`='$_POST[tgl]',`judul`='$_POST[judul]',`isi`='$_POST[isi]' WHERE `id_info`=$id");
   }

   if ($ambilupdate) {
      echo "<script>
      alert('Data Tersimpan');
      window.location='?page=data_info';
      </script>";
   } else {
      echo "<script>
      alert('Data Gagal Tersimpan');
      window.location='?page=data_info';
      </script>";
   }
}
?>