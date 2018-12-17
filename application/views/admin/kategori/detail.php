<div class="box col-md-9">
	<h3><?php echo $title; ?></h3>
	<div class="box-body">
		
		<div class="col-sm-6">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control" value="<?php echo $users['username']; ?>" placeholder="Username" disabled="">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" class="form-control" value="<?php echo $users['email']; ?>" placeholder="Email" disabled="">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control" value="<?php echo $users['password']; ?>" placeholder="Password" disabled="">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label for="nama_lengkap">Nama Lengkap</label>
				<input type="text" name="nama_lengkap" class="form-control" value="<?php echo $users['nama_lengkap']; ?>" placeholder="Nama lengkap" disabled="">
			</div>
			<div class="form-group">
				<label for="akses_level">Akses Level</label>
				<select name="akses_level" class="form-control" disabled="">
					<option value="User">User</option>
					<option value="Admin">Admin</option>
				</select>
			</div>
			<div class="form-group">
				<label for="status">Status</label>
				<select name="status" class="form-control" disabled="">
					<option value="Aktif">Aktif</option>
					<option value="Nonaktif">Nonaktif</option>
				</select>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="form-group pull-right">
				<a href="<?php echo base_url('admin/users'); ?>" class="btn btn-default"><i class="fa fa-undo"></i> Kembali</a>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>