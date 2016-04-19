<?php
session_start();
include("../php/crypt.php");
//fSesiones
//general
function rText($var) {
  $var=str_replace(array('�','�','�','�','�','�','�','�','�','�','�','�','�',
    '�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�',
    "'"),array('�','a','a','a','�','A','A','�','e','e','�','E','E','�','i','i',
    '�','I','I','�','o','o','�','O','O','�','u','u','�','U','U',"`"),$var);
  return $var;
}
function dText($var) { $var=str_replace("`","'",$var); return $var; }
//fGeneral
//conexiónDB
function conectar() {
  $li=mysql_connect("localhost", "asistencia", "SERV:1209");
  mysql_set_charset('utf8');
  mysql_select_db("asistencia", $li) OR DIE("Conexión no hecha");
  return $li;
} $con=conectar();
function query($sql, $con) {
  $res=mysql_query($sql, $con);
  return $res;
}
//fConexiónDB
//reporte
function gTReporte() {
  global $con;
  $sql="SELECT * FROM checkinout";
  $res=query($sql,$con);
  while($cam=mysql_fetch_assoc($sql)) {
    foreach($cam as $ca => $re) { ${$ca}=$re; }
    echo "<tr><td>$nombre</td><td>$fecha</td><td>$hora</td><tr>";
  }

}
//fReporte

?>
