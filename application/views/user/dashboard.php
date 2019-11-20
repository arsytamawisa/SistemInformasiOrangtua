
<div class="content-inner">
  <section class="forms"> 
    <div class="container-fluid">
      <div class="row">
        <!-- Basic Form-->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h3 class="h4">Pengumuman</h3>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="example" class="table table-hover">
                  <thead>
                    <tr>
                      <td>No</td>
                      <td>Pengumuman</td>
                      <td>Tanggal</td>
                      <td style="text-align: center">Unduh File</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($pengumuman as $key => $value) :?>
                      <tr>
                        <td><?= $key+1; ?></td>
                        <td><?= $value['judul']?></td>
                        <td><?= tanggal_indo($value['tgl'], true) ?></td>
                        <td style="text-align: center">
                          <?php if (!empty($value['berkas'])): ?>
                            <a href="<?= base_url("assets/berkas/$value[berkas]") ?>"><i class="fa fa-download"></i></a>
                          <?php endif ?>
                        </td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
