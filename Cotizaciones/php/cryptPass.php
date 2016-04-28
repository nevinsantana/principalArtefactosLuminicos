<?php
include("funciones.php");
$sql="SELECT * FROM Log_In";
$res=query($sql,$con);
while($cam=mysql_fetch_assoc($res)) {
  $user=$cam['id_usuario'];
  $nPass=$cam['password'];
  $nPass=str_replace("'","*",$nPass);
  $nPass=str_replace('"','-',$nPass);
  $sql="UPDATE Log_In SET password='$nPass' WHERE id_usuario='$user'";
  $resa=query($sql,$con);
}
?>
