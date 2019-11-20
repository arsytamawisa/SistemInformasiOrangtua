<style>span:hover{text-decoration:none}.btn-primary{width:100%;margin-bottom:25px}</style>

<div id="page-inner">
	<h3>Data Kelas</h3><hr>
	<div class="row">
		<form method="POST">
			<div class="form-group col-md-6">
				<select class="form-control" name="tahun" required="" onchange="submit()">
					<?php foreach ( $tahun_ajaran as $key => $value ): ?>
						<option value="<?= $value['id_tahun_ajaran'] ?>" <?php if($value['id_tahun_ajaran']==$tahun){echo "selected";} ?>><?= $value['nama_tahun_ajaran'] ?> 
					</option>
				<?php endforeach ?>
			</select>
		</div>
	</form>
	<div class="form-group col-md-6">
		<a href="<?= site_url('admin/kelas/tambah') ?>" class="btn btn-primary">Tambah</a>
	</div>
</div>
<table class="table table-hover">
	<thead>
		<tr>
			<th>No</th>
			<th>Kelas</th>
			<th>Tahun Ajaran</th>
			<th>Jumlah Siswa</th>
			<th>Opsi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ( $kelas as $key => $value ): ?>
			<tr>
				<td><?= $key+1 ?></td>
				<td><?= $value['nama_tingkat'] . " " . $value['nama_jurusan'] . " " . $value['nama_kelas'] ?></td>
				<td><?= $value['nama_tahun_ajaran'] ?></td>
				<td><?= hitung_siswa($value['id_kelas']) ?></td>
				<td>
					<a href="<?= site_url("admin/kelas/hapus/$value[id_kelas]") ?>"><span class="oi oi-delete" title="Hapus" onclick="return confirm('Konfirmasi data akan dihapus ?')"></span></a>
					<?php if (hitung_siswa($value['id_kelas']) !== 0): ?>&nbsp;
						<a href="<?= site_url("admin/kelas/detail/$value[id_kelas]") ?>"><span class="oi oi-eye" title="Detail"></span></a>
					<?php endif ?>&nbsp;
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
</div>