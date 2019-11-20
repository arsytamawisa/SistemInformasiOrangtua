<style>td{text-align: center}#mapel{text-align: left}</style>

<div class="content-inner">
  <section class="forms"> 
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h3 class="h4">Nilai</h3>
            </div>
            <div class="card-body">
              <div class="form-group row">
                <div class="col-sm-6">
                  <select id="id_detail_kelas" class="form-control mb-2">
                    <option value="">-- Pilih Kelas --</option>
                    <?php foreach ($kelas_siswa as $key => $value): ?>
                      <option value="<?php echo $value['id_detail_kelas']; ?>" <?php if($id_detail_kelas==$value['id_detail_kelas']){echo "selected";} ?>><?= $value['nama_tingkat'] ." ". $value['nama_jurusan'] ." ". $value['nama_kelas'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                <div class="col-sm-6">
                  <select name="semester" class="form-control mb-2">
                    <option value="">-- Pilih Semester --</option>
                    <?php foreach ($semester as $key => $value): ?>
                      <option value="<?php echo $value['id_semester']; ?>"><?php echo $value['nama_semester']; ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table table-hover table-bordered">
                  <thead>
                    <tr>
                      <td rowspan="2">No</td>
                      <td rowspan="2">Mata Pelajaran</td>
                      <td colspan="3">Ulangan Harian</td>
                      <td rowspan="2">Tugas</td>
                      <td rowspan="2">UTS</td>
                      <td rowspan="2">UAS</td>
                      <td rowspan="2">KKM</td>
                      <td rowspan="2">Nilai Akhir</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>2</td>
                      <td>3</td>
                    </tr>
                  </thead>
                  <tbody id="nilai"></tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>