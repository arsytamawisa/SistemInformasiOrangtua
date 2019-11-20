<style>#btn{width:100%}td{text-align:center}tbody tr td:nth-child(2){text-align:left}#tgl{text-align:center}</style>

<div id="page-inner">
	<h3>Data Presensi <?= $kelas['nama_tingkat'] . " " . $kelas['nama_jurusan'] . " " . $kelas['nama_kelas'] ?> </h3><hr>
	<form method="POST">
		<div class="form-group row">
			<div class="form-group col-md-4">
				<select class="form-control" name="id_semester">
					<option value="">-- Pilih Semester --</option>
					<?php foreach ( $semester as $key => $value ): ?>
						<option value="<?= $value['id_semester'] ?>" <?php if($id_semester==$value['id_semester']){echo "selected";} ?>>
							<?= $value['nama_semester'] ?> 
						</option>
					<?php endforeach ?>
				</select>
			</div>
			<div class="form-group col-md-4">
				<select class="form-control" name="bulan">
					<option value="">-- Pilih Bulan --</option>
					<?php foreach ( $bulan as $key => $value ): ?>
						<option value="<?= $value['id_bulan'] ?>" <?php if($detail_bulan==$value['id_bulan']){echo "selected";} ?>>
							<?= $value['nama_bulan'] ?> 
						</option>
					<?php endforeach ?>
				</select>
			</div>
			<div class="form-group col-md-2">
				<button type="submit" class="btn btn-primary" style="width: 100%">Tampil</button>
			</div>
			<div class="form-group col-md-2">
				<a href="<?= site_url('admin/presensi') ?>" class="btn btn-danger" style="width: 100%">Kembali</a>
			</div>
		</div>
	</form>

	<table class="table table-bordered table-hover" id="datatable">
		<thead>
			<tr>
				<td>NIS</td>
				<td>Nama</td>
				<td>Hadir</td>
				<td>Izin</td>
				<td>Alpha</td>
				<td>Sakit</td>
				<td>Detail</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ( $presensi as $key => $value ): ?>
				<tr>
					<td><?= $value['nis'] ?></td>
					<td><?= $value['nama_siswa'] ?></td>
					<td><?= $value['hadir']['total']; ?></td>
					<td><?= $value['izin']['total']; ?></td>
					<td><?= $value['alpha']['total']; ?></td>
					<td><?= $value['sakit']['total']; ?></td>
					<td><a  href="#" type="button" data-toggle="modal" data-target="#<?php echo $key; ?>"><span class="oi oi-eye" title="Detail"></span></a></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	<?php foreach ($presensi as $key => $value): ?>
		<div id="<?= $key ?>" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><?= $value['nama_siswa'] ?></h4>
					</div>
					<div class="modal-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<td>No</td>
									<td>Tanggal</td>
									<td>Status</td>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($value['detail'] as $key => $value ): ?>
									<tr>
										<td><?= $key+1 ?></td>
										<td id="tgl"><?= tanggal_indo($value['tgl'], true) ?></td>
										<td><?= $value['status'] ?></td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>

			</div>
		</div>
	<?php endforeach ?>

