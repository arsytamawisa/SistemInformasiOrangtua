<style>.btn-primary,.btn-danger{margin-bottom:25px}</style>

<div id="page-inner">
	<h3>Tambah Siswa</h3>
	<form method="post">
		<div class="row">
			<div class="form-group col-md-6">
				<label>NIS</label>
				<input type="text" placeholder="Nomor Induk Siswa" class="form-control" pattern="[0-9]{3,4}" autofocus name="nis" required>
			</div>
			<div class="form-group col-md-6">
				<label>Nama</label>
				<input type="text" placeholder="Nama Lengkap Siswa" pattern="[A-Z a-z ]{3,100}" class="form-control" name="nama_siswa" required>
			</div>
			<div class="form-group col-md-6">
				<label>Jenis Kelamin</label>
				<select class="form-control" name="jenis_kelamin" required>
					<option value="">-- Pilih --</option>
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label>Tanggal Lahir</label>
				<input type="date" name="tgl_lahir" class="form-control" required>
			</div>
		</div><p></p>
		<div class="row">
			<div class="form-group col-md-4">
				<select class="form-control" id="tahun" required>
					<option value="">-- Pilih Tahun Ajaran --</option>
					<?php foreach ( $tahun_ajaran as $key => $value ): ?>
						<option value="<?= $value['id_tahun_ajaran'] ?>">
							<?= $value['nama_tahun_ajaran'] ?>
						</option>
					<?php endforeach ?>
				</select>
			</div>
			<div class="form-group col-md-4" >
				<select class="form-control" id="jurusan" required>
					<option value="">-- Pilih Jurusan --</option>
					<?php foreach ( $jurusan as $key => $value ): ?>
						<option value="<?= $value['id_jurusan'] ?>">
							<?= $value['nama_jurusan'] ?>
						</option>
					<?php endforeach ?>
				</select>
			</div>
			<div class="form-group col-md-4" >
				<select class="form-control" name="id_kelas" required>
					<option value="">-- Pilih Kelas --</option>
				</select>
			</div>
		</div><p></p>
		<button class="btn btn-primary">Simpan</button>
		<a href="<?= site_url('admin/siswa') ?>" class="btn btn-danger">Batal</a>
	</form>
</div>