<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Komentar</h6>
   </div>
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
               <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Pekerjaan</th>
                  <th>Komentar</th>
                  <th width="50"></th>
               </tr>
            </thead>
            <tbody>
               <?php
               $no = 1;
               $ambil = $koneksi->query("SELECT * FROM tbl_komentar ");
               while ($pecah = $ambil->fetch_assoc()) {
                  ?>
               <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $pecah['nama']; ?></td>
                  <td><?php echo $pecah['email']; ?></td>
                  <td><?php echo $pecah['pekerjaan']; ?></td>
                  <td><?php echo $pecah['isi']; ?></td>
                  <td>
                     <div class="dropdown mb-4">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Aksi
                        </button>
                        <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                           <a class="dropdown-item" href="?page=aksi/komentar_hapus&id=<?= $pecah['id_komentar']; ?>">Hapus</a>
                        </div>
                     </div>
                  </td>
               </tr>
               <?php } ?>
            </tbody>
         </table>
      </div>
   </div>
</div>