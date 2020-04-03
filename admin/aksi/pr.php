<?php
include("../koneksi.php");
if (isset($_POST['edit'])) {
   $nama_org = $_FILES['foto_org']['name'];
   $lokasi = $_FILES['foto_org']['tmp_name'];
   $id = $_POST['id_org'];
   echo "$id";
   if (!empty($lokasi)) {
      move_uploaded_file($lokasi, "../foto_org/$nama_org");
      $ambil = $koneksi->query("UPDATE `tbl_org` SET  `nama`='$_POST[nama_org]',
                                                      `jabatan`='$_POST[jabatan_org]',
                                                      `alamat`='$_POST[alamat_org]',
                                                      `ket`='$_POST[ket_org]',
                                                      `bio`='$_POST[bio_org]',
                                                      `foto_org`='$nama_org' WHERE `id_org`=$id");
   } else {
      $ambil = $koneksi->query("UPDATE `tbl_org` SET  `nama`='$_POST[nama_org]',
                                                      `jabatan`='$_POST[jabatan_org]',
                                                      `alamat`='$_POST[alamat_org]',
                                                      `ket`='$_POST[ket_org]',
                                                      `bio`='$_POST[bio_org]' WHERE `id_org`=$id");
   }
   // if ($ambil) {
   //    echo "<script>
   //    alert('Data Tersimpan');
   //    window.location='?page=data_organisasi';
   //    </script>";
   // } else {
   //    echo "<script>
   //    alert('Data Gagal Tersimpan');
   //    window.location='?page=data_organisasi';
   //    </script>";
   // }
}
