<link href="tabla2.css" rel="stylesheet" type="text/css">
<style type="text/css" media="screen">
  A:link, A:hover,A:visited {
    color: black;
    font-size: 8pt;
    font-family: arial;
    text-decoration: none;
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
      <div class="centrar minWidthBuscadores">
        <div class="alineaIzquierda">
          <p class="centrarTexto">Por cotización</p>
          <form action="administracion.php?sec=cotizaciones" method="POST">
            <input type="text" name="buscarCotizacion">
            <br>
            <input type="submit" class="botonBusqueda">
          </form>
        </div>
        <div class="alineaIzquierda">
          <p class="centrarTexto">Por fecha</p>
          <form action="administracion.php?sec=cotizaciones" method="POST">
            <input type="text" name="buscarFecha">
            <br>
            <input type="submit" class="botonBusqueda">
          </form>
        </div>
        <div class="alineaIzquierda">
          <p class="centrarTexto">Por cliente</p>
          <form action="administracion.php?sec=cotizaciones" method="POST">
            <input type="text" name="buscarCliente">
            <br>
            <input type="submit" class="botonBusqueda">
          </form>
        </div>
        <div class="alineaIzquierda">
          <p class="centrarTexto">Por vendedor</p>
          <form action="administracion.php?sec=cotizaciones" method="POST">
            <select name="buscarVend">
              <option id="optionDefault" disabled selected>Seleccione</option>
    ';
                $sql0="SELECT * FROM Usuarios";
                $resultado0=query($sql0, $conexion);
                while($campo0=mysql_fetch_array($resultado0)) {
                  $vendedor=$campo0['nombre'].' '.$campo0['apellido_p'];
                  $id_usuario=$campo0['id_usuario'];
                  echo'<option value="'.$id_usuario.'">'.$vendedor.'</option>';
                }
            echo' </select>
            <br>
            <input type="submit" class="botonBusqueda">
          </form>
        </div>
      </div>
    </div>';
    $siContiene=0;
    if(isset($_POST['buscarFecha'])) {
      $buscarFecha=$_POST['buscarFecha'];
      $siContiene=1;
      require_once('porFecha.php');
    }
    if(isset($_POST['buscarCotizacion'])) {
      $buscarCotizacion=$_POST['buscarCotizacion'];
      $siContiene=1;
      require_once('porCotizacion.php');
    }
    if(isset($_POST['buscarCliente'])) {
      $buscarCliente=$_POST['buscarCliente'];
      $siContiene=1;
      require_once('porCliente.php');
    }
    if(isset($_POST['buscarVend'])) {
      $buscarNum=$_POST['buscarVend'];
      $siContiene=1;
      require_once('porVendedor.php');
    }
    if($siContiene==0) require_once('ysitose.php');
  }
  if($cont==0) {
?>
    <div id="errorimg"><img  src="images/error.png"></div>
  <?php } ?>
<script>
  function Eliminar(id_cotizacion) {
    if(confirm("Esta seguro que desea eliminar la cotizacion?")) {
      dire="php/funciones.php?resCot=el&id_cotizacion=";
      var union=dire.concat(id_cotizacion);
      window.location=union;
    }
  }
  function Restaurar(id_cotizacion) {
    if(confirm("Esta seguro que desea activar de nuevo la cotizacion?")) {
      dire="php/funciones.php?resCot=re&id_cotizacion=";
      var union=dire.concat(id_cotizacion);
      window.location=union;
    }
  }
</script>
