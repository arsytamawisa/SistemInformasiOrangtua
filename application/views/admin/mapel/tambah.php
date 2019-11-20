<div id="page-inner">
	<h3>Tambah Mata Pelajaran</h2>
		<form method="post">
			<div class="row">
				<div class="form-group col-md-6">
					<select name="id_jurusan" class="form-control">
						<option value="semua">Semua Jurusan</option>
						<?php foreach ($jurusan as $key => $value): ?>
							<option value="<?= $value['id_jurusan']; ?>"><?= $value['nama_jurusan']; ?></option>
						<?php endforeach ?>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-6" >
					<label>Mata Pelajaran</label>
					<input type="text" placeholder="Mata Pelajaran" class="form-control" name="nama_mapel" required autofocus>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-6" >
					<label>KKM</label>
					<input type="number" placeholder="KKM" class="form-control" name="kkm" required autofocus>
				</div>
			</div>
			<button class="btn btn-primary" style="margin-bottom:25px">Simpan</button>
			<a href="<?= site_url('admin/mapel') ?>" class="btn btn-danger" style="margin-bottom:25px">Batal</a>
		</form>
	</div>