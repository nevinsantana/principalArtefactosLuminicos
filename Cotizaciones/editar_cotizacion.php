<?php
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  session_start();
  include("funciones_mysql.php");
  $id_usuario=$_SESSION['usuario'];
  header('Content-Type: text/html; charset=UTF-8');
  $conexion=conectar();
  $id_cotizacion=$_GET['id_cotizacion'];
  $sql="SELECT id_cliente FROM Cotizaciones WHERE
    id_cotizacion='$id_cotizacion'";
  $resultado=query($sql, $conexion);
  $campo=mysql_fetch_array($resultado);
  $id_cliente=$campo['id_cliente'];
  $sql="SELECT empresa FROM Clientes WHERE id_cliente='$id_cliente'";
  $resultado=query($sql, $conexion);
  $campo=mysql_fetch_array($resultado);
  $empresa=$campo['empresa'];
  $_SESSION['cotizacion']=$id_cotizacion;
  if(isset($_GET['empresa'])) $_SESSION['empresa']=$_GET['empresa'];
	else $_SESSION['empresa']=$empresa;
  if(isset($_GET['cotiz_usuario']))
    $_SESSION['cotiz_usuario']=$_GET['cotiz_usuario'];
  $_SESSION['cancelar']=1;
  header('Location: partidas.php');
?>
