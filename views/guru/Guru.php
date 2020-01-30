<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <small><b>Data Guru</b></small>
    </h1>
  </section>

<section class="content">
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <button class="btn btn-default" data-toggle="modal" href="#" data-target="#ModalEntryGuru"><i class="fa fa-plus"></i></button> Tambah Data Guru
      </div>
      <div class="panel-body">
    
          <table style="table-layout:fixed" class="table table-striped table-bordered table-hover" id="datatableKaryawan">
            <thead>
              <tr>
                <th width="20px" align="center">No. </th>
                <th><center>Nip</center></th>
                <th><center>Nama</center></th>
                <th width="70px"><center>Alamat</center></th>
                <th width="60px"><center>No Telp</center></th>
                <th><center>Email</center></th>
                <th width="40px" align="center;"> <center>Ubah</center> </th>
                <th width="40px" align="center;"> <center>Hapus</center> </th>
              </tr>
            </thead>
            <tbody>
            <?php $no=1; ?>
            <?php foreach($getAllguru as $data){ ?>
              <tr>
                <td align="center"><?php echo $no++; ?>.</td>
                <td><?php echo $data->nip ?></td>
                <td><?php echo ucwords($data->nm_guru) ?></td>
                <td align="center"><?php echo $data->alamat ?></td>
                <td align="center"><?php echo $data->no_tlp ?></td>
                <td align="center"><?php echo $data->email ?></td>
                <td align="center"><a href="#ModalUpdateGuru<?php echo $data->nip ?>" class="btn btn-warning btn-circle" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> </a></td>
                <td align="center"><a href="#ModalHapusGuru<?php echo $data->nip ?>" class="btn btn-danger btn-circle" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> </a></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        
      </div>
     </div>
    </div>
  </div>
</section>
