<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bgmasjid4.jpeg');" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
         <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-0">Ikhlas Beramal</h1>
            <h3 class="subheading mb-4 pb-1">Kantor Urusan Agama | Region Padang</h3>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pendaftaran Cerai</span></p>
         </div>
      </div>
   </div>
</section>

<section class=" contact-section">
   <div class="container">
      <div class="row block-9">
         <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Pengajuan Pendaftaran Gugatan Cerai</h3>
            <p>Isi data dengan benar</p>
            <form action="" method="POST" class="pt-4 bg-light">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <h4>Pemohon</h4>
                        <div class="form-group">
                           <label>Nama Lengkap *</label>
                           <input name="nama_pemohon" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                           <label>NIK *</label>
                           <input name="nik_pemohon" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                           <label>Umur *</label>
                           <input name="umur_pemohon" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                           <label>Jenis Kelamin *</label>
                           <select name="jk_pemohon" class="form-control">
                              <option value="Pria">Pria</option>
                              <option value="Wanita">Wanita</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label>Agama *</label>
                           <select name="agama_pemohon" class="form-control">
                              <option value="Islam">Islam</option>
                              <option value="Kristen">Kristen</option>
                              <option value="Katolik">Katolik</option>
                              <option value="Hindu">Hindu</option>
                              <option value="Buddha">Buddha</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label>Pekerjaan *</label>
                           <input name="pekerjaan_pemohon" type="text" class="form-control" name="">
                        </div>
                        <div class="form-group">
                           <label>Tempat Tinggal *</label>
                           <textarea name="tmp_pemohon" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <h4>Termohon</h4>
                        <div class="form-group">
                           <label>Nama Lengkap *</label>
                           <input name="nama_termohon" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                           <label>NIK *</label>
                           <input name="nik_termohon" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                           <label>Umur *</label>
                           <input name="umur_termohon" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                           <label>Jenis Kelamin *</label>
                           <select name="jk_termohon" class="form-control">
                              <option value="Pria">Pria</option>
                              <option value="Wanita">Wanita</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label>Agama *</label>
                           <select name="agama_termohon" class="form-control">
                              <option value="Islam">Islam</option>
                              <option value="Kristen">Kristen</option>
                              <option value="Katolik">Katolik</option>
                              <option value="Hindu">Hindu</option>
                              <option value="Buddha">Buddha</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label>Pekerjaan *</label>
                           <input name="pekerjaan_termohon" type="text" class="form-control" name="">
                        </div>
                        <div class="form-group">
                           <label>Tempat Tinggal *</label>
                           <textarea name="tmp_termohon" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label>Alasan atau Dalil Pemohon untuk Gugatan Cerai *</label>
                           <textarea name="alasan" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <input name="simpan" type="submit" value="Simpan" class="btn py-2 px-4 btn-primary">
                  </div>
               </div>
            </form>
            <?php
            if (isset($_POST['simpan'])) {
               $ambil = $koneksi->query("INSERT INTO `tbl_cerai`(`nama_pemohon`, `nik_pemohon`, `umur_pemohon`, `jk_pemohon`, `agama_pemohon`, `pekerjaan_pemohon`, `tmp_pemohon`, `nama_termohon`, `nik_termohon`, `umur_termohon`, `jk_termohon`, `agama_termohon`, `pekerjaan_termohon`, `tmp_termohon`, `alasan`) VALUES (
                        '$_POST[nama_pemohon]',
                        '$_POST[nik_pemohon]',
                        '$_POST[umur_pemohon]',
                        '$_POST[jk_pemohon]',
                        '$_POST[agama_pemohon]',
                        '$_POST[pekerjaan_pemohon]',
                        '$_POST[tmp_pemohon]',
                        '$_POST[nama_termohon]',
                        '$_POST[nik_termohon]',
                        '$_POST[umur_termohon]',
                        '$_POST[jk_termohon]',
                        '$_POST[agama_termohon]',
                        '$_POST[pekerjaan_termohon]',
                        '$_POST[tmp_termohon]',
                        '$_POST[alasan]')");
               if ($ambil) {
                  echo "
                  <script>
                  alert('Data Tersimpan');
                  window.location='index.php';
                  </script>";
               } else {
                  echo "
                  <script>
                  alert('Data Gagal Tersimpan');
                  window.location='?page=pendaftaran_cerai';
                  </script>";
               }
            }
            ?>
         </div>
      </div>
   </div>
</section>