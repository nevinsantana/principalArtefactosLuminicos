<?php
  session_start();
  include("funciones_mysql.php");
  $con=conectar();
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  $id_cotizacion=$_GET['id_cotizacion'];
  $id_cotizacion2=$_GET['id_cotizacion2'];
  $empresa=$_POST['empresa'];
  $sql="SELECT * FROM Clientes WHERE empresa='$empresa'";
  //$res=query($sql, $con);
  $cam=mysql_fetch_assoc($res); $id_num_cliente=$cam['id_num_cliente'];
  $sql="SELECT * FROM Cotizaciones WHERE id_cotizacion='$id_cotizacion'";
  //$res=query($sql, $con);
  $cam=mysql_fetch_assoc($res);
  foreach ($cam as $camp => $value) { ${$camp}=$value; }
  $sql="INSERT INTO Cotizaciones(id_cotizacion, fecha, id_cliente, id_usuario,
    vigencia, no_partidas, divisa, subtotal, iva, total, t_entrega, c_pago,
    descuento, activo) VALUES('$id_cotizacion2','$fecha','$id_num_cliente',
    '$id_usuario','$vigencia','$no_partidas','$divisa','$subtotal','$iva',
    '$total','$t_entrega','$c_pago','$descuento','$activo')";
  //$res=query($sql, $con);
  $sql="SELECT * FROM Clientes WHERE empresa='$empresa'";
  //$res=query($sql, $con);
  $cam=mysql_fetch_assoc($res);
  $id_direccion=$cam['id_direccion'];
  $sql="SELECT * FROM Direcciones WHERE id_direccion=$id_direccion";
  //$res=query($sql, $con);
  $cam=mysql_fetch_assoc($res);
  foreach ($cam as $camp => $value) { ${$camp}=$value; }
  $sql="SELECT * FROM Clientes WHERE empresa='$empresa'";
  //$res=query($sql, $con);
  $cam=mysql_fetch_assoc($res); $id_contacto=$cam['id_contacto'];
  $sql="SELECT * FROM Contacto WHERE id_contacto='$id_contacto'";
  //$res=query($sql, $con);
  $cam=mysql_fetch_assoc($res);
  foreach ($cam as $camp => $value) { ${$camp}=$value; }
  $sql="SELECT * FROM Usuarios WHERE id_usuario='$id_usuario'";
  //$res=query($sql, $con);
  $usuario=mysql_fetch_assoc($res);
  $nombre=$usuario['nombre'];
  $apellido_p=$usuario['apellido_p'];
  $e_mail=$usuario['e_mail'];
  $datos_cliente="$empresa $calle int $num_int, ext $num_ext ,$municipio
    $estado, $cp";
  $datos_contacto="$nombre_c\nDepartamento de $departamento\nTels: $telefono1,
    $telefono2\n$e_mail_c";
  $datos_vendedor="$nombre $apellido_p\n$e_mail";
  $sql="INSERT INTO Datos_Cotizacion(id_cotizacion, datos_cliente,
    datos_contacto, datos_vendedor) VALUES('$id_cotizacion2','$datos_cliente',
    '$datos_contacto','$datos_vendedor')";
  //$res=query($sql, $con);
  $sql="SELECT * FROM Partidas WHERE id_cotizacion='$id_cotizacion'";
  //$res=query($sql, $con);
  while($cam=mysql_fetch_assoc($res)) {
    $id_partida=$cam['id_partida'];
    foreach ($cam as $camp => $value) { ${$camp}=$value; }
    $sql="INSERT INTO Partidas(id_partida, id_cotizacion, partida, cantidad,
      unidad, catalogo, descripcion, precio_uni, precio_total)
      VALUES('$id_partida','$id_cotizacion2','$partida','$cantidad','$unidad',
      '$catalogo','$descripcion','$precio_uni','$precio_total')";
    $res1=query($sql, $con);
  }
  $sql="SELECT * FROM Notas WHERE id_cotizacion='$id_cotizacion'";
  //$res=query($sql, $con);
  while($cam=mysql_fetch_assoc($res)) {
    $no_nota=$cam['no_nota']; $descripcion_nota=$cam['descripcion'];
    $sql="INSERT INTO Notas(id_cotizacion, no_nota, descripcion)
      VALUES('$id_cotizacion2','$no_nota','$descripcion_nota')";
    $res1=query($sql, $con);
  }
  //header("Location: editar_cotizacion.php?id_cotizacion=$id_cotizacion2");
?>
