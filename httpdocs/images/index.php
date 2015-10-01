<!DOCTYPE html>
<?php include("tuarchivo.htm"); ?>
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



        <div id="search">
          <script>
            (
              function() {
                var cx = '013486087382821800792:pihurugfvgo';
                var gcse = document.createElement('script');
                gcse.type = 'text/javascript';
                gcse.async = true;
                gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                    '//cse.google.com/cse.js?cx=' + cx;
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(gcse, s);
              }
            )();

            function inicio(){
              location.href="?sec=inicio"
            }
            function preguntas(){
              location.href="?sec=preguntas"
            }
            function Objetivo(){
              location.href="?sec=Objetivo"
            }
            function Mision(){
              location.href="?sec=Mision"
            }
            function Vision(){
              location.href="?sec=Vision"
            }
            function QuienesSomos(){
              location.href="?sec=QuienesSomos"
            }
              function FormasPago(){
              location.href="?sec=FormasPago"
            }
            function BibliotecaIlu(){
              location.href="?sec=BibliotecaIlu"
            }
            function Videos(){
              location.href="?sec=Videos"
            }
          </script>
          <?php
          if(isset($_GET['sec']))
          $seccion=$_GET['sec'];
            else
              $seccion=null;


          ?>
          <gcse:search></gcse:search>
        </div>

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

      </header>

      <div id="DownHeader"></div>

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
            <a class="hsubs" href="#">Proyectos</a>
            <div class="linea_vertical"></div>
            <ul class="subs">
                <li><a href="#">Super Via Santa Fe</a></li>
                <li><a href="#">Túnel Santa Fe</a></li>
                <li><a href="#">Circuito Mexiquense</a></li>
                <li><a href="#">Estación Buenavista</a></li>
                <li><a href="#">Edificio Politecnico</a></li>
                <li><a href="#">Politecnico Hidalgo</a></li>
            </ul>
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
          <li><a href="#" onclick="BibliotecaIlu()">Biblioteca de Iluminación</a></li>

          <div class="linea_vertical"></div>
          <li><a href="#" onclick="Videos()">Galeria de videos</a></li>

          <div class="linea_vertical"></div>
          <li><a href="#" onclick="FormasPago()">Formas de Pago</a></li>

          <div class="linea_vertical"></div>
          <li><a href='http://www.emailmeform.com/builder/form/8be2f9dIJbs52cl6gEvU' target='_blank'>Contáctanos</a></li>

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
                <img src="images/LogoHolophane.svg" onmouseover="visitar1()" onmouseout="novisitar1()" />
              </a>
          </div>
          <div class="contUnLogo">
            <div id="v2" class="botoncito">
                <p>Visitar pág.</p>
            </div>
            <a href="http://www.lithonia.com" target="blank">
              <img src="images/LogoLithonia.svg" onmouseover="visitar2()" onmouseout="novisitar2()"/>
            </a>
          </div>
          <div class="contUnLogo">
            <div id="v3" class="botoncito">
                <p>Visitar pág.</p>
            </div>
            <a href="http://www.americanelectriclighting.com/" target="blank">
              <img src="images/LogoAEL.svg" onmouseover="visitar3()" onmouseout="novisitar3()"/>
            </a>
          </div>
          <div class="contUnLogo">
            <div id="v4" class="botoncito">
              <p>Visitar pág.</p>
            </div>
            <a href="http://hydrel.acuitybrands.com/" target="blank">
              <img src="images/LogoHYDREL.svg" onmouseover="visitar4()" onmouseout="novisitar4()"/>
            </a>
          </div>
          <div class="contUnLogo">
            <div id="v5" class="botoncito">
              <p>Visitar pág.</p>
            </div>
            <a href="http://www.hubbell-killark.com/" target="blank">
              <img src="images/LogoKILLARK.svg" onmouseover="visitar5()" onmouseout="novisitar5()"/>
            </a>
          </div>
        </div>
      </div>
        <div id="footer2" >
          <div id="contenedorCopy">
            <h4>&copy; 2015 Artefactos Lumínicos es una marca registrada.</h4>
            <a href="http://www.artefactosluminicos.com.mx/attachments/File/AvisoPrivacidad.pdf" id="texto9" align="center"> <h4>Aviso de Privacidad</h4></a>
          </div>
        </div>
      </footer>
      </body>
</html>
