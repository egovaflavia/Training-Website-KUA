<?php
$tgl = date('d');
$ambil = $koneksi->query("SELECT * FROM tbl_quotes WHERE id_quotes=$tgl");
$pecah = $ambil->fetch_assoc();
?>
<section class="ftco-daily-verse bg-light">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 daily-verse text-center p-5">
				<span class="flaticon-promotion"></span>
				<h3 class="ftco-animate">" <?php echo $pecah['isi']; ?> "</h3>
				<h4 class="h5 mt-4 font-weight-bold ftco-animate">&mdash; <?php echo $pecah['ayat']; ?> </h4>
			</div>
		</div>
	</div>
</section>