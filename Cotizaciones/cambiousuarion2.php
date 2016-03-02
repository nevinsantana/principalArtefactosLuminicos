<?php
  session_start();
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  include("funciones_mysql.php");
  $conexion=conectar();
  $usuario=$_GET['usuario'];
  foreach ($_POST as $camp => $value) { ${$camp}=$value; }
  $sql="UPDATE Usuarios SET nombre='$nombre', apellido_p='$apellido_p',
    apellido_m='$apellido_m', e_mail='$e_mail', permiso='$permiso' WHERE
    id_usuario='$usuario'"; $res=query($sql, $conexion);
  $sql="UPDATE Log_In SET password='$password' WHERE id_usuario='$usuario'";
  $res=query($sql, $conexion);
?>
<script>
  (function() {
    alert("Modificaciones realizadas con Exito");
    document.location.href='administracion.php';
  })();
</script>
