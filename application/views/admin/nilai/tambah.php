<div id="page-inner">
	<h3>Data Nilai</h3><hr>
	<form method="post">
		<div class="form-group row">
			<div class="form-group col-md-6">
				<select class="form-control" name="id_semester">
					<option value="">-- Pilih Semester --</option>
					<?php foreach ( $semester as $key => $value ): ?>
						<option value="<?= $value['id_semester'] ?>" <?php if($id_semester==$value['id_semester']){echo "selected" ;} ?> >
							<?= $value['nama_semester'] ?> 
						</option>
					<?php endforeach ?>
				</select>
			</div>
			<div class="form-group col-md-6">
				<select class="form-control" name="id_detail_mapel" onchange="submit();">
					<option value="">-- Pilih Mata Pelajaran --</option>
					<?php foreach ( $mapel as $key => $value ): ?>
						<option value="<?= $value['id_detail_mapel'] ?>" <?php if($id_detail_mapel==$value['id_detail_mapel']){echo "selected" ;} ?> >
							<?= $value['nama_mapel'] ?> 
						</option>
					<?php endforeach ?>
				</select>
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-4">
				<label>Ulangan Harian 3</label>
				<input type="number" class="form-control" value="<?php if($nilai['uh1']==0){echo " ";}else{echo $nilai['uh1'];} ?>" id="uh1" name="uh1" placeholder="0-100" min="0" max="100">
			</div>
			<div class="form-group col-md-4">
				<label>Ulangan Harian 3</label>
				<input type="number" class="form-control" value="<?php if($nilai['uh2']==0){echo " ";}else{echo $nilai['uh2'];} ?>" id="uh2" name="uh2" placeholder="0-100" min="0" max="100">
			</div>
			<div class="form-group col-md-4">
				<label>Ulangan Harian 3</label>
				<input type="number" class="form-control" value="<?php if($nilai['uh3']==0){echo " ";}else{echo $nilai['uh3'];} ?>" id="uh3" name="uh3" placeholder="0-100" min="0" max="100">
			</div>
		</div><p></p>
		<div class="row">
			<div class="form-group col-md-6">
				<label>Tugas</label>
				<input type="number" class="form-control" value="<?php if($nilai['tugas']==0){echo " ";}else{echo $nilai['tugas'];} ?>" id="tugas" name="tugas" placeholder="0-100" min="0" max="100">
			</div>
			<div class="form-group col-md-6">
				<label>UTS</label>
				<input type="number" class="form-control" value="<?php if($nilai['uts']==0){echo " ";}else{echo $nilai['uts'];} ?>" id="uts" name="uts" placeholder="0-100" min="0" max="100">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-6">
				<label>UAS</label>
				<input type="number" class="form-control" value="<?php if($nilai['uas']==0){echo " ";}else{echo $nilai['uas'];} ?>" id="uas" name="uas" placeholder="0-100" min="0" max="100">
			</div>
			<div class="form-group col-md-6">
				<label>Nilai Akhir</label>
				<input type="text" class="form-control" value="<?php if($nilai['nilai_akhir']==null){echo " ";}else{echo $nilai['nilai_akhir'];} ?>" id="nilai_akhir" name="nilai_akhir">
			</div>
		</div><br>
		<button class="btn btn-primary" style="margin-bottom: 25px" name="simpan" value="simpan">Simpan</button>
		<a href="<?= site_url('admin/nilai/detail/'.$detail_kelas['id_kelas']) ?>" class="btn btn-danger" style="margin-bottom: 25px">Batal</a>
	</form>
</div>

<script>

	var uh1 = document.getElementById('uh1');
	uh1.oninvalid = function(e){e.target.setCustomValidity('Nilai 0-100')}

	var uh2 = document.getElementById('uh2');
	uh2.oninvalid = function(e){e.target.setCustomValidity('Nilai 0-100')}

	var uh3 = document.getElementById('uh3');
	uh3.oninvalid = function(e){e.target.setCustomValidity('Nilai 0-100')}

	var tugas = document.getElementById('tugas');
	tugas.oninvalid = function(e){e.target.setCustomValidity('Nilai 0-100')}

	var uts = document.getElementById('uts');
	uts.oninvalid = function(e){e.target.setCustomValidity('Nilai 0-100')}

	var uas = document.getElementById('uas');
	uas.oninvalid = function(e){e.target.setCustomValidity('Nilai 0-100')}

</script>