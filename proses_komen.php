<?php
include("koneksi.php");
if (isset($_POST['komen'])) {
   $ambil_komen = $koneksi->query("INSERT INTO `tbl_komentar`( `nama`, 
                                                               `email`, 
                                                               `pekerjaan`, 
                                                               `isi`) VALUES (
                                                               '$_POST[nama]',
                                                               '$_POST[email]',
                                                               '$_POST[pekerjaan]',
                                                               '$_POST[isi]')");
}
if ($ambil_komen) {
   echo "<script>
                     alert('Komentar berhasil di simpan');
                     window.location='index.php#komentar';
                     </script>";
} else {
   echo "<script>
                     alert('Komentar gagal di simpan');
                     window.location='backup_index.php?page=kontak';
                     </script>";
}
