<?php
  function altaCliente() {
    session_start();
    if(!isset($_SESSION['usuario'])) header('Location: index.php');
    include("funciones_mysql.php");
    $con=conectar(); $id_user=$_SESSION['usuario']; $i=0;
    foreach ($_POST as $rep => $val) { $i++; ${'aC'.$i}=$val; }
    $sql="SELECT * FROM Clientes ORDER BY id_num_cliente ASC";
    $res=query($sql,$con);
    while($cam=mysql_fetch_row($res)) { $idCli=$cam[0] + 1; }
    $sql="SELECT * FROM Direcciones ORDER BY id_direccion ASC";
    $res=query($sql,$con);
    while($cam=mysql_fetch_row($res)) { $idDir=$cam[0] + 1; }
    $sql="SELECT * FROM Contacto ORDER BY id_contacto ASC";
    $res=query($sql,$con);
    while($cam=mysql_fetch_row($res)) { $idCon=$cam[0] + 1; }
    $sql="INSERT INTO Clientes(id_num_cliente,id_cliente,empresa,id_direccion,
      id_contacto,id_usuario,desactivado) VALUES('$idCli','$ac1','$ac2',
      '$idDir','$idCon','$id_user','0')";
    $res=query($sql,$con);
    $sql="INSERT INTO Direcciones(id_direccion,calle,num_int,num_ext,
      municipio,estado,cp,colonia) VALUES('$idDir','$ac3','$ac4',
      '$ac5','$ac7','$ac8','$ac9','$ac6')";
    $res=query($sql,$con);
    $sql="INSERT INTO Contacto(id_contacto,nombre_c,departamento,telefono1,
      telefono2,e_mail_c) VALUES('$idCon','$ac10','$ac11',
      '$ac12','$ac13','$ac14')";
    $res=query($sql,$con);
    header("Location: administracion.php?altaCliente=true");
  }
?>
