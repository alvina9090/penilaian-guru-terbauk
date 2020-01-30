<?php foreach($getAllguru as $data){ ?>
<div class="modal fade" id="ModalHapusGuru<?php echo $data->nip ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-trash fa-fw"></i>Konfirmasi Hapus</h4>
      </div>
      <div class='modal-body'>Anda yakin ingin menghapus <i><?php echo $data->nip ?></i> dengan nama <b><?php echo $data->nm_guru ?></b> ?
      </div>
      <div class='modal-footer'>
        <form class="" action="<?php echo site_url('Guru/deleteguru') ?>" method="post">
          <input type="hidden" value="<?php echo $data->nip ?>" name="nip">
          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Batal</button>
          <button class="btn btn-danger" aria-label="Delete" type="submit" name="hapus"><i class="fa fa-trash fa-fw"></i> Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php } ?>