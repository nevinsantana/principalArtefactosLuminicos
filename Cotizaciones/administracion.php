<?php
  include 'php/funciones.php';
  verificaAdmon();
  $nombre=cotizacionSecNombre($con)[1];
  $apellido_p=cotizacionSecNombre($con)[2];
?>
<!doctype html>
<html>
  <head>
		<meta charset="UTF-8">
		<link rel="icon" type="image/png" href="images/icono.png" sizes="64x64">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="html, css, php, javascript">
		<meta name="description" content="Sistema de consecutivo de cotizaciones">
		<meta name="author" content="Nevin Santana, Enrique Rodriguez">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <title>Cotizaciones</title>
  </head>
  <body class="principalPage">
    <header id="principalHeader">
      <a href="../" target="_blank">
        <img class="headerLogo" src="images/logo112x82.png" width="112px"
          height="82px">
      </a>
      <a href="cerrar_sesion.php">
        <button class="headerCSesion">Cerrar Sesión</button>
      </a>
    </header>
    <main id="principalMain">
      <aside id="mainLSide">
        <div id="mainLSideDeployer" onclick="deployLSide()">
          <img src="images/principalLSideDeployer.png" width="30px"
            height="30px" class="principalLSideDeployer">
        </div>
        <div id="mainLSideMenu">
          <ul>
            <li class="primerLi">
              <img src="images/principalMenuClientes.png" width="20px"
                height="20px">
              <span>Clientes</span>
              <ul>
                <li onclick="agregar_c()">
                  <img src="images/principalMenuAniadir.png" width="20px"
                    height="20px">
                  <span>Agregar cliente</span>
                </li>
                <li onclick="eliminar_c()">
                  <img src="images/principalMenuEliminar.png" width="20px"
                    height="20px">
                  <span>Eliminar cliente</span>
                </li>
                <li onclick="modificar_c()">
                  <img src="images/principalMenuModificar.png" width="20px"
                    height="20px">
                  <span>Modificar cliente</span>
                </li>
                <li onclick="visualizar_c()">
                  <img src="images/principalMenuVer.png" width="20px"
                    height="20px">
                  <span>Visualizar clientes</span>
                </li>
              </ul>
            </li>
            <li onclick="cotizaciones()">
              <img src="images/principalMenuCotizaciones.png" width="20px"
                height="20px">
              <span>Cotizaciones</span>
            </li>
            <li onclick="orden()">
              <img src="images/principalMenuOrden.png" width="20px"
                height="20px">
              <span>Ordenes de venta</span>
            </li>
            <li onclick="cotizar()">
              <img src="images/principalMenuGenerar.png" width="20px"
                height="20px">
              <span>Generar cotización</span>
            </li>
            <li>
              <img src="images/principalMenuUsuarios.png" width="20px"
                height="20px">
              <span>Usuarios</span>
              <ul>
                <li onclick="agregar_u()">
                  <img src="images/principalMenuAniadir.png" width="20px"
                    height="20px">
                  <span>Agregar usuario</span>
                </li>
                <li onclick="eliminar_u()">
                  <img src="images/principalMenuEliminar.png" width="20px"
                    height="20px">
                  <span>Eliminar usuario</span>
                </li>
                <li onclick="modificar_u()">
                  <img src="images/principalMenuModificar.png" width="20px"
                    height="20px">
                  <span>Modificar usuario</span>
                </li>
              </ul>
            </li>
            <li class="ultimoLi">
              <img src="images/principalMenuProductos.png" width="20px"
                height="20px">
              <span>Productos</span>
              <ul>
                <li onclick="agregar_p()">
                  <img src="images/principalMenuAniadir.png" width="20px"
                    height="20px">
                  <span>Agregar producto</span>
                </li>
                <li onclick="eliminar_p()">
                  <img src="images/principalMenuEliminar.png" width="20px"
                    height="20px">
                  <span>Eliminar producto</span>
                </li>
                <li onclick="modificar_p()">
                  <img src="images/principalMenuModificar.png" width="20px"
                    height="20px">
                  <span>Modificar producto</span>
                </li>
                <li onclick="ver_p()">
                  <img src="images/principalMenuVer.png" width="20px"
                    height="20px">
                  <span>Visualizar productos</span>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </aside>
      <aside id="mainRSide">
        <div id="mainRSideContent">
          <h2 class="contentWelcome">
            Bienvenido <?php echo "$nombre "."$apellido_p"; ?>
          </h2>
          <?php selectSection($con); ?>
        </div>
      </aside>
    </main>
    <footer id="principalPageFooter">
      <span class="footerContent">
        Hecho en México, todos los derechos reservados a Artefactos Lumínicos
        S.A. de C.V. 2015
      </span>
      <a href="?sec=creditos" class="footerCreditos">Créditos</a>
    </footer>
    <script src="jquery/jquery-1.12.0.js"></script>
    <script src="js/acciones.js"></script>
  </body>
</html>
