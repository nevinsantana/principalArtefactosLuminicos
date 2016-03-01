<?php
  function conectar() {
    $li=mysql_connect("localhost", "artes_cotizacion", "Cotizaciones_1209");
    mysql_set_charset('utf8');
    mysql_select_db("artes01_Cotizaciones", $li) OR DIE ("Error: Sin conexión");
    return $li;
  }
  function query($sql, $con) { $res=mysql_query($sql, $con); return $res; }
?>
