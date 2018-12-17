	<div class="box-body col-md-9">
		<h3><?php echo $title; ?></h3>
		<?php

		if(validation_errors())
		{
			echo '<div class="alert alert-danger alert-dismissible">';
			echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
			echo validation_errors();
			echo '</div>';
		}

		?>
		<?php echo form_open('admin/kategori/edit/' . $kategori['kategori_id']); ?>
		<div class="col-sm-12">
			<div class="form-group">
				<label for="nama_kategori">Kategori Ternak</label>
				<input type="text" name="nama_kategori" class="form-control" value="<?php echo $kategori['nama_kategori'] ?>" required="" placeholder='Nama Kategori'>
			</div>
			<div class="form-group">
				<label for="nama_kategori">Ras Ternak</label>
				<input type="text" name="ras_kategori" class="form-control" value="<?php echo $kategori['ras_kategori'] ?>" required="" placeholder='Ras'>
			</div>
			<div class="form-group">
				<label for="status_kategori">Status</label>
				<select name="status_kategori" class="form-control" required="">
					<option value="Aktif">Aktif</option>
					<option value="Nonaktif" <?php if($kategori['status_kategori'] == "Nonaktif"){ echo "Selected";} ?>>Nonaktif</option>
				</select>
			</div>
		</div>
		
		<div class="col-sm-12">
			<div class="form-group pull-right">
				<a href="<?php echo base_url('admin/kategori'); ?>" class="btn btn-default"><i class="fa fa-undo"></i> Kembali</a>
				<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>