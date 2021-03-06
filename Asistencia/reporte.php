<?php include('php/functions.php');
  if(isset($x)) errorF($x);
?>
<!doctype html>
<html lang='es-mx' class='no-js'>
  <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='keywords' content='html, css, php, javascript'>
    <meta name='description' content='Sistema de reportes de asistendcia'>
    <meta name='author' content='Nevin Santana, Enrique Rodriguez'>
    <link rel='icon' type='image/png' href='img/favicon.png' sizes='64x64'>
    <link rel="stylesheet" href="../resources/fAwesome/css/font-awesome.min.css">
    <link rel='stylesheet' href='css/style.css'>
  	<title>Asistencia</title>
    <script src='../js/jquery.js'></script>
  </head>
  <body>
  	<header id='hPrincipal'>
      <section id='titulo'><h1>Asistencia</h1></section>
      <section id='loginout'>
        <button onclick='window.location.replace("php/functions.php?cSesion=true");'><i class="fa fa-power-off"></i></button>
      </section>
    </header>
  	<main>
      <section id='atPrint'>
        <div class='tHoja'>
          <header id='hContainer'>
            <div class='lContainer'><img src='img/lReporte.png'></div>
            <div class='rContainer'>
            <span><?php gHeader($idUsuario); ?></span>
            <hr class='infSep'>
            </div>
          </header>
          <main id='pMain'>
            <h2>Reporte de asistencia</h2>
            <?php if(isset($fIni)) gRango($fIni, $fFin); ?>
            <table id='tAsistencia'>
              <thead>
                <tr>
                  <th></th>
                  <th>No</th>
                  <th>Nombre</th>
                  <th>Fecha</th>
                  <th>Hora</th>
                  <th>Descuento</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if($x == 1) $cPag=reporteQuin($idUsuario);
                if($x == 2) $cPag=reporteMen($idUsuario);
                if($x == 3) $cPag=gTReporte($fIni, $fFin, $idUsuario);
                ?>
              </tbody>
            </table>
            <br>Observaciones<br>
            <textarea class='tAReporte'></textarea>
            <?php //echo "<br>".$cPag; ?>
          </main>
        </div>
      </section>
      <div class='cpReporte'>
        <button onclick='window.print()' class='pReporte'>
          <i class='fa fa-print' aria-hidden='true'></i>
        </button>
      </div>
    </main>
    <script src='js/functions.js'></script>
    <?php verSession(); ?>
  </body>
</html>
