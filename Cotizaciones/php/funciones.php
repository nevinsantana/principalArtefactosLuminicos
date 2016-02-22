<?php
  @session_start();
  $indexFF='Location: ../index.php'; $index='Location: index.php';
  $admFF='Location: ../administracion.php'; $adm='Location: administracion.php';

  function conectar() {
    $link=mysql_connect("localhost","artes_cotizacion","Cotizaciones_1209");
    mysql_set_charset('utf8');
    mysql_select_db("artes01_Cotizaciones",$link)
    OR DIE("Error: No es posible establecer la conexión");
    return $link;
  } $con=conectar();

  function query($sql,$con) { $result=mysql_query($sql,$con); return $result; }

  function indexSesionUsuario() {
    if(isset($_SESSION['usuario'])) redireccionaUsuario();
  }

  function redireccionaUsuario($con) {
    $idUser=$_SESSION['usuario'];
    $sql="SELECT permiso,activo FROM Usuarios WHERE id_usuario='$idUser'";
    $res= query($sql,$con);
    $cam=mysql_fetch_array($res);
    foreach ($cam as $camp => $value) { ${$camp}=$value; }
    if($permiso=='1' && $activo=='1') {
      $_SESSION['permiso']='1';
      header("Location: administracion.php");
    }
    if($permiso=='2' && $activo=='1') {
      $_SESSION['permiso']='2';
      header("Location: ventas.php");
    }
    if($activo=='0') {
      session_destroy();
      header("Location: index.php?op=desactivado");
    }
  }

  /*index.php*/
  if(isset($_GET['validar']) && $_GET['validar']==true) validarUsuario();
  function validarUsuario($con) {
    $_SESSION['usuario']=$_POST['id_usuario'];
    $_SESSION['password']=$_POST['password'];
    $id_usuario=$_SESSION['usuario'];
    $password=$_SESSION['password'];
    $usuario='ninguno';
    $pass='ninguno';
    include ("funciones_mysql.php");
    $query="SELECT * FROM Log_In WHERE id_usuario=
      '$id_usuario' AND password='$password'";
    $result=mysql_query($query);
    while ($row=mysql_fetch_assoc($result)) {
      if($row['id_usuario']==$id_usuario) {
        $usuario=$row['id_usuario'];
        $pass=$row['password'];
      }
    }
    if($usuario=='ninguno' || $pass=='ninguno') {
      session_destroy();
      header("Location: ../index.php?op=mal");
    }
    else {
      $query="SELECT permiso,activo FROM Usuarios WHERE
        id_usuario='$id_usuario'";
      $result=mysql_query($query);
      if($row=mysql_fetch_assoc($result)) {
        $permiso=$row['permiso'];
        $aCtivo=$row['activo'];
      }
      if($permiso=='1' && $aCtivo=='1') {
        $_SESSION['permiso']='1';
        header("Location: ../administracion.php");
      }
      if($permiso=='2' && $aCtivo=='1') {
        $_SESSION['permiso']='2';
        header("Location: ../ventas.php");
      }
      if($aCtivo=='0') {
        session_destroy();
        header("Location: ../index.php?op=desactivado");
      }
    }
  }

  function verificaIndex() {
  	if (isset($_SESSION['usuario'])) {
  		$id_usuario=$_SESSION['usuario'];
  		$query="SELECT * FROM Usuarios WHERE id_usuario='$id_usuario'";
  		$res=mysql_query($query);
      $cam=mysql_fetch_array($res);
  		foreach ($cam as $camp => $value) { ${$camp}=$value; }
      if ($permiso=='1' && $activo=='1') header("Location: administracion.php");
      if ($permiso=='2' && $activo=='1') header("Location: ventas.php");
    }
  }
  /*fIndex.php*/

  /*administracion.php&ventas.php*/
  function verificaAdmon() {
    if($_SESSION['permiso']==2) header('Location: ventas.php');
  }

  function verificaVentas() {
    if($_SESSION['permiso']==1) header('Location: administracion.php');
  }

  function cotizacionSecNombre($con) {
    $id_usuario=$_SESSION['usuario'];
    if(!isset($_GET['sec'])) $seccion=null;
    else $seccion=$_GET['sec'];
    $sql="SELECT * FROM Usuarios WHERE id_usuario='$id_usuario'";
    $res=query($sql,$con);
    $cam=mysql_fetch_array($res);
    foreach($cam as $camp => $value) { ${$camp}=$value; }
    return array($seccion/*0*/,$nombre/*1*/,$apellido_p/*2*/);
  }

  function selectSection($con) {
    $sec=cotizacionSecNombre($con)[0];
    if($sec==null) require_once("home.php");
    if($sec=="alta") require_once("alta.php");
    if($sec=="baja") require_once("baja.php");
    if($sec=="cambio") require_once("cambio.php");
    if($sec=="cotizaciones") require_once("cotizaciones-admin.php");
    if($sec=="cotizacionesVentas") require_once("cotizaciones.php");
    if($sec=="orden") require_once("ordenes_admin.php");
    if($sec=="cotizar") require_once("cotizar_ad.php");
    if($sec=="cotizarV") require_once("cotizar.php");
    if($sec=="altaus") require_once("altaus.php");
    if($sec=="bajaus") require_once("bajaus.php");
    if($sec=="cambious") require_once("cambious.php");
    if($sec=="alta_p") require_once("alta_p.php");
    if($sec=="baja_p") require_once("baja_p.php");
    if($sec=="cambio_p") require_once("cambio_p.php");
    if($sec=="alta_pro") require_once("alta_pro.php");
    if($sec=="baja_pro") require_once("baja_pro.php");
    if($sec=="cambio_pro") require_once("cambio_pro.php");
    if($sec=="proyectos") require_once("proyectos.php");
    if($sec=="creditos") require_once("creditos.php");
  }
  /*fAdministracion.php&ventas.php*/

  /*alta.php*/
  if(isset($_GET['altaCliente'])) altaCliente($con, $admFF);
  function altaCliente($con, $adm) {
    $id_user=$_SESSION['usuario']; $i=0;
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
      id_contacto,id_usuario,desactivado) VALUES('$idCli','$aC1','$aC2',
      '$idDir','$idCon','$id_user','0')";
    $res=query($sql,$con);
    $sql="INSERT INTO Direcciones(id_direccion,calle,num_int,num_ext,
      municipio,estado,cp,colonia) VALUES('$idDir','$aC3','$aC4',
      '$aC5','$aC7','$aC8','$aC9','$aC6')";
    $res=query($sql,$con);
    $sql="INSERT INTO Contacto(id_contacto,nombre_c,departamento,telefono1,
      telefono2,e_mail_c) VALUES('$idCon','$aC10','$aC11',
      '$aC12','$aC13','$aC14')";
    $res=query($sql,$con);
    header($adm."?altaClien=si");
  }
  /*fAlta.php*/

  /*baja.php*/
  if(isset($_GET['borrarEmpresa']))
    borrarEmpresa($con, $_GET['borrarEmpresa'], $admFF);
  function borrarEmpresa($con, $emp, $adm) {
    $sql="UPDATE Clientes SET desactivado='1' WHERE empresa='$emp'";
    $res=query($sql, $con);
    header($adm."?erasedEmpresa=si");
  }
  /*fBaja.php*/

  /*cambio.php*/
  if(isset($_GET['cambioCliente']))
    cambioCliente($con, $i="", $_GET['cambioCliente'], $admFF);
  function cambioCliente($con, $i, $id, $adm) {
    $sql="SELECT * FROM clientes WHERE id_num_cliente='$id'";
    $res=query($sql,$con);
    $cam=mysql_fetch_assoc($res);
    $idD=$cam['id_direccion'];
    $idC=$cam['id_contacto'];
    $sql="SELECT * FROM Direcciones WHERE id_direccion=''";
    foreach ($_POST as $rep => $val) { $i++; ${'mC'.$i}=$val; ;}
    $sql="UPDATE Clientes SET id_cliente='$mC1',empresa='$mC2' WHERE
      id_num_cliente='$id'";
    $res=query($sql, $con);
    $sql="UPDATE Direcciones SET calle='$mC3',num_int='$mC4',
      num_ext='$mC5',municipio='$mC7', colonia='$mC6',
      estado='$mC8',cp='$mC9' WHERE id_direccion='$idD'";
    $res=query($sql, $con);
    $sql="UPDATE Contacto SET nombre_c='$mC10',departamento='$mC11',
      telefono1='$mC12',telefono2='$mC13',e_mail_c='$mC14' WHERE
      id_contacto='$idC'";
    $res=query($sql, $con);
    header($adm."?modifiedEmpresa=si");
  }
  /*fCambio.php*/

  /*altaus.php*/
  if(isset($_GET['altaus'])) altaus();
  function altaus() {
    if(!isset($_SESSION['usuario'])) header('Location: index.php');
    $con=conectar(); $i="";
    $sql="SELECT * FROM Usuarios ORDER BY numero ASC";
    $res=query($sql, $con);
    while($cam=mysql_fetch_row($res)) { $idNU=$cam[0] + 1; }
    foreach ($_POST as $rep => $val) { $i++; ${'aU'.$i}=$val; }
    if($aU7==$aU8) {
      $sql="INSERT INTO Usuarios(id_usuario, permiso, nombre, apellido_p,
        apellido_m, e_mail, numero) VALUES('$aU1','$aU2','$aU3','$aU4','$aU5',
        '$aU6','$idNU')";
      $res=query($sql, $con);
      $sql="INSERT INTO Log_in(id_usuario, password) VALUES('$aU1','$aU8')";
      $res=query($sql, $con);
      header("Location: ../administracion.php?altausComplete=true");
    }
    else header("Location: ../administracion.php?passError=true");
  }
  /*fAltaus.php*/

  /*cotizaciones-admin.php*/
  if(isset($_GET['resCot']))
    restauraCotizacion($_GET['resCot'], $_GET['id_cotizacion'], $con, $admFF);
  function restauraCotizacion($reEl, $cot, $con, $adm) {
    if($reEl=='re')
      $sql="UPDATE Cotizaciones SET activo='1' WHERE id_cotizacion='$cot'";
    else $sql="UPDATE Cotizaciones SET activo='0' WHERE id_cotizacion='$cot'";
    $resultado=query($sql, $con);
    header($adm.'?sec=cotizaciones');
  }
  /*fCotizaciones-admin.php*/
?>
