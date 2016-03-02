<?php
  header('Content-Type: text/html; charset=UTF-8');
  include("funciones_mysql.php");
  $con=conectar(); $cotizacion="";
  session_start();
  if(isset($_SESSION['cancelar'])) $cancelar=$_SESSION['cancelar'];
  else $cancelar=0;
  if(isset($_SESSION['usuario'])) $id_usuario=$_SESSION['usuario'];
  else $cancelar=0;
  if(isset($_GET['empresa'])) $_SESSION['empresa']=$_GET['empresa'];
	if(isset($_SESSION['empresa'])) $empresa=$_SESSION['empresa'];
	else { $empresa=$_POST['empresa']; $_SESSION['empresa']=$empresa; }
  if(isset($_SESSION['cotizacion'])) {
    $cotizacion=$_SESSION['cotizacion'];
    $sql="SELECT * FROM Cotizaciones WHERE id_cotizacion='$cotizacion'";
    $res=query($sql,$con);
    $cam=mysql_fetch_assoc($res); $id_cliente=$cam['id_cliente'];
    $sql="SELECT * FROM Clientes WHERE id_num_cliente='$id_cliente'";
    $res=query($sql,$con);
    $cam=mysql_fetch_assoc($res); $empresa=$cam['empresa'];
  }
  $sql="SELECT * FROM Clientes WHERE empresa='$empresa'";
  $res=query($sql,$con);
  $cam=mysql_fetch_assoc($res);
  foreach($cam as $camp => $value) { ${$camp}=$value; }
  $sql="SELECT * FROM Contacto WHERE id_contacto='$id_contacto'";
  $res=query($sql,$con);
  $cam=mysql_fetch_assoc($res);
  foreach($cam as $camp => $value) { ${$camp}=$value; }
  $sql="SELECT * FROM Usuarios WHERE id_usuario='$id_usuario'";
  $res=query($sql,$con);
  $cam=mysql_fetch_assoc($res);
  foreach($cam as $camp => $value) { ${$camp}=$value; }
  $nombre="$nombre "."$apellido_p "."$apellido_m";
  $sql="SELECT * FROM Direcciones WHERE id_direccion=$id_direccion";
  $res=query($sql,$con);
  $cam=mysql_fetch_assoc($res);
  foreach($cam as $camp => $value) { ${$camp}=$value; }
  if(isset($_SESSION['cotiz_usuario'])) $cotUser=$_SESSION['cotiz_usuario'];
  $nombre="$nombre "."$apellido_p "."$apellido_m";
  $datos_cliente= $empresa." ".$num_int." ".$num_ext." ".$colonia." C.P".$cp." "
    .$municipio." ".$estado;
  $datos_contacto= $nombre_c."\n"."Departamento de".$departamento."\n"."Tels: "
    .$telefono1.",".$telefono2."\n".$e_mail_c;
  $datos_vendedor= $nombre."\n".$e_mail ;
  if(isset($_SESSION['empresa'])) $empresa=$_SESSION['empresa'];
  else { $empresa=$_POST['empresa']; $_SESSION['empresa']=$empresa; }
  if(!isset($_SESSION['usuario'])) {
    $_SESSION['cotizacion']='algo';
    header('Location: index.php');
  }
  else {
    if(isset($_SESSION['cotizacion'])) {
      $id_cotizacion=$_SESSION['cotizacion'];
      $_SESSION['cotizacion']=$id_cotizacion;
    }
    else {
      $id_usuario=$_SESSION['usuario'];
      $sql="SELECT * FROM Cotizaciones ORDER BY id_cotizacion DESC LIMIT 1";
      $res=query($sql,$con);
      $cam=mysql_fetch_row($res); $id_cotizacion=$cam[0] + 1;
      if($id_cotizacion == "") $id_cotizacion=1;
      $_SESSION['cotizacion']=$id_cotizacion;
      $fecha=date('y.m.d');
      $sql="INSERT INTO Cotizaciones(id_cotizacion,fecha,id_cliente,
        id_usuario) VALUES('$id_cotizacion','$fecha','$id_num_cliente',
        '$id_usuario')";
      $res=query($sql,$con);
    }
  }
  $sql="SELECT * FROM Datos_Cotizacion WHERE id_cotizacion='$id_cotizacion'";
  $res=query($sql,$con);
  $cam=mysql_fetch_array($res); $prueba=$cam['id_cotizacion'];
  if(!isset($prueba)) {
    $sqla="INSERT INTO Datos_Cotizacion(id_cotizacion,datos_cliente,
      datos_contacto,datos_vendedor) VALUES('$id_cotizacion','$datos_cliente',
      '$datos_contacto','$datos_vendedor')";
    $resa=query($sqla,$con);
  }
?>
<!doctype html >
<html>
  <head>
    <meta http-equiv="Content-Type" charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="tabla_partidas.css" rel="stylesheet" type="text/css">
    <title>Consecutivo de Cotizaciones</title>
  </head>
  <body>
    <div id="page">
      <br><br><br>
      <div id="modificar">
        <div id="titulo2">Generador de partidas para la cotización.</div>
        <?php
          echo "<p class='textoPartidas'>Cliente actual: $empresa";
          echo '<br>';
          echo "Cotización no: $id_cotizacion</p>"
        ?>
        <div align="center" class="textoPartidas">
          Favor de no modificar la columna "Contador"
        </div>
        <br>
        <div class="Tabla_Partidas">
          <table width="1000">
            <tr>
              <td width="9%">Orden</td>
              <td width="6%">Partida</td>
              <td width="4%">Cant.</td>
              <td width="5%">Unidad</td>
              <td width="13%">Catálogo</td>
              <td width="41%">Descripción</td>
              <td width="5%">P.U.</td>
              <td width="5%">P.T.</td>
              <td width="12%">Utilidades</td>
            </tr>
            <?php
              $siguiente=0;
              $sql="SELECT * FROM Partidas WHERE id_cotizacion='$id_cotizacion'
                ORDER BY no_partida";
              $res=query($sql,$con);
              $cam=mysql_fetch_assoc($res);
              echo "<form method='POST' id='ordenaForm'
              action='ordenar.php?cotizacion=$cotizacion";
              echo "&partida=".$cam['id_partida'];
              while($cam=mysql_fetch_assoc($res)) {
                foreach($cam as $camp => $val) {
                  if($camp=='id_partida') echo "&partida$val=$val";
                }
              }
              echo "'>";
              $sql="SELECT * FROM Partidas WHERE id_cotizacion='$id_cotizacion'
                ORDER BY no_partida";
              $res=query($sql,$con);
              $contador=1;
              while($cam=mysql_fetch_array($res)) {
                $i=$cam['precio_uni'];
                $j=$cam['precio_total'];
                $id_partida=$cam['id_partida'];
                if($i == 0 || $j == 0) {}
                else {
                  $precio_unit=number_format("$i",2);
                  $precio_total=number_format("$j",2);
                }
                echo "<tr>
                  <td>
                    <input type=number name='orden".$contador."'
                      value=".$cam['no_partida']." style='text-align: center;
                      width: 60%;' onchange='ordena()' required>
                  </td>
                  <td>".$cam['partida']."</td>";
                  if($cam['cantidad'] == 0) echo "<td align='right'></td>";
                  else echo "<td>".$cam['cantidad']."</td>";
                  echo "<td>".$cam['unidad']."</td>
                  <td>".$cam['catalogo']."</td>
                  <td>
                    <pre style='white-space: normal;'>"
                      .$cam['descripcion'].
                    "</pre>
                  </td>";
                  if($i == 0 || $j == 0) {
                    echo
                    "<td align='right'></td>
                    <td align='right'></td>";
                  }
                  else {
                    echo
                    "<td align='right'>"
                      .number_format($cam['precio_uni'],2).
                    "</td>
                    <td align='right'>"
                      .number_format($cam['precio_total'],2).
                    "</td>";
                  }
                  echo
                  "<td align='right'>
                    <a href='editar_partida.php?id_partida=".$id_partida."'
                      style='margin:0 10px 0 -10px;'>
                      <img src='images/edit.png'>
                    </a>
                    <img src='images/delete.png'
                      onclick='Eliminar(".$id_partida.")'>
                  </td>
                </tr>";
                $siguiente=$siguiente + 1;
                $contador=$contador + 1;
              }
            ?>
          </table>
        </div>
        <input type=submit value='Reordenar' id="boton_reordenar">
						</form>
        <br><br><br>
        <table>
          <tr>
            <td>
              <a href="agregar_partida.php"><input type="button"
                value="Agregar Partida" id="botonp">
              </a>
            </td>
            <td>
              <input type="button" value="Cátalogo"
                onclick="javascript:window.open('catalogo_productos.php','','width=screen.width,height=screen.height,scrollbars=yes');"
                id="botonp">
            </td>
            <td>
              <?php if($siguiente > 0) { ?>
                <a href="notas.php"><input type="button" value="Siguiente"
                  id="botonp">
                </a>
              <?php } ?>
            </td>
          <br>
          </tr>
        </table>
        <div id="subir">
          <?php if($cancelar == 0) { ?>
            <table border="0" widht="100px" style="margin-top: -48px;
              float: right;">
              <tr>
                <td>
                  <input type="button" value="Cancelar" id="botonp"
                    onclick="Cancelar()">
                </td>
              </tr>
            </table>
          <?php } else { ?>
            <table border="0" widht="100px" style="margin-top: -48px;
              float: right;">
              <tr>
                <td>
                  <a href="editar_form_cotizacion.php">
                    <input type="button" value="Finalizar" id="botonp">
                  </a>
                </td>
              </tr>
            </table>
          <?php } ?>
        </div>
        <br><br><br>
      </div>
    </div>
    <script>
      function Cancelar() {
        var r=confirm("Esta seguro que desea cancelar la cotizacion?");
        if(r == true) location.href="cancelar.php";
      }
      function Eliminar(partida) {
        var r=confirm("Esta seguro que desea eliminar esta partida?");
        if(r == true) {
          var dir="eliminar_partida.php?id_partida=";
          var union=dir.concat(partida);
          window.location=union;
        }
      }
      function ordena() {
        document.forms['ordenaForm'].submit();
      }
    </script>
  </body>
</html>
