{{-- Modal Delete Untuk Manage User --}}
<div class="modal fade" id="deleteDefect-modal{{ $np_user }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-danger" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Hapus Defect</h4>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
           <div class="row">
             <div class="col-md-11 pr-1" style="margin-top: 10px; margin-bottom: 10px">
               <H4 id="deleteUser-nama">Apakah anda ingin menghapus data kelolosan {{ $nama_user }}<br><br> Di-Tanggal {{ $tgl_cek }} ?</H4>
             </div>
           </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
          <button class="btn btn-danger" type="submit">Hapus</button>
        </div>
      </div>
      <!-- /.modal-content-->
    </div>
    <!-- /.modal-dialog-->
  </div>
{{-- End Modal Delete Untuk Manage User --}}