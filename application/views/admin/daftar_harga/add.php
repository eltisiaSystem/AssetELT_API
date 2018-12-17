	<div class="box-body col-md-9">
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
		<?php echo form_open_multipart('admin/harga_ternak/tambah'); ?>
		<div class="col-sm-12">
			<div class="form-group">
				<label for="jenis_ternak">Jenis Ternak</label>
				<input type="text" name="jenis_ternak" class="form-control" value="<?php echo set_value('jenis_ternak'); ?>" placeholder="Jenis Ternak" required="">
			</div>
			<div class="form-group">
				<label for="grade">Grade</label>
				<input type="grade" name="grade" class="form-control" value="<?php echo set_value('grade'); ?>" placeholder="Grade" required="">
			</div>
			<div class="form-group">
				<label for="kesehatan">Kesehatan</label>
				<input type="kesehatan" name="kesehatan" class="form-control" value="<?php echo set_value('kesehatan'); ?>" placeholder="Kesehatan" required="">
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