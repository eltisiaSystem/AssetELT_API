<h3><?php echo $title; ?></h3>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Tambah">
	<i class="fa fa-plus"></i> Tambah
</button>

<div class="modal fade" id="Tambah">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">Tambah data Kategori</h4>
			</div>
			<?php echo form_open('admin/kategori'); ?>
			<div class="modal-body">
				<div class="form-group">
				<label for="nama_kategori">Jenis Ternak</label>
				<select name="nama_kategori" class="form-control" required="">
					<option value="Sapi">Sapi</option>
					<option value="Kambing">Kambing</option>
				</select>
			</div>
				<div class="form-group">
					<label for="nama_kategori">Ras</label>
					<input type="text" name="ras_kategori" class="form-control" value="<?php echo set_value('ras_kategori') ?>" required="" placeholder='Ras'>
				</div>
				<div class="form-group">
					<label for="status_kategori">Status</label>
					<select name="status_kategori" class="form-control" required="">
						<option value="Aktif">Aktif</option>
						<option value="Nonaktif">Nonaktif</option>
					</select>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Tutup</button>
				<button type="submit" class="btn btn-success" name="submit"><i class="fa fa-save"></i> Simpan</button>
			</div>
			<?php echo form_close(); ?>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
        <!-- /.modal -->