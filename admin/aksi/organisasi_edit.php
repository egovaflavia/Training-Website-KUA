<div class="card shadow mb-4 col-md-6">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Input Data Organisasi</h6>
   </div>
   <div class="card-body">
      <?php
      $id = $_GET['id'];
      $ambilorg = $koneksi->query("SELECT * FROM `tbl_org` WHERE `id_org`=$id");
      $pecahorg = $ambilorg->fetch_assoc();
      ?>
      <form action="" method="POST" class="user" enctype="multipart/form-data">
         <div class="form-group">
            <label class="font-weight-bold">Nama</label>
            <input <?= $pecahorg['id_org']; ?> name="id_org" type="hidden" class="form-control">
            <input value="<?= $pecahorg['nama'] ?>" name="nama_org" type="text" class="form-control">
         </div>
         <div class="form-group">
            <label class="font-weight-bold">Jabatan</label>
            <input value="<?= $pecahorg['jabatan'] ?>" name="jabatan_org" type="text" class="form-control">
         </div>
         <div class="form-group">
            <label class="font-weight-bold">Alamat</label>
            <textarea name="alamat_org" cols="45" class="form-control" rows="10"><?= $pecahorg['alamat'] ?></textarea>
         </div>
         <div class="form-group">
            <label class="font-weight-bold">Keterangan</label>
            <input value="<?= $pecahorg['ket'] ?>" name="ket_org" type="text" class="form-control">
         </div>
         <div class="form-group">
            <label class="font-weight-bold">Biografi</label>
            <input value="<?= $pecahorg['bio'] ?>" name="bio_org" type="text" class="form-control">
         </div>
         <div class="form-group">
            <label class="font-weight-bold">Foto</label>
            <input name="foto" type="file">
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
      <?php
      if (isset($_POST['edit'])) {
         $id = $_GET['id'];
         $nama_foto = $_FILES['foto']['name'];
         $lokasi = $_FILES['foto']['tmp_name'];
         if (!empty($lokasi)) {
            move_uploaded_file($lokasi, "foto_org/$nama_foto");
            $ambil = $koneksi->query("UPDATE `tbl_org` SET  `nama`='$_POST[nama_org]',
                                                            `jabatan`='$_POST[jabatan_org]',
                                                            `alamat`='$_POST[alamat_org]',
                                                            `ket`='$_POST[ket_org]',
                                                            `bio`='$_POST[bio_org]',
                                                            `foto_org`='$nama_foto' WHERE `id_org`=$id");
         } else {
            $ambil = $koneksi->query("UPDATE `tbl_org` SET  `nama`='$_POST[nama_org]',
            `jabatan`='$_POST[jabatan_org]',
            `alamat`='$_POST[alamat_org]',
            `ket`='$_POST[ket_org]',
            `bio`='$_POST[bio_org]' WHERE `id_org`=$id");
         }
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
   </div>
</div>