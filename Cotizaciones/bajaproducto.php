<?php
  session_start();
  include("funciones_mysql.php");
  $con=conectar();
  if(!isset($_GET['sec'])) $seccion=null;
  else $seccion=$_GET['sec'];
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  $id_usuario=$_SESSION['usuario'];
  if(isset($_POST['catalogo'])) $catalogo=$_POST['catalogo'];
  else $catalogo=$_GET['catalogo'];
?>
<!doctype html >
<html>
  <head>
    <meta http-equiv="Content-Type" content="charset=utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Consecutivo de Cotizaciones</title>
  </head>
  <body>
    <div id="page">
      <br><br><br>
      <div id="modificar">
        <div id="titulo">
          Realmente desea borrar el cliente
          <br>
          <div id=empresadel><?php echo $catalogo; ?></div>
        </div>
        <div id=centrarbaja>
          <a href="?sec=borrar&catalogo=<?php echo $catalogo; ?>">
            <button class="formu-button2">
              <div id="cambioboton">Aceptar</div>
            </button>
          </a>
          <a href="log_in.php">
            <button class="formu-button2">
              <div id="cambioboton">Cancelar</div>
            </button>
          </a>
        </div>
        <?php
          $activo=0;
          if($seccion=="borrar") {
            $catalogo=$_GET['catalogo'];
            $sql="UPDATE Catalogo SET activo='$activo' WHERE
              id_catalogo='$catalogo'";
            $res=query($sql, $con);
        ?>
        <script>
          (function() {
            alert("Se ha eliminado con Éxito");
            document.location.href='index.php';
          })();
        </script>
        <?php } ?>
      </div>
    </div>
  </body>
</html>
