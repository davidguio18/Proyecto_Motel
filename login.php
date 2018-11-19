
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="loginresources/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginresources/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginresources/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginresources/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginresources/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="loginresources/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginresources/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginresources/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="loginresources/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginresources/css/util.css">
	<link rel="stylesheet" type="text/css" href="loginresources/css/main.css">


<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('loginresources/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
						<?php 
							if (isset($_GET["error"])) {


							echo "<h4> Por Favor Revise Sus Datos </h4>";
							}
	 					?>	
				<form class="login100-form validate-form"  method="post" name="formLogin" autocomplete="off">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					
				

					<div class="wrap-input100 validate-input m-b-23" data-validate = "El Documento es Requerido">
						<span class="label-input100">Documento</span>
						<input class="input100" type="text" name="Login[documento]" placeholder="Escriba Su Documento" >
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Su Contraseña Es Requerida" >
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="Login[contrasena]" placeholder="Escriba Su Contraseña">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Login
							</button>
						</div>
					</div>
					<br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a class="login100-form-btn" href="portada.php">Salir</a>
						</div>
					</div>

									

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="loginresources/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="loginresources/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="loginresources/vendor/bootstrap/js/popper.js"></script>
	<script src="loginresources/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="loginresources/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="loginresources/vendor/daterangepicker/moment.min.js"></script>
	<script src="loginresources/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="loginresources/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="loginresources/js/main.js"></script>

</body>

