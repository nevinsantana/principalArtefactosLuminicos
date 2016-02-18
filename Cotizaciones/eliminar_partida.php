<?php
  session_start();
  header('Content-Type: text/html; charset=UTF-8');
  include("funciones_mysql.php");
  $conexion=conectar();
  $id_cotizacion=$_SESSION['cotizacion'];
  $id_partida=$_GET['id_partida'];
  $sql="DELETE FROM Partidas WHERE id_cotizacion='$id_cotizacion' AND
    id_partida='$id_partida'";
  $resultado=query($sql, $conexion);
  if($resultado) header("Location: partidas.php");
?>
