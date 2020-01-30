<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <small><b>Halaman Hasil Keputusan</b></small>
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
		  
        </div>      
      </div>
    </div>
  
  <div id="datatabel" style="display: none">
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
			<div class="panel-body">
            <div class="box box-default">
              <div class="box-header with-border">
                <h3 class="box-title">Hasil Keputusan</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"></button>
                  </div>
              </div>
                <div class="box-body">
                  <table style="table-layout:fixed" class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <th width="150px"><center>Nip </center></th>
                        <th width="430px"><center>Nama</center> </th>
                        <th><center>Nilai SAW</center></th>
                        <th><center>Rangking</center></th>
                        <th width="60px"><center>Pilih</center></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td align="center">196009061982032009</td>
                        <td width="200px">Nurul Hikmah, S.Pd</td>
                        <td><center>0.9974</center></td>
                        <td><center><b>Rangking 1</b></center></td>
                        <td>
                           <center><input type="checkbox" name="guru" value="guru" ></center>
                          </td>
                      </tr>
					  
					  <tr>
                        <td align="center">196009061982032007</td>
                        <td width="200px">Rohani, S.Pd</td>
                        <td><center>0.9921</center></td>
                        <td><center><b>Rangking 2</b></center></td>
                        <td>
                           <center><input type="checkbox" name="guru" value="guru" ></center>
                          </td>
                      </tr>
					  
					  <tr>
                        <td align="center">196009061982032006</td>
                        <td width="200px">Nara, S.Pd</td>
                        <td><center>0.9912</center></td>
                        <td><center><b>Rangking 3</b></center></td>
                        <td>
                           <center><input type="checkbox" name="guru" value="guru" ></center>
                          </td>
                      </tr>
					  
					  <tr>
                        <td align="center">196009061982032005</td>
                        <td width="200px">Sulaiman, S.Pd</td>
                        <td><center>0.9797</center></td>
                        <td><center><b>Rangking 4</b></center></td>
                        <td>
                           <center><input type="checkbox" name="guru" value="guru" ></center>
                          </td>
                      </tr>
					  
					  <tr>
                        <td align="center">196009061982032008</td>
                        <td width="200px">Abdullah Yunus, S.Pd.I</td>
                        <td><center>0.9673</center></td>
                        <td><center><b>Rangking 5</b></center></td>
                        <td>
							<center><input type="checkbox" name="guru" value="guru" ></center>
                          </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="footer">
                <button type="submit" class="btn btn-success pull-right" style="margin-left: 10px"><i class="fa fa-save"></i> Simpan Hasil</button>
              </div>
            </form>

		
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

                    
