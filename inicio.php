<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta name="keywords" content="HTML, CSS, PHP, JavaScript" />
        <meta name="description" content="Venta de artefactos fotoluminiscentes"/>
        <title>Prueba de diseño</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />

    </head>
    <body onload="alternar_banner()">



      <script type="text/javascript" src="jquery.js"></script>
      <title>Rotación de banners con Javascript</title>
      <script>
        //creo array de imágenes
        array_imagen = new Array(2)
        array_imagen[0] = new Image(905,333)
        array_imagen[0].src = "images/DSC_0038.JPG"
        array_imagen[1] = new Image(905,333)
        array_imagen[1].src = "images/DSC_0040.JPG"
        array_imagen[2] = new Image(905,333)
        array_imagen[2].src = "images/DSC_0097.JPG"
        array_imagen[3] = new Image(905,333)
        array_imagen[3].src = "images/DSC_0117.JPG"
        //creo el array de URLs
        array_url = new Array(4)
        array_url[0] = "#"
        array_url[1] = "#"
        array_url[2] = "#"
        array_url[3] = "#"
        //variable para llevar la cuenta de la imagen siguiente
        contador = 0;
        //función para rotar el banner
        function alternar_banner(){
            window.document["banner"].src = array_imagen[contador].src
            window.document.links[0].href = array_url[contador]
            contador ++
            contador = contador % array_imagen.length
            setTimeout("alternar_banner()",3000)
        }
      </script>

      <a href="#">
        <img class="gifProyectos" src="images/modelo.png" name="banner">
      </a>
      <div id="separaSeccion"></div>

      <div id="imageGif">
        <img style="float:right"; src="images/index-alsa_31.gif"/>
        Contáctanos en los teléfonos:<br>
        58 72 83 26 <br>
        58 70 07 71 <br>
        58 72 21 32 <br>
        58 72 21 16
        <br><br>Ver nuestras formas de pago:
        <img id="Banamex" src="images/Banamex.svg"/>
        <img id="Bancomer" src="images/BancomerLogo.svg"/>
      </div>

     <div id="separaSeccion"></div>

      <div id="prueba">
        <h1 id="PruebaTexto">Biblioteca de iluminación</h1>
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

      <div id="prueba2">
        <h1 id="PruebaTexto2">Superpostes</h1>
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

      <div id="separaSeccion"></div>

      <div id="video">
        <iframe width="640" height="435" src="https://www.youtube.com/embed/KNakyTK74Ko" frameborder="0" allowfullscreen></iframe>
      </div>      
    </body>
</html>
