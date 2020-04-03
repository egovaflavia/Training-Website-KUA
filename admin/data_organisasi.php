<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Struktur Organisasi</h6>
   </div>
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <a href="?page=aksi/organisasi_tambah" class="btn btn-success btn-icon-split">
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
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Alamat</th>
                  <th>Keterangan</th>
                  <th>Biografi</th>
                  <th>Foto</th>
                  <th></th </tr> </thead> <tbody>
                  <?php
                  $no = 1;
                  $ambil = $koneksi->query("SELECT * FROM tbl_org ");
                  while ($pecah = $ambil->fetch_assoc()) {
                     $bio = substr($pecah['bio'], 0, 20);
                     $ket = substr($pecah['ket'], 0, 20);
                     ?>
               <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $pecah['nama']; ?></td>
                  <td><?php echo $pecah['jabatan']; ?></td>
                  <td><?php echo $pecah['alamat']; ?></td>
                  <td><?php echo $ket; ?>...</td>
                  <td><?php echo $bio; ?>...</td>
                  <td><img width="120" src="foto_org/<?php echo $pecah['foto_org']; ?>" alt=""></td>
                  <td>
                     <div class="dropdown mb-4">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Aksi
                        </button>
                        <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                           <a class="dropdown-item" href="?page=aksi/organisasi_edit&id=<?= $pecah['id_org'] ?>">Edit</a>
                           <a class="dropdown-item" href="?page=aksi/organisasi_hapus&id=<?= $pecah['id_org'] ?>">Hapus</a>
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