<div class="card shadow mb-4 col-md-6">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Input Data Quotes</h6>
   </div>
   <div class="card-body">
      <?php
      $id = $_GET['id'];
      $ambilquotes = $koneksi->query("SELECT * FROM tbl_quotes WHERE id_quotes=$id");
      $pecahquotes = $ambilquotes->fetch_assoc();
      ?>
      <form action="" method="POST" class="user">
         <div class="form-group">
            <label class="font-weight-bold">Ayat</label>
            <input value="<?= $pecahquotes['id_quotes'] ?>" name="id_quotes" type="hidden" class="form-control">
            <input value="<?= $pecahquotes['ayat'] ?>" name="ayat" type="text" class="form-control">
         </div>
         <div class="form-group">
            <label class="font-weight-bold">Isi</label>
            <textarea name="isi" cols="45" rows="7" class="form-control"><?= $pecahquotes['isi'] ?></textarea>
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
   $id = $_GET['id'];
   $ambil = $koneksi->query("UPDATE `tbl_quotes` SET `ayat`='$_POST[ayat]',`isi`='$_POST[isi]' WHERE `id_quotes`=$id");
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