<div class="card shadow mb-4 col-md-6">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Input Data Informasi Publik</h6>
   </div>
   <div class="card-body">
      <form action="" method="POST" class="user" enctype="multipart/form-data">
         <div class="form-group">
            <label class="font-weight-bold">Nama Admin</label>
            <select name="nama" class="form-control">
               <?php
               $ambil = $koneksi->query("SELECT * FROM tbl_admin");
               while ($pecah = $ambil->fetch_assoc()) {
                  ?>
                  <option value="<?= $pecah['id_admin'] ?>"><?= $pecah['nama_admin']; ?></option>
               <?php } ?>
            </select>
         </div>
         <div class="form-group">
            <label class="font-weight-bold">Tanggal</label>
            <input name="tgl" type="date" class="form-control">
         </div>
         <div class="form-group">
            <label class="font-weight-bold">Judul</label>
            <input name="judul" type="text" class="form-control">
         </div>
         <div class="form-group">
            <label class="font-weight-bold">Isi</label>
            <textarea name="isi" cols="45" class="form-control" rows="10"></textarea>
         </div>
         <div class="form-group">
            <label class="font-weight-bold">Foto</label>
            <input name="foto_info" type="file">
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
   $nama_info = $_FILES['foto_info']['name'];
   $lokasi = $_FILES['foto_info']['tmp_name'];
   $isiok = addslashes($_POST['isi']);
   move_uploaded_file($lokasi, "./foto_info/$nama_info");
   $ambil = $koneksi->query("INSERT INTO `tbl_info`(`id_admin`, `tgl_info`, `judul`, `isi`, `foto_info`) VALUES ('$_POST[nama]','$_POST[tgl]','$_POST[judul]','$isiok','$nama_info')");
   if ($ambil) {
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