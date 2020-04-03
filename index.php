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

	<?php include("komponen/background.php");  ?>

	<?php include("komponen/kiri-kanan.php");  ?>

	<?php include("komponen/daily-quotes.php");  ?>

	<?php include("komponen/layanan.php");  ?>

	<?php // include("komponen/sermon.php");
	?>

	<?php // include("komponen/about.php");
	?>

	<?php include("komentar.php"); ?>

	<?php //include("komponen/event.php");
	?>

	<?php include("komponen/lokasi.php"); ?>

	<?php include("komponen/footer.php");  ?>

	<?php include("komponen/script.php");  ?>

</body>

</html>