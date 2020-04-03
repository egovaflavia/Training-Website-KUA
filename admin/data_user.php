<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
   </div>
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
               <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Nohp</th>
                  <th width="50"></th>
               </tr>
            </thead>
            <tbody>
               <?php
               $no = 1;
               $ambil = $koneksi->query("SELECT * FROM tbl_user ");
               while ($pecah = $ambil->fetch_assoc()) {
                  $alamat = substr($pecah['alamat'], 0, 10);
                  ?>
               <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $pecah['uname']; ?></td>
                  <td><?php echo $pecah['nama']; ?></td>
                  <td><?php echo $pecah['alamat']; ?></td>
                  <td><?php echo $pecah['nohp']; ?></td>
                  <td>
                     <div class="dropdown mb-4">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Aksi
                        </button>
                        <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                           <a class="dropdown-item" href="?page=aksi/user_edit&id=<?= $pecah['id_user']; ?>">Edit</a>
                           <a class="dropdown-item" href="?page=aksi/user_hapus&id=<?= $pecah['id_user']; ?>">Hapus</a>
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