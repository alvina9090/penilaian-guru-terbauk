<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <small><b>Laporan Rangking Guru</b></small>
    </h1>
  </section>

<section class="content">
  <div class="row">
    <div class="col-lg-12">
      <div class="box box-success color-palette-box">
        <div class="box-body">
          <div class="form-group">
            <form action="<?php echo site_url('CLapRangkingGuru/thnajar') ?>" method="GET">
              <label class="col-sm-2 control-label" style="margin-top: 5px"> Tahun Ajar : </label>
              <div class="col-sm-4">
                <input type="date" name="thnajar" class="form-control">
              </div>
              <div class="col-sm-2">
                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Pilih</button>
              </div>
              </form>
              <div class="col-sm-4">
                <?php if(isset($thnajar)){?>
                  <?php if($getLapRangkingGuru != null) { ?>
                  <a href="<?php echo site_url('CLapRangkingGuru/cetaklaporanrank/'.$thnajar) ?>" class="btn btn-danger" style="margin-left: 10px"><i class="fa fa-print"></i> Pdf</a>
                  <a href="<?php echo site_url('CLapRangkingGuru/Excel/'.$thnajar) ?>" class="btn btn-success" style="margin-left: 10px"><i class="fa fa-file-excel-o"></i> Excel</a>
                  <a href="<?php echo site_url('CLapRangkingGuru/Word/'.$thnajar) ?>" class="btn btn-primary" style="margin-left: 10px"><i class="fa fa-file-word-o"></i> Word</a>
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

<?php if(isset($getLapRangkingGuru)) { ?>
  <?php if($getLapRangkingGuru == null) { ?>
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
          <table style="table-layout:fixed" class="table table-striped table-bordered table-hover" >
              <thead>
                <tr>
                  <th width="30px" align="center">No. </th>
                  <th width="60px"><center>Nip</center></th>
                  <th width="150px"><center>Nama</center></th>
                  <th width="50px"><center>Nilai Akhir</center></th>
                  <th width="150px"><center>keterangan</center></th>    
                </tr>
              </thead>
              <tbody>
                <?php $no=1; ?>
                <?php foreach($getLapRangkingGuru as $data){ ?>
                <tr>
                  <td class="text-center"><?php echo $no++."." ?></td>
                  <td><center><?php echo $data->nip; ?></center></td>
                  <td><?php echo ucwords($data->nm_guru); ?></td>
                  <td><center><?php echo $data->hasil_akhir; ?></center></td>
                  <?php if($data->keterangan != null) { ?>
                  <td><center><?php echo $data->keterangan; ?></center></td>
                  <?php } else { ?>
                  <td><center><?php echo "Tidak Lolos" ?></center></td>
                  <?php } ?>
                </tr>
                <?php }  ?>
              </tbody>
            </table>
        </div>
        <div class="box-footer">
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
<?php } ?>
</section>


