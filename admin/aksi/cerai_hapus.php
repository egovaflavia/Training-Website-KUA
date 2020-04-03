<?php
$id = $_GET['id'];
$ambil = $koneksi->query("DELETE FROM `tbl_cerai` WHERE id_cerai=$id");
if ($ambil) {
   echo "<script>
   alert('Data Terhapus');
   window.location='?page=data_cerai';
   </script>";
} else {
   echo "<script>
   alert('Data Gagal Terhapus');
   window.location='?page=data_cerai';
   </script>";
}
