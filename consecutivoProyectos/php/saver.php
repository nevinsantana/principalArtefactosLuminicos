<?php session_start(); ?>
<!--fSesiones------------------------------------------------------------------>
<!--conexiónDB----------------------------------------------------------------->
<?php
  function conectar() {
    $link=mysql_connect("localhost", "artes_cotizacion", "Cotizaciones_1209");
    mysql_set_charset('utf8');
    mysql_select_db("artes01_Cotizaciones", $link) OR DIE("Conexión no hecha");
    return $link;
  }
  $con=conectar();
  function query($sql, $con) { $res=mysql_query($sql, $con); return $res; }
  function rText($var) {
    $var=str_replace(array('�','�','�','�','�','�','�','�','�','�','�','�','�',
      '�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�',
      "'"),array('�','a','a','a','�','A','A','�','e','e','�','E','E','�','i',
      'i','�','I','I','�','o','o','�','O','O','�','u','u','�','U','U',"`"),
    $var);
    return $var;
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
  }/*Si sesion user no iniciado, evalua: si get sec==login evalua:
      si get logout=true cambia url a ?sec=login. si get sec != login, cabia url
      a ?sec=login*/
?>
<!--fVerificaSesionTerminada--------------------------------------------------->
<?php
  /*start*******************************************************************/
/*proyectos.php****************************************************************/
if(isset($_GET['NP'])) proyectoNP();
function proyectoNP() {
  if(isset($_POST['proyectoNP'])) {
    $proyectoNP=$_POST['proyectoNP'];
    global $con;
    $sql="SELECT * FROM proyecto ORDER BY idProyecto DESC LIMIT 1";
    $res=query($sql, $con);
    $cam=mysql_fetch_row($res);
    $idProyecto=$cam[0] + 1;
    if ($idProyecto == "") $idProyecto=1;
    $user=$_SESSION['user'];
      foreach($_POST as $cam => $val) {
        $val=rText($val);
        if(isset($cam)) ${$cam}=$val; else ${$cam}="";
      }
      $date=str_replace('/', '-', $fechaNP);
      $fechaNP=date('Y-m-d', strtotime($date));
      $sql="INSERT INTO proyecto (idProyecto, idUsuario, nombreProyecto, fecha,
      estado, municipio, colonia, calle, numInt, numExt, cp)
      VALUES ('$idProyecto','$user','$proyectoNP','$fechaNP','$estadoNP',
        '$municipioNP','$coloniaNP','$calleNP','$nINP','$nENP','$cPNP')";
      $res=query($sql, $con);
    header('Location: ../?sec=proyectos&NP=true');
  }
  else { header('Location: ../?sec=login'); }
}
/*fProyectos.php***************************************************************/
/*gestionProyecto.php**********************************************************/
if(isset($_GET['plano'])) {
  global $con;
  $idProy=$_GET['idProyecto']; $plano=$_GET['plano']; $user=$_SESSION['user'];
  foreach($_POST as $cam => $val) {
    $val=rText($val);
    if(isset($cam)) ${$cam}=$val; else ${$cam}="";
  }
  $sql="INSERT INTO plano (idPlano, idProyecto, tipoPlano, nivelRec,
  ancho, altura, anchoCamellon, anchoAvenida, distanciaInterpostal, largo)
  VALUES ('$plano','$idProy','$tipoPlano','$nivelRecomendado','$ancho','$alto',
    '$anCame','$anAve','$disIn', '$largo')";
  $res=query($sql, $con);
  header('Location: ../?sec=gestionProyecto&accion=editar&idProyecto='
    .$idProy);
}
if(isset($_GET['aLum'])) aLum(); function aLum() {
  global $con;
  foreach($_GET as $cam => $val) { $val=rText($val); ${$cam}=$val; }
  $sql="INSERT INTO luminario VALUES ('$lum','$plan','$proy','$catLum','$watts',
    '$lumens','$fDep','$aMont','$aPTra','$tMont','$lBra','$tilt')";
  $res=query($sql,$con);
  header('Location: ../?sec=gestionProyecto&accion=editar&idProyecto='
    .$proy);
}

if(isset($_GET['gNota'])) gNota($_GET['nota']); function gNota($nota) {
  global $con;
  $nota=rText($nota);
  $proy=$_GET['proy'];
  $sql="SELECT * FROM notasp ORDER BY idNota DESC LIMIT 1";
  $res=query($sql, $con); $cam=mysql_fetch_row($res); $idNota=$cam[0] + 1;
  if($idNota == "") $idNota=1;
  $sql="INSERT INTO notasp VALUES ('$idNota','$proy','$nota')";
  $res=query($sql,$con);
  header('Location: ../?sec=gestionProyecto&accion=editar&idProyecto='.$proy);
}
if(isset($_GET['gDProy'])) gDProy(); function gDProy() {
  global $con;
  foreach($_POST as $cam => $val) {
    $val=rText($val);
    ${$cam}=$val; }
  $proy=$_GET['proy'];
  $sql="UPDATE proyecto SET idCotizacion='$noCot', idNumCliente='$clien',
    nombreProyecto='$nomPr', fecha='$fecha', estado='$estad',
    municipio='$munic', colonia='$colon', calle='$calle', numInt='$noInt',
    numExt='$noExt', cp='$cp' WHERE idProyecto='$proy'";
  $res=query($sql,$con);
  header('Location: ../?sec=gestionProyecto&accion=editar&idProyecto='.$proy);
}
?>
