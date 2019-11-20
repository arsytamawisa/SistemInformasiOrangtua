<div id="page-inner">
	<h3>Edit Data Pengumuman</h3><hr>
	<form method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="form-group col-md-6" >
				<label>Judul</label>
				<input type="text" name="judul" class="form-control" id="focus" value="<?= $detail['judul'] ?>">
			</div>
			<div class="form-group col-md-6">
				<label>Upload Berkas</label>
				<input type="file" name="berkas" class="form-control">
			</div>
		</div><p></p>
		<button class="btn btn-primary" style="margin-bottom: 25px">Simpan</button>
		<a href="<?= site_url('admin/pengumuman') ?>" class="btn btn-danger" style="margin-bottom: 25px">Batal</a>
	</form>
</div>