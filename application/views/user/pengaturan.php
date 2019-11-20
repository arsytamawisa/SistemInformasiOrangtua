<style>.btn-danger,.btn-primary{width:100%}span{font-size: 14px}</style>

<div class="content-inner">
  <form method="post">
    <section class="forms"> 
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 offset-md-2">
            <div class="card">
              <div class="card-header">
                <h3 class="h4 offset-md-5">Ganti Password</h3>
              </div>
              <div class="card-body">
                <div class="form-group row"></div>
                <div class="row">
                  <div class="form-group col-md-8 offset-md-2">
                    <label>Password Lama</label>
                    <div class="input-group">
                      <input type="password" id="passwordLama" name="password_lama" class="form-control" data-toggle="password">
                      <div class="input-group-addon">
                        <a href="#"><i class="oi oi-eye" aria-hidden="true"></i></a>
                      </div>
                    </div>
                    <input type="checkbox" class="form-checkbox" onclick="hideShow1()" > <span>Show / Hide</span>
                  </div>
                </div><br>
                <div class="row">
                  <div class="form-group col-md-8 offset-md-2">
                    <label>Password Baru</label>
                    <div class="input-group">
                      <input type="password" id="passwordBaru" name="password_baru" class="form-control" data-toggle="password">
                      <div class="input-group-addon">
                        <a href="#"><i class="oi oi-eye" aria-hidden="true"></i></a>
                      </div>
                    </div>
                    <input type="checkbox" class="form-checkbox" onclick="hideShow2()" > <span>Show / Hide</span>
                  </div>
                </div><br>
                <div class="row">
                  <div class="form-group col-md-8 offset-md-2">
                    <label>Konfirmasi Password</label>
                    <div class="input-group">
                      <input type="password" id="passwordKonfirmasi" name="password_konfirmasi" class="form-control">
                      <div class="input-group-addon">
                        <a href="#"><i class="oi oi-eye" aria-hidden="true"></i></a>
                      </div>
                    </div>
                    <input type="checkbox" class="form-checkbox" onclick="hideShow3()" > <span>Show / Hide</span>
                  </div>
                </div><br>
                <div class="row">
                  <div class="form-group col-md-8 offset-md-2">
                    <button class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </form>
</div>

<script>
  function hideShow1() {
    var x = document.getElementById("passwordLama");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  function hideShow2() {
    var x = document.getElementById("passwordBaru");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  function hideShow3() {
    var x = document.getElementById("passwordKonfirmasi");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>