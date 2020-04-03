<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Pendaftaran Nikah</h6>
   </div>
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
               <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Nik</th>
                  <th>Jenis Kelamin</th>
                  <th width="50"></th>
               </tr>
            </thead>
            <tbody>
               <?php
               $no = 1;
               $ambil = $koneksi->query("SELECT * FROM `tbl_nikah`");
               while ($pecah = $ambil->fetch_assoc()) {
                  ?>
               <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $pecah['nama']; ?></td>
                  <td><?php echo $pecah['nik']; ?></td>
                  <td><?php echo $pecah['jk']; ?></td>
                  <td>
                     <div class="dropdown mb-4">
                        <a class="btn btn-primary" type="button" href="?page=aksi/data_nikah_detail&id=<?= $pecah['id_nikah']; ?>" aria-haspopup="true" aria-expanded="false">
                           Detail
                        </a>
                     </div>
                  </td>
               </tr>
               <?php } ?>
            </tbody>
         </table>
      </div>
   </div>
</div>