<div id="page-inner">
	<h3>Data Tahun Ajaran</h3><hr>
	<a class="btn btn-primary" href="<?= site_url('admin/tahun/tambah') ?>" style="margin-bottom: 25px">Tambah Data</a>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Tahun Ajaran</th>
				<th>Status</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ( $tahun as $key => $value ): ?>
				<tr>
					<td><?= $key+1 ?></td>
					<td><?= htmlentities($value['nama_tahun_ajaran']) ?></td>
					<td><?= $value['status'] ?></td>
					<td>
						<a href="<?= site_url("admin/tahun/edit/$value[id_tahun_ajaran]") ?>"><span class="oi oi-pencil" title="Edit"></span></a>&nbsp;
						<a href="<?= site_url("admin/tahun/hapus/$value[id_tahun_ajaran]") ?>"><span class="oi oi-delete" title="Hapus" onclick="return confirm('Konfirmasi data akan dihapus ?')"></span></a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>