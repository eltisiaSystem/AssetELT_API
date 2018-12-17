<div class="box col-md-9">
	<h3><?php echo $title; ?></h3>
	<div class="box-body">
		
		<div class="col-sm-12">
			<table>
				<tr>
					<th>Judul </th>
					<td>: </td>
					<td><?php echo $gallery['judul_gallery']; ?></td>
				</tr>
				<tr>
					<th>Jenis Konten </th>
					<td>: </td>
					<td><?php echo $gallery['nama_kategori']; ?></td>
				</tr>
				<tr>
					<td>Status </td>
					<td>: </td>
					<td><?php echo $gallery['status_gallery']; ?></td>
				</tr>
				<tr>
					<th>Gambar </th>
					<td>: </td>
					<td><img src="<?php echo base_url('assets/uploads/slider/thumbs/' . $gallery['path_file']) ?>" alt="" style="width: 480px"></td>
				</tr>
				<tr>
					<th>Isi Konten </th>
					<td>: </td>
					<td><?php echo $gallery['deskripsi_gallery']; ?></td>
				</tr>
				<tr>
					<th>Created By </th>
					<td>: </td>
					<td><?php echo $gallery['created_by']; ?></td>
				</tr>
				<tr>
					<th>Created At</th>
					<td>: </td>
					<td><?php echo date('d-M-Y', strtotime($gallery['created_at'])); ?></td>
				</tr>
				<tr>
					<th>Updated By </th>
					<td>: </td>
					<td><?php echo $gallery['updated_by']; ?></td>
				</tr>
				<tr>
					<th>Updated At</th>
					<td>: </td>
					<td><?php echo date('d-M-Y', strtotime($gallery['created_at'])); ?></td>
				</tr>
			</table>
		</div>
		<div class="col-sm-12">
			<div class="form-group pull-right">
				<a href="<?php echo base_url('admin/slider'); ?>" class="btn btn-default"><i class="fa fa-undo"></i> Kembali</a>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>