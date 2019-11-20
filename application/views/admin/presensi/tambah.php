<style>button,a{width:100%}</style>

<div id="page-inner">
	<h3>Tambah Presensi</h3><hr>
	<form method="post">
		<div class="row">
			<div class="form-group col-md-4">
				<input type="date" value="<?php echo date('Y-m-d'); ?>" class="form-control" name="tgl" required>
			</div>
			<div class="form-group col-md-4">
				<select class="form-control" name="id_semester">
					<option value="">-- Pilih Semester --</option>
					<?php foreach ( $semester as $key => $value ): ?>
						<option value="<?= $value['id_semester'] ?>">
							<?= $value['nama_semester'] ?> 
						</option>
					<?php endforeach ?>
				</select>
			</div>
			<div class="form-group col-md-2">
				<button class="btn btn-primary">Simpan</button>
			</div>
			<div class="form-group col-md-2">
				<a href="<?= site_url('admin/presensi') ?>" class="btn btn-danger">Batal</a>
			</div>
		</div>
		<table class="table table-hover">
			<thead>
				<tr>
					<td>NIS</td>
					<td>Nama</td>
					<td width="150px">Hadir</td>
					<td width="150px">Sakit</td>
					<td width="150px">Izin</td>
					<td width="150px">Alpha</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ( $siswa as $key => $value ): ?>
					<tr>
						<td><?= $value['nis'] ?></td>
						<td><?= $value['nama_siswa'] ?></td>
						<td><input type="radio" name="status[<?= $value['id_detail_kelas']; ?>]" value="hadir" checked></td>
						<td><input type="radio"	name="status[<?= $value['id_detail_kelas']; ?>]" value="sakit"></td>
						<td><input type="radio" name="status[<?= $value['id_detail_kelas']; ?>]" value="izin"></td>
						<td><input type="radio" name="status[<?= $value['id_detail_kelas']; ?>]" value="alpha"></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table><hr>
	</form>
</div>