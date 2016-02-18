<?php
session_start();
if(!isset($_SESSION['usuario'])) header('Location: index.php');
?>
<!doctype html>
<html>
  <head>
    <meta http-equiv="Content-Type" charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Consecutivo de Cotizaciones</title>
  </head>
  <body>
    <div id="page">
      <div id="header">
        <h1>Artefactos Lumínicos SA de CV</h1>
      </div>
      <div id="main">
        <div class="ic"></div>
      </div>
    </div>
      <script>
        function myFunction() {
          if(confirm("¿Realmente desea cerrar sesion?"))
            document.location.href='cerrarsesion2.php';
          else document.location.href='ventas.php';
        }
        myFunction();
      </script>
  </body>
</html>
