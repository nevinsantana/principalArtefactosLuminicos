<html lang='es-mx' class='no-js'>
  <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='keywords' content='html, css, php, javascript'>
    <meta name='description' content='Sistema de reportes de asistendcia'>
    <meta name='author' content='Nevin Santana, Enrique Rodriguez'>
    <link rel='icon' type='image/png' href='img/favicon.png' sizes='64x64'>
    <link rel="stylesheet" href="../resources/fAwesome/css/font-awesome.min.css">
    <link rel='stylesheet' href='css/style.css'>
      <title>Asistencia</title>
    <script src='../js/jquery.js'></script>
  </head>
<body>
  <br>
  <h1 align="center">Cotizaciones 2016</h1>
<table id='repTemporal'>
  <thead>
    <tr>
      <td>Cotizacion</td>
      <td>Vendedor</td>
      <td>Cliente</td>
      <td>Fecha</td>
      <td>Importe</td>
    </tr>
  </thead>
  <tbody>
<?php
  mysql_set_charset('utf8');
  include("php/funciones.php");
  $fecha1=date("Y-m-d");
  $sql="SELECT * FROM Cotizaciones WHERE activo=1 AND fecha BETWEEN '2016-01-01' AND '$fecha1'";
  $res=query($sql,$con);

  while($cam=mysql_fetch_assoc($res)){
    foreach ($cam as $camp => $val) { ${$camp} = $val;   }
    if($id_cliente!='' && $id_usuario!=''){
    $sqlC="SELECT * FROM Clientes WHERE id_num_cliente=$id_cliente";
    $resC=query($sqlC,$con);
    $camC=mysql_fetch_assoc($resC);
    foreach ($camC as $campC => $valC) { ${$campC} = $valC;  }
    $sqlU="SELECT * FROM Usuarios WHERE id_usuario='$id_usuario'";
    $resU=query($sqlU,$con);
    $camU=mysql_fetch_assoc($resU);
    foreach ($camU as $campU => $valU) { ${$campU} = $valU;  }

    echo "
    <tr>
    <td>$id_cotizacion</td>
    <td>$nombre $apellido_p</td>
    <td>$empresa</td>
    <td>$fecha</td>
    <td>$total</td><tr>";
}}
?>
</tbody>
</table>
</body>
</html>
