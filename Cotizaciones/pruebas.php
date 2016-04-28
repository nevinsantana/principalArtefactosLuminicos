<?php
/*  include("funciones_mysql.php");
  $con=conectar();
  $sql="SELECT * FROM Cotizaciones WHERE id_cotizacion='50'";
  $resultado=query($sql, $con);
  $cotizaciones=mysql_fetch_array($resultado);
  foreach ($cam as $camp => $value) { ${$camp}=$value; }
  //SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME =
  //esto es para todas las columnas de una tabla*/
  /*$cadena =explode("  ","Hola mundo feliz  ");
  $tamaño = count($cadena);
  $espacios = $tamaño - 1;
$b=2;
  $arrai=array("a" => "////hola","b" => "ad/////ios","c" => "pen///dd/////eeeejo");
  foreach($arrai as $rep => $val) {
    while($b>0) {
      $a=explode("//",$val);
      $b=count($a); $b=$b -1;
      $val=str_replace("//",".",$val);
    }
    echo $rep." :: ".$val;
  }*/
  $hola=interface_exists();
  print_r($hola);
?>
