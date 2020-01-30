<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <small><b>Matriks Normalisasi Kriteria</b></small>
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
		<div class="col-sm-12">
	            <h3 class="box-title">Matriks Nilai Target</h3>
			</div>
			<div class="col-sm-12">
			<div class="box-body">
            <table  class="table table-striped table-bordered table-hover" >
              <thead>
                <tr>
                  <th width="20px" align="center"><center>No. </center></th>
                  <th width="70px"><center>Nip</center></th>
                  <th width="200px"><center>Nama</center></th>
                  <th width="70px"><center>Nilai SKP</center></th>
                  <th width="70px"><center>Kehadiran</center></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td align="center">1</td>
				  <td align="center">196009061982032006</td>
				  <td align="center">Anita Eka Wati, S.Pd</td>
				  <td align="center">84</td>
                  <td align="center">86</td>
                </tr>
				<tr>
                  <td align="center">2</td>
				  <td align="center">196604112007011007</td>
				  <td align="center">Drs.Santoso</td>
				  <td align="center">82</td>
                  <td align="center">95</td>
                </tr>
                <tr>
                  <td align="center">3</td>
				  <td align="center">197208211999031003</td>
				  <td align="center">Nursalim, S.Pd</td>
				  <td align="center">84</td>
                  <td align="center">95</td>
                </tr>
                <tr>
                  <td align="center">4</td>
				  <td align="center">197505102006042008</td>
				  <td align="center">Eny Retno Dewi Setyaningsih, S.Sn</td>
				  <td align="center">84</td>
                  <td align="center">95</td>
                </tr>
                <tr>
                  <td align="center">5</td>
				  <td align="center">198003012011012001</td>
				  <td align="center">Linda Sahara, S.Sos.I</td>
				  <td align="center">81</td>
                  <td align="center">95</td>
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
                  <th width="70px"><center>Nilai SKP</center></th>
                  <th width="70px"><center>Kehadiran</center></th>
                  <th width="70px"><center>Perilaku</center></th>
                </tr>
              </thead>
              <tbody> 
                <tr>
                  <td align="center">1</td>
				  <td align="center">196009061982032006</td>
				  <td align="center">Anita Eka Wati, S.Pd</td>
				  <td align="center">1</td>
                  <td align="center">0.9105</td>
                  <td align="center">0.9975</td>
                </tr>
				<tr>
                  <td align="center">2</td>
				  <td align="center">196604112007011007</td>
				  <td align="center">Drs.Santoso</td>
				  <td align="center">0.9785</td>
                  <td align="center">1</td>
                  <td align="center">0.9763</td>
                </tr>
                <tr>
                  <td align="center">3</td>
				  <td align="center">197208211999031003</td>
				  <td align="center">Nursalim, S.Pd</td>
				  <td align="center">0.9976</td>
                  <td align="center">1</td>
                  <td align="center">0.9967</td>
                </tr>
                <tr>
                  <td align="center">4</td>
				  <td align="center">197505102006042008</td>
				  <td align="center">Eny Retno Dewi Setyaningsih, S.Sn</td>
				  <td align="center">0.9928</td>
                  <td align="center">1</td>
                  <td align="center">0.9881</td>
                </tr>
                <tr>
                  <td align="center">5</td>
				  <td align="center">198003012011012001</td>
				  <td align="center">Linda Sahara, S.Sos.I</td>
				  <td align="center">0.9642</td>
                  <td align="center">1</td>
                  <td align="center">0.9620</td>
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
				  <td align="center">0.9912</td>
                </tr>
				<tr>
                  <td align="center">2</td>
				  <td align="center">196604112007011007</td>
				  <td align="center">Drs.Santoso</td>
				  <td align="center">0.9797</td>
                </tr>
                <tr>
                  <td align="center">3</td>
				  <td align="center">197208211999031003</td>
				  <td align="center">Nursalim, S.Pd</td>
				  <td align="center">0.9974</td>
                </tr>
                <tr>
                  <td align="center">4</td>
				  <td align="center">197505102006042008</td>
				  <td align="center">Eny Retno Dewi Setyaningsih, S.Sn</td>
				  <td align="center">0.9921</td>
                </tr>
                <tr>
                  <td align="center">5</td>
				  <td align="center">198003012011012001</td>
				  <td align="center">Linda Sahara, S.Sos.I</td>
				  <td align="center">0.9673</td>
                </tr>
              </tbody>
            </table>
			</div>
		</div>
	</div>
  </div>
</div>

<!--<?php if(isset($getAllKriteria)) { ?>
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">

          <div class="panel-body">
            <div class="box box-default">
              <div class="box-header with-border">
                <h3 class="box-title">Matriks Nilai Target</h3>

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
                      <?php foreach($getAllKriteria as $kriteria) { ?>
                      <th><center><?php echo $kriteria->nm_kriteria ?></center></th>
                      <?php } ?>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; ?>
                    <?php foreach($getPeriodeCalon as $periode) { ?>
                    <tr>
                      <td><center><?php echo $no++."." ?></center></td>
                      <td><?php echo $periode->nip ?></td>
                      <td><?php echo ucwords($periode->nm_calon) ?></td>
                      <?php $nilaiTarget = $this->MMatriksKriteria->nilaiTarget($periode->id_calon) ?>
                      <?php foreach($nilaiTarget as $target) { ?>
                      <td><center><?php echo $target->K1 ?></center></td>
                      <td><center><?php echo $target->K2 ?></center></td>
                      <td><center><?php echo $target->K3 ?></center></td>
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
                      <th width="100px"><center>ID Calon</center></th>
                      <th width="250px"><center>Nama</center></th>
                      <?php foreach($getAllKriteria as $kriteria) { ?>
                      <th><center><?php echo $kriteria->nm_kriteria ?></center></th>
                      <?php } ?>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; ?>
                    <?php foreach($getPeriodeCalon as $periode) { ?>
                    <tr>
                      <td><center><?php echo $no++."." ?></center></td>
                      <td><?php echo $periode->id_calon ?></td>
                      <td><?php echo ucwords($periode->nm_calon) ?></td>
                      <?php $matriksNormalisasi = $this->M_MatriksKriteria->matriksNormalisasi($tanggalPeriode,$periode->id_calon);?>
                        <?php foreach ($matriksNormalisasi as $data4) { ?>
                          <td align="center"><?php echo round($data4->K1/$max[0],4) ?></td>
                          <td align="center"><?php echo round($data4->K2/$max[1],4) ?></td>
                          <td align="center"><?php echo round($data4->K3/$max[2],4) ?></td>
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
                      <th width="100px"><center>ID Calon</center></th>
                      <th width="250px"><center>Nama</center></th>
                      <th width="250px"><center>Nilai SAW</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; ?>
                    <?php foreach($getPeriodeCalon as $periode) { ?>
                    <tr>
                      <td><center><?php echo $no++."." ?></center></td>
                      <td><?php echo $periode->id_calon ?></td>
                      <td><?php echo ucwords($periode->nm_calon) ?></td>
                    <?php } ?>
                    
                      <?php if($total != null) { ?>
                      <?php if($tanggalPeriode == $tanggal) { ?>	
                      <table style="width: 379px;margin-left: 604px;margin-top:-187px;position: absolute;" class="table table-striped table-bordered table-hover">
                        <tbody>
                          <?php foreach($total as $row => $nilai ) { ?>
                          <tr>
                            <td align="center"><?php echo $total[$row] ?></td>    
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
          <?php }  ?>

        </div>-->
       </div>
             </div>
    </div>
	<script>
	function myFunction() {
		document.getElementById("datatabel").setAttribute("style", "display: block;");
	}
	</script>
  </section>
