<?php
$id = $_GET['id'];
$ambil = $koneksi->query("DELETE FROM `tbl_quotes` WHERE id_quotes=$id");
if ($ambil) {
   echo "<script>
   alert('Data Terhapus');
   window.location='?page=data_quotes';
   </script>";
} else {
   echo "<script>
   alert('Data Gagal Terhapu');
   window.location='?page=data_quotes';
   </script>";
}
