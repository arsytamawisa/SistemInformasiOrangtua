<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Admin Sistem Informasi Orangtua</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url() ?>assets/admin/images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?= base_url() ?>assets/admin/login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?= base_url() ?>assets/admin/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?= base_url() ?>assets/admin/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?= base_url() ?>assets/admin/login/vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" href="<?= base_url() ?>assets/admin/login/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?= base_url() ?>assets/admin/login/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?= base_url() ?>assets/admin/login/vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" href="<?= base_url() ?>assets/admin/login/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?= base_url() ?>assets/admin/login/css/util.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/admin/login/css/main.css">
	<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form flex-sb flex-w" method="post">
					<span class="login100-form-title p-b-32" style="text-align: center;"> Login Administrator </span>

					<span class="txt1 p-b-11"> Username </span>
					<div class="wrap-input100 m-b-36">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11"> Password </span>
					<div class="wrap-input100 m-b-12">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember" value="on">
							<label class="label-checkbox100" for="ckb1"> Remember me </label>
						</div>
						<div>
							<a href="#" class="txt3"> Forgot Password? </a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn w-full"> Login </button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/admin/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/admin/login/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/admin/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url() ?>assets/admin/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/admin/login/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/admin/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url() ?>assets/admin/login/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/admin/login/vendoassets/login/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/admin/login/js/main.js"></script>

</body>
</html>