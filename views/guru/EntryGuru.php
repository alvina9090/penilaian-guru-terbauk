<div class="modal fade" id="ModalEntryGuru" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Tambah Data Guru</h4>
      </div>
      <form method="POST" action="<?php echo site_url('Guru/tambahguru')?>" enctype="multipart/form-data">
        <div class="modal-body">
          
          <div class="form-group"><label>Nip</label>
            <input required class="form-control required text-capitalize" data-placement="top" data-trigger="manual" type="text" name="nip" >
          </div>
    
          <div class="form-group"><label>Nama Guru</label>
            <input required class="form-control required text-capitalize" placeholder="Masukkan Nama" data-placement="top" data-trigger="manual" type="text" name="nm_guru">
          </div>

          <div class="form-group"><label>Alamat</label>
            <textarea class="form-control" name="alamat" placeholder="Alamat" required></textarea>
          </div>

          <div class="form-group">
            <label>Nomor Telepon</label>
            <input required class="form-control required" placeholder="Masukkan Nomor Telepon" data-placement="top" data-trigger="manual" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="no_tlp" id="no_tlp" maxlength="13">
          </div>

          <div class="form-group">
            <label>Email</label>
            <input required class="form-control required" placeholder="Masukkan Email" data-placement="top" data-trigger="manual" type="text" name="email" id="email">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Batal</button>
          <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>