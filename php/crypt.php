<?php
function burbuja($a,$n) {
  $k="";
  for($i=1;$i<$n;$i++) {
    for($j=0;$j<$n-$i;$j++) {
      if($a[$j][0]>$a[$j+1][0]) {
        $k=$a[$j+1][0];
        $a[$j+1][0]=$a[$j][0];
        $a[$j][0]=$k;
      }
    }
  }
  return $a;
}
function cryptRS($user, $pass) {
  $nPass=strlen($pass)-1; $pass2="";
  for($i=$nPass;$i>=0;$i--) {
    $letra=substr($pass,$i,1);
    $ascii=ord($letra);
    $ascii=$ascii+$i+1;
    if($ascii>126) $ascii=$ascii-126+32;
    $res=chr($ascii);
    $pass2=$pass2.$res;
  }
  $arrayUser=str_split($user); $i=0;
  foreach($arrayUser as $pos => $let) {
    $arrayUser1[$pos][0]=$let;
    $arrayUser1[$pos][1]=$pos+1;
  }
  $nPass2=strlen($pass2); $nUser=strlen($user);
  $divisor=$nPass2/$nUser; $divisor=ceil($divisor); $n=0;
  for($i=0;$i<$divisor;$i++) {
    for($j=0;$j<$nUser;$j++) { $m=substr($pass2,$n,1); $reps[$j][$i]=$m; $n++; }
  }
  $uAlfab=burbuja($arrayUser1,sizeof($arrayUser1));
  $tamUs=sizeof($uAlfab); $n=0;
  while($n<$divisor) {
    for($i=0;$i<$divisor;$i++) {
      for($j=0;$j<$tamUs;$j++) { $uAlfab[$j][$n+2]=$reps[$j][$i]; }
      $n++;
    }
  }
  $n=0;
  while($n<$divisor) {
    for($i=0;$i<$tamUs;$i++) {
      for($j=0;$j<$tamUs;$j++) {
        if($uAlfab[$j][0]==$arrayUser1[$i][0]) {
          $arrayUser1[$i][$n+2]=$uAlfab[$j][$n+2];
        }
      }
    }
    $n++;
  }
  $i=0; $nuePa=""; $n=0;
  while($n<$divisor) {
    for($i=0;$i<$tamUs;$i++) { $l=$arrayUser1[$i][$n+2]; $nuePa=$nuePa.$l; }
    $n++;
  }
  $i=0; $nuePal=strlen($nuePa); $x=0; $fpas="";
  while($i<$nuePal) {
    $l=substr($nuePa,$i,1);
    if($x==0) $x=1;
    else if($x==1) { $l=ord($l); $x=2; }
    else if($x==2) {
      $li=ord($l);
      $lj=strlen($li);
      if($lj==2) $l=chr(substr($li,0,1)+substr($li,1,1)+32);
      if($lj==3) $l=chr(substr($li,0,1)+substr($li,1,1)+substr($li,2,1)+32);
      $x=0;
    }
    $i++; $fpas=$fpas.$l;
  }
  return $fpas;
}
?>
