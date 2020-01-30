<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <small><b>Laporan Kinerja Guru</b></small>
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
                  <th width="70px"><center>Nilai SKP</center></th>
                  <th width="70px"><center>Kehadiran</center></th>
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
				  <td align="center">Nara, S.Pd</td>
				  <td align="center">84</td>
				  <td align="center">86</td>
				  <td align="center">83</td>
				  <td align="center">82</td>
				  <td align="center">91</td>
				  <td align="center">82</td>
				  <td align="center">81</td>
			  </tr>
			  <tr>
                  <td align="center">2</td>
				  <td align="center">196009061982032005</td>
				  <td align="center">Sulaiman, S.Pd</td>
				  <td align="center">84</td>
				  <td align="center">86</td>
				  <td align="center">80</td>
				  <td align="center">80</td>
				  <td align="center">91</td>
				  <td align="center">81</td>
				  <td align="center">79</td>
			  </tr>
			  <tr>
                  <td align="center">3</td>
				  <td align="center">196009061982032009</td>
				  <td align="center">Nurul Hikmah, S.Pd</td>
				  <td align="center">84</td>
				  <td align="center">95</td>
				  <td align="center">83</td>
				  <td align="center">82</td>
				  <td align="center">91</td>
				  <td align="center">83</td>
				  <td align="center">80</td>
			  </tr>
			  <tr>
                  <td align="center">4</td>
				  <td align="center">196009061982032007</td>
				  <td align="center">Rohani, S.Pd</td>
				  <td align="center">81</td>
				  <td align="center">95</td>
				  <td align="center">82</td>
				  <td align="center">82</td>
				  <td align="center">90</td>
				  <td align="center">81</td>
				  <td align="center">82</td>
			  </tr>
			  <tr>
                  <td align="center">5</td>
				  <td align="center">196009061982032008	</td>
				  <td align="center">Abdullah Yunus, S.Pd.I</td>
				  <td align="center">81</td>
				  <td align="center">95</td>
				  <td align="center">78</td>
				  <td align="center">79</td>
				  <td align="center">91</td>
				  <td align="center">79</td>
				  <td align="center">78</td>
			  </tr>
			  </tbody>
			</table>
			</div>
			</div>
			
		<div class="col-sm-12">
        <div class="box-footer">
          <center>
            <button type="submit" class="btn btn-danger" style="margin-left: 10px" onclick="window.open('data/Kinerja_guru.pdf')"><i class="fa fa-print"></i> Pdf</button>
            <button type="submit" class="btn btn-success" style="margin-left: 10px" onclick="window.open('data/Kinerja_guru.xlsx')"><i class="fa fa-print"></i> Excel</button>
            <button type="submit" class="btn btn-primary" style="margin-left: 10px" onclick="window.open('data/Kinerja_guru.docx')"><i class="fa fa-print"></i> Word</button>
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


