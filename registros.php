<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<title>Hospital Clínica Costarricense</title>
	<link rel="icon" type="image/x-icon" href="img/logo.png" />
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="img/logo.png" />
	<meta property="og:title" content="">
	<meta property="og:type" content="">
	<meta property="og:url" content="">
	<meta property="og:image" content="">

	<link rel="manifest" href="site.webmanifest">
	<link rel="apple-touch-icon" href="icon.png">
	<!-- Place favicon.ico in the root directory -->


	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" href="css/generalh.css">
	<link rel="stylesheet" href="css/registros.css">
</head>



<body class="bodyprincipal">
	<!-- cabecera  -->
	<?php
	$currentPage = basename($_SERVER['PHP_SELF']);
	include "headerdos.php";
	?>
	<section class="container">

		<div class="containerregistro">
			<div class="contenidologin">
				<div class="containerreg">
					<div class="tabsreg">
						<div class="tabreg uiregister active" data-tab="tabreg-login">Login</div>
						<div class="tabreg uiregister" data-tab="tabreg-register">Register</div>
					</div>

					<form id="tabreg-login" class="formaregistro uiregister active" method="POST" action="login.php">
						<h2>Login</h2>
						<div class="formaregistro-groupreg">
							<label for="loginUsername">Username</label>
							<input type="text" id="loginCedula" class="uiregister" placeholder="Username">
						</div>
						<div class="formaregistro-groupreg">
							<label for="loginPassword">Password</label>
							<input type="password" id="loginPassword" class="uiregister" placeholder="Password">
						</div>
						<div class="formaregistro-groupreg">
							<button class="submit">Next</button>
						</div>
					</form>

					<form id="tabreg-register" class="formaregistro uiregister" enctype="multipart/form-data" action="procesarregistro.php" method="POST">
						<h2>Register</h2>
						<div class="formaregistro-groupreg">
							<label for="registerUsername">Cedula</label>
							<input type="text" id="registerCedula" name="registerCedula" class="uiregister" placeholder="Username">
						</div>
						<div class="formaregistro-groupreg">
							<label for="registerPassword">Nombre</label>
							<input type="text" id="registerUsername" name="registerUsername" class="uiregister" placeholder="Nombre">
						</div>
						<div class="formaregistro-groupreg">
							<label for="registerEmail">Email</label>
							<input type="email" id="registerEmail" name="registerEmail" class="uiregister" placeholder="Email">
						</div>
						<div class="formaregistro-groupreg">
							<label for="registerPhone">Numero Telefonico</label>
							<input type="tel" id="registerPhone" name="registerPhone" class="uiregister" placeholder="Teléfono">
						</div>
						<div class="formaregistro-groupreg">
							<label for="registerLastName">Apellidos</label>
							<input type="text" id="registerLastName" name="registerLastName" class="uiregister" placeholder="Apellidos">
						</div>
						<div class="formaregistro-groupreg">
							<label for="registerBirthDate">Fecha De Nacimiento</label>
							<input type="date" id="registerBirthDate" name="registerBirthDate" class="uiregister">
						</div>
						<div class="formaregistro-groupreg">
							<label for="registerPassword">Contraseña</label>
							<input type="password" id="registerPassword" name="registerPassword" class="uiregister" placeholder="Password">
						</div>
						<div class="formaregistro-groupreg">
							<label for="registerPassword">Contraseña</label>
							<input type="password" id="registerPassword" name="registerPassword" class="uiregister" placeholder="Password">
						</div>
						<div class="formaregistro-groupreg">
							<label for="registerProfileImage">Imagen de perfil</label>
							<input type="file" id="registerProfileImage" name="registerProfileImage" class="uiregister" accept="image/*">
						</div>
						<div class="formaregistro-groupreg">
							<button class="prev">Previous</button>
							<button class="next">Register</button>
						</div>
					</form>

				</div>
			</div>
		</div>
	</section>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- Agrega aquí tus scripts personalizados -->


	<!--  pie  -->
	<?php include "footer.php" ?>
	<!-- pie -->

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
	</script>
	<script src="js/vendor/modernizr-3.11.2.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
	<script src="js/principal.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</body>











</html>