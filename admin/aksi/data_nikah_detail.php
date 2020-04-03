<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Pendaftaran Nikah</h6>
   </div>
   <?php
   $id = $_GET['id'];
   $no = 1;
   $ambil = $koneksi->query("SELECT * FROM `tbl_nikah` WHERE id_nikah=$id");
   $pecah = $ambil->fetch_assoc();
   ?>
   <div class="card-body">
      <div class="table-responsive">
         <table class="" width="" cellspacing="9">
            <tr>
               <th>Nama</th>
               <td> : <?php echo $pecah['nama']; ?></td>
            </tr>
            <tr>
               <th>NIK</th>
               <td> : <?php echo $pecah['nik']; ?></td>
            </tr>
            <tr>
               <th>Jenis Kelamain</th>
               <td> : <?php echo $pecah['jk']; ?></td>
            </tr>
            <tr>
               <th>Tempat/Tanggal Lahir</th>
               <td> : <?php echo $pecah['tmp_lahir']; ?> / <?php echo $pecah['tgl_lahir']; ?></td>
            </tr>
            <tr>
               <th>Warga Negara</th>
               <td> : <?php echo $pecah['wn']; ?></td>
            </tr>
            <tr>
               <th>Agama</th>
               <td> : <?php echo $pecah['agama']; ?></td>
            </tr>
            <tr>
               <th>Pekerjaan</th>
               <td> : <?php echo $pecah['pekerjaan']; ?></td>
            </tr>
            <tr>
               <th>Tempat Tinggal</th>
               <td> : <?php echo $pecah['tmp_tinggal']; ?></td>
            </tr>
            <tr>
               <th>Bin/Binti</th>
               <td> : <?php echo $pecah['bin']; ?></td>
            </tr>
            <tr>
               <th>Status</th>
               <td> : <?php echo $pecah['status']; ?></td>
            </tr>
            <tr>
               <th>Nama Mantan Suami/Istri Terdahulu</th>
               <td> : <?php echo $pecah['mantan']; ?></td>
            </tr>
            </tbody>
         </table>
      </div>
   </div>
</div>