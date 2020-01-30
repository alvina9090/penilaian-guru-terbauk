<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <small><b>Laporan Keputusan</b></small>
    </h1>
  </section>

<section class="content">
  <div class="row">
    <div class="col-lg-12">
      <div class="box box-success color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-file-text fa-fw"></i> Laporan Perangkingan Nilai</h3>
        </div>

        <div class="box-body">
          <div class="form-group">
            <form action="<?php echo site_url('CLapKeputusan/thnajar') ?>" method="GET">
              <label class="col-sm-2 control-label" style="margin-top: 5px">thnajar : </label>
              <div class="col-sm-4">
                <input type="date" name="thnajar" class="form-control">
              </div>
              <div class="col-sm-2">
                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Pilih</button>
              </div>
              </form>
              <div class="col-sm-4">
                <?php if(isset($thnajar)){?>
                  <?php if($getLapKeputusan != null) { ?>
                  <a href="<?php echo site_url('CLapKeputusan/cetaklaporan'.$thnajar) ?>" class="btn btn-danger" style="margin-left: 10px"><i class="fa fa-print"></i> Pdf</a>
                  <a href="<?php echo site_url('CLapKeputusan/Excel/'.$thnajar) ?>" class="btn btn-success" style="margin-left: 10px"><i class="fa fa-file-excel-o"></i> Excel</a>
                   <a href="<?php echo site_url('CLapKeputusan/Word/'.$thnajar) ?>" class="btn btn-primary" style="margin-left: 10px"><i class="fa fa-file-word-o"></i> Word</a>
                  <?php } ?>
                <?php } ?>
              </div>
          </div>
        </div>
        <div class="box-footer">
        </div>
      </div>
    </div>
  </div>


<?php if(isset($getLapKeputusan)){?>
  <?php if($getLapKeputusan == null) { ?>
     <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <h4><center>Data Tidak Ditemukan</center></h4>
          </div>
        </div>
      </div>
    </div>
  <?php } else { ?>
  <div class="row">
    <div class="col-lg-12">
      <div class="box box-success color-palette-box">
        
        <div class="box-body">
        <br>
        <table style="table-layout:fixed" class="table table-striped table-bordered table-hover" >
              <thead>
                <tr>
                  <th width="25px"><center>NIP</center></th>
                  <th width="90px"><center>Nama</center></th>
                  <th width="30px"><center>Nilai</center></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($getLapKeputusan as $data){ ?>
                <tr>
                  <td class="text-center"><?php echo $data->nip; ?></td>
                  <td><?php echo ucwords($data->nm_guru); ?></td>
                  <td class="text-center"><?php echo $data->hasil; ?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          <div class="box-footer">
          </div>
        </div>
      </div>
    </div>  
  </div>
  <?php } ?>
<?php } ?>
</section>



