<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Visi Dan Misi</h6>
   </div>
   <?php
   $ambil = $koneksi->query("SELECT * FROM tbl_quotes");
   $pecah = $ambil->fetch_assoc();
   ?>
   <div class="card-body">
      <div class="table-responsive">
         <div class="card-body">
            <a href="#" class="btn btn-primary btn-icon-split">
               <span class="icon text-white-50">
                  <i class="fas fa-plus"></i>
               </span>
               <span class="text">Tambah Quotes</span>
            </a>
            <br>
            <br>
            <h5 class="m-0 font-weight-bold text-primary">Ayat : </h5>
            <p><?php echo $pecah['ayat'];  ?></p>
            <h5 class="m-0 font-weight-bold text-primary">Isi : </h5>
            <p> <?php echo $pecah['isi'];  ?></p>
            <br>
            <a href="#" class="btn btn-warning btn-icon-split">
               <span class="icon text-white-50">
                  <i class="fas fa-wrench"></i>
               </span>
               <span class="text">Edit</span>
            </a>
            <a href="#" class="btn btn-danger btn-icon-split">
               <span class="icon text-white-50">
                  <i class="fas fa-trash"></i>
               </span>
               <span class="text">Hapus</span>
            </a>
         </div>
      </div>
   </div>