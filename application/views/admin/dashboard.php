<div class="page-inner">
	<div class="row">
		<div class="col-md-4">
			<div id="card" class="card p-4">
				<h2>
					<?= $jml_siswa ?>
					<a href="<?= site_url('admin/siswa') ?>" id="normal">
						<span class="oi oi-person" title="Data Siswa"></span>
					</a>
				</h2>
				<h3>Siswa</h3>
			</div>
		</div>

		<div class="col-md-4">
			<div id="card" class="card p-4">
				<h2>
					<?= $jml_kelas ?>
					<a href="<?= site_url('admin/kelas') ?>" id="normal">
						<span class="oi oi-people" title="Data Kelas"></span>
					</a>
				</h2>
				<h3>Kelas</h3>
			</div>
		</div>

		<div class="col-md-4">
			<div id="card" class="card p-4">
				<h2>
					<?= $jml_mapel ?>
					<a href="<?= site_url('admin/mapel') ?>" id="normal">
						<span class="oi oi-book" title="Data Mapel"></span>
					</a>
				</h2>
				<h3>Mata Pelajaran</h3>
			</div>
		</div>
	</div><br><p></p>

	<div class="row">
		<div class="col-md-12">
			<div id="page-inner2">
				<h3>Pengumuman</h3>
				<table class="table table-hover">
					<thead>
						<tr>
							<td>No</td>
							<td>Judul Pengumuman</td>
							<td>Tanggal</td>
							<td>Berkas</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ( $pengumuman as $key => $value ): ?>
							<tr>
								<td><?= $key+1 ?></td>
								<td><?= htmlentities($value['judul']) ?></td>
								<td><?= tanggal_indo($value['tgl'], true) ?></td>
								<td><?= $value['berkas'] ?></td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>