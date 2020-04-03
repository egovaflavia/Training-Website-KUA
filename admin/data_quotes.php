<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Daily Quotes</h6>
   </div>
   <div class="card-body">
      <div class="table-responsive">
         <div class="card-body">
            <div>
               <a href="?page=aksi/quotes_tambah" class="btn btn-success btn-icon-split">
                  <span class="icon text-white-50">
                     <i class="fas fa-plus"></i>
                  </span>
                  <span class="text">Tambah</span>
               </a>
               <br>
               <br>
               <?php
               $ambil = $koneksi->query("SELECT * FROM tbl_quotes");
               while ($pecah = $ambil->fetch_assoc()) {
                  ?>
               <br>
               <div class="border-bottom-primary  ">
                  <h5 class="m-0 font-weight-bold text-primary">Ayat : </h5>
                  <p><?php echo $pecah['ayat'];  ?></p>
                  <h5 class="m-0 font-weight-bold text-primary">Misi : </h5>
                  <p> <?php echo $pecah['isi'];  ?></p>
                  <a href="?page=aksi/quotes_edit&id=<?= $pecah['id_quotes']; ?>" class="btn btn-warning btn-icon-split">
                     <span class="icon text-white-50">
                        <i class="fas fa-wrench"></i>
                     </span>
                     <span class="text">Edit</span>
                  </a>
                  <a href="?page=aksi/quotes_hapus&id=<?= $pecah['id_quotes']; ?>" class="btn btn-danger btn-icon-split">
                     <span class="icon text-white-50">
                        <i class="fas fa-wrench"></i>
                     </span>
                     <span class="text">Hapus</span>
                  </a>
                  <br>
                  <br>
               </div>
               <?php } ?>
            </div>
         </div>
      </div>
   </div>