<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Admin</h6>
   </div>
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <a href="?page=aksi/admin_tambah" class="btn btn-success btn-icon-split">
               <span class="icon text-white-50">
                  <i class="fas fa-plus"></i>
               </span>
               <span class="text">Tambah</span>
            </a>
            <br>
            <br>
            <thead>
               <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Username</th>
                  <th width="50"></th>
               </tr>
            </thead>
            <tbody>
               <?php
               $no = 1;
               $ambil = $koneksi->query("SELECT * FROM tbl_admin ");
               while ($pecah = $ambil->fetch_assoc()) {
                  ?>
               <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $pecah['nama_admin']; ?></td>
                  <td><?php echo $pecah['username']; ?></td>
                  <td>
                     <div class="dropdown mb-4">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Aksi
                        </button>
                        <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                           <a class="dropdown-item" href="?page=aksi/admin_edit&id=<?= $pecah['id_admin']; ?>">Edit</a>
                           <a class="dropdown-item" href="?page=aksi/admin_hapus&id=<?= $pecah['id_admin']; ?>">Hapus</a>
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