<!DOCTYPE html>
<html class="no-js">
  <head>
      <meta charset="UTF-8" />
      <meta name="keywords" content="HTML, CSS, PHP, JavaScript" />
      <meta name="description" content="Venta de artefactos fotoluminiscentes"/>
      <title>Prueba de diseño</title>
      <link href="css/style.css" rel="stylesheet" type="text/css" />
      <link href="css/menu.css" rel="stylesheet" type="text/css" />
  </head>
  <body onload="alternar_banner()">
    <section class="gifContainer">
      <a href="#">
        <img class="gifProyectos" src="images/modelo.png" name="banner">
      </a>
    </section>
    <div class="break"></div>
    <div id="separaSeccion"></div>
    <section class="contenidoSection">
        <div class="centrarContenidoSection">
        <span class="descripcionBanco">Ver nuestras formas de pago:</span>
        <img class="banco" src="images/Banamex.svg" onclick="FormasPago()"/>
        <img class="banco" src="images/BancomerLogo.svg" onclick="FormasPago()"/><br/><br/><br/><br/>
      </div>
    </section>
    <div class="break"></div>
    <div id="separaSeccion"></div>
    <section class="contenidoSection">
      <div class="divIzq">
      <div class="centraEnSection" id="prueba">
        <div class="vista">
          <img src="images/biblioteca.jpg" />
          <div class="mascara"></div>
          <div class="contenido">
            <h2>Biblioteca de iluminación</h2>
            <p>Principios básicos de la iluminación, niveles de iluminación recomendados en México...</p>
            <a href="#" class="informacion">Ver más</a>
          </div>
        </div>
      </div>
    </div>
    <div class="divDer">
      <div class="centraEnSection" id="prueba2">
        <div class="vista">
          <img src="images/superposte.jpg" />
          <div class="mascara"></div>
          <div class="contenido">
            <h2>Superpostes</h2>
            <p>Ideal para zonas amplias que requieran de una gran iluminación...</p>
            <a href="#" class="informacion">Ver más</a>
          </div>
        </div>
      </div>
    </div>
    </section>
    <div class="break">
    <div id="separaSeccion"></div>
    <section class="gifContainer">
        <img src="images/index-alsa_31.gif" class="gifProyectos"/>
    </section>
    <!--<div id="separaSeccion"></div>
    <section class="contenidoSection">
      <div class="video">
        <iframe src="https://www.youtube.com/embed/KNakyTK74Ko" width="800" height="450" frameborder="0">
        </iframe>
      </div>
    </section>-->
  </body>
</html>
<script type="text/javascript" src="js/alternarBanner.js"></script>
