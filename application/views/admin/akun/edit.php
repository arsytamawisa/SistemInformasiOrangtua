<div id="page-inner">
	<h3>Edit Akun</h2>
		<form method="post">
			<div class="row">
				<div class="form-group col-md-6" >
					<label>Nama Admin</label>
					<input type="text" class="form-control" name="nama_admin" required value="<?= $detail['nama_admin'] ?>">
				</div>
				<div class="form-group col-md-6" >
					<label>Username</label>
					<input type="text" class="form-control" name="username" required value="<?= $detail['username'] ?>">
				</div>
			</div><p></p>
			<button class="btn btn-primary" style="margin-bottom: 25px">Simpan</button>
			<a href="<?= site_url('admin/akun') ?>" class="btn btn-danger" style="margin-bottom: 25px">Batal</a>
		</form>
	</div>