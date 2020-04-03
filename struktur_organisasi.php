<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bgmasjid4.jpeg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
        <h1 class="mb-0">Ikhlas Beramal</h1>
        <h3 class="subheading mb-4 pb-1">Kantor Urusan Agama | Region Padang</h3>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Struktur Organisasi </span></p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 py-5">
        <div class="heading-section heading-section-no-line ftco-animate mb-5">
          <h2 class="mb-2">Struktur Organisasi</h2>
          <span class="subheading">Kantor Urusan Agama | Region Padang</span>
        </div>
        <?php
        $ambil = $koneksi->query("SELECT * FROM tbl_org ");
        while ($pecah = $ambil->fetch_assoc()) {
          ?>
          <div class="event-wrap d-md-flex ftco-animate">
            <div class="img" style="background-image: url(admin/foto_org/<?php echo $pecah['foto_org']; ?>);"></div>
            <div class="text pl-md-5">
              <h2 class="mb-3"><a href="backup_index.php?page=struktur_organisasi_detail&id=<?php echo $pecah['id_org']; ?>"><?php echo $pecah['nama']; ?></a></h2>
              <div class="meta">
                <p>
                  <span><i class="icon-calendar mr-2"></i><?php echo $pecah['jabatan']; ?></span>
                  <span><i class="icon-my_location mr-2"></i> <?php echo $pecah['alamat']; ?></span>
                  <span><i class="icon-location_city mr-2"></i><?php echo $pecah['ket']; ?></span>
                </p>
              </div>
              <p><a href="backup_index.php?page=struktur_organisasi_detail&id=<?php echo $pecah['id_org']; ?>" class="btn btn-primary">Detail</a></p>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>