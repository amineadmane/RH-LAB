<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Connexion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="app/views/connexion/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="app/views/connexion/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="app/views/connexion/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="app/views/connexion/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="app/views/connexion/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="app/views/connexion/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="app/views/connexion/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="app/views/connexion/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="app/views/connexion/app/views/connexion/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="app/views/connexion/css/util.css">
	<link rel="stylesheet" type="text/css" href="app/views/connexion/css/main.css">
	<link href="app/views/templates/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(app/views/connexion/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Connexion
					</span>
				</div>

				<form class="login100-form validate-form" method="post" action="?p=connexion">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Identifiant requis">
						<span class="label-input100">Identifiant</span>
						<input class="input100" type="text" name="identifiant" placeholder="Entrer identifiant">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Mote de passe requis">
						<span class="label-input100">Mot de passe</span>
						<input class="input100" type="password" name="password" placeholder="Entrer mot de passe">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<?php
							if($error)
							{
								echo '<p style="color:red;">Mot de passe ou Identifiant Incorrect !  </p>';
							}
							?>
						</div>

						<div>
							<a href="#" class="txt1">

							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Se conecter
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="app/views/connexion/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="app/views/connexion/app/views/connexion/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="app/views/connexion/vendor/bootstrap/js/popper.js"></script>
	<script src="app/views/connexion/app/views/connexion/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="app/views/connexion/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="app/views/connexion/vendor/daterangepicker/moment.min.js"></script>
	<script src="app/views/connexion/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="app/views/connexion/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="app/views/connexion/js/main.js"></script>

</body>
</html>
