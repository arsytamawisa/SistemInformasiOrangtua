<style>.btn-primary,.btn-danger{margin-bottom:25px}</style>

<div id="page-inner">
	<h3>Tambah Tahun Ajaran</h2><hr>
		<form method="post">
			<div class="row">
				<div class="form-group col-md-6">
					<label>Tahun Ajaran</label>
					<input type="text" class="form-control" autofocus name="nama_tahun_ajaran" placeholder="Contoh: 2018/2019" required>
				</div>
				<div class="form-group col-md-6">
					<label>Status</label>
					<input type="text" class="form-control" value="Aktif" name="status" readonly required>
				</div>
			</div><p></p><p></p>
			<button class="btn btn-primary">Simpan</button>
			<a href="<?= site_url('admin/tahun') ?>" class="btn btn-danger">Batal</a>
		</form>
	</div>