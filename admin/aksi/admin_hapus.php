<?php
$id = $_GET['id'];
$ambil = $koneksi->query("DELETE FROM `tbl_admin` WHERE id_admin=$id");
if ($ambil) {
   echo "<script>
   alert('Data Terhapus');
   window.location='?page=data_admin';
   </script>";
} else {
   echo "<script>
   alert('Data Gagal Terhapus');
   window.location='?page=data_admin';
   </script>";
}
