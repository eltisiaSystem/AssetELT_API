<div class="box col-md-9">
	<h3><?php echo $title; ?></h3>
	<div class="box-body">
		
		<div class="col-sm-12">
			<div class="form-group">
				<label for="id_ternak">ID Ternak</label>
				<input type="text" name="id_ternak" class="form-control" value="<?php echo $daftar_ternak['daftar_ternak_id']; ?>" placeholder="ID Ternak" disabled="">
			</div>
			<div class="form-group">
				<label for="inisial_ternak">Inisial Ternak</label>
				<input type="inisial_ternak" name="inisial_ternak" class="form-control" value="<?php echo $daftar_ternak['inisial_ternak']; ?>" placeholder="Inisial Ternak" disabled="">
			</div>
			<div class="form-group">
				<label for="jenis_ternak">Jenis Ternak</label>
				<select name="jenis_ternak" class="form-control" disabled="">
					<option value="Kambing">Kambing</option>
				</select>
			</div>
			<div class="form-group">
				<label for="ras_ternak">Ras Ternak</label>
				<input type="text" name="ras_ternak" class="form-control" value="<?php echo $daftar_ternak['ras_ternak']; ?>" placeholder="Ras Ternak" disabled="">
			</div>
			<div class="form-group">
				<label for="jenis_kelamin_ternak">Jenis Kelamin Ternak</label>
				<select name="jenis_kelamin_ternak" class="form-control" disabled="">
					<option value="Jantan">Jantan</option>
					<option value="Betina">Betina</option>
				</select>
			</div>
			<div class="form-group">
				<label for="umur_ternak">Umur Ternak</label>
				<input type="text" name="umur_ternak" class="form-control" value="<?php echo $daftar_ternak['umur_ternak']; ?>" placeholder="Umur Ternak" disabled="">
			</div>
			<div class="form-group">
				<label for="bobot_ternak">Bobot Ternak</label>
				<input type="text" name="bobot_ternak" class="form-control" value="<?php echo $daftar_ternak['bobot_ternak']; ?>" placeholder="Bobot Ternak" disabled="">
			</div>
			<div class="form-group">
				<label for="kesehatan_ternak">Kesehatan Ternak</label>
				<select name="kesehatan_ternak" class="form-control" disabled="">
					<option value="Sehat">Sehat</option>
					<option value="Tidak_Sehat">Tidak Sehat</option>
				</select>
			</div>
			<div class="form-group">
				<label for="pemilik_ternak">Pemilik Ternak</label>
				<input type="text" name="pemilik_ternak" class="form-control" value="<?php echo $daftar_ternak['pemilik_ternak']; ?>" placeholder="Pemilik Ternak" disabled="">
			</div>
			<div class="form-group">
				<label for="nama_peternakan">Peternakan</label>
				<input type="text" name="nama_peternakan" class="form-control" value="<?php echo $daftar_ternak['nama_peternakan']; ?>" placeholder="Peternakan" disabled="">
			</div>
			<div class="form-group">
				<label for="status_ternak">Status Ternak</label>
				<select name="status_ternak" class="form-control" disabled="">
					<option value="Tersedia">Tersedia</option>
					<option value="Terjual">Terjual</option>
				</select>
			</div>
			<div class="form-group">
				<img src="<?php echo base_url('assets/uploads/daftar_ternak/thumbs/'.$daftar_ternak['path_file']) ?>" alt="Foto Ternak">
			</div>
		</div>
		<div class="col-sm-12">
		<div class="col-sm-12">
			<div class="form-group pull-right">
				<a href="<?php echo base_url('admin/daftar_ternak'); ?>" class="btn btn-default"><i class="fa fa-undo"></i> Kembali</a>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>