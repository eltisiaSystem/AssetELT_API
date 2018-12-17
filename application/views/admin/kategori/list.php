  <!-- /.box-header -->
  <div class="box-body">
    <div class="col-md-6">
      <?php include('add.php'); ?> <br><br>
      <?php 
      if($this->session->flashdata('sukses'))
      {
        echo '<div class="alert alert-success alert-dismissible">';
        echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
        echo $this->session->flashdata('sukses');
        echo '</div>';
      }


      if($this->session->flashdata('warning'))
      {
        echo '<div class="alert alert-warning alert-dismissible">';
        echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
        echo $this->session->flashdata('warning');
        echo '</div>';
      }
      ?>

      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Jenis</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; foreach($kategori as $kategori){ ?>
            <tr>
              <td class="text-center"><?php echo $no; ?></td>
              <td><?php echo $kategori['nama_kategori']; ?></td>
              <td><?php echo $kategori['ras_kategori'] ?></td>
              <td class="text-center"><?php echo $kategori['status_kategori']; ?>      
            </td>
            <td style="text-align: center">
              <?php if($kategori['status_kategori'] === "Nonaktif") { ?>
                <a href="<?php echo base_url('admin/kategori/status/' . $kategori['kategori_id']); ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Aktifkan"><i class="fa fa-close"></i> <?php echo $kategori['status_kategori'] ?></a>
              <?php }else{ ?>
                <a href="<?php echo base_url('admin/kategori/status/' . $kategori['kategori_id']); ?>" class="btn btn-success" data-toogle="tooltip" data-placement="top" title="Nonaktifkan"><i class="fa fa-check"></i> <?php echo $kategori['status_kategori'] ?></a>
              <?php } ?>              
              <a href="<?php echo base_url('admin/kategori/edit/'.$kategori['kategori_id']) ?>" class="btn btn-info"><i class="fa fa-edit"></i>Edit 
              </a>

              
              <?php include('del.php'); ?> 

              <!-- <a href="<?php //echo base_url('admin/kategori/hapus/'.$kategori['kategori_id']) ?>" class="btn btn-danger"><i class="fa fa-edit"></i> Hapus</a> -->
            </td>

          </tr>
          <?php $no++;} ?>

        </tbody>
      </table>
    </div>
  </div>
</div>