<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Pendaftaran Gugatan Cerai</h6>
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
               $ambil = $koneksi->query("SELECT * FROM `tbl_cerai`");
               while ($pecah = $ambil->fetch_assoc()) {
                  ?>
               <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $pecah['nama_pemohon']; ?></td>
                  <td><?php echo $pecah['nik_pemohon']; ?></td>
                  <td><?php echo $pecah['jk_pemohon']; ?></td>
                  <td>
                     <div class="dropdown mb-4">
                        <a class="btn btn-primary" href="?page=aksi/data_cerai_detail&id=<?= $pecah['id_cerai']; ?>" type="button" aria-haspopup="true" aria-expanded="false">
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