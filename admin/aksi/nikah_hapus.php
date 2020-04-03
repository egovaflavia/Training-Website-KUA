<?php
$id = $_GET['id'];
$ambil = $koneksi->query("DELETE FROM `tbl_nikah` WHERE id_nikah=$id");
if ($ambil) {
   echo "<script>
   alert('Data Terhapus');
   window.location='?page=data_nikah';
   </script>";
} else {
   echo "<script>
   alert('Data Gagal Terhapus');
   window.location='?page=data_nikah';
   </script>";
}
