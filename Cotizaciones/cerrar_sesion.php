<?php
header('Content-Type: text/html; charset=UTF-8');
session_start();
if(!isset($_SESSION['usuario'])) header('Location: index.php');
?>
<script>
  (function() {
    if(confirm("¿Realmente desea cerrar sesion?"))
      document.location.href='cerrarsesion2.php';
    else document.location.href='index.php';
  })();
</script>
