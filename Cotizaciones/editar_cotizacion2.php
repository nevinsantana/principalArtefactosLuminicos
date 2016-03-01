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
  $i="";
  foreach($_POST as $cam => $val) { $i++; ${'eC'.$i}=$val; }
  $sql="UPDATE Cotizaciones SET fecha='$eC1', vigencia='$eC2',
    no_partidas='$eC3', divisa='$eC7',subtotal='$subtotal',
    iva='$iva', total='$total',t_entrega='$eC8',c_pago='$eC9' WHERE
    id_cotizacion='$id_cotizacion'";
  $res=query($sql, $con);
  $eC4=str_replace(
    array('�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�',
    '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�',
    '�', '�', "'"),
    array('�', 'a', 'a', 'a', '�', 'A', 'A', '�', 'e', 'e', '�', 'E', 'E', '�',
    'i', 'i', '�', 'I', 'I', '�', 'o', 'o', '�', 'O', 'O', '�', 'u', 'u', '�',
    'U', 'U', ""), $eC4
  );
  $eC5=str_replace(
    array('�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�',
    '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�',
    '�', '�', "'"),
    array('�', 'a', 'a', 'a', '�', 'A', 'A', '�', 'e', 'e', '�', 'E', 'E', '�',
    'i', 'i', '�', 'I', 'I', '�', 'o', 'o', '�', 'O', 'O', '�', 'u', 'u', '�',
    'U', 'U', ""), $eC5
  );
  $eC6=str_replace(
    array('�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�',
    '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�',
    '�', '�', "'"),
    array('�', 'a', 'a', 'a', '�', 'A', 'A', '�', 'e', 'e', '�', 'E', 'E', '�',
    'i', 'i', '�', 'I', 'I', '�', 'o', 'o', '�', 'O', 'O', '�', 'u', 'u', '�',
    'U', 'U', ""), $eC6
  );
  $sqla="UPDATE Datos_Cotizacion SET datos_cliente='$eC4',
    datos_contacto='$eC5',datos_vendedor='$eC6' WHERE
    id_cotizacion='$id_cotizacion'";
  $resa=query($sqla, $con);
  unset($_SESSION['cotizacion']);
  unset($_SESSION['empresa']);
  unset($_SESSION['subtotal']);
  unset($_SESSION['total']);
  unset($_SESSION['iva']);
  unset($_SESSION['no_partidas']);
  if(isset($_SESSION['cancelar'])) unset($_SESSION['cancelar']);
?>
<html>
  <script >
    (function(){
      alert("La cotizacion ha finalizado con exito");
      document.location.href='index.php';
    })();
  </script>
</html>
