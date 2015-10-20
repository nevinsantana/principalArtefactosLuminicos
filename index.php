<!DOCTYPE html>
<html lang="es_mx">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="HTML, CSS, PHP, JavaScript">
    <meta name="description" content="Venta de artefactos fotoluminiscentes">
    <title>Artefatos Lumínicos</title>
    <link rel="shortcut icon" type="image/png" href="images/icono.png">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/menu.css" rel="stylesheet" type="text/css">
    <link href="css/pgwslider.css" rel="stylesheet" type="text/css">
  </head>
  <body id="body" onresize="normaliza()">
    <!-- Verifica sección-->
    <?php include 'php/verificaSec.php'; ?>
    <!---->
    <div id="wrapper">
      <header>
        <a href="http://www.artefactosluminicos.com.mx">
          <img id="logo" src="images/logoIndex.png" alt="Logo de ALSA">
        </a><br><br><br>
        <div id="DivPhone">
          <img src="images/phone.svg" onclick="phoneIn()" alt="Ícono teléfono">
        </div>
        <div id="DivMail">
          <img src="images/email.svg" onclick="mailIn()" alt="Ícono mail">
        </div>
        <div id="DownHeader"></div>
        <div id="mail">
          <div class="cerrar" onclick="mailOut()">x</div>
          <div class="circuloVerde"></div>
          <p>ventas@artefactosluminicos.com</p>
        </div>
        <div id="phone">
          <div class="cerrar" onclick="phoneOut()">x</div>
          <div class="circuloVerde"></div><p>58 72 83 26</p><br>
          <div class="circuloVerde"></div><p>58 70 07 71</p><br>
          <div class="circuloVerde"></div><p>58 72 21 32</p><br>
          <div class="circuloVerde"></div><p>58 72 21 16</p>
        </div>
      </header>
      <main id="main">
        <aside class="asideIzquierdo">
        </aside>
        <aside class="asideDerecho">
        </aside>
        <div id="closeMenu" onclick="desapareceMenu()"></div>
        <div class="menuContainer" onclick="apareceMenu()">
          <ul id="nav">
            <li>
              <a class="hsubs" href="#" onclick="inicio()">Inicio</a>
            </li>
            <div class="linea_vertical"></div>
            <li>
              <a class="hsubs" href="#">Presentación</a>
              <div class="linea_vertical"></div>
              <ul class="subs">
                <li><a href="#" onclick="objetivo()">Objetivo</a></li>
                <li><a href="#" onclick="mision()">Misión</a></li>
                <li><a href="#" onclick="vision()">Visión</a></li>
                <li>
                  <a href="#" onclick="quienesSomos()">¿Quiénes somos?</a>
                </li>
                <li><a href="#" onclick="preguntas()">Preguntas</a></li>
              </ul>
            </li>
            <li>
              <a class="hsubs" href="Proyectos/index.html">Proyectos</a>
              <div class="linea_vertical"></div>
            </li>
            <li>
              <a href="http://iluminacion.mex.tl/915364_Productos.html">
                Productos
              </a>
            </li>
            <div class="linea_vertical"></div>
            <li>
              <a href="#" onclick="bibliotecaIlu()">
                Biblioteca de Iluminación
              </a>
            </li>
            <!--<div class="linea_vertical"></div>
            <li>
              <a href="#" onclick="videos()">Galeria de videos</a>
            </li>-->
            <div class="linea_vertical"></div>
            <li>
              <a href="#" onclick="formasPago()">Formas de Pago</a>
            </li>
            <div class="linea_vertical"></div>
            <li>
              <a
              href='
                http://www.emailmeform.com/builder/form/8be2f9dIJbs52cl6gEvU'
              target='_blank'>
                Contáctanos
              </a>
            </li>
          </ul>
        </div>
        <!--Contenido de la página-->
        <?php include 'php/menu.php' ?>
        <!---->
      </main>
      <footer>
        <div id="footer1">
          <div id="contenedorLogos">
            <div class="contUnLogo">
              <a href="http://www.holophane.com" target="blank">
                <img src="images/LogoHolophane.png">
              </a>
            </div>
            <div class="contUnLogo">
              <a href="http://www.lithonia.com" target="blank">
                <img src="images/LogoLithonia.png">
              </a>
            </div>
            <div class="contUnLogo">
              <a href="http://www.americanelectriclighting.com/" target="blank">
                <img src="images/LogoAEL.png">
              </a>
            </div>
            <div class="contUnLogo">
              <a href="http://hydrel.acuitybrands.com/" target="blank">
                <img src="images/LogoHYDREL.png">
              </a>
            </div>
            <div class="contUnLogo">
              <a href="http://www.hubbell-killark.com/" target="blank">
                <img src="images/LogoKILLARK.png">
              </a>
            </div>
          </div>
        </div>
        <div id="footer2">
          <div id="contenedorCopy">
            <h4>
              &copy; 2015 Artefa
              <a class="cotHide"href="Cotizaciones">
                c
              </a>
              tos Lumínicos es una marca registrada.
            </h4>
            <p id="texto9">
            <a href="attachments/File/AvisoPrivacidad.pdf">
              Aviso de Privacidad
            </a>
            </p>
          </div>
        </div>
      </footer>
    </div>
    <script src="jquery/jquery.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/animaciones.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript" src="tools/slider/PgwSlider/pgwslider.js">
    </script>
    <script type="text/javascript"
    src="tools/slider/PgwSlider/pgwsliderRunner.js"></script>
  </body>
</html>
