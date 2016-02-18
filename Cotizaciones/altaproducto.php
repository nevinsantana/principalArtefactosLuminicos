<?php
  session_start();
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  include("funciones_mysql.php");
  $conexion=conectar();
  $id_usuario=$_SESSION['usuario'];
  $id_catalogo=$_POST['catalogo'];
  $unidad=$_POST['unidad'];
  $descripcion=$_POST['descripcion'];
  $sql="INSERT INTO Catalogo(id_catalogo, unidad, descripcion, activo) VALUES
   ('$id_catalogo','$unidad','$descripcion','1')";
  $resultado=query($sql, $conexion);
?>
<!doctype html >
<html>
  <head>
    <meta http-equiv="Content-Type" content="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Consecutivo de Cotizaciones</title>
  </head>
  <body>
    <div id="page">
      <div id="header">
        <h1>Artefactos Lumínicos SA de CV</h1>
        <div id="menu">
          <div id="cerrar">
            <ul><li><a href="cerrar_sesion.php">Cerrar Sesion</a></li></ul>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      function regresar() {
        alert("Se ha agregado el producto con Exito");
        document.location.href='index.php';
      }
      regresar();
    </script>
  </body>
</html>
