<?php
  include ("funciones_mysql.php");
  $conexion=conectar();
  $i=1;
  for ($i=1; $i <= 202; $i++) {
    $sql="UPDATE Clientes SET id_num_cliente='$i' WHERE id_direccion='$i'";
    $resultadoa=query($sql, $conexion);
  }
?>
