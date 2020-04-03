<div class="card shadow mb-4 col-md-6">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Input Data Organisasi</h6>
   </div>
   <div class="card-body">
      <form action="" method="POST" class="user" enctype="multipart/form-data">
         <div class="form-group">
            <label class="font-weight-bold">Nama</label>
            <input name="nama" type="text" class="form-control">
         </div>
         <div class="form-group">
            <label class="font-weight-bold">Jabatan</label>
            <input name="jabatan" type="text" class="form-control">
         </div>
         <div class="form-group">
            <label class="font-weight-bold">Alamat</label>
            <textarea name="alamat" cols="45" class="form-control" rows="10"></textarea>
         </div>
         <div class="form-group">
            <label class="font-weight-bold">Keterangan</label>
            <input name="ket" type="text" class="form-control">
         </div>
         <div class="form-group">
            <label class="font-weight-bold">Biografi</label>
            <input name="bio" type="text" class="form-control">
         </div>
         <div class="form-group">
            <label class="font-weight-bold">Foto</label>
            <input name="foto_org" type="file">
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
   $nama_org = $_FILES['foto_org']['name'];
   $lokasi = $_FILES['foto_org']['tmp_name'];
   move_uploaded_file($lokasi, "./foto_org/$nama_org");
   $ambil = $koneksi->query("INSERT INTO `tbl_org`(`nama`, `jabatan`, `alamat`, `ket`, `bio`, `foto_org`) VALUES ('$_POST[nama]','$_POST[jabatan]','$_POST[alamat]','$_POST[ket]','$_POST[bio]','$nama_org')");
   if ($ambil) {
      echo "<script>
      alert('Data Tersimpan');
      window.location='?page=data_organisasi';
      </script>";
   } else {
      echo "<script>
      alert('Data Gagal Tersimpan');
      window.location='?page=data_organisasi';
      </script>";
   }
}
?>