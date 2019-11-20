<div id="page-inner">
	<h3>Data Mata Pelajaran</h3> <hr>
	<table class="table table-hover" id="datatable">
		<thead>
			<tr>
				<td>No</td>
				<td>Mata Pelajaran</td>
				<td>KKM</td>
				<td>Opsi</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ( $detail_mapel as $key => $value ): ?>
				<tr>
					<td><?= $key+1 ?></td>
					<td><?= $value['nama_mapel'] ?></td>
					<td><?= $value['kkm'] ?></td>
					<td>
						<a href="<?= site_url("admin/mapel/edit/$value[id_detail_mapel]") ?>"><span class="oi oi-pencil" title="Edit"></span></a>&nbsp;
						<a href="<?= site_url("admin/mapel/hapus/$value[id_detail_mapel]") ?>"><span class="oi oi-delete" title="Hapus"></span></a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table><hr>
	<a class="btn btn-primary" href="<?= site_url('admin/mapel/tambah/'.$jurusan) ?>" style="margin-bottom: 25px">Tambah</a>&emsp;
	<a class="btn btn-danger" href="<?= site_url('admin/mapel') ?>" style="margin-bottom: 25px">Batal</a>
</div>