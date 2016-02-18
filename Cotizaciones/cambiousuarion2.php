<?php
  session_start();
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  include("funciones_mysql.php");
  $conexion=conectar();
  $usuario=$_GET['usuario'];
  $nombre=$_POST['nombre'];
  $apellido_p=$_POST['apellido_p'];
  $apellido_m=$_POST['apellido_m'];
  $e_mail=$_POST['e_mail'];
  $permiso=$_POST['permiso'];
  $password=$_POST['password'];
  $sql="UPDATE Usuarios SET nombre='$nombre', apellido_p='$apellido_p',
    apellido_m='$apellido_m', e_mail='$e_mail', permiso='$permiso' WHERE
    id_usuario='$usuario'";
  $res=query($sql, $conexion);
  $sql="UPDATE Log_in SET password='$password' WHERE id_usuario='$usuario'";
  $res=query($sql, $conexion);
?>
<!doctype html >
<html>
  <head>
    <meta http-equiv="Content-Type" charset="utf-8">
    <title>Consecutivo de Cotizaciones</title>
  </head>
  <body>
    <div id="page">
      <div id="header"><h1>Artefactos Lumínicos SA de CV</h1></div>
      <div id="main"><div class="ic"></div></div>
    </div>
    <script type="text/javascript">
      function regresar() {
        alert("Modificaciones realizadas con Exito");
        document.location.href='administracion.php';
      }
      regresar();
    </script>
  </body>
</html>
