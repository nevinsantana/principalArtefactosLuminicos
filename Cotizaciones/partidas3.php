<?php
  session_start();
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  header('Content-Type: text/html; charset=UTF-8');
  include("funciones_mysql.php");
  $conexion=conectar();
  $id_cotizacion=$_SESSION['cotizacion'];
  $no_partidas=$_SESSION['no_partidas'];
  $subtotal=$_SESSION['subtotal'];
  $iva=$_SESSION['iva'];
  $total=$_SESSION['total'];
  $i="";
  foreach($_POST as $camp => $value) { $i++; ${'iP'.$i}=$value; }
  $sql="UPDATE Cotizaciones SET vigencia='$iP1',
    no_partidas='$no_partidas', divisa='$iP5',subtotal='$subtotal',
    iva='$iva',total='$total',t_entrega='$iP6',c_pago='$iP7' WHERE
    id_cotizacion='$id_cotizacion'";
  $resultado=query($sql, $conexion);
  $iP2=str_replace(array(
    '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�',
    '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�',
    '�', "'"),
    array('�', 'a', 'a', 'a', '�', 'A', 'A', '�', 'e', 'e', '�', 'E', 'E', '�',
    'i', 'i', '�', 'I', 'I', '�', 'o', 'o', '�', 'O', 'O', '�', 'u', 'u', '�',
    'U', 'U', ""), $iP2
  );
  $iP3=str_replace(array(
    '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�',
    '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�',
    '�', "'"),
    array('�', 'a', 'a', 'a', '�', 'A', 'A', '�', 'e', 'e', '�', 'E', 'E', '�',
    'i', 'i', '�', 'I', 'I', '�', 'o', 'o', '�', 'O', 'O', '�', 'u', 'u', '�',
    'U', 'U', ""), $iP3
  );
  $iP4=str_replace(array(
    '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�',
    '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�',
    '�', "'"),
    array('�', 'a', 'a', 'a', '�', 'A', 'A', '�', 'e', 'e', '�', 'E', 'E', '�',
    'i', 'i', '�', 'I', 'I', '�', 'o', 'o', '�', 'O', 'O', '�', 'u', 'u', '�',
    'U', 'U', ""), $iP4
  );
  $sql="UPDATE Datos_Cotizacion SET id_cotizacion='$id_cotizacion',
  datos_cliente='$iP2', datos_contacto='$iP3',datos_vendedor='$iP4'
  WHERE id_cotizacion='$id_cotizacion'";
  $resultado=query($sql, $conexion);
  unset($_SESSION['cotizacion']);
  unset($_SESSION['empresa']);
  unset($_SESSION['subtotal']);
  unset($_SESSION['total']);
  unset($_SESSION['iva']);
  unset($_SESSION['no_partidas']);
  if(isset($_SESSION['cancelar'])) unset($_SESSION['cancelar']);
?>
<html>
  <script>
    (function () {
      alert("La cotizacion ha finalizado con exito");
      document.location.href='index.php';
    })();
  </script>
</html>
