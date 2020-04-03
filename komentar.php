<section class="ftco-section testimony-section" style="background-image: url(images/bgmasjid4.jpeg);" id="komentar">
	<div class="overlay"></div>
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
				<h2 class="mb-2">Pendapat Anda Tentang KUA | Region Padang</h2>
			</div>
		</div>
		<div class="row ftco-animate">
			<div class="col-md-12">
				<div class="carousel-testimony owl-carousel ftco-owl">
					<?php
					$ambil = $koneksi->query("SELECT * FROM tbl_komentar ORDER BY id_komentar ASC");
					while ($pecah = $ambil->fetch_assoc()) {  ?>
					<div class="item">
						<div class="testimony-wrap text-center py-4 pb-5">
							<div class="user-img mb-4">
								<span class="quote d-flex align-items-center justify-content-center">
									<i class="icon-quote-left"></i>
								</span>
							</div>
							<div class="text p-3">
								<p class="mb-4"><?php echo $pecah['isi']; ?></p>
								<p class="name"><?php echo $pecah['nama']; ?></p>
								<span class="position"><?php echo $pecah['pekerjaan']; ?></span>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>