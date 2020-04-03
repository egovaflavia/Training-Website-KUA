<?php
$id = $_GET['id'];
$ambil = $koneksi->query("DELETE FROM `tbl_user` WHERE id_user=$id");
if ($ambil) {
   echo "<script>
   alert('Data Terhapus');
   window.location='?page=data_user';
   </script>";
} else {
   echo "<script>
   alert('Data Gagal Terhapu');
   window.location='?page=data_user';
   </script>";
}
