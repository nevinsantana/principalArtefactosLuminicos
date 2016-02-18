<?php
  session_start();
  include("funciones_mysql.php");
  $conexion=conectar();
  header('Content-Type: text/html; charset=UTF-8');
  $id_cotizacion=$_SESSION['cotizacion'];
  $id_nota=$_GET['id_nota'];
  $sql="DELETE FROM Notas WHERE id_cotizacion='$id_cotizacion' AND no_nota='$id_nota'";
  $resultado=query($sql, $conexion);
  if($resultado) header("Location: notas.php");
?>
