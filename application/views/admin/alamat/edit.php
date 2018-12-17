	<div class="box-body" col-md-9>
		<?php echo form_open_multipart('admin/alamat/edit'); ?>
		<div class="col-sm-6">
			<div class="form-group">
				<label for="nama_alamat">Nama Alamat</label>
				<input type="text" name="nama_alamat" class="form-control" value="<?php echo $alamat['nama_alamat']; ?>" placeholder="Nama Alamat" >
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<input type="text" name="alamat" class="form-control" value="<?php echo $alamat['alamat']; ?>" placeholder="Alamat" >
			</div>
			<div class="form-group">
				<label for="kecamatan">Kecamatan</label>
				<input type="text" name="kecamatan" class="form-control" value="<?php echo $alamat['kecamatan']; ?>" placeholder="Kecamatan" >
			</div>
			<div class="form-group">
				<label for="kabupaten_kota">Kabupaten/Kota</label>
				<input type="text" name="kabupaten_kota" class="form-control" value="<?php echo $alamat['kabupaten_kota']; ?>" placeholder="Kabupaten/Kota" >
			</div>
			<div class="form-group">
				<label for="provinsi">Provinsi</label>
				<input type="text" name="provinsi" class="form-control" value="<?php echo $alamat['provinsi']; ?>" placeholder="Provinsi" >
			</div>
			<div class="form-group">
				<label for="kode_pos">Kode Pos</label>
				<input type="text" name="kode_pos" class="form-control" value="<?php echo $alamat['kode_pos']; ?>" placeholder="Kode Pos" >
			</div>
			<div class="col-sm-12">
				<div class="form-group pull-right">
					<a href="<?php echo base_url('admin/alamat'); ?>" class="btn btn-default"><i class="fa fa-undo"></i> Kembali</a>
					<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
				</div>
			</div>
		</div>
		
		<?php echo form_close(); ?>
	</div>
</div>