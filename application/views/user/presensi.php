<style>td,th{text-align: center}</style>

<div class="content-inner">
  <section class="forms"> 
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h3 class="h4">Presensi</h3>
            </div>
            <div class="card-body">
              <div class="form-group row">
                <div class="col-sm-6">
                  <select id="kelas" class="form-control mb-2">
                    <option value="">-- Pilih Kelas --</option>
                    <?php foreach ($kelas_siswa as $key => $value): ?>
                      <option value="<?php echo $value['id_detail_kelas']; ?>" <?php if($id_detail_kelas==$value['id_detail_kelas']){echo "selected";} ?>><?= $value['nama_tingkat'] ." ". $value['nama_jurusan'] ." ". $value['nama_kelas'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                <div class="col-sm-6">
                  <select name="bulan" class="form-control mb-2">
                    <option value="">-- Pilih Bulan --</option>
                    <?php foreach ($bulan as $key => $value): ?>
                      <option value="<?php echo $value['id_bulan']; ?>" <?php if($value['id_bulan']==$bulan_sekarang){echo "selected";} ?>><?php echo $value['nama_bulan']; ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table table-hover table-bordered">
                  <thead>
                    <tr>
                      <td>No</td>
                      <td>Tanggal</td>
                      <td>Keterangan</td>
                    </tr>
                  </thead>
                  <tbody id="absensi"></tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>