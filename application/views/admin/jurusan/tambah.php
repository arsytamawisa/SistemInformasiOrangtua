<style>.btn-primary,.btn-danger{margin-bottom:25px}</style>

<div id="page-inner">
	<h3>Tambah Jurusan</h2><hr>
		<form method="post">
			<div class="row">
				<div class="form-group col-md-12">
					<label>Jurusan</label>
					<input type="text" class="form-control" autofocus name="nama_jurusan" placeholder="Contoh: IPA" required>
				</div>
			</div><p></p><p></p>
			<button class="btn btn-primary">Simpan</button>
			<a href="<?= site_url('admin/jurusan') ?>" class="btn btn-danger">Batal</a>
		</form>
	</div>