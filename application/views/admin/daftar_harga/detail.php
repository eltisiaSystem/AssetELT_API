	<div class="box-body col-md-9">
		
		<div class="col-sm-12">
			<div class="form-group">
				<label for="jenis_ternak">Jenis Ternak</label>
				<input type="text" name="jenis_ternak" class="form-control" value="<?php echo $harga_ternak['jenis_ternak']; ?>" placeholder="Jenis Ternak" disabled="">
			</div>
			<div class="form-group">
				<label for="grade">Grade</label>
				<input type="grade" name="grade" class="form-control" value="<?php echo $harga_ternak['grade']; ?>" placeholder="Grade" disabled="">
			</div>
			<div class="form-group">
				<label for="kesehatan">Kesehatan</label>
				<input type="kesehatan" name="kesehatan" class="form-control" value="<?php echo $harga_ternak['kesehatan']; ?>" placeholder="Kesehatan" disabled="">
			</div>
		</div>
		<div class="col-sm-12">
			<div class="form-group pull-right">
				<a href="<?php echo base_url('admin/harga_ternak'); ?>" class="btn btn-default"><i class="fa fa-undo"></i> Kembali</a>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>