<div class="box col-md-9">
	<h3><?php echo $title; ?></h3>
	<div class="box-body">
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
		<?php echo form_open_multipart('admin/daftar_ternak/tambah'); ?>
		<div class="col-sm-12">
			<div class="form-group">
				<label for="path_file">Upload Foto</label>
				<input type="file" name="path_file" class="form-control">
			</div>
			<div class="form-group">
				<label for="id_ternak">ID Ternak</label>
				<input type="text" name="id_ternak" class="form-control" value="<?php echo set_value('id_ternak'); ?>" placeholder="ID Ternak" required="">
			</div>
			<div class="form-group">
				<label for="inisial_ternak">Inisial Ternak</label>
				<input type="inisial_ternak" name="inisial_ternak" class="form-control" value="<?php echo set_value('inisial_ternak'); ?>" placeholder="Inisial Ternak" required="">
			</div>
			<div class="form-group">
				<label for="jenis_ternak">Jenis Ternak</label>
				<select name="jenis_ternak" class="form-control" required="">
					<option value="Kambing">Kambing</option>
				</select>
			</div>
			<div class="form-group">
				<label for="ras_ternak">Ras Ternak</label>
				<input type="text" name="ras_ternak" class="form-control" value="<?php echo set_value('ras_ternak'); ?>" placeholder="Ras Ternak" required="">
			</div>
			<div class="form-group">
				<label for="jenis_kelamin_ternak">Jenis Kelamin Ternak</label>
				<select name="jenis_kelamin_ternak" class="form-control" required="">
					<option value="Jantan">Jantan</option>
					<option value="Betina">Betina</option>
				</select>
			</div>
			<div class="form-group">
				<label for="umur_ternak">Umur Ternak</label>
				<input type="text" name="umur_ternak" class="form-control" value="<?php echo set_value('umur_ternak'); ?>" placeholder="Umur Ternak" required="">
			</div>
			<div class="form-group">
				<label for="bobot_ternak">Bobot Ternak</label>
				<input type="text" name="bobot_ternak" class="form-control" value="<?php echo set_value('bobot_ternak'); ?>" placeholder="Bobot Ternak" required="">
			</div>
			<div class="form-group">
				<label for="kesehatan_ternak">Kesehatan Ternak</label>
				<select name="kesehatan_ternak" class="form-control" required="">
					<option value="Sehat">Sehat</option>
					<option value="Tidak_Sehat">Tidak Sehat</option>
				</select>
			</div>
			<div class="form-group">
				<label for="pemilik_ternak">Pemilik Ternak</label>
				<input type="text" name="pemilik_ternak" class="form-control" value="<?php echo set_value('pemilik_ternak'); ?>" placeholder="Pemilik Ternak" required="">
			</div>
			<div class="form-group">
				<label for="nama_peternakan">Peternakan</label>
				<input type="text" name="nama_peternakan" class="form-control" value="<?php echo set_value('nama_peternakan'); ?>" placeholder="Peternakan" required="">
			</div>
			<div class="form-group">
				<label for="status_ternak">Status Ternak</label>
				<select name="status_ternak" class="form-control" required="">
					<option value="Tersedia">Tersedia</option>
					<option value="Terjual">Terjual</option>
				</select>
			</div>
			<div class="form-group">
				<label for="pasar_ternak_id"></label>
				<input type="hidden" name="pasar_ternak_id" value="<?php echo $pasar_ternak_id; ?>">
			</div>
		</div>
		<div class="col-sm-12">
			<div class="form-group pull-right">
				<a href="<?php echo base_url('admin/daftar_ternak'); ?>" class="btn btn-default"><i class="fa fa-undo"></i> Kembali</a>
				<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>