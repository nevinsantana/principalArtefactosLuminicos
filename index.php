<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="html, css, php, javascript">
    <meta name="description" content="Venta de artefactos fotoluminiscentes">
    <meta name="author" content="Nevin Santana">
    <title>Artefatos Lumínicos</title>
    <link rel="icon" type="image/png" href="images/icono.png" sizes="64x64">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body onresize="normaliza()">
    <?php include 'php/verificaSec.php'; ?><!-- Verifica sección-->
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
      <main>
        <aside class="asideIzquierdo"></aside>
        <aside class="asideDerecho"></aside>
        <div id="closeMenu" onclick="desapareceMenu()"></div>
        <div class="menuContainer" onclick="apareceMenu()">
          <ul id="nav">
            <li><a href="#" onclick="inicio()">Inicio</a></li>
            <div class="lineaVertical"></div>
            <li>
              <a href="#">Presentación</a>
              <ul class="subs">
                <li><a href="#" onclick="objetivo()">Objetivo</a></li>
                <li><a href="#" onclick="mision()">Misión</a></li>
                <li><a href="#" onclick="vision()">Visión</a></li>
                <li>
                  <a href="#" onclick="quienesSomos()">¿Quiénes somos?</a>
                </li>
                <li><a href="#" onclick="preguntas()">Preguntas frecuentes</a></li>
              </ul>
            </li>
            <div class="lineaVertical"></div>
            <li><a href="Proyectos/index.html">Proyectos</a></li>
            <div class="lineaVertical"></div>
            <li>
              <a href="productos">
                Productos
              </a>
            </li>
            <div class="lineaVertical"></div>
            <li>
              <a href="#" onclick="bibliotecaIlu()">
                Biblioteca de Iluminación
              </a>
            </li>
            <!--<div class="lineaVertical"></div>
            <li>
              <a href="#" onclick="videos()">Galeria de videos</a>
            </li>-->
            <div class="lineaVertical"></div>
            <li><a href="#" onclick="formasPago()">Formas de Pago</a></li>
            <div class="lineaVertical"></div>
            <li>
              <a href='
                http://www.artefactosluminicos.com.mx/Contactanos/index.php'
                target='_blank'>
                Contáctanos
              </a>
            </li>
          </ul>
        </div>
        <?php include 'php/menu.php' ?><!--Contenido de la página-->
      </main>
      <footer>
        <div id="footer1">
          <div id="contenedorLogos">
            <div class="contUnLogo">
              <a href="http://www.holophane.com" target="_blank">
                <img src="images/LogoHolophane.png" alt="Logo Holophane">
              </a>
            </div>
            <div class="contUnLogo">
              <a href="http://www.lithonia.com" target="_blank">
                <img src="images/LogoLithonia.png" alt="Logo Lithonia">
              </a>
            </div>
            <div class="contUnLogo">
              <a href="http://www.americanelectriclighting.com/"
                target="_blank">
                <img src="images/LogoAEL.png" alt="Logo AEL">
              </a>
            </div>
            <!--
            <div class="contUnLogo">
              <a href="http://hydrel.acuitybrands.com/" target="_blank">
                <img src="images/LogoHYDREL.png" alt="Logo Hydrel">
              </a>
            </div>
          -->
            <div class="contUnLogo">
              <a href="http://www.hubbell-killark.com/" target="_blank">
                <img src="images/LogoKILLARK.png" alt="Logo Killark">
              </a>
            </div>
            <div class="contUnLogo">
              <a href="http://www.evluma.com/" target="_blank">
                <img src="images/logoEvluma.png" alt="Logo Evluma">
              </a>
            </div>
          </div>
        </div>
        <div id="footer2">
          <p>
            &copy; 2015 Artefa<a class="cotHide" href="Cotizaciones">c</a>tos
            Lumíni<a class="cotHide" href="consecutivoProyectos">c</a>os es una
            marca registrada.
          </p>
          <p id="avisoFooter">
            <a href="attachments/File/AvisoPrivacidad.pdf">
              Aviso de Privacidad
            </a>
          </p>
        </div>
      </footer>
    </div>
    <!---->
    <script src="js/jquery.js"></script>
    <script src="js/acciones.js"></script>
    <script src="js/animaciones.js"></script>
    <script src="js/externo.js"></script>
  </body>
</html>
