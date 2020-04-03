<?php
session_destroy();
echo
   "<script>
   alert('Berhasil Logout');
   window.location='backup_index.php?page=login';
   </script>";
