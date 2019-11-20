<style>.btn-primary, .btn-danger{width:100%}</style>
<div id="page-inner">
	<h3>Data Kelas <?= $kelas['nama_tingkat']; ?> <?= $kelas['nama_jurusan']; ?> <?= $kelas['nama_kelas'] ?></h3> <hr>
	<form method="POST">
		<table class="table table-hover" id="datatable">
			<thead>
				<tr>
					<td><input type="checkbox" id="checkall" onClick="check_uncheck_checkbox(this.checked);"></td>
					<td>NIS</td>
					<td>Nama</td>
					<td>Jenis Kelamin</td>
					<td>Hapus</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ( $detail_kelas as $key => $value ): ?>
					<tr>
						<td><input type="checkbox" name="siswa[<?= $value['id_siswa'] ?>]"></td>
						<td><?= $value['nis'] ?></td>
						<td><?= $value['nama_siswa'] ?></td>
						<td><?= $value['jenis_kelamin'] ?></td>
						<td>&nbsp;
							<a href="<?= site_url("admin/siswa/hapus_siswa/$value[id_detail_kelas]/$value[id_kelas]"); ?>"><span class="oi oi-delete" title="Hapus" onclick="return confirm('Konfirmasi data akan dihapus ?')"></span>
							</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table><hr>

		<h3>Naik Kelas</h3>
		<div class="row">
			<div class="form-group col-md-4">
				<label>Tahun Ajaran</label>
				<select class="form-control" id="tahun" required>
					<option value="">-- Pilih Tahun Ajaran --</option>
					<?php foreach ( $tahun_ajaran as $key => $value ): ?>
						<option value="<?= $value['id_tahun_ajaran'] ?> "><?= $value['nama_tahun_ajaran'] ?> </option>
					<?php endforeach ?>
				</select>
			</div>
			<div class="form-group col-md-4">
				<label>Jurusan</label>
				<select class="form-control" id="jurusan" required>
					<option value="">-- Pilih Jurusan --</option>
					<?php foreach ( $jurusan as $key => $value ): ?>
						<option value="<?= $value['id_jurusan'] ?> "><?= $value['nama_jurusan'] ?> </option>
					<?php endforeach ?>
				</select>
			</div>
			<div class="form-group col-md-4">
				<label>Kelas</label>
				<select class="form-control" name="id_kelas" required>
					<option value="">-- Pilih Kelas --</option>
				</select>
			</div>
		</div><br>
		<div class="row">
			<div class="form-group col-md-4 col-md-offset-4">
				<button class="btn btn-primary" style="margin-bottom: 25px">Simpan</button>
			</div>
			<div class="form-group col-md-4">
				<a href="<?= site_url('admin/kelas') ?>" class="btn btn-danger" style="margin-bottom:25px">Batal</a>
			</div>
		</div>
	</form>
</div>

