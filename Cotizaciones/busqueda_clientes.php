<?php
  if(!isset($_SESSION['usuario'])) header('Location: log_in.php');
  header('Content-Type: text/html; charset=UTF-8');
  $usuario=$_SESSION['usuario'];
  $sql="SELECT * FROM Usuarios WHERE id_usuario='$usuario'";
  $res=query($sql, $con);
  $cam=mysql_fetch_array($res);
  foreach ($cam as $camp => $value) { ${$camp}=$value; }
?>
<div class="datagrid">
  <table width="1000px">
    <tr>
      <thead>
        <th width='4%'><h3>RFC</h3></th>
        <th width='10%'><h3>Empresa</h3></th>
        <th width='43%'><h3>Dirección</h3></th>
        <th width='43%'><h3>Contacto</h3></th>
        <?php if($permiso==1) echo "<th width='10%'><h3>Vendedor</h3>"; ?>
      </thead>
    </tr>
    <div align='center'>
      <div id='caja_cat'>
        Clientes de
        <br>
        <?php
        echo "$nombre $apellido_p $apellido_m
      </div>
    </div>
    <br>";
      $cont=2;
      if($permiso==2) {
        $sql="SELECT * FROM Clientes WHERE id_cliente LIKE '%$rfc%' AND
          id_usuario='$usuario' AND desactivado=0 ORDER BY empresa";
      }
      else {
        $sql="SELECT * FROM Clientes WHERE id_cliente LIKE '%$rfc%' AND
          desactivado=0 ORDER BY empresa";
      }
      $res=query($sql, $con);
      echo "<div align='center'>
        <div id='caja_cat2'>
          Busqueda:".$rfc.
        "</div>
      </div>
      <br>";
      while($cam=mysql_fetch_array($res)) {
        if($cont % 2==0) {
          $id_usuario=$cam['id_usuario'];
          $id_direccion=$cam['id_direccion'];
          $id_contacto=$cam['id_contacto'];
          $sqla="SELECT * FROM Direcciones WHERE id_direccion='$id_direccion'";
          $resa=query($sqla, $con);
          $cama=mysql_fetch_array($resa);
          foreach ($cama as $camp => $value) { ${$camp}=$value; }
          $sqlb="SELECT * FROM Contacto WHERE id_contacto='$id_contacto'";
          $resb=query($sqlb, $con);
          $camb=mysql_fetch_array($resb);
          foreach ($camb as $camp => $value) { ${$camp}=$value; }
          $sql5="SELECT * FROM Usuarios WHERE id_usuario='$id_usuario'";
          $res5=query($sql5, $con);
          $cam5=mysql_fetch_array($res5);
          $nombre_usuario="".$cam5['nombre']." ".$cam5['apellido_p'];
          echo "<tr>".
            "<td id='sombra2'>".$cam['id_cliente']."</td>".
            "<td id='sombra2'>".$cam['empresa']."</td>".
            "<td id='sombra2'>".$calle."--".$num_int."--".$num_ext."--".
              $colonia."--".$municipio."--".$estado."--".$cp."</td>".
            "<td id='sombra2'>".$nombre_c."-".$departamento."--".$telefono1.
              "--".$telefono2."--".$e_mail_c."</td>";
            if($permiso==1) echo "<td id='sombra2'>".$nombre_usuario."</td>";
          echo "</tr>";
        }
        else {
          $id_direccion=$cam['id_direccion'];
          $sqla="SELECT * FROM Direcciones WHERE id_direccion='$id_direccion'";
          $resa=query($sqla, $con);
          $cama=mysql_fetch_array($resa);
          foreach ($cama as $camp => $value) { ${$camp}=$value; }
          echo "<tr>".
            "<td id='sombra'>".$cam['id_cliente']."</td>".
            "<td id='sombra'>".$cam['empresa']."</td>".
            "<td id='sombra'>".$calle."--".$num_int."--".$num_ext."--".$colonia.
              "--".$municipio."--".$estado."--".$cp."</td>".
            "<td id='sombra'>".$nombre_c."-".$departamento."--".$telefono1."--".
              $telefono2."--".$e_mail_c."</td>";
            if($permiso==1) echo "<td id='sombra'>".$nombre_usuario."</td>";
          echo "</tr>";
        }
        $cont++;
      }
      ?>
      </table>
      </div>
