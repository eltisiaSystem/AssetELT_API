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
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control" value="<?php echo $users['password']; ?>" placeholder="Password" disabled="">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label for="nama_lengkap">Nama Lengkap</label>
				<input type="text" name="nama_lengkap" class="form-control" value="<?php echo $users['nama_lengkap']; ?>" placeholder="Nama lengkap" required="">
			</div>
			<div class="form-group">
				<label for="path_file">Upload Foto</label>
				<input type="file" name="path_file" class="form-control">
			</div>
			<div class="form-group">
				<label for="akses_level">Akses Level</label>
				<select name="akses_level" class="form-control" required="">
					<option value="Admin">Admin</option>
					<option value="Pembeli">Pembeli</option>
					<option value="Peternak">Peternak</option>
					<option value="Pemerintah">Pemerintah</option>
				</select>
			</div>
			<div class="form-group">
				<label for="status">Status</label>
				<select name="status" class="form-control" required="">
					<option value="Aktif">Aktif</option>
					<option value="Nonaktif">Nonaktif</option>
				</select>
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