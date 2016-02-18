<?php
  session_start();
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  include("funciones_mysql.php");
  $con=conectar();
  $id_cotizacion=$_SESSION['cotizacion'];
  $descuento=$_POST['descuento'];
  $descuento=$descuento / 100;
  $sql="UPDATE Cotizaciones SET descuento='$descuento' WHERE
    id_cotizacion='$id_cotizacion'";
  $resultado=query($sql, $con);
  if(isset($_SESSION['cancelar'])) {
    $cancelar=$_SESSION['cancelar'];
    header("Location: editar_form_cotizacion.php");
  }
  else { $cancelar=0; header("Location: form_cotizacion.php"); }
?>
