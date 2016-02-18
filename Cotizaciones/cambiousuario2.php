<?php
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  session_start();
  include("funciones_mysql.php");
  $id=$_GET['id'];
  $id_usuario=$_SESSION['usuario'];
  $rfc=$_POST['rfc'];
  $empresa=$_POST['empresa'];
  $calle=$_POST['calle'];
  $num_int=$_POST['num_int'];
  $num_ext=$_POST['num_ext'];
  $colonia=$_POST['colonia'];
  $municipio=$_POST['municipio'];
  $estado=$_POST['estado'];
  $cp=$_POST['cp'];
  $contacto=$_POST['contacto'];
  $departamento=$_POST['departamento'];
  $telefono1=$_POST['telefono1'];
  $telefono2=$_POST['telefono2'];
  $email=$_POST['email'];
  $conexion=conectar();
  $sql="SELECT * FROM Clientes WHERE id_num_cliente='$id'";
  $resultado=query($sql, $conexion);
  $campo=mysql_fetch_array($resultado);
  $id_direccion=$campo['id_direccion'];
  $id_contacto=$campo['id_contacto'];
  $sql="UPDATE Clientes SET id_cliente='$rfc',empresa='$empresa' WHERE
    id_num_cliente='$id'";
  $resultado=query($sql, $conexion);
  $sql="UPDATE Direcciones SET calle='$calle',num_int='$num_int',
    num_ext='$num_ext',municipio='$municipio', colonia='$colonia',
    estado='$estado',cp='$cp' WHERE id_direccion='$id_direccion'";
  $resultado=query($sql, $conexion);
  $sql="UPDATE Contacto SET nombre_c='$contacto',departamento='$departamento',
    telefono1='$telefono1',telefono2='$telefono2',e_mail_c='$email' WHERE
    id_contacto='$id_contacto'";
  $resultado=query($sql, $conexion);
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
      <div id="header">
        <h1>Artefactos Lumínicos SA de CV</h1>
      </div>
      <div id="main">
        <div class="ic"></div>
      </div>
    </div>
    <script type="text/javascript">
      function regresar() {
        alert("Modificaciones realizadas con Exito");
        document.location.href='log_in.php';
      }
      regresar()
    </script>
  </body>
</html>
