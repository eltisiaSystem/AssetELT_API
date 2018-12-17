	<div class="box-body" col-md-9>
		<?php

		if($error)
		{
			echo '<div class="alert alert-danger alert-dismissible">';
			echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
			echo $error;
			echo '</div>';
		}

		if(validation_errors())
		{
			echo '<div class="alert alert-danger alert-dismissible">';
			echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
			echo validation_errors();
			echo '</div>';
		}

		?>
		<?php echo form_open_multipart('admin/users/edit/' . $users['user_id']); ?>
		<div class="col-sm-6">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control" value="<?php echo $users['username']; ?>" placeholder="Username" disabled="">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" class="form-control" value="<?php echo $users['email']; ?>" placeholder="Email" required="">
			</div>
			<div class="form-group">
				<label for="nama_lengkap">Nama Lengkap</label>
				<input type="text" name="nama_lengkap" class="form-control" value="<?php echo $users['nama_lengkap']; ?>" placeholder="Nama lengkap" >
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<input type="text" name="alamat" class="form-control" value="<?php echo $users['alamat']; ?>" placeholder="Alamat" >
			</div>
			<div class="form-group">
				<label for="kecamatan">Kecamatan</label>
				<input type="text" name="kecamatan" class="form-control" value="<?php echo $users['kecamatan']; ?>" placeholder="Kecamatan" >
			</div>
			<div class="form-group">
				<label for="kota_kabupaten">Kabupaten/Kota</label>
				<input type="text" name="kota_kabupaten" class="form-control" value="<?php echo $users['kota_kabupaten']; ?>" placeholder="Kabupaten/Kota" >
			</div>
			<div class="form-group">
				<label for="provinsi">Provinsi</label>
				<input type="text" name="provinsi" class="form-control" value="<?php echo $users['provinsi']; ?>" placeholder="Provinsi" >
			</div>
			<div class="form-group">
				<label for="kode_pos">Kode Pos</label>
				<input type="text" name="kode_pos" class="form-control" value="<?php echo $users['kode_pos']; ?>" placeholder="Kode Pos" >
			</div>
			<div class="form-group">
				<label for="no_handphone">Nomer Handphone</label>
				<input type="text" name="no_handphone" class="form-control" value="<?php echo $users['no_handphone']; ?>" placeholder="Nomor Handphone" >
			</div>
			<div class="form-group">
				<div class="col-md-4">
					<img src="<?php echo base_url('assets/uploads/users/thumbs/'.$users['path_file']); ?>" alt="">
				</div>
				<div class="col-md-8">
					<label for="path_file">Upload Foto</label>
					<input type="file" name="path_file" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="form-group pull-right">
				<a href="<?php echo base_url('admin/users'); ?>" class="btn btn-default"><i class="fa fa-undo"></i> Kembali</a>
				<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>