<?php
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  session_start();
  include("funciones_mysql.php");
  $con=conectar(); $idCot=$_SESSION['cotizacion']; $des=$_POST['descripcion'];
  $eliminar=array("<!Doctype html>", "<html>", "<head>", "</head>", "<body>",
    "</body>", "</html>", "  ");
  $des=str_replace($eliminar, "", $des);
  trim($des);
  $eliminar=array("'");
  $des=str_replace($eliminar, "", $des);
  $sql="SELECT * FROM Notas WHERE id_cotizacion=$idCot ORDER BY no_nota DESC";
  $res=query($sql, $con);
  $cam=mysql_fetch_row($res);
  $no_nota=$cam[0] + 1;
  if($no_nota=="") $no_nota=1;
  $sql="INSERT INTO Notas(id_cotizacion, no_nota, descripcion)
    VALUES('$idCot','$no_nota','$des')";
  $res=query($sql, $con);
  header("Location: notas.php");
?>
