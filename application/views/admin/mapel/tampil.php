<style>.btn-primary{width:100%;margin-bottom:25px}</style>

<div id="page-inner">
	<h3>Data Mata Pelajaran</h3><hr>
	<form method="post">
		<div class="row">
			<div class="form-group col-md-6">
				<select name="id_jurusan" class="form-control" onchange="submit();">
					<option value="semua" <?php if($id_jurusan=="semua"){echo "selected";} ?>>
						Semua Jurusan
					</option>
					<?php foreach ($jurusan as $key => $value): ?>
					<option value="<?= $value['id_jurusan']; ?>" <?php if($id_jurusan==$value['id_jurusan']){echo "selected";} ?>><?= htmlentities($value['nama_jurusan']) ?>
					</option>
					<?php endforeach ?>
				</select>
			</div>
			<div class="form-group col-md-6">
				<a href="<?= site_url('admin/mapel/tambah') ?>" class="btn btn-primary">Tambah</a>
			</div>
		</div>
	<table class="table table-hover">
		<thead>
			<tr>
				<td>No</td>
				<td>Mata Pelajaran</td>
				<td>Jurusan</td>
				<td>KKM</td>
				<td>Opsi</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ( $mapel_jurusan as $key => $value ): ?>
				<tr>
					<td><?= $key+1 ?></td>
					<td><?= $value['nama_mapel'] ?></td>
					<td><?= htmlentities($value['nama_jurusan']) ?></td>
					<td><?= $value['kkm'] ?></td>
					<td>
						<a href="<?= site_url("admin/mapel/edit/$value[id_detail_mapel]") ?>"><span class="oi oi-pencil" title="Edit"></span></a>&nbsp;
						<a href="<?= site_url("admin/mapel/hapus/$value[id_detail_mapel]") ?>"><span class="oi oi-delete" title="Hapus" onclick="return confirm('Konfirmasi data akan dihapus ?')"></span></a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</form>
</div>