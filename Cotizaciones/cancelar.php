<?php
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  header('Content-Type: text/html; charset=UTF-8');
  session_start();
  include("funciones_mysql.php");
  $con=conectar(); $cotizacion=$_SESSION['cotizacion'];
  $sql="DELETE FROM Cotizaciones WHERE id_cotizacion='$cotizacion'";
  $res=query($sql, $con);
  $sql1="DELETE FROM Partidas WHERE id_cotizacion='$cotizacion'";
  $con1=query($sql1, $con);
  $sql2="DELETE FROM Notas WHERE id_cotizacion='$cotizacion'";
  $con2=query($sql2, $con);
  unset($_SESSION['cotizacion']); unset($_SESSION['empresa']);
?>
<script>(function() { document.location.href='log_in.php'; })();</script>
