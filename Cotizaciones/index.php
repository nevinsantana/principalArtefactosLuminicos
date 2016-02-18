<?php include 'php/funciones.php'; verificaIndex(); indexSesionUsuario(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="html, css, php, javascript">
		<meta name="description" content="Sistema de consecutivo de proyectos">
		<meta name="author" content="Nevin Santana, Enrique Rodriguez">
		<link rel="icon" type="image/png" href="images/icono.png" sizes="64x64">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Cotizaciones</title>
	</head>
	<body class="index">
		<div class="indexLogo">
			<img class="logoImg" src="images/logo600x438.png" width="600px"
				height="438px" alt="Logo">
		</div>
		<h1 class="indexH1">Consecutivo de cotizaciones</h1>
		<section class="indexFormSection">
			<form action="php/funciones.php?validar=true" method="POST">
				<input type="text" class="indexInput" placeholder="Usuario"
					name="id_usuario" autocomplete="off" required/>
				<input type="password" class="indexInput" placeholder="Contraseña"
					name="password" required/>
				<input type="submit" value="Entrar" class="indexFormSubmit">
			</form>
		</section>
		<div id="indexErrorSesion"></div>
		<script src="js/acciones.js"></script>
	</body>
</html>
