<div id="page-inner">
	<h3>Tambah Jurusan</h2>
		<form method="post">
			<div class="row">
				<div class="form-group col-md-12" >
					<label>Jurusan</label>
					<input type="text" class="form-control" autofocus name="nama_jurusan" placeholder="Contoh: IPA" required value="<?= htmlentities($detail['nama_jurusan']) ?>">
				</div>
			</div>
			<button class="btn btn-primary" style="margin-bottom: 25px">Simpan</button>
			<a href="<?= site_url('admin/jurusan') ?>" class="btn btn-danger" style="margin-bottom: 25px">Batal</a>
		</form>
	</div>