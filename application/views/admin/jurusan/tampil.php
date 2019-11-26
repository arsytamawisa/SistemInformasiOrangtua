<div id="page-inner">
	<h3>Data Tahun Ajaran</h3><hr>
	<a class="btn btn-primary" href="<?= site_url('admin/jurusan/tambah') ?>" style="margin-bottom: 25px">Tambah Data</a>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Jurusan</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ( $jurusan as $key => $value ): ?>
				<tr>
					<td><?= $key+1 ?></td>
					<td><?= htmlentities($value['nama_jurusan']) ?></td>
					<td>
						<a href="<?= site_url("admin/jurusan/edit/$value[id_jurusan]") ?>">
							<span class="oi oi-pencil" title="Edit"></span>
						</a>&nbsp;
						<a href="<?= site_url("admin/jurusan/hapus/$value[id_jurusan]") ?>">
							<span class="oi oi-delete" title="Hapus" onclick="return confirm('Konfirmasi data akan dihapus ?')"></span>
						</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>