<?php
include("funciones.php");
$us=" ";
$us1=substr($us,0,1).substr($us,-1);
$pas=" ";
$pas=cryptRS($us,$pas);
$pas=crypt($pas,$us1).crypt($pas,$us1);
echo $pas;
?>
