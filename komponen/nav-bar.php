	<nav class="navbar navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container d-flex align-items-stretch">
			<div class="col-3 d-flex align-items-center">
				<a class="navbar-brand" href="index.php">KUA<span>Padang</span></a>
			</div>
			<div class="col-9 d-flex align-items-center text-right">
				<ul class="ftco-social mt-2 mr-3">
					<li class="ftco-animate"><a href="https://twitter.com/egovaflavia" target="blank"><span class="icon-twitter"></span></a></li>
					<li class="ftco-animate"><a href="https://www.facebook.com/egovaflavia" target="blank"><span class="icon-facebook"></span></a></li>
					<li class="ftco-animate"><a href="https://www.instagram.com/egovaflavia/" target="blank"><span class="icon-instagram"></span></a></li>
				</ul>

				<button class="navbar-toggler d-flex align-items-center" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="pt-1 mr-1">Menu</span> <span class="oi oi-menu"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<div class="row">
						<div class="col-md-4">
							<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
							<li class="nav-item"><a href="backup_index.php?page=info_publik" class="nav-link">Informasi Publik</a></li>
							<li class="nav-item"><a href="backup_index.php?page=kontak" class="nav-link">Kontak</a></li>
							<?php
							if (!empty($_SESSION['user'])) {
								echo
									"<li class='nav-item'><a href='backup_index.php?page=logout' class='nav-link'>Logout</a></li>";
							} else {
								echo
									"<li class='nav-item'><a href='backup_index.php?page=login' class='nav-link'>Login</a></li>";
							}
							?>

						</div>
						<div class="col-md-4">
							<li class="nav-link"><a>Profile</a>
								<ul>
									<li class="nav-item"><a href="backup_index.php?page=struktur_organisasi" class="nav-link">Struktur Organisasi</a></li>
									<li class="nav-item"><a href="backup_index.php?page=visimisi" class="nav-link">Visi dan Misi</a></li>
								</ul>
						</div>

						<div class="col-md-4">
							<li class="nav-link"><a>Layanan Publik</a>
								<ul>
									<li class="nav-item"><a href="backup_index.php?page=pendaftaran_nikah" class="nav-link">Pendaftaran Nikah</a></li>
									<li class="nav-item"><a href="backup_index.php?page=pendaftaran_cerai" class="nav-link">Pendaftaran Gugutan Ceraian</a></li>
									<li class="nav-item"><a href="index.php#komentar" class="nav-link">Ulasan KUA | Region Padang </a></li>
								</ul>
						</div>
					</div>
				</ul>
			</div>
		</div>
	</nav>