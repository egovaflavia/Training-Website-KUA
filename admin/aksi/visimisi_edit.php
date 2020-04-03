<div class="card shadow mb-4 col-md-8">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Input Data Admin</h6>
   </div>
   <div class="card-body">
      <?php
      $id = $_GET['id'];
      $ambil = $koneksi->query("SELECT * FROM tbl_visimisi WHERE id_visimisi=$id");
      $pecah = $ambil->fetch_assoc();
      ?>
      <div class="table-responsive">
         <form action="" method="POST" class="user">
            <div class="form-group">
               <h5 class="m-0 font-weight-bold text-primary">Visi : </h5>
               <input type="hidden" name="id_visimisi" value="<?= $pecah['id_visimisi']; ?>">
               <textarea name="visi" class="form-control" cols="45" rows="10"><?php echo $pecah['visi'];  ?></textarea>
            </div>
            <div class="form-group">
               <h5 class="m-0 font-weight-bold text-primary">Misi : </h5>
               <textarea name="misi" class="form-control" cols="45" rows="10"><?php echo $pecah['misi'];  ?></textarea>
            </div>
            <button name="edit" class="btn btn-success btn-icon-split">
               <span class="icon text-white-50">
                  <i class="fas fa-check"></i>
               </span>
               <span class="text">Simpan</span>
            </button>
         </form>
      </div>
   </div>
</div>
<?php
if (isset($_POST['edit'])) {
   $id = $_GET['id'];
   $ambil = $koneksi->query("UPDATE `tbl_visimisi` SET `visi`='$_POST[visi]',`misi`='$_POST[misi]' WHERE `id_visimisi`=$id");
   if ($ambil) {
      echo "<script>
      alert('Data Tersimpan');
      window.location='?page=data_visimisi';
      </script>";
   } else {
      echo "<script>
      alert('Data Gagal Tersimpan');
      window.location='?page=data_visimisi';
      </script>";
   }
}
?>