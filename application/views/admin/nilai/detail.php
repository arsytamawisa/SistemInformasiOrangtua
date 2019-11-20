<style>tr td{text-align:center}tbody tr td:nth-child(2){text-align:left}</style>

<div id="page-inner">
	<h3>Data Nilai <?= $kelas['nama_tingkat'] . " " . $kelas['nama_jurusan'] . " " . $kelas['nama_kelas'] ?> </h3><hr>
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
				<select class="form-control" name="id_detail_mapel">
					<option value="">-- Pilih Mata Pelajaran --</option>
					<?php foreach ( $mapel as $key => $value ): ?>
						<option value="<?= $value['id_detail_mapel'] ?>" <?php if($detail_mapel==$value['id_detail_mapel']){echo "selected";} ?>>
							<?= $value['nama_mapel'] ?> 
						</option>
					<?php endforeach ?>
				</select>
			</div>
			<div class="form-group col-md-2">
				<button type="submit" class="btn btn-primary" style="width: 100%">Tampilkan</button>
			</div>
			<div class="form-group col-md-2">
				<a href="<?= site_url('admin/nilai') ?>" class="btn btn-danger" style="width: 100%">Kembali</a>
			</div>
		</div>
		<table class="table table-bordered table-hover" id="datatable">
			<thead>		
				<tr>
					<td rowspan="2">NIS</td>
					<td rowspan="2">Nama</td>
					<td colspan="3">Ulangan Harian</td>
					<td rowspan="2">Tugas</td>
					<td rowspan="2">UTS</td>
					<td rowspan="2">UAS</td>
					<td rowspan="2">Nilai Akhir</td>
					<td rowspan="2">Kelola</td>
				</tr>
				<tr>
					<td>1</td>
					<td>2</td>
					<td>3</td>
				</tr>			
			</thead>
			<tbody>
				<?php foreach ( $detail_kelas as $key => $value ): ?>	
					<tr>
						<td><?= $value['nis'] ?></td>
						<td><?= $value['nama_siswa'] ?></td>
						<td>
							<?php
							if( $value['uh1'] == 0){
								echo "-";
							}
							else{
								echo $value['uh1'];
							} ?>
						</td>
						<td>
							<?php
							if( $value['uh2'] == 0){
								echo "-";
							}
							else{
								echo $value['uh2'];
							} ?>
						</td>
						<td>
							<?php
							if( $value['uh3'] == 0){
								echo "-";
							}
							else{
								echo $value['uh3'];
							} ?>
						</td>
						<td>
							<?php
							if( $value['tugas'] == 0){
								echo "-";
							}
							else{
								echo $value['tugas'];
							} ?>
						</td>
						<td>
							<?php
							if( $value['uts'] == 0){
								echo "-";
							}
							else{
								echo $value['uts'];
							} ?>
						</td>
						<td>
							<?php
							if( $value['uas'] == 0){
								echo "-";
							}
							else{
								echo $value['uas'];
							} ?>
						</td>
						<td>
							<?php
							if( $value['nilai_akhir'] == null){
								echo "-";
							}
							else{
								echo $value['nilai_akhir'];
							} ?>
						</td>
						<td>
							<?php if (!empty($id_semester) AND !empty($detail_mapel)): ?>
							<a href="<?= site_url("admin/nilai/siswa/$value[id_detail_kelas]/$id_semester/$detail_mapel/$id_kelas") ?>" title="Tambah"><span class="iconify icon:fa-solid:plus-circle"></span></a>
						<?php endif ?>
					</td> 
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</form>
</div>