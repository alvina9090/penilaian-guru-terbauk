<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <small><b>Halaman Hasil Keputusan</b></small>
    </h1>
  </section>
 
<section class="content">
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-12">
          <div>
            <h1 align="center">Pilih Periode</h1>
          </div>
        </div>
      </div>
      <div class="row">
        <form role="form" method="post" action="<?php echo base_url('CHasilKeputusan/bisake'); ?>" enctype="multipart/form-data">
          <div class="col-md-6">
            <div class="form-group"><label>PERIODE</label><br>
              <select required class="form-control required" name="periode">
              <option>-periode-</option>
              <?php foreach($getALL as $data){?>
                <option value="<?php echo $data->thn_ajar;?>"><?php echo $data->thn_ajar;?></option>
              <?php } ?>
              </select>
            </div>
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary" name="button" value="simpan">PILIH</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>