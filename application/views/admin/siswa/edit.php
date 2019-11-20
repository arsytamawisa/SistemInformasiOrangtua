<div id="page-inner">
	<h3>Edit Siswa</h3>
	<form method="post">
		<div class="row">
			<div class="form-group col-md-6" >
				<label>NIS</label>
				<input type="text" placeholder="Nomor Induk Siswa" class="form-control" name="nis" id="focus" value="<?= $detail['nis'] ?>" required>
			</div>
			<div class="form-group col-md-6" >
				<label>Nama</label>
				<input type="text" placeholder="Nama Lengkap Siswa" class="form-control" name="nama_siswa" value="<?= $detail['nama_siswa'] ?>" required>
			</div>
			<div class="form-group col-md-6" >
				<label>Jenis Kelamin</label>
				<select class="form-control" name="jenis_kelamin">
					<option>-- Pilih --</option>
					<option value="Laki-laki" <?php if($detail['jenis_kelamin'] == "Laki-laki"){echo "selected";} ?>>Laki-laki</option>
					<option value="Perempuan" <?php if($detail['jenis_kelamin'] == "Perempuan"){echo "selected";} ?>>Perempuan</option>
				</select>
			</div>
			<div class="form-group col-md-6" >
				<label>Tanggal Lahir</label>
				<input type="date" placeholder="Nama Lengkap Siswa" class="form-control" name="tgl_lahir" value="<?= $detail['tgl_lahir'] ?>" required>
			</div>
		</div><br>
		<button class="btn btn-primary" style="margin-bottom:25px">Simpan</button>
		<a href="<?= site_url('admin/siswa') ?>" class="btn btn-danger" style="margin-bottom:25px">Batal</a>
	</form>
</div>