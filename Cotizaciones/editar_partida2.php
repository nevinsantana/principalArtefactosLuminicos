<?php
  session_start();
  include ("funciones_mysql.php");
  $con=conectar();
  header('Content-Type:text/html; charset=UTF-8');
  $id_cotizacion=$_SESSION['cotizacion'];
  $id_partida=$_GET['id_partida'];
  foreach ($_POST as $camp => $value) { ${$camp}=$value; }
  $precio_total=$precio_uni * $cantidad;
  $partida=str_replace(
    array('�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�',
      '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�',
      '�', '�', '�', "'"),
    array('�', 'a', 'a', 'a', '�', 'A', 'A', '�', 'e', 'e', '�', 'E', 'E', '�',
      'i', 'i', '�', 'I', 'I', '�', 'o', 'o', '�', 'O', 'O', '�', 'u', 'u',
      '�', 'U', 'U', "`"), $partida
  );
  $catalogo=str_replace(
    array('�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�',
      '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�',
      '�', '�', '�', "'"),
    array('�', 'a', 'a', 'a', '�', 'A', 'A', '�', 'e', 'e', '�', 'E', 'E', '�',
      'i', 'i', '�', 'I', 'I', '�', 'o', 'o', '�', 'O', 'O', '�', 'u', 'u',
      '�', 'U', 'U', "`"), $catalogo
  );
  $descripcion=str_replace(
    array('�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�',
      '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�',
      '�', '�', '�', "'"),
    array('�', 'a', 'a', 'a', '�', 'A', 'A', '�', 'e', 'e', '�', 'E', 'E', '�',
      'i', 'i', '�', 'I', 'I', '�', 'o', 'o', '�', 'O', 'O', '�', 'u', 'u',
      '�', 'U', 'U', "`"), $descripcion
  );
  $sql="UPDATE Partidas SET partida='$partida', cantidad='$cantidad',
    unidad='$unidad', catalogo='$catalogo', descripcion='$descripcion',
    precio_uni='$precio_uni', precio_total='$precio_total' WHERE
    id_cotizacion='$id_cotizacion' and id_partida='$id_partida'";
  $resultado=query($sql, $con);
  if ($resultado) header("Location:partidas.php");
?>
