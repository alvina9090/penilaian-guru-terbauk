<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <small><b>Laporan Keputusan Guru</b></small>
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
                <option value="ajaran">2017/2018
                  <option value="ajaran">2018/2019
                    <option value="ajaran">2019/2020
                </option>
			  </select>
			  </div>
				<div class="col-sm-12">
				  <center><button type="submit" class="btn btn-info" onclick="myFunction()"><i class="fa fa-check"></i> Pilih</button></center>
			     </div>
            </div>
          </div>
	
		<div id="datacetak" style="display: none">
		<div class="col-sm-12">
			</div>
			<div class="col-sm-12">
			<div class="box-body">
            <table  class="table table-striped table-bordered table-hover" >
              <thead>
                <tr>
                  <th width="20px" align="center"><center>No. </center></th>
                  <th width="70px"><center>Nip</center></th>
                  <th width="200px"><center>Nama</center></th>
                  <th width="70px"><center>Nilai </center></th>
                </tr>
              </thead>
              <tbody>
			  <tr>
                  <td align="center">1</td>
                 <td align ="center">196009061982032009</td>
				  <td align="center">Nurul Hikmah, S.Pd</td>
          <td align="center">0.9974</td>
        </tr>
        </tbody> 
				  
			</table>
			</div>
			</div>
			
		<div class="col-sm-12">
        <div class="box-footer">
          <center>
            <button type="submit" class="btn btn-danger" style="margin-left: 10px" onclick="window.open('data/Lap Keputusan.pdf')"><i class="fa fa-print"></i> Pdf</button>
            <button type="submit" class="btn btn-success" style="margin-left: 10px" onclick="window.open('data/Keputusan Guru.xlsx')"><i class="fa fa-print"></i> Excel</button>
            <button type="submit" class="btn btn-primary" style="margin-left: 10px" onclick="window.open('data/Lap Keputusan.docx')"><i class="fa fa-print"></i> Word</button>
          </center>
        </div>
		</div>

      </div>
      
      </div>  
    </div>
  </div>
  
  <script>
$("#fileRequest").click(function(download){
	window.location = 'COVER.docx';
})
</script>

 <script>
	function myFunction() {
		document.getElementById("datacetak").setAttribute("style", "display: block;");
	}
	</script>
	
  
</section>


