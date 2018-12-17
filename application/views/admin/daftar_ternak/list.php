<div class="box col-md-9">
  <h3><?php echo $title; ?></h3>
  
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Inisial Ternak</th>
          <th>Jenis Ternak</th>
          <th>Bobot Ternak</th>
          <th>Pasar Ternak</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; foreach($daftar_ternak as $daftar_ternak){ ?>
          <tr>
            <td class="text-center"><?php echo $no; ?></td>
            <td><?php echo $daftar_ternak['inisial_ternak']; ?></td>
            <td><?php echo $daftar_ternak['jenis_ternak']; ?></td>
            <td><?php echo $daftar_ternak['bobot_ternak']; ?> Kg</td>
            <td><?php echo $daftar_ternak['pasar_ternak_id']; ?></td>
            <td><?php echo $daftar_ternak['status_ternak']; ?></td>
            <td style="text-align: center">
              <a href="<?php echo base_url('admin/daftar_ternak/detail/'.$daftar_ternak['daftar_ternak_id']) ?>" class="btn btn-warning"><i class="fa fa-eye"></i> View</a>

              <?php if($akses_level != "Peternak"){ ?>
              <a href="<?php echo base_url('admin/daftar_ternak/edit/'.$daftar_ternak['daftar_ternak_id']) ?>" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>

              

              <?php include('del.php'); ?>
              <?php } ?>

              <!-- <a href="<?php //echo base_url('admin/daftar_ternak/hapus/'.$daftar_ternak['user_id']) ?>" class="btn btn-danger"><i class="fa fa-edit"></i> Hapus</a> -->
            </td>

          </tr>
          <?php $no++;} ?>

        </tbody>
      </table>
    </div>
  </div>