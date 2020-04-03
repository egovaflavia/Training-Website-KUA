<?php
session_start();
//koneksi ke database
include("koneksi.php");
if (!empty($_SESSION['nama_admin'])) {
  echo "<script>
  alert('Anda harus login');
  location='login.php';
  </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin Kantor Urusan Agama Padang</title>
  <link rel="icon" type="image/png" href="../images/logokua.png">
  <!-- Custom fonts for this template-->
  <?php include("komponen/head.php");  ?>

</head>

<body id="page-top">

  <div id="wrapper">


    <?php include("komponen/side.php");  ?>

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

        <?php include("komponen/top.php");  ?>

        <div class="container-fluid">
          <?php include("conten.php");  ?>

        </div>

        <?php include("komponen/footer.php")  ?>

      </div>
    </div>
  </div>


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php include("logout.php");  ?>

  <?php include("komponen/script.php");  ?>

</body>

</html>