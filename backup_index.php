<?php
session_start();
include("koneksi.php");  ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <title>Kantor Urusan Agama Padang</title>
   <link rel="icon" type="image/png" href="images/logokua.png">
   <?php include("komponen/head.php");  ?>
</head>

<body>

   <?php include("komponen/nav-bar.php");  ?>

   <?php include("conten.php"); ?>

   <?php include("komponen/footer.php");  ?>

   <?php include("komponen/script.php");  ?>

</body>

</html>