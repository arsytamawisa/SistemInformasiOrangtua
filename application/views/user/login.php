<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Sistem Informasi Orangtua</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?= base_url() ?>assets/user/login/images/icons/favicon.ico"/>
	<link rel="stylesheet" href="<?= base_url() ?>assets/user/login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/user/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/user/login/vendor/animate/animate.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/user/login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/user/login/vendor/select2/select2.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/user/login/css/util.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/user/login/css/main.css">
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?= base_url() ?>assets/user/login/images/img-01.png" alt="IMG">
				</div>
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title">Sistem Informasi Orangtua</span>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="nis" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">Login</button>
					</div>
					<div class="text-center p-t-12">
						<span class="txt1">Lupa</span>
						<a class="txt2" href="#">Username / Password?</a>
					</div>
					<div class="text-center p-t-136">
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="<?= base_url() ?>assets/user/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url() ?>assets/user/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url() ?>assets/user/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>assets/user/login/vendor/select2/select2.min.js"></script>
	<script src="<?= base_url() ?>assets/user/login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="<?= base_url() ?>assets/js/main.js"></script>
</body>
</html>