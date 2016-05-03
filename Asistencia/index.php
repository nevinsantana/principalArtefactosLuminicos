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
      <main id='persTUsersContainer'>
      <section id='persContainer'>
        <div class="toggleContainer">
          <button type="button" class='button' onclick='toggler("toggler1", y)'>
            Quincena anterior
          </button>
          <div id="toggler1">
            <div>
                <table class='tablaUsers'>
                  <thead>
                    <tr><th>No</th><th>Nombre</th></tr>
                  </thead>
                  <tbody>
                  <?php $y=gTUsuarios(1); ?>
                </tbody>
                </table>
            </div>
          </div>
        </div>

        <div class="toggleContainer">
          <button type="button" onclick="toggler('toggler2', y)">Mes anterior</button>
          <div id="toggler2">
            <div>
              <table class='tablaUsers'>
                <thead>
                  <tr><th>No</th><th>Nombre</th></tr>
                </thead>
                <tbody>
                <?php $y=gTUsuarios(2); ?>
              </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="toggleContainer">
          <button type="button" onclick='toggler("toggler3", y)'>Personalizar</button>
          <div id="toggler3">
            <div>
              <p>Fecha inicial</p>
              <br>
              <input type='date' id='fDate' name='fDate' onchange='cDate(y)'>
            </div>
            <div>
              <p>Fecha final</p>
              <br>
              <input type='date' id='lDate' name='lDate' onchange='cDate(y)'>
            </div>
            <table class='tablaUsers'>
              <thead>
                <tr><th>No</th><th>Nombre</th></tr>
              </thead>
              <tbody>
              <?php $y=gTUsuarios(3); ?>
            </tbody>
            </table>
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
    <script src='js/functions.js'></script>
    <script>var y=<?php echo $y; ?></script>
    <?php verSession(); ?>
  </body>
</html>
