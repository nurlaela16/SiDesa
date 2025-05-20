<!-- Modal -->
<div class="modal fade" id="confirmationApprove-{{ $item->id }}" tabindex="-1" aria-labelledby="confirmationApproveLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="/account-request/approval/{{ $item->id }}" method="post">
        @csrf
        @method('POST')
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="confirmationApproveLabel">Konfirmasi Setujui</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <input type="hidden" name="for" value="approve">
            <span>Apakah Anda Yakin Akan Menyetujui Akun ini?</span>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-success">Ya, Setujui!</button>
        </div>
        </div>
    </form>
  </div>
</div>