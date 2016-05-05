<?php

//sesiones
session_start();
//fSesiones

//conexiónDB
function conG($db,$servidor,$usuario,$pass) {
  $conecta = mysql_connect($servidor,$usuario,$pass);
  mysql_set_charset('utf8');
  mysql_select_db($db, $conecta) OR DIE ("Error de conexión");
  return $conecta;
}

function con() {
  return conG('artes01_asistencia','localhost','artes_asistencia',
  'rdeQ898!');
}

function qry($sql) {
  $con = con();
  $res = mysql_query($sql, $con);
  return $res;
}
//fConexiónDB

function verSession() {
  if(!isset($_SESSION['user'])) echo '<script> errorSesion(); </script>';
}

if(isset($_GET['cSesion'])) { unset($_SESSION['user']); header('Location: ../index.php'); }

if(isset($_GET['sesion'])) iSesion();
function iSesion() {
  include("../../php/crypt.php");
  foreach($_POST as $cam => $val) { ${$cam} = $val; }
  $pCrypt=cryptRS($user, $pass);
  $sql="SELECT * FROM login WHERE usuario = '$user' AND password = '$pCrypt'";
  $res = qry($sql); $cam=mysql_fetch_assoc($res);
  if($cam) {
    $_SESSION['user'] = $user;
    header('Location: ../index.php');
  }
  else { header('Location: ../index.php?error=0'); }
}

//general
function remText($str) {
  $aSust = array("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò",
  "Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ",
  "ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
  $sust = array("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O",
  "U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u",
  "o","O","i","a","e","U","I","A","E");
  $var = str_replace($aSust,$sust,$var);
  return $str;
}

function remTextSql($str) {
  $str = str_replace(array("'"," ",'"'),array("`","","`"),$str); return $str;
}
//fGeneral

//index
function gTUsuarios($f){
  $x=0;
  $sql = "SELECT * FROM usuarios WHERE old = 0 ORDER BY numero ASC";
  $res = qry($sql);
  while($cam = mysql_fetch_assoc($res)) {
    foreach ($cam as $camp => $val){ ${$camp} = $val; }
    $nombre = "$nombre $apellidoPaterno $apellidoMaterno";
    echo "<tr>
      <td>$numero</td>
      <td>$nombre</td>
      <td><a href='reporte.php?idUsuario=$idUsuario&x='
      rel='reporte.php?idUsuario=$idUsuario&x=' class='bPrint$f'>
      <i class='fa fa-print' aria-hidden='true'></i>
      </a></td>
    </tr>";
    $x++;
  }
  return $x;
}
//fIndex

//reporte
if(isset($_GET['idUsuario']) && isset($_GET['x'])) {
$idUsuario = $_GET['idUsuario']; $x = $_GET['x'];
if(isset($_GET['fIni'])) { $fIni = $_GET['fIni']; $fFin = $_GET['fFin']; }
function reporteQuin($idUsuario) {
  $dia = date("d");
  $anio = date("Y");
  $mes = date("m");
  if($dia <= 15) {
    $fIni = date('Y-m-d',strtotime('-1month',strtotime(date('Y-m-16'))));
    $dia = date("d",(mktime(0,0,0,substr($fIni,5,2)+1,1,substr($fIni,0,4))-1));
    $fFin = date('Y-m-d',strtotime('-1month',strtotime(date("Y-m-$dia"))));
  }
  else { $fIni = date('Y-m-01'); $fFin = date('Y-m-15'); }
  gRango($fIni, $fFin);
  $cPag = gTReporte($fIni,$fFin,$idUsuario);
  return $cPag;
}
function reporteMen($idUsuario) {
  $fIni = date('Y-m-d',strtotime('-1month',strtotime(date('Y-m-01'))));
  $anio = substr($fIni,0,4);
  $mes = substr($fIni,5,2);
  $dia = date("d",(mktime(0,0,0,$mes+1,1,$anio)-1));
  $fFin = date("$anio-$mes-$dia");
  gRango($fIni, $fFin);
  $cPag = gTReporte($fIni,$fFin,$idUsuario);
  return $cPag;
}
function gTReporte($fIni,$fFin,$idUsuario) {
$cPag=1;
$fAct=$fIni;

$i=1;
while(strtotime("$fAct")<=strtotime("$fFin")){
$sql="SELECT * FROM checkinout WHERE idUsuario='$idUsuario'
AND fecha='$fAct'"; $res=qry($sql); $resu=qry($sql);
$j=0; $fAnt=0; $x2=1;
while ($cam=mysql_fetch_assoc($res))
{
  foreach ($cam as $camp => $val){ ${$camp}=$val; }
  $fecha1=$fecha;
  $dias = array('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado');
  $dia = $dias[date('N', strtotime($fecha))];
  $fecha=date_create($fecha); $fecha=date_format($fecha, 'd-m-Y');
  if($fAnt!=$fecha1){
  $x=1;
  $sqls="SELECT * FROM checkinout WHERE idUsuario='$idUsuario' AND fecha = '$fecha1'";
  $ress=qry($sqls);
  while($cam=mysql_fetch_assoc($ress)){ $j++;}
  }
  $sql1="SELECT * FROM usuarios WHERE idUsuario='$idUsuario'";
  $res1=qry($sql1); $cam1=mysql_fetch_assoc($res1);
  $numero=$cam1['numero'];
  $nombre=$cam1['nombre']." ".$cam1['apellidoPaterno']." ".$cam1['apellidoMaterno'];
  if($i+$j <= 44) {
  echo
  "<tr class='"; if($x==1){ $x=0; echo "linea ";}
  if($dia=='Lunes'){ echo "cLunes"; }
  if($dia=='Martes'){ echo "cMartes"; }
  if($dia=='Miercoles'){ echo "cMiercoles";}
  if($dia=='Jueves'){echo "cJueves";}
  if($dia=='Viernes'){echo "cViernes";}
   echo "'>";}
  if($i+$j > 44) { echo "</tbody></table><div class='salto'></div><table id='tAsistencia'><thead id='printable'><tr>
    <th></th>
    <th>No</th>
    <th>Nombre</th>
    <th>Fecha</th>
    <th>Hora</th>
    <th>Descuento<br>(Horas)</th>
  </tr></thead><tbody>";   echo
    "<tr class='"; if($x==1){ $x=0; echo "linea ";}
    if($dia=='Lunes'){ echo "cLunes"; }
    if($dia=='Martes'){ echo "cMartes"; }
    if($dia=='Miercoles'){ echo "cMiercoles";}
    if($dia=='Jueves'){echo "cJueves";}
    if($dia=='Viernes'){echo "cViernes";}
     echo "'>";
  $i = 1; $cPag++;}
  if($j!=0){echo "<td rowspan=$j>$dia</td>"; /*$j = $g;*/ $j = 0;}
  echo "<td>$numero</td><td>$nombre</td><td>$fecha</td><td>$hora</td><td>";
  $hora = strtotime( $hora );
  if($x2==1){
    if($hora>=strtotime("09:11") && $hora<strtotime( "09:31" ))echo "1/2 hora";
    elseif($hora>=strtotime("09:31") && $hora<strtotime( "10:01" ))echo "1 hora";
    elseif($hora>=strtotime("10:01"))echo "FALTA";
    else {echo "";}
  }
  if($hora>=strtotime("14:45") && $hora<=strtotime("15:00")){echo "";}
  if($hora>=strtotime("15:01") && $hora<strtotime("16:30")){echo "*";}
      echo "</td></tr>";
  echo "</td></tr>";
  if($i+$j > 44) { echo "</tbody></table><div class='salto'></div><table id='tAsistencia'><thead id='printable'><tr>
    <th></th>
    <th>No</th>
    <th>Nombre</th>
    <th>Fecha</th>
    <th>Hora</th>
    <th>Descuento<br>(Horas)</th>
  </tr></thead><tbody>";
  $i = 1; $cPag++;}
  $i++;
  $x2++;
  $fAnt=$fecha1;
}
$dias = array('','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
$dia = $dias[date('N', strtotime($fAct))];

if(!$cam=mysql_fetch_assoc($resu)){
  if($dia!="Sabado" && $dia!="Domingo"){
    $fAct2=date_format(date_create($fAct),'d-m-Y');
    echo "<tr><td colspan=6' class='falta'>FALTA: $dia $fAct2</td></tr>";
    $i++;
  }
  }
$fAct = date('Y-m-d',strtotime('1 day',strtotime($fAct)));
}

return $cPag;
}

}
function gHeader($user) {
  $sql = "SELECT * FROM usuarios WHERE idUsuario = '$user'";
  $res=qry($sql); $cam=mysql_fetch_assoc($res);
  echo "$cam[numero] - $cam[nombre] $cam[apellidoPaterno]";
}

function gRango($x, $y) {
  $x=date_format(date_create($x),'d-m-Y');
  $y=date_format(date_create($y),'d-m-Y');
  echo "<p>Del: $x al: $y</p>";
}

function errorF($x) {
  if($x==3){
    if(!isset($_GET['fIni']) || !isset($_GET['fFin'])){
      header('Location: index.php?error=1');
    }
  }
}
//fReporte
?>
