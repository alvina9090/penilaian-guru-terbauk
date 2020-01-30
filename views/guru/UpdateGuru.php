<?php foreach($getAllguru as $data){ ?>
<div class="modal fade" id="ModalUpdateGuru<?php echo $data->nip ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Ubah Data Guru</h4>
      </div>
      <form method="POST" action="<?php echo site_url('Guru/Updateguru')?>" enctype="multipart/form-data">
        <div class="modal-body">
          
          <div class="form-group"><label>Nip</label>
            <input required class="form-control required text-capitalize" value="<?php echo $data->nip ?>" data-placement="top" data-trigger="manual" type="text" name="nip" readonly>
          </div>

          <div class="form-group"><label>Nama Guru</label>
            <input required class="form-control required text-capitalize" value="<?php echo $data->nm_guru ?>"placeholder="Input Nama" data-placement="top" data-trigger="manual" type="text" name="nm_guru">
          </div>

          <div class="form-group"><label>Alamat</label>
            <textarea class="form-control" name="alamat" required><?php echo $data->alamat ?></textarea>
          </div>

          <div class="form-group">
            <label>Nomor Telepon</label>
            <input required class="form-control required" value="<?php echo $data->no_tlp ?>"placeholder="Input Nomor Telepon" data-placement="top" data-trigger="manual" type="text" name="no_tlp" id="no_tlp" maxlength="13">
          </div>
		  
          <div class="form-group">
            <label>Email</label>
            <input required class="form-control required" value="<?php echo $data->email ?>"placeholder="Input Email" data-placement="top" data-trigger="manual" type="text" name="email" id="email">
          </div>

		  <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Batal</button>
          <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Ubah</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<?php } ?>