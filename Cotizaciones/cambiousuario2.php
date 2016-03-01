<?php
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  session_start();
  include("funciones_mysql.php");
  $id=$_GET['id'];
  $id_usuario=$_SESSION['usuario'];
  foreach ($_POST as $camp => $value) { ${$camp}=$value; }
  $con=conectar();
  $sql="SELECT * FROM Clientes WHERE id_num_cliente='$id'";
  $res=query($sql, $con);
  $cam=mysql_fetch_array($res);
  foreach ($cam as $camp => $value) { ${$camp}=$value; }
  $sql="UPDATE Clientes SET id_cliente='$rfc',empresa='$empresa' WHERE
    id_num_cliente='$id'"; $res=query($sql, $con);
  $sql="UPDATE Direcciones SET calle='$calle',num_int='$num_int',
    num_ext='$num_ext',municipio='$municipio', colonia='$colonia',
    estado='$estado',cp='$cp' WHERE id_direccion='$id_direccion'";
  $res=query($sql, $con);
  $sql="UPDATE Contacto SET nombre_c='$contacto',departamento='$departamento',
    telefono1='$telefono1',telefono2='$telefono2',e_mail_c='$email' WHERE
    id_contacto='$id_contacto'"; $res=query($sql, $con);
?>
<!doctype html >
<html>
    <head>
      <meta http-equiv="Content-Type" charset="utf-8">
      <link href="style.css" rel="stylesheet" type="text/css">
      <title>Consecutivo de Cotizaciones</title>
    </head>
  <body>
    <div id="page">
      <div id="header"><h1>Artefactos Lumínicos SA de CV</h1> </div>
      <div id="main"><div class="ic"></div></div>
    </div>
    <script>
      (function() {
        alert("Modificaciones realizadas con Exito");
        document.location.href='log_in.php';
      })();
    </script>
  </body>
</html>
