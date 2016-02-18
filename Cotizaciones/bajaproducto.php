<?php
  session_start();
  include("funciones_mysql.php");
  $conexion=conectar();
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
      <div id="header">
        <h1>Artefactos Lumínicos SA de CV</h1>
      </div>
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
            $sql="UPDATE Catalogo SET activo='$activo' WHERE id_catalogo='$catalogo'";
            $resultado=query($sql, $conexion);
        ?>
            <script type="text/javascript">
              function eliminado() {
                alert("Se ha eliminado con Éxito");
                document.location.href='index.php';
              }
              eliminado();
            </script>
          <?php } ?>
      </div>
    </div>
  </body>
</html>
