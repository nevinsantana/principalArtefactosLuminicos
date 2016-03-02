<?php
  session_start();
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  include("funciones_mysql.php");
  $con=conectar(); $id_cotizacion=$_GET['id_cotizacion'];
  $id_usuario=$_SESSION['usuario'];
  $sql="SELECT * FROM Cotizaciones ORDER BY id_cotizacion DESC LIMIT 1";
  $res=query($sql, $con);
  $campo=mysql_fetch_row($res);
  $id_cotizacion2=$campo[0] + 1;
  $permiso=$_SESSION['permiso'];
  if(isset($_GET['cliente'])) $cliente=$_GET['cliente']; else $cliente=2;
?>
<!doctype html>
<html>
  <head>
    <meta http-equiv="Content-Type" charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="tabla_notas.css" rel="stylesheet" type="text/css">
    <title>Consecutivo de cotizaciones</title>
  </head>
  <body>
    <?php
      if($cliente==1) {
        $vals='';
        $sql="SELECT * FROM Cotizaciones WHERE id_cotizacion='$id_cotizacion'";
        $res=query($sql, $con); $cam=mysql_fetch_assoc($res);
        $cam['id_cotizacion']=$id_cotizacion2; $id_cliente=$cam['id_cliente'];
        foreach($cam as $camp => $val) { $vals=$vals."'".$val."',"; }
        $vals=rtrim($vals, ",");
        $sql="INSERT INTO Cotizaciones(id_cotizacion,fecha,id_cliente,
        id_usuario,vigencia,no_partidas,divisa,subtotal,iva,total,t_entrega,
        c_pago,descuento,activo) VALUES($vals)"; $res=query($sql, $con);
          $vals='';
        $sql="SELECT * FROM Datos_Cotizacion WHERE id_cotizacion=
          '$id_cotizacion'";
        $res=query($sql, $con);
        $cam=mysql_fetch_assoc($res); $cam['id_cotizacion']=$id_cotizacion2;
        foreach($cam as $camp => $val) { $vals=$vals."'".$val."',"; }
        $vals=rtrim($vals, ",");
        $sql="INSERT INTO Datos_Cotizacion(id_cotizacion,datos_cliente,
          datos_contacto,datos_vendedor) VALUES($vals)"; $res=query($sql, $con);
        $sql="SELECT * FROM partidas WHERE id_cotizacion='$id_cotizacion'";
        $res=query($sql, $con);
        while($cam=mysql_fetch_assoc($res)) {
          $vals=''; $cam['id_cotizacion']=$id_cotizacion2;
          foreach($cam as $camp => $val) { $vals=$vals."'".$val."',"; }
          $vals=rtrim($vals, ",");
          $sql="INSERT INTO Partidas(no_partida,id_partida,id_cotizacion,
            partida,cantidad,unidad,catalogo,descripcion,precio_uni,
            precio_total,sumable) VALUES($vals)"; $res1=query($sql, $con); }
        $sql="SELECT * FROM Notas WHERE id_cotizacion='$id_cotizacion'";
        $res=query($sql, $con);
        while($cam=mysql_fetch_assoc($res)) {
          $no_nota=$cam['no_nota'];
          $descripcion_nota=$cam['descripcion'];
          $sql="INSERT INTO Notas(id_cotizacion, no_nota, descripcion)
            VALUES('$id_cotizacion2','$no_nota','$descripcion_nota')";
          $res1=query($sql, $con);
        }
        $sql="SELECT * FROM Clientes WHERE id_num_cliente='$id_cliente'";
        $res=query($sql, $con); $cam=mysql_fetch_assoc($res);
        $empresa=$cam['empresa'];
        header("Location:editar_cotizacion.php?id_cotizacion=".$id_cotizacion2.
          "&empresa=$empresa");
      }
      if($cliente==0) {
    ?>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <div id="addcliente3" align='center' style="margin-left:-5px">
      Seleccione el cliente:
    </div>
    <form action="reusar2.php?id_cotizacion=<?php echo $id_cotizacion;
      ?>&id_cotizacion2=<?php echo $id_cotizacion2; ?>" method="POST">
      <?php
      if($permiso==1) {
        $sql="SELECT * FROM Clientes WHERE  desactivado='0' ORDER BY empresa";
        $res=query($sql, $con);
      }
      else {
        $sql="SELECT * FROM Clientes WHERE id_usuario='$id_usuario' AND
          desactivado='0' ORDER BY empresa";
        $res=query($sql, $con);
      }
      echo '<div align="center">
        <select id=cotizarselect name=empresa>';
          while($campo=mysql_fetch_assoc($res)) {
            echo '<option>'.$campo["empresa"].'</option>';
          }
        echo '</select>
      </div>';
    ?>
    <div align="center" style="margin-left:-200px">
      <input type="submit" value="Cotizar" class="formu-button">
    </div>
      </form>
      <?php } ?>
    <script>
    var cliente="<?php echo $cliente ?>";
      if(cliente==2) {
        (function(id_cotizacion) {
          var r=confirm('Desea cotizar al mismo cliente?');
          if(r==true) {
            dire="reusar.php?cliente=1&id_cotizacion=";
            var union=dire.concat(id_cotizacion);
            window.location=union;
          }
          else {
            dire="reusar.php?cliente=0&id_cotizacion=";
            var union=dire.concat(id_cotizacion);
            window.location=union;
          }
        })(<?php echo $id_cotizacion ?>);
      }
    </script>
  </body>
</html>
