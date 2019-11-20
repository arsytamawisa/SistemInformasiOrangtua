<div id="page-inner">
	<h3>Data Admin</h3><hr>
	<a class="btn btn-primary" href="<?= site_url('admin/akun/tambah') ?>" style="margin-bottom: 25px">Tambah Data</a>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Admin</th>
				<th>Username</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ( $akun as $key => $value ): ?>
				<tr>
					<td><?= $key+1 ?></td>
					<td><?= $value['nama_admin'] ?></td>
					<td><?= $value['username'] ?></td>
					<td>
						<a href="<?= site_url("admin/akun/edit/$value[id_admin]") ?>"><span class="oi oi-pencil" title="Edit"></span></a>&nbsp;
						<?php if ($value['level']=="Admin"): ?>
						<a href="<?= site_url("admin/akun/hapus/$value[id_admin]") ?>"><span class="oi oi-delete" title="Hapus" onclick="return confirm('Konfirmasi data akan dihapus ?')"></span></a>
						<?php endif ?>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>