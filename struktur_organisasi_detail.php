<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bgmasjid4.jpeg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
			<div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
				<h1 class="mb-0">Ikhlas Beramal</h1>
				<h3 class="subheading mb-4 pb-1">Kantor Urusan Agama | Region Padang</h3>
				<p class="breadcrumbs">
					<span class="mr-2">
						<a href="index.php">Home
							<i class="ion-ios-arrow-forward"></i>
						</a>
					</span>
					<span>
						<a href="backup_index.php?page=struktur_organisasi">Struktur Organisasi
							<i class="ion-ios-arrow-forward"></i>
						</a>
					</span>
					<span>
						Detail Struktur Organisasi
					</span>
				</p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-12 text-center heading-section heading-section-light ftco-animate">
				<h2 class="mb-2"><span class="px-4">Detail Struktur Organisasi</span></h2>
				<span class="subheading">Kantor Urusan Agama | Region Padang</span>
			</div>
		</div>
		<?php
		$id = $_GET['id'];
		$ambil = $koneksi->query("SELECT * FROM tbl_org WHERE id_org=$id ");
		while ($pecah = $ambil->fetch_assoc()) {
			?>
			<div class="row d-flex sermon-wrap">
				<div class="col-md-6 d-flex align-items-stretch ftco-animate">
					<a class="img" target="_blank" href="admin/foto_org/<?php echo $pecah['foto_org']; ?>">
						<img class="img" width="400" src="admin/foto_org/<?php echo $pecah['foto_org']; ?>" alt="">
					</a>
				</div>
				<div class="col-md-6 py-4 text ftco-animate">
					<h2 class="mb-4"><a href=""><?php echo $pecah['nama']; ?></a></h2>
					<div class="meta">
						<p>
							<span>Jabatan : <i class=""><?php echo $pecah['jabatan']; ?></i></span>
							<span>Alamat : <i href=""><?php echo $pecah['alamat']; ?></i></span>
							<span><i><?php echo $pecah['ket']; ?></i></span>
						</p>
					</div>
					<p><?php echo $pecah['bio']; ?></p>
					<p class="mt-4 btn-customize">
					</p>
				</div>
			</div>
		<?php } ?>
	</div>
</section>