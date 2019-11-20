<div id="page-inner">
	<h3>Data Siswa</h3><hr>
	<a class="btn btn-primary" href="<?= site_url('admin/siswa/tambah') ?>" style="margin-bottom: 25px">Tambah Siswa</a>
	<table class="table table-hover" id="datatable">
		<thead>
			<tr>
				<th>No</th>
				<th>NIS</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ( $siswa as $key => $value ): ?>
			<tr>
				<td><?= $key+1 ?></td>
				<td><?= $value['nis'] ?></td>
				<td><?= $value['nama_siswa'] ?></td>
				<td><?= $value['jenis_kelamin'] ?></td>
				<td>
					<a href="<?= site_url("admin/siswa/edit/$value[id_siswa]") ?>"><span class="oi oi-pencil" title="Edit"></span></a>&nbsp;
					<a href="<?= site_url("admin/siswa/hapus/$value[id_siswa]") ?>"><span class="oi oi-delete" title="Hapus" onclick="return confirm('Konfirmasi data akan dihapus ?')"></span></a>
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>