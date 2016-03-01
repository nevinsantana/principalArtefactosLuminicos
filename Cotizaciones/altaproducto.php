<?php
  session_start();
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  include("funciones_mysql.php");
  $con=conectar(); $id_usuario=$_SESSION['usuario'];
  $id_catalogo=$_POST['catalogo']; $unidad=$_POST['unidad'];
  $descripcion=$_POST['descripcion'];
  $sql="INSERT INTO Catalogo(id_catalogo, unidad, descripcion, activo) VALUES
   ('$id_catalogo','$unidad','$descripcion','1')";
  $res=query($sql, $con);
?>
<script>
  (function() {
    alert("Se ha agregado el producto con éxito");
    document.location.href='index.php';
  })();
</script>
