  <div class="box-body col-md-9">
    <h3><?php echo $title; ?></h3>
    <a href="<?php echo base_url('admin/slider/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
    <br><br>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Gambar</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; foreach($gallery as $gallery){ ?>
          <tr>
            <td class="text-center"><?php echo $no; ?></td>
            <td><?php echo $gallery['judul_gallery']; ?></td>
            <td><img src="<?php echo base_url('assets/uploads/slider/thumbs/' . $gallery['path_file']) ?>" alt="" width="150px"></td>
            <td class="text-center"><?php echo $gallery['status_gallery'] ?></td>
            <td style="text-align: center">
              <a href="<?php echo base_url('admin/slider/detail/'.$gallery['gallery_id']) ?>" class="btn btn-warning"><i class="fa fa-eye"></i> View</a>
              
              <a href="<?php echo base_url('admin/slider/edit/'.$gallery['gallery_id']) ?>" class="btn btn-info"><i class="fa fa-edit"></i>Edit 
              </a>

              <?php include('del.php'); ?>

              <!-- <a href="<?php //echo base_url('admin/gallery/hapus/'.$gallery['gallery_id']) ?>" class="btn btn-danger"><i class="fa fa-edit"></i> Hapus</a> -->
            </td>

          </tr>
          <?php $no++;} ?>

        </tbody>
      </table>
    </div>
  </div>


