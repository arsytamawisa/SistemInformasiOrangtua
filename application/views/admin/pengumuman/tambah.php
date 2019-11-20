<div id="page-inner">
	<h3>Tambah Pengumuman</h3><hr>
	<form method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="form-group col-md-6" >
				<label>Judul Pengumuman</label>
				<input type="text" class="form-control" name="judul" required autofocus>
			</div>
			<div class="form-group col-md-6">
				<label>Upload Berkas</label>
				<input type="file" class="form-control" name="berkas">
			</div>
		</div><p></p>
		<button class="btn btn-primary" style="margin-bottom: 25px">Simpan</button>
		<a href="<?= site_url('admin/pengumuman') ?>" class="btn btn-danger" style="margin-bottom: 25px">Batal</a>
	</form>
</div>