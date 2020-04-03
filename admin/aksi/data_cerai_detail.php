<div class="row">
   <?php
   $id = $_GET['id'];
   $no = 1;
   $ambil = $koneksi->query("SELECT * FROM `tbl_cerai` WHERE id_cerai=$id");
   $pecah = $ambil->fetch_assoc();
   ?>

   <div class="col-lg-6">
      <div class="card shadow mb-4">
         <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pemohon</h6>
         </div>
         <div class="card-body">
            <table class="" width="" cellspacing="9">
               <tr>
                  <th>Nama Pemohon</th>
                  <td> : <?php echo $pecah['nama_pemohon']; ?></td>
               </tr>
               <tr>
                  <th>NIK Pemohon</th>
                  <td> : <?php echo $pecah['nik_pemohon']; ?></td>
               </tr>
               <tr>
                  <th>Umur Pemohon</th>
                  <td> : <?php echo $pecah['umur_pemohon']; ?></td>
               </tr>
               <tr>
                  <th>Jenis Kelamin Pemohon</th>
                  <td> : <?php echo $pecah['jk_pemohon']; ?></td>
               </tr>
               <tr>
                  <th>Agama Pemohon</th>
                  <td> : <?php echo $pecah['agama_pemohon']; ?></td>
               </tr>
               <tr>
                  <th>Pekerjaan Pemohon</th>
                  <td> : <?php echo $pecah['pekerjaan_pemohon']; ?></td>
               </tr>
               <tr>
                  <th>Tempat Tinggal Pemohon</th>
                  <td> : <?php echo $pecah['tmp_pemohon']; ?></td>
               </tr>
            </table>
         </div>
      </div>

   </div>

   <div class="col-lg-6">
      <!-- Custom Text Color Utilities -->
      <div class="card shadow mb-4">
         <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Termohon</h6>
         </div>
         <div class="card-body">
            <table class="" width="" cellspacing="9">
               <tr>
                  <th>Nama Pemohon</th>
                  <td> : <?php echo $pecah['nama_termohon']; ?></td>
               </tr>
               <tr>
                  <th>NIK Pemohon</th>
                  <td> : <?php echo $pecah['nik_termohon']; ?></td>
               </tr>
               <tr>
                  <th>Umur Pemohon</th>
                  <td> : <?php echo $pecah['umur_termohon']; ?></td>
               </tr>
               <tr>
                  <th>Jenis Kelamin Pemohon</th>
                  <td> : <?php echo $pecah['jk_termohon']; ?></td>
               </tr>
               <tr>
                  <th>Agama Pemohon</th>
                  <td> : <?php echo $pecah['agama_termohon']; ?></td>
               </tr>
               <tr>
                  <th>Pekerjaan Pemohon</th>
                  <td> : <?php echo $pecah['pekerjaan_termohon']; ?></td>
               </tr>
               <tr>
                  <th>Tempat Tinggal Pemohon</th>
                  <td> : <?php echo $pecah['tmp_termohon']; ?></td>
               </tr>
            </table>
         </div>
      </div>
   </div>
   <div class="col-lg-12">
      <div class="card shadow mb-4">
         <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Alasan Pemohon Terhadap Termohon</h6>
         </div>
         <div class="card-body">
            <table class="" width="" cellspacing="9">
               <tr>
                  <th>Alasan</th>
                  <td> : <?php echo $pecah['alasan']; ?></td>
               </tr>
            </table>
         </div>
      </div>
   </div>
</div>