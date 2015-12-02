  <!--start------------------------------------------------------------------>

<!--sesiones------------------------------------------------------------------->
<?php
  session_start();
?>
<!--fSesiones------------------------------------------------------------------>

<!--conexiónDB----------------------------------------------------------------->
<?php
  function conectar() {
    $link = mysql_connect("localhost", "artes_cotizacion", "Cotizaciones_1209");
    mysql_set_charset('utf8');
    mysql_select_db("artes01_Cotizaciones", $link) OR DIE("Conexión no hecha");
    return $link;
  }

  $conexion = conectar();

  function query($sql, $con) {
    $result = mysql_query($sql, $con);
    return $result;
  }

?>
<!--fConexiónDB---------------------------------------------------------------->

<!--verificaSesionTerminada---------------------------------------------------->
<?php
  if(!isset($_SESSION['user'])) {
    if(!isset($_GET['sec'])) {}
    else {
      if($_GET['sec']=='principal') {}
      else {
        if($_GET['sec']=='login') {
          if(isset($_GET['logout'])) { header('Location: ?sec=login'); }
        }
        else { header('Location: ?sec=login'); }
      }
    }
  } /*Si sesion user no iniciado, evalua: si get sec==login evalua:
      si get logout=true cambia url a ?sec=login. si get sec != login, cabia url
      a ?sec=login*/
?>
<!--fVerificaSesionTerminada--------------------------------------------------->

<!--verificaSesionIniciada----------------------------------------------------->
<?php
  if(isset($_SESSION['user']) && $_GET['sec'] == 'login') {
    if(isset($_GET['logout'])) {} else { header('Location: ?sec=principal'); }
  } /*Si se quiere entrar a login normal cuando hay sesion iniciada, redirigirá
      a sec=principal*/
?>
<!--fVerificaSesionIniciada---------------------------------------------------->

<!--extractorDatosDB----------------------------------------------------------->
<?php
  function eCotizaciones() {

  }
?>
<!--fExtractorDatosDB---------------------------------------------------------->

<!--login.php------------------------------------------------------------------>
<?php
  function loginin() { //Realizada al presionar boton Entrar en login
    if(isset($_GET['loginin'])) {
      global $conexion;
      $_SESSION['user'] = $_POST['user']; //Inicia sesion
      $user = $_SESSION['user'];
      $pass = $_POST['pass'];
      $userTest = 1; //Verificará autentificación de datos ingresados
      $sql = "SELECT id_usuario, password FROM Log_In WHERE id_usuario = '$user'
       and password = '$pass'";
      $result = query($sql, $conexion);
      $campo = mysql_fetch_array($result);
      if ($campo['id_usuario'] == $user) { $userTest = $campo['id_usuario']; }
      //Si usuario ingresado coincide, $userTest obtendrá ese valor
      if ($userTest == 1) {
        session_destroy();
        header("Location: ?sec=login&errorLogin=true");
      } //Si no, destruye sesión y manda error
      else {
        ?>
        <?php
        $sql= "SELECT * FROM Usuarios WHERE id_usuario='$userTest'";
        $result = query($sql, $conexion);
        $campo = mysql_fetch_array($result);
        $permiso = $campo['permiso']; //Verifica permisos
        $activo = $campo['activo']; //Verifica si el usuario está activo
        $_SESSION['nUser'] = $campo['nombre']; //Nombre para index
        if ($permiso == '1' && $activo == '1') {
          $_SESSION['permiso'] = '1';
        }
        if ($permiso == '2' && $activo == '1') {
          $_SESSION['permiso'] = '2';
        }
        if ($activo == 0) {
          session_destroy();
          header("Location: ?sec=login&errorLogin2=true");
        } //Si no está activo, manda error
        else { header("Location: ?sec=principal"); }
      } //Si todo esta bien, manda a principal
    }
  }
?>
<!--fLogin.php----------------------------------------------------------------->

<!--index.php------------------------------------------------------------------>
<?php
  if(isset($_SESSION['permiso'])) {
    $logeado = 1;
  }
  else {
    $logeado = 2;
  }

  if(isset($_GET['cerrarSesion'])) { //Cierra sesión con botón
    setcookie (session_id(), "", time() - 3600);
    session_destroy();
    session_write_close();
    header("Location: ?sec=login");
  }
?>
<!--fIndex.php----------------------------------------------------------------->

<!--cotizaciones.php----------------------------------------------------------->
<?php
  function generaTablaCotizaciones() {
    global $conexion;
    if($_SESSION['permiso'] == 1) {
      $sql = "SELECT * FROM `Cotizaciones` ORDER BY id_cotizacion DESC";
      $resultado = query($sql, $conexion);
      while ($campo = mysql_fetch_array($resultado)) {
        $activo = $campo['activo'];
        $noCotizacion = $campo['id_cotizacion'];
        $fecha = $campo['fecha'];
        $idCliente = $campo['id_cliente']; //Termina FROM Cotizaciones
        $sql2="SELECT * FROM `Cotizaciones` WHERE
          id_cotizacion = '$noCotizacion'";
        $resultado3 = query($sql2, $conexion);
        $campo = mysql_fetch_array($resultado3);
        $idUsuario = $campo['id_usuario']; //Termina FROM Cotizaciones 2
        $sql2 = "SELECT * FROM `Usuarios` WHERE id_usuario = '$idUsuario'";
        $resultado0 = query($sql2, $conexion);
        $campo = mysql_fetch_array($resultado0);
        $vendedor = $campo['nombre'] . ' ' . $campo['apellido_p'];
        $sql2 = "SELECT * FROM `Clientes` WHERE id_num_cliente = '$idCliente'";
        $resultado2 = query($sql2, $conexion);
        $campo = mysql_fetch_array($resultado2);
        $empresa = $campo['empresa']; //Termina FROM Clientes
        ?>
        <tr><!--Gerena contenido de la tabla-->
          <td><?php echo $noCotizacion; ?></td>
          <td><?php echo $fecha; ?></td>
          <td><?php echo $empresa; ?></td>
          <td><?php echo $vendedor; ?></td>
          <td>
            <div onclick="verCotizacion(<?php echo $noCotizacion; ?>)">
              <span>Ver</span>
            </div> <!--acciones.js-->
            <div onclick="eliminarCotizacion(<?php echo $noCotizacion; ?>)">
              <span>Eliminar</span>
            </div> <!--acciones.js-->
          </td>
        </tr>
        <?php
      }
    }
    else {
      $sesionUsuario = $_SESSION['user'];
      $sql = "SELECT * FROM `Cotizaciones` WHERE id_usuario = '$sesionUsuario'
        ORDER BY id_cotizacion DESC";
      $resultado = query($sql, $conexion);
      while ($campo = mysql_fetch_array($resultado)) {
        $activo = $campo['activo'];
        $noCotizacion = $campo['id_cotizacion'];
        $fecha = $campo['fecha'];
        $idCliente = $campo['id_cliente']; //Termina FROM Cotizaciones
        $sql2="SELECT * FROM `Cotizaciones` WHERE
          id_cotizacion = '$noCotizacion'";
        $resultado3 = query($sql2, $conexion);
        $campo = mysql_fetch_array($resultado3);
        $idUsuario = $campo['id_usuario']; //Termina FROM Cotizaciones 2
        $sql2 = "SELECT * FROM `Usuarios` WHERE id_usuario = '$idUsuario'";
        $resultado0 = query($sql2, $conexion);
        $campo = mysql_fetch_array($resultado0);
        $vendedor = $campo['nombre'] . ' ' . $campo['apellido_p'];
        $sql2 = "SELECT * FROM `Clientes` WHERE id_num_cliente = '$idCliente'";
        $resultado2 = query($sql2, $conexion);
        $campo = mysql_fetch_array($resultado2);
        $empresa = $campo['empresa']; //Termina FROM Clientes
        ?>
        <tr>
          <td><?php echo $noCotizacion; ?></td>
          <td><?php echo $fecha; ?></td>
          <td><?php echo $empresa; ?></td>
          <td><?php echo $vendedor; ?></td>
          <td>
            <div class="verP2"
              onclick="verCotizacion(<?php echo $noCotizacion; ?>)">
              <span>Ver</span>
            </div> <!--acciones.js-->
          </td>
        </tr>
        <?php
      }
    }
  }
?>
<!--fCotizaciones.php---------------------------------------------------------->

<!--verCotizacion.php---------------------------------------------------------->
<?php
  function generaDatosCotizacion() {
    global $conexion;
    $idCotizacion = $_GET['cotizacion'];
    $sql = "SELECT * FROM Cotizaciones WHERE id_cotizacion = '$idCotizacion'";
    $result = query($sql, $conexion);
    $campo = mysql_fetch_array($result);
    $idCotizacion = $campo['id_cotizacion'];
    $fecha = $campo['fecha'];
    $vigencia = $campo['vigencia'];
    $noPartidas = $campo['no_partidas'];
    ?>
    <h3>No Cotizacion:</h3>
    <span class="noCotizacion"><?php echo $idCotizacion; ?></span>
    <div class="break space20px"></div>
    <h3>Fecha:</h3>
    <span><?php echo $fecha; ?></span>
    <div class="break space20px"></div>
    <h3>Vigencia:</h3>
    <span><?php echo $vigencia; ?></span>
    <div class="break space20px"></div>
    <h3>Partidas:</h3>
    <span><?php echo $noPartidas; ?></span>
    <?php
  }

  function generaDatosVenClien() {
    global $conexion;
    $idCotizacion = $_GET['cotizacion'];
    $sql = "SELECT * FROM Cotizaciones WHERE id_cotizacion = '$idCotizacion'";
    $result = query($sql, $conexion);
    $campo = mysql_fetch_array($result);
    $idCliente = $campo['id_cliente']; //TerminaCotizaciones
    $sql = "SELECT * FROM Datos_Cotizacion WHERE id_cotizacion='$idCotizacion'";
    $result = query($sql, $conexion);
    $campo = mysql_fetch_array($result);
    $dCliente = $campo['datos_cliente'];
    $dContacto = $campo['datos_contacto'];
    $dVendedor = $campo['datos_vendedor'];
    ?>
    <h3>Cliente:</h3>
    <span><?php echo $dCliente; ?></span>
    <div class="break space20px"></div>
    <h3>Datos de contacto:</h3>
    <span><?php echo $dContacto; ?></span>
    <div class="break space20px"></div>
    <h3>Datos del vendedor:</h3>
    <span><?php echo $dVendedor; ?></span>
    <div class="break space20px"></div>
    <?php
  }

  function generaTablaPartidas() {
    global $conexion;
    $idCotizacion = $_GET['cotizacion'];
    $sql = "SELECT * FROM Partidas WHERE id_cotizacion = '$idCotizacion'
      ORDER BY no_partida ASC";
    $resultado = query($sql, $conexion);
    while ($campo = mysql_fetch_array($resultado)) {
      $partida = $campo['no_partida'];
      $cantidad = $campo['cantidad'];
      $catalogo = $campo['catalogo'];
      ?>
      <tr>
        <td><?php echo $partida; ?></td>
        <td><?php echo $cantidad; ?></td>
        <td><?php echo $catalogo; ?></td>
      </tr>
      <?php
    }
  }
?>
<!--fVerCotizacion.php--------------------------------------------------------->

<!--index.php------------------------------------------------------------------>
<script>
  var logeado = <?php echo $logeado; ?>;
  if(logeado == 1) {
    var user = "<?php if(isset($_SESSION['nUser']))echo $_SESSION['nUser'];?>";
  } //Para mostrar nombre en header
</script>
<!--fIndex.php----------------------------------------------------------------->

  <!--end-------------------------------------------------------------------->
