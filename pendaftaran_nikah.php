<?php
if (!empty($_SESSION['user'])) {
   include 'nikah.php';
} else {
   echo
      "<script>
   alert('Anda Belum Login, Silahkan Login Terlabih Dahulu');
   window.location='backup_index.php?page=login';
   </script>";
}
