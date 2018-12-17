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
		<?php echo form_open_multipart('admin/slider/tambah'); ?>
		<div class="col-sm-12">
			<div class="form-group">
				<label for="judul_gallery">Judul Gallery</label>
				<input type="text" name="judul_gallery" class="form-control" value="<?php echo set_value('judul_gallery'); ?>" placeholder="Judul gallery" required="">
			</div>
		</div>
		<!-- <div class="col-sm-4">
			<div class="form-group">
				<label for="kategori_id">Kategori</label>
				<select name="kategori_id" class="form-control" required="">
					<option value="">Pilih Jenis Kategori</option>
						<?php  //foreach($kategori as $kategori) {?>
					<option value="<?php //echo $kategori['kategori_id'] ?>"><?php //echo $kategori['nama_kategori']; ?></option>
						<?php //} ?>
				</select>
			</div>
		</div> -->
		<div class="col-sm-12">
			<div class="form-group">
				<label for="path_file">Upload Foto</label>
				<input type="file" name="path_file" class="form-control">
			</div>
		</div>
		<div class="col-sm-12">
			<div class="form-group">
				<label for="deskripsi_gallery">Deskripsi Gallery</label>
				<textarea name="deskripsi_gallery" class="form-control tinymce" rows="4" placeholder="Deskripsi Gallery" ><?php echo set_value('deskripsi_gallery'); ?></textarea>
			</div>

			<div class="form-group">
				<label for="status_gallery">Status</label>
				<select name="status_gallery" class="form-control" required="">
					<option value="Publish">Publish</option>
					<option value="Draft">Draft</option>
				</select>
			</div>
		</div>

		<div class="col-sm-12">
			<div class="form-group pull-right">
				<a href="<?php echo base_url('admin/slider'); ?>" class="btn btn-default"><i class="fa fa-undo"></i> Kembali</a>
				<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>