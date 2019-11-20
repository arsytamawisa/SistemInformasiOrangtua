<style>.btn-primary,.btn-danger{margin-bottom:25px}</style>

<div id="page-inner">
	<h3>Tambah Admin</h2><hr>
		<form method="post">
			<div class="row">
				<div class="form-group col-md-6">
					<label>Nama</label>
					<input type="text" class="form-control" autofocus name="nama_admin" required>
				</div>
				<div class="form-group col-md-6">
					<label>Username</label>
					<input type="text" class="form-control" name="username" required>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-6">
					<label>Password</label>
					<div class="input-group">
						<input type="password" id="password_baru" name="password" class="form-control" data-toggle="password">
						<div class="input-group-addon">
							<a href="#" id="baru"><i class="oi oi-eye" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
				<div class="form-group col-md-6">
					<label>Konfirmasi Password</label>
					<div class="input-group">
						<input type="password" id="password_konfirmasi" name="konfirmasi" class="form-control" data-toggle="password">
						<div class="input-group-addon">
							<a href="#" id="konfirmasi"><i class="oi oi-eye" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</div><p></p><p></p>
			<button class="btn btn-primary">Simpan</button>
			<a href="<?= site_url('admin/akun') ?>" class="btn btn-danger">Batal</a>
		</form>
	</div>