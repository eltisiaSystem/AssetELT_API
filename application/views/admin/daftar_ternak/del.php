<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Hapus<?php echo $daftar_ternak['daftar_ternak_id'];?>">
	<i class="fa fa-trash"></i> Hapus
</button>

<div class="modal fade" id="Hapus<?php echo $daftar_ternak['daftar_ternak_id'];?>">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">Hapus data User</h4>
			</div>
			<div class="modal-body">
				<div class="alert alert-danger">
					<p>Yakin ingin menghapus data User <b><?php echo $daftar_ternak['inisial_ternak']; ?> ?</b></p>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Batalkan</button>
				<a href="<?php echo base_url('admin/daftar_ternak/hapus/'.$daftar_ternak['daftar_ternak_id']) ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Ya, Hapus data</a>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
        <!-- /.modal -->