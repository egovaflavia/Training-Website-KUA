<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Anda yakin keluar ?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">Klik tombol Logout jika ingin keluar</div>
         <div class="modal-footer">
            <form action="proses_logout.php" method="POST">
               <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
               <button type="submit" class="btn btn-danger">Logout</button>
            </form>
         </div>
      </div>
   </div>
</div>