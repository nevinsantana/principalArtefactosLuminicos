<!DOCTYPE html>
<?php
  if(isset($_GET['sec']))
    $seccion=$_GET['sec'];
  else
    $seccion=null;
?>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="image/png" href="images/icono.png" />
    <meta name="keywords" content="HTML, CSS, PHP, JavaScript" />
    <meta name="description" content="Venta de artefactos fotoluminiscentes"/>
    <title>Artefatos Lumínicos</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/menu.css" rel="stylesheet" type="text/css" />
  </head>
  <body onload="alternar_banner()">
    <header>
      <img id="logo" src="images/logo ALSA blanquitas.svg" width="200px" /> <br><br><br>
      <div id="DivPhone">
        <div id="I" class="botonPhoneMail">
          <p>58 72 83 26
          </br>58 70 07 71
          </br>58 72 21 32
          </br>58 72 21 16</p>
        </div>
        <img id="IconPhone" src="images/phone.svg" onmouseover="informacion()" onmouseout="noinformacion()" />
      </div>
      <div id="DivMail">
        <div id="I2" class="botonPhoneMail">
          <p>ventas@artefactosluminicos.com</p>
        </div>
        <img id="IconMail" src="images/email.svg" onmouseover="informacion2()" onmouseout="noinformacion2()"/>
      </div>
      <div id="DivSearch">
        <img id="IconSearch" src="images/search.svg" onmouseover="buscadorIn()"/>
        <div id="I2" class="botonPhoneMail">
          <p>ventas@artefactosluminicos.com</p>
        </div>
      </div>
    </header>
    <div id="DownHeader"></div>
    <div id="search">
      <input type="button" onclick="buscadorOut()" value="Cerrar" class="cerrarBuscador">
      <gcse:search></gcse:search><!--Buscador de google-->
    </div>
    <div class="menuContainer">
      <ul id="nav">
        <li>
          <a class="hsubs" href="#" onclick="inicio()" >Inicio</a>
          <div class="linea_vertical"></div>
        </li>
        <li>
          <a class="hsubs" href="#">Presentación</a>
          <div class="linea_vertical"></div>
          <ul class="subs">
            <li><a href="#" onclick="Objetivo()">Objetivo</a></li>
            <li><a href="#" onclick="Mision()">Misión</a></li>
            <li><a href="#" onclick="Vision()">Visión</a></li>
            <li><a href="#" onclick="QuienesSomos()">¿Quiénes somos?</a></li>
            <li><a href="#" onclick="preguntas()">Preguntas Frecuentes</a></li>
          </ul>
        </li>
        <li>
          <a class="hsubs" href="Proyectos/index.html">Proyectos</a>
          <div class="linea_vertical"></div>
        </li>
        <li>
          <a href="http://iluminacion.mex.tl/915364_Productos.html">Productos</a>
          <!--<ul class="subs">
            <li><a href="#">Iluminación industrial</a></li>
            <li><a href="#">Ilumincación fluorescente</a></li>
            <li><a href="#">Iluminación exterior</a></li>
            <li><a href="#">Iluminacón interior</a></li>
            <li><a href="#">Iluminación de emergencia</a></li>
            <li><a href="#">Iluminación con leds</a></li>
            <li><a href="#">Sistemas de alto montaje</a></li>
            <li><a href="#">Iluminación solar</a></li>
          </ul>-->
        </li>
        <div class="linea_vertical"></div>
        <li>
          <a href="#" onclick="BibliotecaIlu()">Biblioteca de Iluminación</a>
        </li>
        <div class="linea_vertical"></div>
        <li>
          <a href="#" onclick="Videos()">Galeria de videos</a>
        </li>
        <div class="linea_vertical"></div>
        <li>
          <a href="#" onclick="FormasPago()">Formas de Pago</a>
        </li>
        <div class="linea_vertical"></div>
        <li>
          <a href='http://www.emailmeform.com/builder/form/8be2f9dIJbs52cl6gEvU' target='_blank'>Contáctanos</a>
        </li>
      </ul>
    </div>
    <?php
      if($seccion==null)
        require_once("inicio.php");
      if($seccion=="inicio")
        require_once("inicio.php");
      if($seccion=="preguntas")
        require_once("Preguntas_Frecuentes.php");
      if($seccion=="Objetivo")
        require_once("Objetivo.php");
      if($seccion=="Mision")
        require_once("Mision.php");
      if($seccion=="Vision")
        require_once("Vision.php");
      if($seccion=="QuienesSomos")
        require_once("QuienesSomos.php");
      if($seccion=="FormasPago")
        require_once("FormasPago.php");
      if($seccion=="BibliotecaIlu")
        require_once("BibliotecaIlu.php");
      if($seccion=="Videos")
        require_once("Videos.php");
    ?>
    <footer>
      <div id="footer1">
        <div id="contenedorLogos">
          <div class="contUnLogo">
            <div id="v1" class="botoncito">
              <p>Visitar pág.</p>
            </div>
            <a href="http://www.holophane.com" target="blank">
              <img src="images/LogoHolophane.png" onmouseover="visitar1()" onmouseout="novisitar1()" />
            </a>
          </div>
          <div class="contUnLogo">
            <div id="v2" class="botoncito">
              <p>Visitar pág.</p>
            </div>
            <a href="http://www.lithonia.com" target="blank">
              <img src="images/LogoLithonia.png" onmouseover="visitar2()" onmouseout="novisitar2()"/>
            </a>
          </div>
          <div class="contUnLogo">
            <div id="v3" class="botoncito">
              <p>Visitar pág.</p>
            </div>
            <a href="http://www.americanelectriclighting.com/" target="blank">
              <img src="images/LogoAEL.png" onmouseover="visitar3()" onmouseout="novisitar3()"/>
            </a>
          </div>
          <div class="contUnLogo">
            <div id="v4" class="botoncito">
              <p>Visitar pág.</p>
            </div>
            <a href="http://hydrel.acuitybrands.com/" target="blank">
              <img src="images/LogoHYDREL.png" onmouseover="visitar4()" onmouseout="novisitar4()"/>
            </a>
          </div>
          <div class="contUnLogo">
            <div id="v5" class="botoncito">
              <p>Visitar pág.</p>
            </div>
            <a href="http://www.hubbell-killark.com/" target="blank">
              <img src="images/LogoKILLARK.png" onmouseover="visitar5()" onmouseout="novisitar5()"/>
            </a>
          </div>
        </div>
      </div>
      <div id="footer2" >
        <div id="contenedorCopy">
          <h4>&copy; 2015 Artefa<a class="cotHide"href="Cotizaciones">c</a>tos Lumínicos es una marca registrada.</h4>
          <a href="http://www.artefactosluminicos.com.mx/attachments/File/AvisoPrivacidad.pdf" id="texto9" align="center">
            <h4>Aviso de Privacidad</h4>
          </a>
        </div>
      </div>
    </footer>
  </body>
</html>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/googleSearch.js"></script>
<script type="text/javascript" src="js/animaciones.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
