	<div class="box-body col-md-9">
		<h3><?php echo $title; ?></h3>
		
		<div class="col-sm-12">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control" value="<?php echo $users['username']; ?>" placeholder="Username" disabled="">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" class="form-control" value="<?php echo $users['email']; ?>" placeholder="Email" disabled="">
			</div>
			<div class="form-group">
				<label for="nama_lengkap">Nama Lengkap</label>
				<input type="text" name="nama_lengkap" class="form-control" value="<?php echo $users['nama_lengkap']; ?>" placeholder="Nama lengkap" disabled="">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<input type="text" name="alamat" class="form-control" value="<?php echo $users['alamat']; ?>" placeholder="Alamat" disabled="">
			</div>
			<div class="form-group">
				<label for="kecamatan">Kecamatan</label>
				<input type="text" name="kecamatan" class="form-control" value="<?php echo $users['kecamatan']; ?>" placeholder="Kecamatan" disabled="">
			</div>
			<div class="form-group">
				<label for="kota_kabupaten">Kabupaten/Kota</label>
				<input type="text" name="kota_kabupaten" class="form-control" value="<?php echo $users['kota_kabupaten']; ?>" placeholder="Kabupaten/Kota" disabled="">
			</div>
			<div class="form-group">
				<label for="provinsi">Provinsi</label>
				<input type="text" name="provinsi" class="form-control" value="<?php echo $users['provinsi']; ?>" placeholder="Provinsi" disabled="">
			</div>
			<div class="form-group">
				<label for="kode_pos">Kode Pos</label>
				<input type="text" name="kode_pos" class="form-control" value="<?php echo $users['kode_pos']; ?>" placeholder="Kode Pos" disabled="">
			</div>
			<div class="form-group">
				<label for="no_handphone">Nomer Handphone</label>
				<input type="text" name="no_handphone" class="form-control" value="<?php echo $users['no_handphone']; ?>" placeholder="Nomor Handphone" disabled="">
			</div>
		</div>
		<div class="col-sm-12">
			<div class="form-group pull-right">
				<?php if($akses_level === "Admin"){ ?>
					<a href="<?php echo base_url('admin/users/daftar_pasar_ternak'); ?>" class="btn btn-default"><i class="fa fa-undo"></i> Kembali</a>
				<?php }elseif ($akses_level === "Pasar Ternak") {
				 ?>
				<a href="<?php echo base_url('admin/users/daftar_operator_pasar_ternak/'.$users['operator_id']); ?>" class="btn btn-default"><i class="fa fa-undo"></i> Kembali</a>
				<?php } ?>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>