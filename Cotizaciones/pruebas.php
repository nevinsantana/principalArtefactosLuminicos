<?php
  include("funciones_mysql.php");
  $con=conectar();
  $sql="SELECT * FROM Cotizaciones WHERE id_cotizacion='50'";
  $resultado=query($sql, $con);
  $cotizaciones=mysql_fetch_array($resultado);
  foreach ($cotizaciones as $camp => $value) { ${$camp}=$value; }
  echo $divisa;
  //SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME =
  //esto es para todas las columnas de una tabla
?>
