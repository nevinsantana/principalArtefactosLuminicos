<!doctype html>
<html lang="es-mx" class="no-js">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="keywords" content="html, css, php, javascript">
  <meta name="description" content="Sistema de consecutivo de proyectos">
  <meta name="author" content="Nevin Santana">
  <link rel="icon" type="image/png" href="images/favicon.png" sizes="64x64">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
	<title>Consecutivo de Proyectos</title>
</head>
<body onresize="javascript: normalAbreNP(); normalAbrePE()">
	<header>
		<div class="cd-brand">
      <a href="#" onclick="principal()"><p>Consecutivo de proyectos</p></a>
    </div>
		<nav class="cd-main-nav-wrapper">
			<ul class="cd-main-nav">
				<li><a href="#" onclick="proyectos()">Proyectos</a></li>
				<li><a href="#" onclick="clientes()">Clientes</a></li>
				<li><a href="#" onclick="cotizaciones()">Cotizaciones</a></li>
				<li>
					<a class="cd-subnav-trigger"><span>Usuario</span></a>
					<ul>
						<li class="go-back"><a href="#">Menu</a></li>
						<li><a href="#">Configuración</a></li>
						<li><a href="#">Cerrar sesión</a></li>
						<li><a href="#" class="placeholder">Placeholder</a></li>
					</ul>
				</li>
			</ul> <!-- .cd-main-nav -->
		</nav> <!-- .cd-main-nav-wrapper -->

		<a href="#" class="cd-nav-trigger">Menu<span></span></a>
	</header>

	<main class="cd-main-content">
    <?php include 'php/verificaSec.php'; ?><!-- Verifica sección-->
    <div id="botonRegresar" class="cerrarSection noOpacity"
      onclick="cierraSection()">
      x
    </div>
    <?php include 'php/menu.php' ?><!--Contenido de la página-->
	</main>
<script src="js/modernizr.js"></script>
<script src="../js/jquery.js"></script>
<script src="js/main.js"></script>
<script src="js/acciones.js"></script>
<script src="js/livePage.js"></script>
</body>
</html>
