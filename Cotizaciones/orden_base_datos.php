<?php
  session_start();
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  $id_cotizacion=$_SESSION['cotizacion'];
  header('Content-Type: text/html; charset=UTF-8');
  include("funciones_mysql.php");
  $con=conectar();
  $no_partidas=$_SESSION['no_partidas'];
  $subtotal=$_SESSION['subtotal'];
  $iva=$_SESSION['iva'];
  $total=$_SESSION['total'];
  foreach ($_POST as $camp => $value) { ${$camp}=$value; }
  $sql="UPDATE Cotizaciones SET vigencia='$vigencia',
    no_partidas='$no_partidas', divisa='$divisa',subtotal='$subtotal',
    iva='$iva',total='$total',t_entrega='$t_entrega',c_pago='$c_pago' WHERE
    id_cotizacion='$id_cotizacion'";
  $res=query($sql, $con);
  $datCli=str_replace(array(
    'à', 'ä', 'â', 'ª', 'À', 'Â', 'Ä', 'è', 'ë', 'ê', 'È', 'Ê', 'Ë', 'ì', 'ï',
    'î', 'Ì', 'Ï', 'Î', 'ò', 'ö', 'ô', 'Ò', 'Ö', 'Ô', 'ù', 'ü', 'û', 'Ù', 'Û',
    'Ü', "'"
  ), array(
    'á', 'a', 'a', 'a', 'Á', 'A', 'A', 'é', 'e', 'e', 'É', 'E', 'E', 'í', 'i',
    'i', 'Í', 'I', 'I', 'ó', 'o', 'o', 'Ó', 'O', 'O', 'ú', 'u', 'u', 'Ú', 'U',
    'U', ""
  ), $datCli
  );
  $datCon=str_replace(array(
    'à', 'ä', 'â', 'ª', 'À', 'Â', 'Ä', 'è', 'ë', 'ê', 'È', 'Ê', 'Ë', 'ì', 'ï',
    'î', 'Ì', 'Ï', 'Î', 'ò', 'ö', 'ô', 'Ò', 'Ö', 'Ô', 'ù', 'ü', 'û', 'Ù', 'Û',
    'Ü', "'"
  ), array(
    'á', 'a', 'a', 'a', 'Á', 'A', 'A', 'é', 'e', 'e', 'É', 'E', 'E', 'í', 'i',
    'i', 'Í', 'I', 'I', 'ó', 'o', 'o', 'Ó', 'O', 'O', 'ú', 'u', 'u', 'Ú', 'U',
    'U', ""
  ), $datCon
  );
  $datVen=str_replace(array(
    'à', 'ä', 'â', 'ª', 'À', 'Â', 'Ä', 'è', 'ë', 'ê', 'È', 'Ê', 'Ë', 'ì', 'ï',
    'î', 'Ì', 'Ï', 'Î', 'ò', 'ö', 'ô', 'Ò', 'Ö', 'Ô', 'ù', 'ü', 'û', 'Ù', 'Û',
    'Ü', "'"
  ), array(
    'á', 'a', 'a', 'a', 'Á', 'A', 'A', 'é', 'e', 'e', 'É', 'E', 'E', 'í', 'i',
    'i', 'Í', 'I', 'I', 'ó', 'o', 'o', 'Ó', 'O', 'O', 'ú', 'u', 'u', 'Ú', 'U',
    'U', ""
  ), $datVen
  );
  $sqla="INSERT INTO Datos_Cotizacion(id_cotizacion, datos_cliente,
    datos_contacto, datos_vendedor) values('$id_cotizacion', '$datCli',
    '$datCon', '$datVen')";
  $resa=query($sqla, $con);
  unset($_SESSION['cotizacion']);
  unset($_SESSION['empresa']);
  unset($_SESSION['subtotal']);
  unset($_SESSION['total']);
  unset($_SESSION['iva']);
  unset($_SESSION['no_partidas']);
  if(isset($_SESSION['cancelar'])) unset($_SESSION['cancelar']);
?>
