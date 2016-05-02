<?php include('php/functions.php'); ?>
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
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="css/content.css" />
    <script src="js/modernizr.custom.js"></script>
  	<title>Asistencia</title>
    <script src='../js/jquery.js'></script>
  </head>
  <body>
  	<header id='hPrincipal'>
      <section id='titulo'><h1>Asistencia</h1></section>
      <section id='loginout'>
        <button><i class="fa fa-power-off"></i></button>
      </section>
    </header>
  	<main id='persTUsersContainer'>
      <section id='persContainer'>
        <div class="morph-button morph-button-inflow morph-button-inflow-1">
          <button type="button" onclick='aTabla1(y)'><span>:v</span></button>
          <div class="morph-content">
            <div>
              <div class="content-style-form content-style-form-4">
                <h2 class="morph-clone">Quincena anterior</h2>
                <table class='tablaUsers'>
                  <thead>
                    <tr><th>No</th><th>Nombre</th></tr>
                  </thead>
                  <tbody>
                  <?php $y=gTUsuarios(); ?>
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="morph-button morph-button-inflow morph-button-inflow-1">
          <button type="button" onclick='aTabla2(y)'><span>:v</span></button>
          <div class="morph-content">
            <div>
              <div class="content-style-form content-style-form-4">
                <h2 class="morph-clone">Mes anterior</h2>
                  <table class='tablaUsers'>
                    <thead>
                      <tr><th>No</th><th>Nombre</th></tr>
                    </thead>
                    <tbody>
                    <?php $y=gTUsuarios(); ?>
                  </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>

        <div class="morph-button morph-button-inflow morph-button-inflow-1">
          <button type="button" onclick='aTabla3(y)'><span>:v</span></button>
          <div class="morph-content">
            <div>
              <div class="content-style-form content-style-form-4 acomoda">
                <h2 class="morph-clone">Personalizar</h2>
                  <div><p>Fecha inicial</p><br><input type='date' id='fDate' name='fDate' onchange='cDate(y)'></div>
                  <div><p>Fecha final</p><br><input type='date' id='lDate' name='lDate' onchange='cDate(y)'></div>
                  <table class='tablaUsers'>
                    <thead>
                      <tr><th>No</th><th>Nombre</th></tr>
                    </thead>
                    <tbody>
                    <?php $y=gTUsuarios(); ?>
                  </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
        </div>
      </section>
      <section id='tUsersContainer'>
        <form method='POST' action='reporte.php'>
        <!--<input type='button' value='Invertir selección'>
        <input type='button' value='Imprimir todo'>-->

      </form>
      </section>
    </main>
    <script>var y=<?php echo $y; ?></script>
    <script src='js/functions.js'></script>
    <script src="js/classie.js"></script>
		<script src="js/uiMorphingButton_inflow.js"></script>
    <script>
      [].slice.call(document.querySelectorAll('.morph-button')).forEach(function(bttn) {
        new UIMorphingButton( bttn, {} );} );
    </script>
  </body>
</html>
