<?php
  session_start();
  include("funciones_mysql.php");
  $con=conectar();
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  if(!isset($_GET['opcion'])) $opcion="nada"; else $opcion=$_GET['opcion'];
  if(!isset($_POST['rfc'])) $rfc="nada"; else $rfc=$_POST['rfc'];
  if(!isset($_POST['empresa'])) $empresa="nada";
  else $empresa=$_POST['empresa'];
?>
<html>
  <head>
    <meta http-equiv="Content-Type" charset="utf-8">
    <link href="tabla.css" rel="stylesheet" type="text/css">
    <title>Clientes</title>
  </head>
  <body>
    <div id="detalles"></div>
    <div style="margin-left:450px;" id=tform>
        <img align="center" src="images/logo112x82.png">
        Herramienta de visualizacion de clientes
    </div>
    <div align="center" id="links">
      <table cellspacing="30px" border=0>
        <tr>
          <td valign="top">
            <br><br>
            <a href="cat_clientes.php?opcion=todo">
              <input type="button" value="Mostrar todo">
            </a>
          </td>
          <td valign="top">
            Buscar por rfc:
            <br><br>
            <form action="cat_clientes.php" method="POST">
              <input type=text name=rfc required>
              <input type=submit value="Buscar">
            </form>
          </td>
          <td valign="top">
            Buscar por nombre de la empresa:
            <br><br>
            <form action="cat_clientes.php" method="POST">
              <input type=text name=empresa required>
              <input type=submit value="Buscar">
            </form>
          </td>
          <td valign="top">
            Salir:
            <br><br>
            <a href="administracion.php">
              <input name="button" type="submit" value="Salir">
            </a>
          </td>
        </tr>
      </table>
    </div>
    <?php
      if($opcion=="todo") include("catalogo_clientes.php");
      if($rfc!="nada") include("busqueda_clientes.php");
      if($empresa!="nada") include("busqueda_clientes2.php");
    ?>
  </body>
</html>
