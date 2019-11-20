<style>.btn-primary,.btn-danger{margin-bottom:25px}</style>

<div id="page-inner">
	<h3>Edit Data Mata Pelajaran</h3><hr>
	<form method="post">
		<div class="row">
			<div class="form-group col-md-6" >
				<label>Mata Pelajaran</label>
				<input type="text" name="nama_mapel" class="form-control" value="<?= $detail['nama_mapel'] ?>">
			</div>
			<div class="form-group col-md-6" >
				<label>KKM</label>
				<input type="number" min="0" max="100" name="kkm" class="form-control" value="<?= $detail['kkm'] ?>">
			</div>
		</div><p></p>
		<button class="btn btn-primary">Simpan</button>
		<a href="<?= site_url('admin/mapel') ?>" class="btn btn-danger">Batal</a>
	</form>
</div>