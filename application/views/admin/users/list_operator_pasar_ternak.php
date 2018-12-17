
    <!-- /.box-header -->
    <div class="box-body col-md-9">
      <h3><?php echo $title; ?></h3>
      <br>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Username</th>
            <th>Email</th>
            <th>Akses Level - Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; foreach($users as $users){ ?>
            <tr>
              <td class="text-center"><?php echo $no; ?></td>
              <td><?php echo $users['username']; ?></td>
              <td><?php echo $users['email']; ?></td>
              <td class="text-center"><?php echo $users['akses_level'] . '-' . $users['status']; ?></td>
              <td style="text-align: center">
                <a href="<?php echo base_url('admin/users/detail_operator_pasar_ternak/'.$users['pasar_ternak_id']) ?>" class="btn btn-warning"><i class="fa fa-eye"></i> View</a>

                <?php if($akses_level === "Pasar Ternak"){ ?>  
                <a href="<?php echo base_url('admin/users/edit_operator_pasar_ternak/'.$users['user_id']) ?>" class="btn btn-info"><i class="fa fa-edit"></i>Edit 
                </a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Hapus<?php echo $users['user_id'];?>">
                  <i class="fa fa-trash"></i> Hapus
                </button>

                <?php include('del.php'); }?>

                

                <!-- <a href="<?php //echo base_url('admin/users/hapus/'.$users['user_id']) ?>" class="btn btn-danger"><i class="fa fa-edit"></i> Hapus</a> -->
              </td>

            </tr>
            <?php $no++;} ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>