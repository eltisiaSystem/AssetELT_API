
    <!-- /.box-header -->
    <div class="box-body col-md-9">
      <h3><?php echo $title; ?></h3>
      <br>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Alamat</th>
            <th>Kecamatan</th>
            <th>Kota - Provinsi</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; foreach($alamat as $alamat){ ?>
            <tr>
              <td class="text-center"><?php echo $no; ?></td>
              <td><?php echo $alamat['alamat']; ?></td>
              <td><?php echo $alamat['kecamatan']; ?></td>
              <td class="text-center"><?php echo $alamat['kabupaten_kota'] . ' - ' . $alamat['provinsi']; ?></td>
              <td style="text-align: center">

                <a href="<?php echo base_url('admin/alamat/edit'); ?>" class="btn btn-info"><i class="fa fa-edit"></i>Edit 
                </a>

                <!-- <a href="<?php //echo base_url('admin/alamat/hapus/'.$alamat['user_id']) ?>" class="btn btn-danger"><i class="fa fa-edit"></i> Hapus</a> -->
              </td>

            </tr>
            <?php $no++;} ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>