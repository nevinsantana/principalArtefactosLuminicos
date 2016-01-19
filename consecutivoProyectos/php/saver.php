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

<?php
  /*start*******************************************************************/

/*proyectos.php****************************************************************/
if(isset($_POST['proyectoNP'])) {
  $proyectoNP = $_POST['proyectoNP'];
  global $conexion;
  $sql = "SELECT idProyecto FROM proyecto ORDER BY idProyecto DESC LIMIT 1";
  $resultado = query($sql, $conexion);
  $campo = mysql_fetch_row($resultado);
  $idProyecto = $campo[0] + 1;

  if ($idProyecto == "") {
      $idProyecto = 1;
  }
  $user = $_SESSION['user'];
  if(isset($idProyecto)) {
    if(isset($_POST['fechaNP'])) { $fechaNP = $_POST['fechaNP']; }
    else{$fechaNP="";}
    $date = str_replace('/', '-', $fechaNP);
    $fechaNP = date('Y-m-d', strtotime($date));
    if(isset($_POST['estadoNP'])) { $estadoNP = $_POST['estadoNP']; }
    else{$estadoNP="";}
    if(isset($_POST['municipioNP'])) { $municipioNP = $_POST['municipioNP']; }
    else{$municipioNP="";}
    if(isset($_POST['coloniaNP'])) { $coloniaNP = $_POST['coloniaNP']; }
    else{$coloniaNP="";}
    if(isset($_POST['calleNP'])) { $calleNP = $_POST['calleNP']; }
    else{$calleNP="";}
    if(isset($_POST['nINP'])) { $nINP = $_POST['nINP']; }
    else{$nINP="";}
    if(isset($_POST['nENP'])) { $nENP = $_POST['nENP']; }
    else{$nENP="";}
    if(isset($_POST['cPNP'])) { $cPNP = $_POST['cPNP']; }
    else{$cPNP="";}
    $sql = "INSERT INTO proyecto (idProyecto, idUsuario, nombreProyecto, fecha,
    estado, municipio, colonia, calle, numInt, numExt, cp)
    VALUES ('$idProyecto','$user','$proyectoNP','$fechaNP','$estadoNP',
      '$municipioNP','$coloniaNP','$calleNP','$nINP','$nENP','$cPNP')";
    $resultado = query($sql, $conexion);
  }
  header('Location: ../?sec=proyectos&NP=true');
}

else { header('Location: ../?sec=login'); }
/*fProyectos.php***************************************************************/

/*gestionProyecto.php**********************************************************/
if(isset($_GET['plano'])) {
  $idProyecto = $_GET['idProyecto'];
  global $conexion;
  $sql = "SELECT idPlano FROM plano WHERE idProyecto = '$idProyecto'
    ORDER BY idPlano DESC LIMIT 1";
  $resultado = query($sql, $conexion);
  $campo = mysql_fetch_row($resultado);
  $idPlano = $campo[0] + 1;

  if ($idPlano == "") {
      $idPlano = 1;
  }
  $user = $_SESSION['user'];
  if(isset($idPlano)) {
    if(isset($_POST['tipoPlano'])) { $tipoPlano = $_POST['tipoPlano']; }
    else{$tipoPlano="";}
    if(isset($_POST['nivelRec'])) { $nivelRec = $_POST['nivelRec']; }
    else{$nivelRec="";}
    if(isset($_POST['ancho'])) { $ancho = $_POST['ancho']; }
    else{$ancho="";}
    if(isset($_POST['altura'])) { $altura = $_POST['altura']; }
    else{$altura="";}
    if(isset($_POST['anchoCamellon'])) { $anchoCamellon = $_POST['anchoCamellon']; }
    else{$anchoCamellon="";}
    if(isset($_POST['anchoAvenida'])) { $anchoAvenida = $_POST['anchoAvenida']; }
    else{$anchoAvenida="";}
    if(isset($_POST['distanciaInterpostal'])) { $distanciaInterpostal = $_POST['distanciaInterpostal']; }
    else{$distanciaInterpostal="";}
    if(isset($_POST['largo'])) { $largo = $_POST['largo']; }
    else{$largo="";}
    $sql = "INSERT INTO plano (idPlano, idProyecto, tipoPlano, nivelRec,
    ancho, altura, anchoCamellon, anchoAvenida, distanciaInterpostal, largo)
    VALUES ('$idPlano','$idProyecto','$tipoPlano','$nivelRec',
      '$ancho','$altura','$anchoCamellon','$anchoAvenida','$distanciaInterpostal','$largo')";
    $resultado = query($sql, $conexion);
  }
  header('Location: ../?sec=gestionProyecto&accion=editar&idProyecto=11');
}

else { header('Location: ../?sec=login'); }
/*fGestionProyecto.php*********************************************************/

  /*end*********************************************************************/
?>
