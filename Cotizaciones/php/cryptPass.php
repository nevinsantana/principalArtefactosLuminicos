<?php
include("funciones.php");
$sql="SELECT * FROM log_in";
$res=query($sql,$con);
while($cam=mysql_fetch_assoc($res)) {
  $nPass=cryptRS($cam['id_usuario'],$cam['password']);
  $user=$cam['id_usuario'];
  $sql="UPDATE log_in SET password='$nPass' WHERE id_usuario='$user'";
  $resa=query($sql,$con);
}
?>
