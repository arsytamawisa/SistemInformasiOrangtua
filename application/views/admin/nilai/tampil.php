<style>span:hover{text-decoration:none}</style>

<div id="page-inner">
	<h3>Data Nilai</h3><hr>
	<form method="POST">
		<div class="row">
			<div class="form-group col-md-6">
				<label>Tahun Ajaran</label>
				<select class="form-control" name="tahun" required="" onchange="submit()">
					<?php foreach ( $tahun_ajaran as $key => $value ): ?>
						<option value="<?= $value['id_tahun_ajaran'] ?>" <?php if($value['id_tahun_ajaran']==$tahun){echo "selected";} ?>><?= $value['nama_tahun_ajaran'] ?> 
					</option>
				<?php endforeach ?>
			</select>
			</div>
		
			<div class="form-group col-md-6">
				<label>Jurusan</label>
				<select class="form-control" name="jurusan" required="" onchange="submit()">
					<option value="Semua">IPA & IPS</option>
					<?php foreach ( $jurusan as $key => $value ): ?>
						<option value="<?= $value['id_jurusan'] ?>" <?php if($value['id_jurusan']==$prodi){echo "selected";} ?>><?= $value['nama_jurusan'] ?> 
					</option>
					<?php endforeach ?>
				</select>
			</div>
		</div>
	</form>

	<table class="table table-hover">
		<thead>
			<tr>
				<td>No</td>
				<td>Kelas</td>
				<td>Tahun Ajaran</td>
				<td>Jumlah Siswa</td>
				<td>Detail</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ( $kelas as $key => $value ): ?>
				<tr>
					<td><?= $key+1 ?></td>
					<td><?= $value['nama_tingkat'] . " " . $value['nama_jurusan'] . " " . $value['nama_kelas'] ?></td>
					<td><?= $value['nama_tahun_ajaran'] ?></td>
					<td><?= hitung_siswa($value['id_kelas']) ?></td>
					<td>&nbsp;&nbsp;
						<?php if (hitung_siswa($value['id_kelas']) !== 0): ?>
						<a href="<?= site_url("admin/nilai/detail/$value[id_kelas]") ?>"> 
							<span class="oi oi-eye" title="Detail"></span>
						</a>
						<?php endif ?>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>