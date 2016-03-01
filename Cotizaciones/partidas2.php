<?php
  session_start();
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  header('Content-Type: text/html; charset=UTF-8');
  $id_usuario=$_SESSION['usuario'];
  $id_cotizacion=$_SESSION['cotizacion'];
  include("funciones_mysql.php");
  $con=conectar();
  foreach ($_POST as $camp => $value) { ${$camp}=$value; }
  $precio_total=$precio_uni * $cantidad;
  $string=$_POST['partida'];
  $string2=$_POST['catalogo'];
  $string3=$_POST['descripcion'];
  $string=str_replace(array(
    '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�',
    '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�',
    '�', "'"),
    array('�', 'a', 'a', 'a', '�', 'A', 'A', '�', 'e', 'e', '�', 'E', 'E', '�',
    'i', 'i', '�', 'I', 'I', '�', 'o', 'o', '�', 'O', 'O', '�', 'u', 'u', '�',
    'U', 'U', ""), $string
  );
  $string2=str_replace(array(
    '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�',
    '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�',
    '�', "'"),
    array('�', 'a', 'a', 'a', '�', 'A', 'A', '�', 'e', 'e', '�', 'E', 'E', '�',
    'i', 'i', '�', 'I', 'I', '�', 'o', 'o', '�', 'O', 'O', '�', 'u', 'u', '�',
    'U', 'U', ""), $string2
  );
  $string3=str_replace(array(
    '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�',
    '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�',
    '�', "'"),
    array('�', 'a', 'a', 'a', '�', 'A', 'A', '�', 'e', 'e', '�', 'E', 'E', '�',
    'i', 'i', '�', 'I', 'I', '�', 'o', 'o', '�', 'O', 'O', '�', 'u', 'u', '�',
    'U', 'U', ""), $string3
  );
  $sql="SELECT * FROM Partidas where id_cotizacion='$id_cotizacion'
    ORDER BY id_partida DESC LIMIT 1";
  $res=query($sql, $con);
  $campo=mysql_fetch_row($res);
  if($campo[0]== '') $no_partida=1; else $no_partida=$campo[0] + 1;
  if($campo[1]== '') $id_partida=1; else $id_partida=$campo[1] + 1;
  $sql="INSERT INTO Partidas(no_partida, id_partida, id_cotizacion, partida,
    cantidad, unidad, catalogo, descripcion, precio_uni, precio_total)
    VALUES('$no_partida','$id_partida','$id_cotizacion','$string','$cantidad',
    '$unidad','$string2','$string3','$precio_uni','$precio_total')";
  $res=query($sql, $con);
  if($res) header("Location: partidas.php");
?>
