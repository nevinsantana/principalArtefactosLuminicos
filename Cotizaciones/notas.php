<?php
  session_start();
  if(!isset($_SESSION['usuario'])) header('Location: log_in.php');
  $id_cotizacion=$_SESSION['cotizacion'];
  include("funciones_mysql.php");
  $con=conectar();
  if(isset($_SESSION['cancelar'])) $cancelar=$_SESSION['cancelar'];
  else $cancelar=0;
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
    <div id="page">
      <br><br><br>
      <div id="modificar">
      <div id="titulo2" style="margin-left: -30px; text-align: center;">
        Generador de notas para la cotización
      </div>
      <div class="tabla_notas">
        <table>
          <tr>
            <td width="5%">No</td>
            <td width="80%">Descripción</td>
            <td width="20%">Util</td>
          </tr>
          <?php
            header('Content-Type: text/html; charset=UTF-8');
            $siguiente=1;
            $sql="SELECT * FROM Notas WHERE id_cotizacion='$id_cotizacion'";
            $res=query($sql, $con);
            while($cam=mysql_fetch_assoc($res)) {
              echo "<tr>
                <td align='center'>".$siguiente."</td>
                <td>".$cam['descripcion']."</td>
                <td align='right'>
                  <a href='editar_nota.php?no_nota=".$cam['no_nota']."'
                    style='margin:0 10px 0 -10px;'>
                    <img src='images/edit.png'>
                  </a>
                  <img src='images/delete.png'
                    onclick='Eliminar(".$cam['no_nota'].")'>
                </td>
              </tr>";
              $siguiente++;
            }
          ?>
        </table>
      </div>
      <br>
      <table>
        <tr>
          <td>
            <a href="partidas.php">
              <input type="button" value="Atras" id="botonp">
            </a>
            <a href="agregar_nota.php">
              <input type="button" value="Agregar Nota" id="botonp">
            </a>
          </td>
          <td>
            <?php if($siguiente > 0) { if($cancelar==0) { ?>
              <a href="descuentos.php">
                <input type="button" value="Siguiente" id="botonp">
              </a>
            <?php } else { ?>
              <a href="descuentos.php">
                <input type="button" value="Siguiente" id="botonp">
              </a>
            <?php } } ?>
          </td>
        </tr>
      </table>
      <div id="subir2">
        <?php if($cancelar==0) { ?>
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
      </div>
    </div>
    <script>
      function Cancelar() {
        var r=confirm("Esta seguro que desea cancelar la cotizacion?");
        if(r==true) location.href="cancelar.php";
      }
      function Eliminar(nota) {
        var r=confirm("Esta seguro que desea eliminar esta nota?");
        if(r==true) {
          var dir="eliminar_nota.php?id_nota=";
          var union=dir.concat(nota);
          window.location=union;
        }
      }
    </script>
  </body>
</html>
