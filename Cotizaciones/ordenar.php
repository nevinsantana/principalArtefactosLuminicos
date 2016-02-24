<?php
  if(isset($_GET['cotizacion'])) $cot=$_GET['cotizacion'];
  include("funciones_mysql.php");
  $con=conectar();
  $i=""; $or=""; $idPartida="";
  $sql="UPDATE partidas SET no_partida='-999' WHERE id_cotizacion='$cot'";
  $res=query($sql, $con);
  foreach($_GET as $cam => $val) {
    if($cam=='cotizacion'){}
    else {
    $i++;
    $or=$_POST['orden'.$i];
    $sql="UPDATE partidas SET no_partida='".$or."' WHERE id_partida='$val' AND
    id_cotizacion = '$cot'";
    $res=query($sql, $con);
    }
  }
  header("Location: partidas.php");
?>
