<?php
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  if(!isset($_GET['op'])) $seccion=null;
  else $seccion=$_GET['op'];
?>
<html>
  <head>
    <meta http-equiv="Content-Type" charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Consecutivo de cotizaciones</title>
  </head>
  <body>
    <div id="ven">
      <br>
      <table border="0px" cellpadding="0" cellspacing="0">
        <tr>
          <td aling="left">
            <div id="producto">Agregar producto</div>
            <a id="enlace1">
              <img src="images/alta_p.png" width="55px" height="90px"
                href="alta_p.php">
            </a>
          </td>
          <td aling="left">
            <div id="producto">Borrar producto</div>
            <a id="enlace2">
              <img src="images/baja_p.png" width="55px" height="90px"
                href="baja_p.php">
            </a>
          </td>
          <td aling="left">
            <div id="producto">Modificar producto</div>
            <a id="enlace3">
              <img src="images/cambio_p.png" width="55px" height="90px"
                href="cambio_p.php">
            </a>
          </td>
          <td aling="left">
            <div id="producto">Visualizar catálogo</div>
            <a href="cat_prod.php">
              <img src="images/ver.png" width="55px" height="90px">
            </a>
          </td>
        </tr>
      </table>
    </div>
    <div id="detalles"></div>
  </body>
</html>
