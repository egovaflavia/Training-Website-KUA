<div class="card shadow mb-4 col-md-6">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Input Data Quotes</h6>
   </div>
   <div class="card-body">
      <form action="" method="POST" class="user">
         <div class="form-group">
            <label class="font-weight-bold">Ayat</label>
            <input name="ayat" type="text" class="form-control">
         </div>
         <div class="form-group">
            <label class="font-weight-bold">Isi</label>
            <input name="isi" type="text" class="form-control">
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
   $ambil = $koneksi->query("INSERT INTO `tbl_quotes`(`ayat`, `isi`) VALUES ('$_POST[ayat]','$_POST[isi]')");
   if ($ambil) {
      echo "<script>
      alert('Data Tersimpan');
      window.location='?page=data_quotes';
      </script>";
   } else {
      echo "<script>
      alert('Data Gagal Tersimpan');
      window.location='?page=data_quotes';
      </script>";
   }
}
?>