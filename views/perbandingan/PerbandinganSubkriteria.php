<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <small><b>Halaman Data Matriks Perbandingan Subkriteria</b></small>
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

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="row">
          <div class="col-md-12">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">Masukkan Nilai Banding</a></li>
                <li><a href="#tab_2" data-toggle="tab">Matriks Banding</a></li>
                <li><a href="#tab_3" data-toggle="tab">Eigenvector</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab_1">

                  <div>
                    <div>
                      <h4 class="box-title"><b>Nilai Perbandingan Subkriteria</b></h4>
                    </div>

                    <form method="POST" action="<?php echo base_url('CPerbandinganSubkriteria/perbandinganMatriks') ?>">
                      <div class="box-body">
                        <table>
                          <tr>
                            <td><b>Orientasi Pelayanan</b></td>
                            <td align="center" width="50"><input type="radio" name="skr01" value="9" required></td>
                            <td align="center" width="50"><input type="radio" name="skr01" value="8" required></td>
                            <td align="center" width="50"><input type="radio" name="skr01" value="7" required></td>
                            <td align="center" width="50"><input type="radio" name="skr01" value="6" required></td>
                            <td align="center" width="50"><input type="radio" name="skr01" value="5" required></td>
                            <td align="center" width="50"><input type="radio" name="skr01" value="4" required></td>
                            <td align="center" width="50"><input type="radio" name="skr01" value="3" required></td>
                            <td align="center" width="50"><input type="radio" name="skr01" value="2" required></td>
                            <td align="center" width="50"><input type="radio" name="skr01" value="1" required></td>
                            <td align="center" width="50"><input type="radio" name="skr01" value="2" required></td>
                            <td align="center" width="50"><input type="radio" name="skr01" value="3" required></td>
                            <td align="center" width="50"><input type="radio" name="skr01" value="4" required></td>
                            <td align="center" width="50"><input type="radio" name="skr01" value="5" required></td>
                            <td align="center" width="50"><input type="radio" name="skr01" value="6" required></td>
                            <td align="center" width="50"><input type="radio" name="skr01" value="7" required></td>
                            <td align="center" width="50"><input type="radio" name="skr01" value="8" required></td>
                            <td align="center" width="50"><input type="radio" name="skr01" value="9" required></td>
                            <td><b>Integritas</b></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td align="center" width="50">9</td>
                            <td align="center" width="50">8</td>
                            <td align="center" width="50">7</td>
                            <td align="center" width="50">6</td>
                            <td align="center" width="50">5</td>
                            <td align="center" width="50">4</td>
                            <td align="center" width="50">3</td>
                            <td align="center" width="50">2</td>
                            <td align="center" width="50">1</td>
                            <td align="center" width="50">2</td>
                            <td align="center" width="50">3</td>
                            <td align="center" width="50">4</td>
                            <td align="center" width="50">5</td>
                            <td align="center" width="50">6</td>
                            <td align="center" width="50">7</td>
                            <td align="center" width="50">8</td>
                            <td align="center" width="50">9</td>
                            <td></td>
                          </tr>

                          <tr>
                            <td width="110"><b>Orientasi Pelayanan</b></td>
                            <td align="center" width="50"><input type="radio" name="skr02" value="9" required></td>
                            <td align="center" width="50"><input type="radio" name="skr02" value="8" required></td>
                            <td align="center" width="50"><input type="radio" name="skr02" value="7" required</td>
                            <td align="center" width="50"><input type="radio" name="skr02" value="6" required></td>
                            <td align="center" width="50"><input type="radio" name="skr02" value="5" required></td>
                            <td align="center" width="50"><input type="radio" name="skr02" value="4" required></td>
                            <td align="center" width="50"><input type="radio" name="skr02" value="3" required></td>
                            <td align="center" width="50"><input type="radio" name="skr02" value="2" required></td>
                            <td align="center" width="50"><input type="radio" name="skr02" value="1" required></td>
                            <td align="center" width="50"><input type="radio" name="skr02" value="2" required></td>
                            <td align="center" width="50"><input type="radio" name="skr02" value="3" required></td>
                            <td align="center" width="50"><input type="radio" name="skr02" value="4" required></td>
                            <td align="center" width="50"><input type="radio" name="skr02" value="5" required></td>
                            <td align="center" width="50"><input type="radio" name="skr02" value="6" required></td>
                            <td align="center" width="50"><input type="radio" name="skr02" value="7" required></td>
                            <td align="center" width="50"><input type="radio" name="skr02" value="8" required></td>
                            <td align="center" width="50"><input type="radio" name="skr02" value="9" required></td>
                            <td><b>Komitmen</b></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td align="center" width="50">9</td>
                            <td align="center" width="50">8</td>
                            <td align="center" width="50">7</td>
                            <td align="center" width="50">6</td>
                            <td align="center" width="50">5</td>
                            <td align="center" width="50">4</td>
                            <td align="center" width="50">3</td>
                            <td align="center" width="50">2</td>
                            <td align="center" width="50">1</td>
                            <td align="center" width="50">2</td>
                            <td align="center" width="50">3</td>
                            <td align="center" width="50">4</td>
                            <td align="center" width="50">5</td>
                            <td align="center" width="50">6</td>
                            <td align="center" width="50">7</td>
                            <td align="center" width="50">8</td>
                            <td align="center" width="50">9</td>
                            <td></td>
                          </tr>

                          <tr>
                            <td><b>Orientasi Pelayanan</b></td>
                            <td align="center" width="50"><input type="radio" name="skr03" value="9" required></td>
                            <td align="center" width="50"><input type="radio" name="skr03" value="8" required></td>
                            <td align="center" width="50"><input type="radio" name="skr03" value="7" required></td>
                            <td align="center" width="50"><input type="radio" name="skr03" value="6" required></td>
                            <td align="center" width="50"><input type="radio" name="skr03" value="5" required></td>
                            <td align="center" width="50"><input type="radio" name="skr03" value="4" required></td>
                            <td align="center" width="50"><input type="radio" name="skr03" value="3" required></td>
                            <td align="center" width="50"><input type="radio" name="skr03" value="2" required></td>
                            <td align="center" width="50"><input type="radio" name="skr03" value="1" required></td>
                            <td align="center" width="50"><input type="radio" name="skr03" value="2" required></td>
                            <td align="center" width="50"><input type="radio" name="skr03" value="3" required></td>
                            <td align="center" width="50"><input type="radio" name="skr03" value="4" required></td>
                            <td align="center" width="50"><input type="radio" name="skr03" value="5" required></td>
                            <td align="center" width="50"><input type="radio" name="skr03" value="6" required></td>
                            <td align="center" width="50"><input type="radio" name="skr03" value="7" required></td>
                            <td align="center" width="50"><input type="radio" name="skr03" value="8" required></td>
                            <td align="center" width="50"><input type="radio" name="skr03" value="9" required></td>
                            <td><b>Disiplin</b></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td align="center" width="50">9</td>
                            <td align="center" width="50">8</td>
                            <td align="center" width="50">7</td>
                            <td align="center" width="50">6</td>
                            <td align="center" width="50">5</td>
                            <td align="center" width="50">4</td>
                            <td align="center" width="50">3</td>
                            <td align="center" width="50">2</td>
                            <td align="center" width="50">1</td>
                            <td align="center" width="50">2</td>
                            <td align="center" width="50">3</td>
                            <td align="center" width="50">4</td>
                            <td align="center" width="50">5</td>
                            <td align="center" width="50">6</td>
                            <td align="center" width="50">7</td>
                            <td align="center" width="50">8</td>
                            <td align="center" width="50">9</td>
                            <td></td>
                          </tr>
						  
						  <tr>
                            <td><b>Orientasi Pelayanan</b></td>
                            <td align="center" width="50"><input type="radio" name="skr04" value="9" required></td>
                            <td align="center" width="50"><input type="radio" name="skr04" value="8" required></td>
                            <td align="center" width="50"><input type="radio" name="skr04" value="7" required></td>
                            <td align="center" width="50"><input type="radio" name="skr04" value="6" required></td>
                            <td align="center" width="50"><input type="radio" name="skr04" value="5" required></td>
                            <td align="center" width="50"><input type="radio" name="skr04" value="4" required></td>
                            <td align="center" width="50"><input type="radio" name="skr04" value="3" required></td>
                            <td align="center" width="50"><input type="radio" name="skr04" value="2" required></td>
                            <td align="center" width="50"><input type="radio" name="skr04" value="1" required></td>
                            <td align="center" width="50"><input type="radio" name="skr04" value="2" required></td>
                            <td align="center" width="50"><input type="radio" name="skr04" value="3" required></td>
                            <td align="center" width="50"><input type="radio" name="skr04" value="4" required></td>
                            <td align="center" width="50"><input type="radio" name="skr04" value="5" required></td>
                            <td align="center" width="50"><input type="radio" name="skr04" value="6" required></td>
                            <td align="center" width="50"><input type="radio" name="skr04" value="7" required></td>
                            <td align="center" width="50"><input type="radio" name="skr04" value="8" required></td>
                            <td align="center" width="50"><input type="radio" name="skr04" value="9" required></td>
                            <td><b>Kerja Sama</b></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td align="center" width="50">9</td>
                            <td align="center" width="50">8</td>
                            <td align="center" width="50">7</td>
                            <td align="center" width="50">6</td>
                            <td align="center" width="50">5</td>
                            <td align="center" width="50">4</td>
                            <td align="center" width="50">3</td>
                            <td align="center" width="50">2</td>
                            <td align="center" width="50">1</td>
                            <td align="center" width="50">2</td>
                            <td align="center" width="50">3</td>
                            <td align="center" width="50">4</td>
                            <td align="center" width="50">5</td>
                            <td align="center" width="50">6</td>
                            <td align="center" width="50">7</td>
                            <td align="center" width="50">8</td>
                            <td align="center" width="50">9</td>
                            <td></td>
                          </tr>
						  
						  <tr>
                            <td><b>Integritas</b></td>
                            <td align="center" width="50"><input type="radio" name="skr05" value="9" required></td>
                            <td align="center" width="50"><input type="radio" name="skr05" value="8" required></td>
                            <td align="center" width="50"><input type="radio" name="skr05" value="7" required></td>
                            <td align="center" width="50"><input type="radio" name="skr05" value="6" required></td>
                            <td align="center" width="50"><input type="radio" name="skr05" value="5" required></td>
                            <td align="center" width="50"><input type="radio" name="skr05" value="4" required></td>
                            <td align="center" width="50"><input type="radio" name="skr05" value="3" required></td>
                            <td align="center" width="50"><input type="radio" name="skr05" value="2" required></td>
                            <td align="center" width="50"><input type="radio" name="skr05" value="1" required></td>
                            <td align="center" width="50"><input type="radio" name="skr05" value="2" required></td>
                            <td align="center" width="50"><input type="radio" name="skr05" value="3" required></td>
                            <td align="center" width="50"><input type="radio" name="skr05" value="4" required></td>
                            <td align="center" width="50"><input type="radio" name="skr05" value="5" required></td>
                            <td align="center" width="50"><input type="radio" name="skr05" value="6" required></td>
                            <td align="center" width="50"><input type="radio" name="skr05" value="7" required></td>
                            <td align="center" width="50"><input type="radio" name="skr05" value="8" required></td>
                            <td align="center" width="50"><input type="radio" name="skr05" value="9" required></td>
                            <td><b>Komitmen</b></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td align="center" width="50">9</td>
                            <td align="center" width="50">8</td>
                            <td align="center" width="50">7</td>
                            <td align="center" width="50">6</td>
                            <td align="center" width="50">5</td>
                            <td align="center" width="50">4</td>
                            <td align="center" width="50">3</td>
                            <td align="center" width="50">2</td>
                            <td align="center" width="50">1</td>
                            <td align="center" width="50">2</td>
                            <td align="center" width="50">3</td>
                            <td align="center" width="50">4</td>
                            <td align="center" width="50">5</td>
                            <td align="center" width="50">6</td>
                            <td align="center" width="50">7</td>
                            <td align="center" width="50">8</td>
                            <td align="center" width="50">9</td>
                            <td></td>
                          </tr>
							
							<tr>
                            <td><b>Integritas</b></td>
                            <td align="center" width="50"><input type="radio" name="skr06" value="9" required></td>
                            <td align="center" width="50"><input type="radio" name="skr06" value="8" required></td>
                            <td align="center" width="50"><input type="radio" name="skr06" value="7" required></td>
                            <td align="center" width="50"><input type="radio" name="skr06" value="6" required></td>
                            <td align="center" width="50"><input type="radio" name="skr06" value="5" required></td>
                            <td align="center" width="50"><input type="radio" name="skr06" value="4" required></td>
                            <td align="center" width="50"><input type="radio" name="skr06" value="3" required></td>
                            <td align="center" width="50"><input type="radio" name="skr06" value="2" required></td>
                            <td align="center" width="50"><input type="radio" name="skr06" value="1" required></td>
                            <td align="center" width="50"><input type="radio" name="skr06" value="2" required></td>
                            <td align="center" width="50"><input type="radio" name="skr06" value="3" required></td>
                            <td align="center" width="50"><input type="radio" name="skr06" value="4" required></td>
                            <td align="center" width="50"><input type="radio" name="skr06" value="5" required></td>
                            <td align="center" width="50"><input type="radio" name="skr06" value="6" required></td>
                            <td align="center" width="50"><input type="radio" name="skr06" value="7" required></td>
                            <td align="center" width="50"><input type="radio" name="skr06" value="8" required></td>
                            <td align="center" width="50"><input type="radio" name="skr06" value="9" required></td>
                            <td><b>Displin</b></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td align="center" width="50">9</td>
                            <td align="center" width="50">8</td>
                            <td align="center" width="50">7</td>
                            <td align="center" width="50">6</td>
                            <td align="center" width="50">5</td>
                            <td align="center" width="50">4</td>
                            <td align="center" width="50">3</td>
                            <td align="center" width="50">2</td>
                            <td align="center" width="50">1</td>
                            <td align="center" width="50">2</td>
                            <td align="center" width="50">3</td>
                            <td align="center" width="50">4</td>
                            <td align="center" width="50">5</td>
                            <td align="center" width="50">6</td>
                            <td align="center" width="50">7</td>
                            <td align="center" width="50">8</td>
                            <td align="center" width="50">9</td>
                            <td></td>
                          </tr>
							
							<tr>
                            <td><b>Integritas</b></td>
                            <td align="center" width="50"><input type="radio" name="skr07" value="9" required></td>
                            <td align="center" width="50"><input type="radio" name="skr07" value="8" required></td>
                            <td align="center" width="50"><input type="radio" name="skr07" value="7" required></td>
                            <td align="center" width="50"><input type="radio" name="skr07" value="6" required></td>
                            <td align="center" width="50"><input type="radio" name="skr07" value="5" required></td>
                            <td align="center" width="50"><input type="radio" name="skr07" value="4" required></td>
                            <td align="center" width="50"><input type="radio" name="skr07" value="3" required></td>
                            <td align="center" width="50"><input type="radio" name="skr07" value="2" required></td>
                            <td align="center" width="50"><input type="radio" name="skr07" value="1" required></td>
                            <td align="center" width="50"><input type="radio" name="skr07" value="2" required></td>
                            <td align="center" width="50"><input type="radio" name="skr07" value="3" required></td>
                            <td align="center" width="50"><input type="radio" name="skr07" value="4" required></td>
                            <td align="center" width="50"><input type="radio" name="skr07" value="5" required></td>
                            <td align="center" width="50"><input type="radio" name="skr07" value="6" required></td>
                            <td align="center" width="50"><input type="radio" name="skr07" value="7" required></td>
                            <td align="center" width="50"><input type="radio" name="skr07" value="8" required></td>
                            <td align="center" width="50"><input type="radio" name="skr07" value="9" required></td>
                            <td><b>Kerja Sama</b></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td align="center" width="50">9</td>
                            <td align="center" width="50">8</td>
                            <td align="center" width="50">7</td>
                            <td align="center" width="50">6</td>
                            <td align="center" width="50">5</td>
                            <td align="center" width="50">4</td>
                            <td align="center" width="50">3</td>
                            <td align="center" width="50">2</td>
                            <td align="center" width="50">1</td>
                            <td align="center" width="50">2</td>
                            <td align="center" width="50">3</td>
                            <td align="center" width="50">4</td>
                            <td align="center" width="50">5</td>
                            <td align="center" width="50">6</td>
                            <td align="center" width="50">7</td>
                            <td align="center" width="50">8</td>
                            <td align="center" width="50">9</td>
                            <td></td>
                          </tr>
							
							<tr>
                            <td><b>Komitmen</b></td>
                            <td align="center" width="50"><input type="radio" name="skr08" value="9" required></td>
                            <td align="center" width="50"><input type="radio" name="skr08" value="8" required></td>
                            <td align="center" width="50"><input type="radio" name="skr08" value="7" required></td>
                            <td align="center" width="50"><input type="radio" name="skr08" value="6" required></td>
                            <td align="center" width="50"><input type="radio" name="skr08" value="5" required></td>
                            <td align="center" width="50"><input type="radio" name="skr08" value="4" required></td>
                            <td align="center" width="50"><input type="radio" name="skr08" value="3" required></td>
                            <td align="center" width="50"><input type="radio" name="skr08" value="2" required></td>
                            <td align="center" width="50"><input type="radio" name="skr08" value="1" required></td>
                            <td align="center" width="50"><input type="radio" name="skr08" value="2" required></td>
                            <td align="center" width="50"><input type="radio" name="skr08" value="3" required></td>
                            <td align="center" width="50"><input type="radio" name="skr08" value="4" required></td>
                            <td align="center" width="50"><input type="radio" name="skr08" value="5" required></td>
                            <td align="center" width="50"><input type="radio" name="skr08" value="6" required></td>
                            <td align="center" width="50"><input type="radio" name="skr08" value="7" required></td>
                            <td align="center" width="50"><input type="radio" name="skr08" value="8" required></td>
                            <td align="center" width="50"><input type="radio" name="skr08" value="9" required></td>
                            <td><b>Disiplin</b></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td align="center" width="50">9</td>
                            <td align="center" width="50">8</td>
                            <td align="center" width="50">7</td>
                            <td align="center" width="50">6</td>
                            <td align="center" width="50">5</td>
                            <td align="center" width="50">4</td>
                            <td align="center" width="50">3</td>
                            <td align="center" width="50">2</td>
                            <td align="center" width="50">1</td>
                            <td align="center" width="50">2</td>
                            <td align="center" width="50">3</td>
                            <td align="center" width="50">4</td>
                            <td align="center" width="50">5</td>
                            <td align="center" width="50">6</td>
                            <td align="center" width="50">7</td>
                            <td align="center" width="50">8</td>
                            <td align="center" width="50">9</td>
                            <td></td>
                          </tr>
							
							<tr>
                            <td><b>Komitmen</b></td>
                            <td align="center" width="50"><input type="radio" name="skr09" value="9" required></td>
                            <td align="center" width="50"><input type="radio" name="skr09" value="8" required></td>
                            <td align="center" width="50"><input type="radio" name="skr09" value="7" required></td>
                            <td align="center" width="50"><input type="radio" name="skr09" value="6" required></td>
                            <td align="center" width="50"><input type="radio" name="skr09" value="5" required></td>
                            <td align="center" width="50"><input type="radio" name="skr09" value="4" required></td>
                            <td align="center" width="50"><input type="radio" name="skr09" value="3" required></td>
                            <td align="center" width="50"><input type="radio" name="skr09" value="2" required></td>
                            <td align="center" width="50"><input type="radio" name="skr09" value="1" required></td>
                            <td align="center" width="50"><input type="radio" name="skr09" value="2" required></td>
                            <td align="center" width="50"><input type="radio" name="skr09" value="3" required></td>
                            <td align="center" width="50"><input type="radio" name="skr09" value="4" required></td>
                            <td align="center" width="50"><input type="radio" name="skr09" value="5" required></td>
                            <td align="center" width="50"><input type="radio" name="skr09" value="6" required></td>
                            <td align="center" width="50"><input type="radio" name="skr09" value="7" required></td>
                            <td align="center" width="50"><input type="radio" name="skr09" value="8" required></td>
                            <td align="center" width="50"><input type="radio" name="skr09" value="9" required></td>
                            <td><b>Kerja Sama</b></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td align="center" width="50">9</td>
                            <td align="center" width="50">8</td>
                            <td align="center" width="50">7</td>
                            <td align="center" width="50">6</td>
                            <td align="center" width="50">5</td>
                            <td align="center" width="50">4</td>
                            <td align="center" width="50">3</td>
                            <td align="center" width="50">2</td>
                            <td align="center" width="50">1</td>
                            <td align="center" width="50">2</td>
                            <td align="center" width="50">3</td>
                            <td align="center" width="50">4</td>
                            <td align="center" width="50">5</td>
                            <td align="center" width="50">6</td>
                            <td align="center" width="50">7</td>
                            <td align="center" width="50">8</td>
                            <td align="center" width="50">9</td>
                            <td></td>
                          </tr>
							
							<tr>
                            <td><b>Disiplin</b></td>
                            <td align="center" width="50"><input type="radio" name="skr010" value="9" required></td>
                            <td align="center" width="50"><input type="radio" name="skr010" value="8" required></td>
                            <td align="center" width="50"><input type="radio" name="skr010" value="7" required></td>
                            <td align="center" width="50"><input type="radio" name="skr010" value="6" required></td>
                            <td align="center" width="50"><input type="radio" name="skr010" value="5" required></td>
                            <td align="center" width="50"><input type="radio" name="skr010" value="4" required></td>
                            <td align="center" width="50"><input type="radio" name="skr010" value="3" required></td>
                            <td align="center" width="50"><input type="radio" name="skr010" value="2" required></td>
                            <td align="center" width="50"><input type="radio" name="skr010" value="1" required></td>
                            <td align="center" width="50"><input type="radio" name="skr010" value="2" required></td>
                            <td align="center" width="50"><input type="radio" name="skr010" value="3" required></td>
                            <td align="center" width="50"><input type="radio" name="skr010" value="4" required></td>
                            <td align="center" width="50"><input type="radio" name="skr010" value="5" required></td>
                            <td align="center" width="50"><input type="radio" name="skr010" value="6" required></td>
                            <td align="center" width="50"><input type="radio" name="skr010" value="7" required></td>
                            <td align="center" width="50"><input type="radio" name="skr010" value="8" required></td>
                            <td align="center" width="50"><input type="radio" name="skr010" value="9" required></td>
                            <td><b>Kerja Sama</b></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td align="center" width="50">9</td>
                            <td align="center" width="50">8</td>
                            <td align="center" width="50">7</td>
                            <td align="center" width="50">6</td>
                            <td align="center" width="50">5</td>
                            <td align="center" width="50">4</td>
                            <td align="center" width="50">3</td>
                            <td align="center" width="50">2</td>
                            <td align="center" width="50">1</td>
                            <td align="center" width="50">2</td>
                            <td align="center" width="50">3</td>
                            <td align="center" width="50">4</td>
                            <td align="center" width="50">5</td>
                            <td align="center" width="50">6</td>
                            <td align="center" width="50">7</td>
                            <td align="center" width="50">8</td>
                            <td align="center" width="50">9</td>
                            <td></td>
                          </tr>
                        </table>
                      </div>
                      <div class="modal-footer" style="margin-top: 30px">
                        <a href="<?php echo site_url('CPerbandinganSubkriteria/batal') ?>" type="button" class="btn btn-default"><i class="fa fa-close"></i> Batal</a>
                        <button type="submit" class="btn btn-success"><i class="fa fa-gears"></i> Proses</button>
                      </div>
                  </div>
                </div>
					</form>

			  <!---------------Start Matriks Perbandingan---------------->
                <div class="tab-pane" id="tab_2">
				<div class="container-fluid" style="margin-bottom: 10px;">
                    <center><b>Matriks Perbandingan Subkriteria</b></center>
                    <hr>
                </div>
                  <form action="<?php echo site_url('CPerbandinganSubkriteria/simpanEigenvector') ?>" method="POST">
				  <table style="table-layout:fixed" class="table table-striped table-bordered">
				  <tr>
					<td></td>
                  <?php if(isset($matriksA)) { ?>
                    <?php $kd = 1; ?>
					<?php $k = 1; ?>
                    <?php $kd_banding2 = 1; ?>
                    <?php foreach ($getAllSubkriteria as $hitung) { ?>
                          <input type="hidden" name="<?php echo "SKR0".$kd++ ?>" value="<?php echo $hitung->kd_subkriteria; ?>">
                    <?php } ?>
						<tr>
                            <td></td>
                            <?php foreach($getAllSubkriteria as $data) { ?>
                              <th><center><?php echo $data->nm_subkriteria ?></center></th>
                              <input type="hidden" name="<?php echo "subkriteria".$k++ ?>" value="<?php echo $data->kd_kriteria ?>">
                            <?php } ?>
                        </tr>
                          <?php foreach($matriksA as $i => $value) { ?>
                        <tr>
                            <td></td>
                              <?php foreach($matriksA as $j => $value ) { ?>
                                <td align="center"><?php echo round($matriksA[$i][$j],4) ?></td>
                                <input type="hidden" name="nilai_banding2<?php echo $kd_banding2++ ?>" value="<?php echo $matriksA[$i][$j] ?>">
                              <?php } ?>
                        </tr>
                    <?php } ?>
					</tr>
                   </table>

                        <!-- Table Tambahan -->
						<table style="width: 170px;margin-top: -230px" class="table table-striped table-bordere">
						  <tr>
                            <td>Subkriteria</td>
                          </tr>
                          <?php foreach($getAllSubkriteria as $data) { ?>
                          <tr>
                            <td><b><?php echo $data->nm_subkriteria ?></b></td>
                          </tr>
                          <?php } ?>
                        </table>
						
				  <?php } else { ?>
                    <h3><center><i>Data Belum Dimasukkan</i></center></h3>
                  <?php } ?>
                </div>
				<!--------------------------end Matriks Perbandingan--------------------------------------------->
				
				<!---------------------------Start Eigenvector--------------------------------------------------------->
                <div class="tab-pane" id="tab_3">
                      <div>
                        <h3 class="box-title"><b>Eigenvector Kriteria Subkriteria</b></h3>
                      </div>
						<hr>
					  <?php if(isset($matriksA)) { ?>                     
					  <table style="table-layout:fixed" class="table table-striped table-bordered">
                          <tr>
                            <td width="328px"></td>
                            <th style="padding-left: 10px"><center>Nilai Banding</center></th>
                            <th></th>
                          </tr>
                            <?php foreach($penjumlahanMatriks as $i => $value) { ?>
                            <tr>
                              <td><b></b></td>
                              <td><center><?php echo round($penjumlahanMatriks[$i],4) ?></center></td>
                            </tr>
                          <?php } ?>
                        </table>

                        <div>
						<table 	style="width: 328px; margin-left: 625px; margin-top: -220px" class="table table-striped table-bordered">
                        <tr>
                          <th><center>Eigenvector</center></th>
                        </tr>
                            <?php $kd = 1; ?>
                            <?php foreach($eigenvector as $j => $value) { ?>
                            <tr>
                              <td><center><?php echo round($eigenvector[$j],4) ?></center></td>
                                <input type="hidden" name="<?php echo "Perilaku".$kd++ ?>" value="<?php echo round($eigenvector[$j],4) ?>">
                            </tr>
                          <?php } ?>               
                        </table>

                        <!-- Table Tambahan -->
                        <table  style="width: 250px;margin-top: -238px" class="table table-striped table-bordere">
                          <tr>
                          <th><center>Subkriteria</center></th>
                        </tr>
                          <?php foreach($getAllSubkriteria as $data) { ?>
                          <tr>
                            <td><b><?php echo $data->nm_subkriteria ?></b></td>
                          </tr>
                          <?php } ?>
                        </table>
                      </div>
                </div>
					<!----------------------------end Eigenvector-------------------------------->
                    <div class="modal-footer">
                      <a href="<?php echo site_url('CPerbandinganSubkriteria/batal') ?>" type="button" class="btn btn-default"><i class="fa fa-close"></i> Batal</a>
                      <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                    </div>
                  </form>
                    <?php } else { ?>
                      <h3><center><i>Data Belum Dimasukkan</i></center></h3>
                    <?php } ?>
				</div>
                  </div>
				  
			   	  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

















</div>
</section>
