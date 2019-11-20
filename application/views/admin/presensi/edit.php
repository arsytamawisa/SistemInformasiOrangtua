<div id="page-inner">
	<h3>Edit Siswa</h3>
		<form method="post">
			<div class="row">
				<div class="form-group col-md-6" >
					<label>NIS</label>
					<input type="text" id="focus" placeholder="Nomor Induk Siswa" class="form-control" name="nis" value="">
				</div>
				<div class="form-group col-md-6" >
					<label>Nama</label>
					<input type="text" placeholder="Nama Lengkap Siswa" class="form-control" name="nama_siswa" value="">
				</div>
				<div class="form-group col-md-6" >
					<label>Tahun Angkatan</label>
					<select class="form-control" name="id_tahun" id="tahun">
						<?php foreach ($data_tahun_ajaran as $key => $value) : ?>
							<option value="">
								
							</option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group col-md-6" >
					<label>Kelas</label>
					<select name="nama_kelas" id="kelas" class="form-control mb-3">
						<option selected>Kelas</option>
					</select>
				</div>
			</div><br>
			<button class="btn btn-primary" name="simpan" style="margin-bottom:25px"> Simpan </button>
			<a href="<?= site_url('siswa') ?>" class="btn btn-danger" style="margin-bottom:25px"> Batal </a>
		</form>
	</div>