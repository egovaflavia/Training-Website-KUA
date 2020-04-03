<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bgmasjid4.jpeg');" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
         <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-0">Ikhlas Beramal</h1>
            <h3 class="subheading mb-4 pb-1">Kantor Urusan Agama | Region Padang</h3>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pendaftaran Nikah</span></p>
         </div>
      </div>
   </div>
</section>

<section class=" contact-section">
   <div class="container">
      <div class="row block-9">
         <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Pengajuan Pendaftaran Nikah</h3>
            <p>Isi data dengan benar</p>
            <form action="" method="POST" class="pt-4 bg-light">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="name">Nama Lengkap *</label>
                           <input name="nama" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                           <label>NIK *</label>
                           <input name="nik" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                           <label>Jenis Kelamin *</label>
                           <select name="jk" class="form-control">
                              <option value="Pria">Pria</option>
                              <option value="Wanita">Wanita</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label>Tempat Lahir *</label>
                           <input name="tmpl" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                           <label>Tanggal Lahir *</label>
                           <input name="tgll" type="date" class="form-control">
                        </div>
                        <div class="form-group">
                           <label>Warga Negara *</label>
                           <select name="wn" class="form-control">
                              <option value="Warga Negara Indoneisa">WNI</option>
                              <option value="Warga Negara Asing">WNA</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label>Agama *</label>
                           <select name="agama" class="form-control">
                              <option value="Islam">Islam</option>
                              <option value="Kristen">Kristen</option>
                              <option value="Katolik">Katolik</option>
                              <option value="Hindu">Hindu</option>
                              <option value="Buddha">Buddha</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-6 bg-light ">
                        <div class="form-group">
                           <label>Pekerjaan *</label>
                           <input name="pekerjaan" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                           <label>Tempat Tinggal *</label>
                           <textarea name="tmpt" cols="30" rows="4" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                           <label>Bin/Binti</label>
                           <input name="bin" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                           <label>Status Perkawinan</label>
                           <ul style="color:red">
                              <li>Jika Pria, Terangkan Jejaka, Duda, atau Beristri dan Berapa Istrinya</li>
                              <li>Jika Wanita, Terangkan Perawan atau Janda</li>
                           </ul>
                           <input name="stts" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                           <label>Nama Istri/Suami Terdahulu</label>
                           <ul style="color:red">
                              <li>
                                 Kosongkan jika tidak ada
                              </li>
                           </ul>
                           <input name="mantan" type="text" class="form-control">
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <input name="simpan" type="submit" value="Simpan" class="btn py-2 px-4 btn-primary">
                        </div>
                     </div>
                  </div>
               </div>
            </form>
            <?php
            if (isset($_POST['simpan'])) {
               $ambil = $koneksi->query("INSERT INTO `tbl_nikah`( 
                                                   `nama`,
                                                   `nik`, 
                                                   `jk`,
                                                   `tmp_lahir`, 
                                                   `tgl_lahir`, 
                                                   `wn`,
                                                   `agama`,
                                                   `pekerjaan`,
                                                   `tmp_tinggal`, 
                                                   `bin`, 
                                                   `status`, 
                                                   `mantan`) VALUES 
                                                (  '$_POST[nama]',
                                                   '$_POST[nik]',
                                                   '$_POST[jk]',
                                                   '$_POST[tmpl]',
                                                   '$_POST[tgll]',
                                                   '$_POST[wn]',
                                                   '$_POST[agama]',
                                                   '$_POST[pekerjaan]',
                                                   '$_POST[tmpt]',
                                                   '$_POST[bin]',
                                                   '$_POST[stts]',
                                                   '$_POST[mantan]')");
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
                  window.location='?page=pendaftaran_nikah';
                  </script>";
               }
            }
            ?>
         </div>
      </div>
   </div>
</section>