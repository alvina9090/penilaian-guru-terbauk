<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <small><b>Halaman Nilai Target Subkriteria</b></small>
    </h1>
  </section>
 
<section class="content">
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
        </div>      
      </div>
    </div>
      
	<div id="datatabel" style="display: none">	
    <div class="row">
      <div class="col-lg-12">
        <div class="box box-default color-palette-box">
          <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-calculator"></i> Nilai Target</h3>
          </div>
          <div class="box-body">
            <table style="table-layout:fixed" class="table table-striped table-bordered table-hover" id="datatableKaryawan">
              <thead>
                <tr>
                  <th width="20px" align="center"><center>No. </center></th>
                  <th width="70px"><center>Nip</center></th>
                  <th width="200px"><center>Nama</center></th>
                  <!--<th width="30px"><center>Nilai</center></th>-->
                  <th width="59px" align="center;"> <center>Tambah Nilai</center> </th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; ?>
                <?php if(isset($getAllguru)) { ?>
                <?php foreach($getAllguru as $data){ ?>
                <tr>
                  <td align="center"><?php echo $no++; ?>.</td>
                  <td><?php echo $data->nip; ?></td>
				  <td><?php echo $data->nm_guru; ?> </td>
                  <!--<td align="center">
                    <a href="#ModalLihatNilai<?php echo $data->nip ?>" class="btn btn-info btn-circle" data-toggle="modal"><span class="glyphicon glyphicon-eye-open"></span></a>
                  </td>-->
                  <td align="center">
                    <a href="#ModalTambahNilaTargetSubkriteria<?php echo $data->nip ?>" class="btn btn-success btn-circle" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span></a>
                  </td>
                </tr>
                <?php } } ?>
              </tbody>
            </table>
          </div>
        </div>  
      </div>
    </div>
	</div>
	<script>
	function myFunction() {
		document.getElementById("datatabel").setAttribute("style", "display: block;");
	}
	</script>

  </section>

