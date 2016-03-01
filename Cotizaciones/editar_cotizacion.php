<?php
  session_start();
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  include("funciones_mysql.php");
  $id_usuario=$_SESSION['usuario'];
  header('Content-Type: text/html; charset=UTF-8');
  $con=conectar(); $id_cotizacion=$_GET['id_cotizacion'];
  echo $id_cotizacion;
  $sql="SELECT * FROM Cotizaciones WHERE id_cotizacion='$id_cotizacion'";
  $res=query($sql, $con);
  $cam=mysql_fetch_assoc($res);
  $id_cliente=$cam['id_cliente'];
  $sql="SELECT empresa FROM Clientes WHERE id_num_cliente='$id_cliente'";
  $res=query($sql, $con);
  $cam=mysql_fetch_assoc($res); $empresa=$cam['empresa'];
  $_SESSION['cotizacion']=$id_cotizacion;
  if(isset($_GET['empresa'])) $_SESSION['empresa']=$_GET['empresa'];
	else $_SESSION['empresa']=$empresa;
  if(isset($_GET['cotiz_usuario']))
    $_SESSION['cotiz_usuario']=$_GET['cotiz_usuario'];
  $_SESSION['cancelar']=1;
  header('Location: partidas.php');
?>
