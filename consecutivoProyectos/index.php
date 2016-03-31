<?php include 'php/funciones.php'; ?>
<!doctype html>
<html lang="es-mx" class="no-js">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="html, css, php, javascript">
    <meta name="description" content="Sistema de consecutivo de proyectos">
    <meta name="author" content="Nevin Santana">
    <link rel="icon" type="image/png" href="images/favicon.png" sizes="64x64">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"
      href="css/fonts/font-awesome/css/font-awesome.min.css">
    <link href="js/datepicker/styles/glDatePicker.default.css" rel="stylesheet"
      type="text/css">
  	<title>Consecutivo de Proyectos</title>
  </head>
  <body onresize="onresizeAnimaciones()">
  	<header>
  		<div class="cd-brand">
        <a href="#" onclick="principal()"><p>Consecutivo de proyectos</p></a>
      </div>
  		<nav class="cd-main-nav-wrapper">
  			<ul class="cd-main-nav">
          <?php if(isset($_SESSION['user'])) { ?>
    				<li><a href="#" onclick="proyectos()">Proyectos</a></li>
          <?php } ?>
  				<li>
  					<a class="cd-subnav-trigger"><span id="usuarioInicia"></span></a>
  					<ul>
  						<li class="go-back"><a href="#">Regresa</a></li>
              <?php if(!isset($_SESSION['user'])) { ?>
  						  <li><a href="#" onclick="login()">Iniciar sesión</a></li>
              <?php } if(isset($_SESSION['user'])) { ?>
  						  <li><a href="#" onclick="logout()">Cerrar sesión</a></li>
              <?php } ?>
  						<li><a href="#" class="placeholder">Placeholder</a></li>
  					</ul>
  				</li>
  			</ul>
  		</nav>
  		<a href="#" class="cd-nav-trigger"><span>Menú</span></a>
  	</header>
  	<main class="cd-main-content" id="cd-main-content">
      <?php include 'php/verificaSec.php'; ?>
      <?php if(isset($_GET['errorLogin'])) { ?>
        <div class="errorLogin rojo">
          <p>Error, usuario y/o contraseña incorrectos.</p>
        </div>
      <?php } ?>
      <?php if(isset($_GET['errorLogin2'])) { ?>
        <div class="errorLogin rojo">
          <p>Usuario desactivado, consulte a un administrador.</p>
        </div>
      <?php } ?>
      <div id="botonRegresar" class="cerrarSection noOpacity"
        onclick="cierraSection()">
        x
      </div>
      <?php include 'php/menu.php'; ?>
  	</main>
  <script src="js/modernizr.js"></script>
  <script src="../js/jquery.js"></script>
  <script src="js/main.js"></script>
  <script src="js/acciones.js"></script>
  <script src="js/livePage.js"></script>
  <script src="js/datepicker/glDatePicker.js"></script>
  <script src="../resources/js-cookie-2.0.4/src/js.cookie.js"></script>
  <script
    src="https://cdn.jsdelivr.net/scrollreveal.js/3.0.0/scrollreveal.min.js">
  </script>
  <script src="js/circleSelect/classie.js"></script>
  </body>
</html>
