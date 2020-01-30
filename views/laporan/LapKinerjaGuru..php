<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <small><b>Laporan Kinerja Guru</b></small>
    </h1>
  </section>

<section class="content">
   <div class="row">
    <div class="col-lg-12">
      <div class="box box-success color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-file-text fa-fw"></i> Laporan Kinerja Guru</h3>
        </div>

        <div class="box-body">
          <div class="form-group">
            <form action="<?php echo site_url('CLapKinerjaGuru/thnajar') ?>" method="GET">
              <label class="col-sm-2 control-label" style="margin-top: 5px">Tanggal thnajar : </label>
              <div class="col-sm-4">
                <input type="date" name="thnajar" class="form-control">
              </div>
              <div class="col-sm-2">
                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Pilih</button>
              </div>
              </form>
          </div>
        </div>
        <div class="box-footer">
        </div>
      </div>
    </div>
  </div>


<?php if(isset($getLapKinerjaGuru)) { ?>
  <?php if($getLapKinerjaGuru == null) { ?>
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
                  <th width="40px"><center>Nip</center></th>
                  <th width="100px"><center>Nama</center></th>
                  <th width="30px"><center>Nilai SKP</center></th>
                  <th width="30px"><center>Kehadiran</center></th>
                  <th width="35px"><center>Orientasi</center></th>
                  <th width="35px"><center>Integritas</center></th>
                  <th width="30px"><center>Komitmen</center></th>
                  <th width="35px"><center>Disiplin</center></th>
                  <th width="35px"><center>Kerja Sama</center></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($getLapKinerjaGuru as $data){ ?>
                <tr>
                  <td class="text-center"><?php echo $data->nip; ?></td>
                  <td><?php echo ucwords($data->nm_guru); ?></td>
                  <td class="text-center"><?php echo $data->nilai_skp; ?></td>
                  <td class="text-center"><?php echo $data->kehadiran; ?></td>
                  <td class="text-center"><?php echo $data->orientasi; ?></td>
                  <td class="text-center"><?php echo $data->integritas; ?></td>
                  <td class="text-center"><?php echo $data->komitmen; ?></td>
                  <td class="text-center"><?php echo $data->disiplin; ?></td>
                  <td class="text-center"><?php echo $data->kerja_sama; ?></td>
                  <td class="text-center">
                    <a href="<?php echo site_url('CLapKinerjaGuru/cetaklaporanrank/'.$thnajar.'/'.$data->nip) ?>" class="btn btn-danger"><i class="fa fa-print"></i></a>
                  </td>
                  <td class="text-center">
                    <a href="<?php echo site_url('CLapKinerjaGuru/Excel/'.$thnajar.'/'.$data->nip) ?>" class="btn btn-success"><i class="fa fa-file-excel-o"></i></a>
                  </td>
                  <td class="text-center">
                    <a href="<?php echo site_url('CLapKinerjaGuru/Word/'.$thnajar.'/'.$data->nip) ?>" class="btn btn-primary"><i class="fa fa-file-word-o"></i></a>
                  </td>
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



