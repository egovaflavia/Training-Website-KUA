<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Visi Dan Misi</h6>
   </div>
   <?php
   $ambil = $koneksi->query("SELECT * FROM tbl_visimisi");
   $pecah = $ambil->fetch_assoc();
   ?>
   <div class="card-body">
      <div class="table-responsive">
         <div class="card-body">
            <h5 class="m-0 font-weight-bold text-primary">Visi : </h5>
            <p><?php echo $pecah['visi'];  ?></p>
            <h5 class="m-0 font-weight-bold text-primary">Misi : </h5>
            <p> <?php echo $pecah['misi'];  ?></p>
            <a href="?page=aksi/visimisi_edit&id=<?= $pecah['id_visimisi']; ?>" class="btn btn-warning btn-icon-split">
               <span class="icon text-white-50">
                  <i class="fas fa-wrench"></i>
               </span>
               <span class="text">Edit</span>
            </a>
         </div>
      </div>
   </div>