<div id="page-inner">
	<h3>Tambah Tahun Ajaran</h2>
		<form method="post">
			<div class="row">
				<div class="form-group col-md-6" >
					<label>Tahun Ajaran</label>
					<input type="text" class="form-control" autofocus name="nama_tahun_ajaran" placeholder="Contoh: 2018/2019" required value="<?= $detail['nama_tahun_ajaran'] ?>">
				</div>
				<div class="form-group col-md-6" >
					<label>Status</label>
					<select class="form-control" name="status" required>
						<option value="Aktif" <?php if($detail['status'] == "Aktif"){echo "selected";} ?>>Aktif</option>
						<option value="Tidak Aktif" <?php if($detail['status'] == "Tidak Aktif"){echo "selected";} ?>>Tidak Aktif</option>
					</select>
				</div>
			</div>
			<button class="btn btn-primary" style="margin-bottom: 25px">Simpan</button>
			<a href="<?= site_url('admin/tahun') ?>" class="btn btn-danger" style="margin-bottom: 25px">Batal</a>
		</form>
	</div>