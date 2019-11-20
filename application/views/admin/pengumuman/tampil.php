<style>.btn-primary{margin-bottom:25px}</style>

<div id="page-inner">
	<h3>Data Pengumuman</h3><hr>
	<a class="btn btn-primary" href="<?= site_url('admin/pengumuman/tambah') ?>">Tambah Data</a>
	<table class="table table-hover" id="datatable">
		<thead>
			<tr>
				<th>No</th>
				<th>Judul</th>
				<th>Tanggal</th>
				<th>Berkas</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ( $pengumuman as $key => $value ): ?>
				<tr>
					<td><?= $key+1 ?></td>
					<td><?= $value['judul'] ?></td>
					<td><?= tanggal_indo($value['tgl'], true) ?></td>
					<td><?= $value['berkas'] ?></td>
					<td>
						<a href="<?= site_url("admin/pengumuman/edit/$value[id_pengumuman]") ?>">
							<span class="oi oi-pencil" title="Edit"></span>
						</a> &nbsp;
						<a href="<?= site_url("admin/pengumuman/hapus/$value[id_pengumuman]") ?>" onclick="return confirm('Konfirmasi data akan dihapus ?')">
							<span class="oi oi-delete" title="Hapus"></span>
						</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
