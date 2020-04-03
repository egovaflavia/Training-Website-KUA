<?php
$id = $_GET['id'];
$ambil = $koneksi->query("DELETE FROM `tbl_info` WHERE id_info=$id");
if ($ambil) {
   echo "<script>
   alert('Data Terhapus');
   window.location='?page=data_info';
   </script>";
} else {
   echo "<script>
   alert('Data Gagal Terhapu');
   window.location='?page=data_info';
   </script>";
}
