<?php
  include("funciones_mysql.php");
  $con=conectar();
  $sql="SELECT * FROM Cotizaciones WHERE id_cotizacion='50'";
  $resultado=query($sql, $con);
  $cotizaciones=mysql_fetch_array($resultado);
  foreach ($cotizaciones as $camp => $value) { ${$camp}=$value; }
  echo $divisa;
?>
