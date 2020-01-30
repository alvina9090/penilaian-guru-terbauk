<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <small><b>Matriks Normalisasi Subkriteria</b></small>
    </h1>
  </section>

<section class="content">

<?php if($this->session->flashdata('pesan') == TRUE ) { ?>
  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-success fade in" id="alert">
        <p><center><b><?php echo $this->session->flashdata('pesan') ?></b></center></p>
      </div>
    </div>
  </div>
<?php } ?>

<?php if($this->session->flashdata('pesanGagal') == TRUE ) { ?>
  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-danger" id="alert">
        <p><center><b><?php echo $this->session->flashdata('pesanGagal') ?></b></center></p>
      </div>
    </div>
  </div>
<?php } ?>

  <div class="panel panel-default">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label class="col-sm-2 control-label" style="margin-top: 5px">Tahun Ajar : </label>
                <div class="col-sm-3">
                  <select class="form-control" name="thnajar">
                <option value="ajaran">2016/2017</option>
			  </select>
			  </div>
				<div class="col-sm-12">
				  <center><button type="submit" class="btn btn-info" onclick="myFunction()"><i class="fa fa-check"></i> Pilih</button></center>
			     </div>
            </div>
          </div>
		  
		  <div id="datatabel" style="display: none">
			<div class="box-body">
            <table  class="table table-striped table-bordered table-hover" >
              <thead>
<div class="col-sm-12">
	            <h3 class="box-title">Matriks Nilai Target Subkriteria</h3>
			</div>
			<div class="col-sm-12">
			<div class="box-body">
            <table  class="table table-striped table-bordered table-hover" >
              <thead>
                <tr>
                  <th width="20px" align="center"><center>No. </center></th>
                  <th width="70px"><center>Nip</center></th>
                  <th width="200px"><center>Nama</center></th>
                  <th width="70px"><center>Orientasi</center></th>
                  <th width="70px"><center>Integritas</center></th>
                  <th width="70px"><center>Komitmen</center></th>
                  <th width="70px"><center>Disiplin</center></th>
                  <th width="70px"><center>Kerja Sama</center></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td align="center">1</td>
				  <td align="center">196009061982032006</td>
				  <td align="center">Anita Eka Wati, S.Pd</td>
				  <td align="center">83</td>
                  <td align="center">82</td>
                  <td align="center">91</td>
                  <td align="center">82</td>
                  <td align="center">81</td>
                </tr>
				<tr>
                  <td align="center">2</td>
				  <td align="center">196604112007011007</td>
				  <td align="center">Drs.Santoso</td>
				  <td align="center">80</td>
                  <td align="center">80</td>
                  <td align="center">91</td>
                  <td align="center">81</td>
                  <td align="center">79</td>
                </tr>
                <tr>
                  <td align="center">3</td>
				  <td align="center">197208211999031003</td>
				  <td align="center">Nursalim, S.Pd</td>
				  <td align="center">83</td>
                  <td align="center">82</td>
                  <td align="center">91</td>
                  <td align="center">83</td>
                  <td align="center">80</td>
                </tr>
                <tr>
                  <td align="center">4</td>
				  <td align="center">197505102006042008</td>
				  <td align="center">Eny Retno Dewi Setyaningsih, S.Sn</td>
				  <td align="center">82</td>
                  <td align="center">82</td>
                  <td align="center">90</td>
                  <td align="center">81</td>
                  <td align="center">82</td>
                </tr>
                <tr>
                  <td align="center">5</td>
				  <td align="center">198003012011012001</td>
				  <td align="center">Linda Sahara, S.Sos.I</td>
				  <td align="center">78</td>
                  <td align="center">79</td>
                  <td align="center">91</td>
                  <td align="center">79</td>
                  <td align="center">78</td>
                </tr>
              </tbody>
            </table>
          </div>
			<div class="col-sm-12">
	            <h3 class="box-title">Matriks Normalisasi</h3>
			</div>
			<div class="col-sm-12">
			<div class="box-body">
            <table  class="table table-striped table-bordered table-hover" >
              <thead>
                <tr>
                  <th width="20px" align="center"><center>No. </center></th>
                  <th width="70px"><center>Nip</center></th>
                  <th width="200px"><center>Nama</center></th>
                  <th width="70px"><center>Orientasi</center></th>
                  <th width="70px"><center>Integritas</center></th>
                  <th width="70px"><center>Komitmen</center></th>
                  <th width="70px"><center>Disiplin</center></th>
                  <th width="70px"><center>Kerja Sama</center></th>
                </tr>
              </thead>
              <tbody> 
                <tr>
                  <td align="center">1</td>
				  <td align="center">196009061982032006</td>
				  <td align="center">Anita Eka Wati, S.Pd</td>
				  <td align="center">1</td>
                  <td align="center">1</td>
                  <td align="center">1</td>
                  <td align="center">0.9879</td>
                  <td align="center">0.9634</td>
                </tr>
				<tr>
                  <td align="center">2</td>
				  <td align="center">196604112007011007</td>
				  <td align="center">Drs.Santoso</td>
				  <td align="center">0.9638</td>
                  <td align="center">0.9638</td>
                  <td align="center">1</td>
                  <td align="center">0.9759</td>
                  <td align="center">0.9634</td>
                </tr>
                <tr>
                  <td align="center">3</td>
				  <td align="center">197208211999031003</td>
				  <td align="center">Nursalim, S.Pd</td>
				  <td align="center">1</td>
                  <td align="center">0.9879</td>
                  <td align="center">1</td>
                  <td align="center">1</td>
                  <td align="center">0.9756</td>
                </tr>
                <tr>
                  <td align="center">4</td>
				  <td align="center">197505102006042008</td>
				  <td align="center">Eny Retno Dewi Setyaningsih, S.Sn</td>
				  <td align="center">0.9879</td>
                  <td align="center">0.9879</td>
                  <td align="center">0.9890</td>
                  <td align="center">0.9759</td>
                  <td align="center">1</td>
                </tr>
                <tr>
                  <td align="center">5</td>
				  <td align="center">198003012011012001</td>
				  <td align="center">Linda Sahara, S.Sos.I</td>
				  <td align="center">0.9397</td>
                  <td align="center">0.9518</td>
                  <td align="center">1</td>
                  <td align="center">0.9518</td>
                  <td align="center">0.9518</td>
                </tr>
              </tbody>
            </table>
          </div>
		  
		  <div class="col-sm-12">
	            <h3 class="box-title">Perangkingan</h3>
			</div>
			<div class="col-sm-8">
			<div class="box-body">
            <table  class="table table-striped table-bordered table-hover" >
              <thead>
                <tr>
                  <th width="20px" align="center"><center>No. </center></th>
                  <th width="70px"><center>Nip</center></th>
                  <th width="200px"><center>Nama</center></th>
                  <th width="300px"><center>Nilai SAW</center></th>
                </tr>
              </thead>
              <tbody> 
                <tr>
                  <td align="center">1</td>
				  <td align="center">196009061982032006</td>
				  <td align="center">Anita Eka Wati, S.Pd</td>
				  <td align="center">0.9975</td>
                </tr>
				<tr>
                  <td align="center">2</td>
				  <td align="center">196604112007011007</td>
				  <td align="center">Drs.Santoso</td>
				  <td align="center">0.9763</td>
                </tr>
                <tr>
                  <td align="center">3</td>
				  <td align="center">197208211999031003</td>
				  <td align="center">Nursalim, S.Pd</td>
				  <td align="center">0.9967</td>
                </tr>
                <tr>
                  <td align="center">4</td>
				  <td align="center">197505102006042008</td>
				  <td align="center">Eny Retno Dewi Setyaningsih, S.Sn</td>
				  <td align="center">0.9981</td>
                </tr>
                <tr>
                  <td align="center">5</td>
				  <td align="center">198003012011012001</td>
				  <td align="center">Linda Sahara, S.Sos.I</td>
				  <td align="center">0.9620</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>      
      </div>
    </div>

	
	
	
<!--<?php if(isset($getPeriodeCalon)) { ?>
<?php if($matriksISI != null) { ?>
  <div class="row">
  <div class="col-lg-12">
    <?php foreach($getAllKriteria as $kriteria) { ?>
      <div class="panel panel-default">

      <div class="panel-body">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Matriks Nilai Target <i><?php echo $kriteria->nm_kriteria ?></i></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
          </div>

          <div class="box-body">
            <table style="table-layout:fixed" class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th width="50px"><center>No.</center></th>
                  <th width="100px"><center>Nip</center></th>
                  <th width="250px"><center>Nama</center></th>
                  <?php $getSubkriteria = $this->MSubkriteria->getSubkriteria($kriteria->kd_kriteria); ?>
                  <?php foreach($getSubkriteria as $row){ ?>
                  <th><center><?php echo $row->nm_subkriteria ?></center></th>
                  <?php } ?>
                </tr>
              </thead>
              <tbody>
                <?php $matriksTarget = $this->MMatriksSubkriteria->matriksTarget($kriteria->kd_kriteria);?>
                <?php $no=1; ?>
                <?php foreach ($getPeriodeCalon as $data) { ?>
                <tr>
                  <td align="center"><?php echo $no++."."; ?></td>
                  <td><?php echo $data->nip; ?></td>
                  <td><?php echo ucwords($data->nm_calon) ?></td>
                    <?php $matriksTargetNilai = $this->MMatriksSubkriteria->matriksTargetNilai($data->nip,$kriteria->kd_kriteria);?>
                    <?php foreach ($matriksTargetNilai as $data2) { ?>
                      <td align="center"><?php echo $data2->nilai_guru2 ?></td>
                    <?php } ?>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>

        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Matriks Normalisasi</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
          </div>

          <div class="box-body">
            <table style="table-layout:fixed" class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th width="50px"><center>No.</center></th>
                  <th width="100px"><center>Nip</center></th>
                  <th width="250px"><center>Nama</center> </th>
                  <?php foreach($getSubkriteria as $row){ ?>
                  <th><center><?php echo $row->nm_subkriteria ?></center></th>
                  <?php } ?>
                </tr>
              </thead>

              <tbody>
                <?php $no=1; ?>
                <?php foreach ($getPeriodeCalon as $data) { ?>
                <tr>
                  <td align="center"><?php echo $no++."."; ?></td>
                  <td><?php echo $data->nip ?></td>
                  <td><?php echo ucwords($data->nm_calon) ?></td>
                    <?php $matriksNormalisasi = $this->M_MatriksSubkriteria->matriksNormalisasi($tanggalPeriode,$data->id_calon);?>
                    <?php if($kriteria->kd_kriteria == 'KRI0') { ?>
                      <?php foreach ($matriksNormalisasi as $data4) { ?>
                        <td align="center"><?php echo round($data4->SKR01/$max[0],4) ?></td>
                        <td align="center"><?php echo round($data4->SKR02/$max[1],4) ?></td>
                        <td align="center"><?php echo round($data4->SKR03/$max[2],4) ?></td>
                      <?php } ?>
                    <?php } ?>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>

        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Perangkingan</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
          </div>

          <div class="box-body">
            <table style="table-layout:fixed" class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th width="50px"><center>No.</center></th>
                  <th width="100px"><center>Nip</center></th>
                  <th width="250px"><center>Nama</center></th>
                  <th width="250px"><center>Nilai SAW</center></th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; ?>
                <?php foreach ($getPeriodeCalon as $data) { ?>
                <tr>
                  <td align="center"><?php echo $no++."."; ?></td>
                  <td><?php echo $data->nip ?></td>
                  <td><?php echo ucwords($data->nm_guru) ?></td>
                <?php } ?>
                
                <!-- Tabel Tambahan -->
                <!--<?php if($tanggalPeriode == $tanggal) { ?>
                  <?php if($kriteria->kd_kriteria == 'KRI') { ?>
                  <table style="width: 379px;margin-left: 604px;margin-top:-187px" class="table table-striped table-bordered table-hover">
                    <tbody>
                      <?php foreach($total1 as $row => $nilai ) { ?>
                      <tr>
                        <td align="center"><?php echo $total1[$row] ?></td>    
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                  <?php } ?>
                <?php } ?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
     </div>
    <?php } ?>
<?php } else { ?>
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <h4><center>Data Tidak Ditemukan</center></h4>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
  
    
<?php } ?>

<?php if(isset($getPeriodeCalon)) { ?>
<?php if($matriksISI != null) { ?>
<?php $hilangkanTombol = $this->M_MatriksSubkriteria->hilangkanTombol($tanggalPeriode); ?>
<form action="<?php echo site_url('C_MatriksSubkriteria/simpanNilai/'.$tanggalPeriode) ?>" method="POST">
<?php $no=1; ?>
<?php foreach ($getPeriodeCalon as $periode) { ?>
  <input type="hidden" value="<?php echo $periode->id_calon ?>" name="id_calon<?php echo $no++; ?>">
  <?php } ?>
<div class="footer" style="margin-bottom: 10px;">
  <?php if($hilangkanTombol == null) { ?>
  <button type="submit" class="btn btn-success pull-right" style="margin-left: 10px;margin-bottom: 50px;"><i class="fa fa-save"></i> Simpan Hasil</button>
  <?php } ?>
</div>

</form>
<?php } ?>
</div>
</div>
<?php } ?>-->

<script>
	function myFunction() {
		document.getElementById("datatabel").setAttribute("style", "display: block;");
	}
	</script>

</section>