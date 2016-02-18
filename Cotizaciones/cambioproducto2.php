<?php
  session_start();
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  include("funciones_mysql.php");
  $conexion=conectar();
  $id_catalogo=$_GET['id_catalogo'];
  $unidad=$_POST['unidad'];
  $descripcion=$_POST['descripcion'];
  $sql="UPDATE Catalogo SET unidad='$unidad',descripcion='$descripcion' WHERE
    id_catalogo='$id_catalogo'";
  $resultado=query($sql, $conexion);
?>
<script type="text/javascript">
  (function() {
    alert("Modificaciones realizadas con Exito");
    document.location.href='index.php';
  })();
</script>
