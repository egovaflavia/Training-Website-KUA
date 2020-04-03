<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Informasi Publik</h6>
   </div>
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <a href="?page=aksi/info_tambah" class="btn btn-success btn-icon-split">
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
                  <th>Judul</th>
                  <th>Tanggal</th>
                  <th>Isi</th>
                  <th>Foto</th>
                  <th width="50"></th>
               </tr>
            </thead>
            <tbody>
               <?php
               $no = 1;
               $ambil = $koneksi->query("SELECT * FROM tbl_info LEFT JOIN tbl_admin ON tbl_info.id_admin=tbl_admin.id_admin ");
               while ($pecah = $ambil->fetch_assoc()) {
                  $isi = substr($pecah['isi'], 0, 20);
                  $judul = substr($pecah['judul'], 0, 20);
                  ?>
               <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $judul; ?></td>
                  <td><?php echo $pecah['tgl_info']; ?></td>
                  <td><?php echo $isi; ?>...</td>
                  <td><img width="120" src="foto_info/<?php echo $pecah['foto_info']; ?>" alt=""></td>
                  <td>
                     <div class="dropdown mb-4">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Aksi
                        </button>
                        <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                           <a class="dropdown-item" href="?page=aksi/info_edit&id=<?= $pecah['id_info']; ?>">Edit</a>
                           <a class="dropdown-item" href="?page=aksi/info_hapus&id=<?= $pecah['id_info']; ?>">Hapus</a>
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