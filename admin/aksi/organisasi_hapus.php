<?php
$id = $_GET['id'];
$ambil = $koneksi->query("DELETE FROM `tbl_org` WHERE id_org=$id");
if ($ambil) {
   echo "<script>
   alert('Data Terhapus');
   window.location='?page=data_organisasi';
   </script>";
} else {
   echo "<script>
   alert('Data Gagal Terhapu');
   window.location='?page=data_organisasi';
   </script>";
}
