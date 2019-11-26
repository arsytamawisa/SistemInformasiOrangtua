<div id="page-inner">
	<h3>Tambah Kelas</h3>
	<form method="post">
		<div class="row">
            <div class="form-group col-md-6">
				<label>Jurusan</label>
				<select class="form-control" required name="id_jurusan">
					<option value="">-- Pilih --</option>
					<?php foreach ( $jurusan as $key => $value ): ?>
					<option value="<?= $value['id_jurusan'] ?>">
						<?= htmlentities($value['nama_jurusan']) ?> 
					</option>
					<?php endforeach ?>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label>Tingkat</label>
				<select class="form-control" required name="id_tingkat">
					<option value="">-- Pilih --</option>
					<?php foreach ( $tingkat as $key => $value ): ?>
					<option value="<?= $value['id_tingkat'] ?>">
						<?= $value['nama_tingkat'] ?> 
					</option>
					<?php endforeach ?>
				</select>
			</div>
		</div>
        <div class="row">
			<div class="form-group col-md-6">
				<label>Kelas</label>
				<input type="text" class="form-control" name="nama_kelas" required>
			</div>
			<div class="form-group col-md-6">
				<label>Tahun Ajaran</label>
				<select class="form-control" id="tahun" name="id_tahun_ajaran" required>
					<option value="">-- Pilih --</option>
					<?php foreach ( $tahun_ajaran as $key => $value ): ?>
						<option value="<?= $value['id_tahun_ajaran'] ?> "><?= htmlentities($value['nama_tahun_ajaran']) ?> </option>
					<?php endforeach ?>
				</select>
			</div>
		</div><p></p>
		<button class="btn btn-primary" style="margin-bottom:25px">Simpan</button>
		<a href="<?= site_url('admin/kelas') ?>" class="btn btn-danger" style="margin-bottom:25px">Batal</a>
	</form>
</div>