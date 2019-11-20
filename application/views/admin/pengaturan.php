<style>
	
	a, a:hover{
		color:#333
	}

	.oi-eye{
		color:#428bca;
		transition-duration: 0.6s;
	}	

	.oi-eye:hover{
		color:#333
	}

	#page-inner{
		margin:auto;
		width: 50%;
		overflow: hidden;
	}

	.btn-primary{
		width: 100%;
		margin-bottom: 20px;
	}

</style>

<div id="page-inner">
	<form method="post">
		<div class="row col-lg-offset-3">
			<br><h3 class="row col-lg-offset-2">Ganti Password</h3><br>
			<div class="form-group col-md-8">
				<div class="row">
					<div class="form-group">
						<label>Password Lama</label>
						<div class="input-group">
							<input type="password" id="password_lama" name="password_lama" class="form-control" data-toggle="password">
							<div class="input-group-addon">
								<a href="#" id="lama"><i class="oi oi-eye" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
					<hr>
					<div class="form-group">
						<label>Password Baru</label>
						<div class="input-group">
							<input type="password" id="password_baru" name="password_baru" class="form-control" data-toggle="password">
							<div class="input-group-addon">
								<a href="#" id="baru"><i class="oi oi-eye" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
					<hr>
					<div class="form-group">
						<label>Konfirmasi Password</label>
						<div class="input-group">
							<input type="password" id="password_konfirmasi" name="password_konfirmasi" class="form-control" data-toggle="password">
							<div class="input-group-addon">
								<a href="#" id="konfirmasi"><i class="oi oi-eye" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
					<hr>
					<div class="form-group">
						<button class="btn btn-primary">Simpan</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>

