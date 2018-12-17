
    <!-- /.box-header -->
    <div class="box-body col-md-9">
      <h3><?php echo $title; ?></h3><br>
      <a href="<?php echo base_url('admin/harga_ternak/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
      <br><br>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th class="text-center">No</th>
            <th class="text-center">Jenis Ternak</th>
            <th class="text-center">Grade</th>
            <th class="text-center">Kesehatan</th>
            <th class="text-center">Harga Akhir</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; foreach($harga as $harga){ ?>
            <tr>
              <td class="text-center"><?php echo $no; ?></td>
              <td class="text-center"><?php echo $harga['jenis_ternak']; ?></td>
              <td class="text-center"><?php echo $harga['grade']; ?></td>
              <td class="text-center"><?php echo $harga['kesehatan']; ?></td>
              <td class="text-center"><?php echo $harga['harga_akhir']; ?></td>
              <td style="text-align: center">
                <a href="<?php echo base_url('admin/harga_ternak/detail/'.$harga['id_harga']) ?>" class="btn btn-warning"><i class="fa fa-eye"></i> View</a>
                
                <a href="<?php echo base_url('admin/harga_ternak/edit/'.$harga['id_harga']) ?>" class="btn btn-info"><i class="fa fa-edit"></i>Edit 
                </a>

                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Hapus<?php echo $harga['id_harga'];?>">
                  <i class="fa fa-trash"></i> Hapus
                </button>

                <?php //include('del.php'); ?>

                <!-- <a href="<?php //echo base_url('admin/harga_ternak/hapus/'.$harga['id_harga']) ?>" class="btn btn-danger"><i class="fa fa-edit"></i> Hapus</a> -->
              </td>

            </tr>
            <?php $no++;} ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>