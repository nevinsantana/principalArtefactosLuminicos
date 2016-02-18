<?php
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  session_start();
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
        <h1><a href="#">Artefactos Lumínicos SA de CV</a></h1>
        <div id="menu"><ul></ul></div>
      </div>
      <div id="intro">
        <h2>Consecutivo de Cotizaciones!</h2>
        <?php
          if(isset($_POST['id_usuario'])) {
            $_SESSION['id_usuario']=$_POST['id_usuario'];
            echo "Bienvenido! Has iniciado sesion: ".$_POST['id_usuario'];
          }
          else {
            if(isset($_SESSION['id_usuario']))
              echo "Has iniciado Sesion: ".$_SESSION['id_usuario'];
            else echo "Acceso Restringido";
          }
        ?>
        <a href="cerrar_sesion.php">Cerrar Sesion</a>
      </div>
    </div>
  </body>
</html>
