<link href="tabla2.css" rel="stylesheet" type="text/css">
<style type="text/css" media="screen">
  A:link, A:hover, A:visited {
    color: black;
    font-size: 8pt;
    font-family: arial;
    text-decoration: none
  }
</style>
<?php
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  $conexion=conectar();
  $id_usuario=$_SESSION['usuario'];
  if(!isset($_GET['opcion'])) $opcion="nada";
  else $opcion=$_GET['opcion'];
  if(!isset($_POST['rfc'])) $rfc="nada";
  else $rfc=$_POST['rfc'];
  if(!isset($_POST['empresa'])) $empresa="nada";
  else $empresa=$_POST['empresa'];
  $cont=0;
  $sql="SELECT * FROM Cotizaciones";
  $resultado=query($sql, $conexion);
  while($campo=mysql_fetch_array($resultado)) { $cont=1; }
  if($cont==1) {
    if(isset($_POST['buscarCotizacion']))
      $buscarCotizacion=$_POST['buscarCotizacion'];
    if(isset($_POST['buscarFecha'])) $buscarFecha=$_POST['buscarFecha'];
    if(isset($_POST['buscarCliente'])) $buscarFicha=$_POST['buscarCliente'];
    if(isset($_POST['buscarVend'])) $buscarFicha=$_POST['buscarVend'];
    echo '<div id="buscadores">
      <div class="centrarV">
        <div class="alineaIzquierda">
          <p class="centrarTexto">Por cotización</p>
          <form action="ventas.php?sec=cotizaciones" method="POST">
            <input type="text" name="buscarCotizacion">
            <br>
            <input type="submit" class="botonBusqueda">
          </form>
        </div>
        <div class="alineaIzquierda">
          <p class="centrarTexto">Por fecha</p>
          <form action="ventas.php?sec=cotizaciones" method="POST">
            <input type="text" name="buscarFecha">
            <br>
            <input type="submit" class="botonBusqueda">
          </form>
        </div>
        <div class="alineaIzquierda">
          <p class="centrarTexto">Por cliente</p>
          <form action="ventas.php?sec=cotizaciones" method="POST">
            <input type="text" name="buscarCliente">
            <br>
            <input type="submit" class="botonBusqueda">
          </form>
        </div>
      </div>
    </div>';
    if(isset($_POST['buscarCotizacion'])) {
      $buscarCotizacion=$_POST['buscarCotizacion'];
      $siContiene=1;
      require_once('porCotizacionV.php');
    }
    $siContiene=0 ;
    if(isset($_POST['buscarFecha'])) {
      $buscarFecha=$_POST['buscarFecha'];
      $siContiene=1;
      require_once('porFecha2.php');
    }
    if(isset($_POST['buscarCliente'])) {
      $buscarCliente=$_POST['buscarCliente'];
      $siContiene=1;
      require_once('porCliente2.php');
    }
    if(isset($_POST['buscarVend'])) {
      $buscarNum=$_POST['buscarVend'];
      $siContiene=1;
      require_once('porVendedor2.php');
    }
    if($siContiene==0) require_once('ysitose2.php');
  }
  if($cont==0) {
?>
    <div align="center" style="margin:120px 0 200px 0;">
      <img src="images/error.png" margin-left="40px">
    </div>
  <?php } ?>
<script>
  function Eliminar(id_cotizacion) {
    var r=confirm("Esta seguro que desea eliminar la cotizacion?");
    if(r==true) {
      dire="eliminar_cotizacion.php?id_cotizacion=";
      var union=dire.concat(id_cotizacion);
      window.location=union;
    }
  }
  function Restaurar(id_cotizacion) {
      if(confirm("Esta seguro que desea activar de nuevo la cotizacion?")) {
        dire="activar_cotizacion.php?id_cotizacion=";
        var union=dire.concat(id_cotizacion);
        window.location=union;
      }
  }
</script>
