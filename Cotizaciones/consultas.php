<?php
  include("funciones_mysql.php");
  $conexion=conectar();
  $i=0;
  $activo=1;
  $sql="UPDATE Catalogo SET activo='$activo' WHERE no_producto='$i'";
  $resultado=query($sql, $conexion);
?>
