<?php
  session_start();
  include("funciones_mysql.php"); $con=conectar();
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  if(!isset($_SESSION['cotizacion']))
    header('Location: ventas.php?sec=cotizar');
  header('Content-Type: text/html; charset=UTF-8');
  $id_usuario=$_SESSION['usuario'];
  $empresa=$_SESSION['empresa'];
  $id_cotizacion=$_SESSION['cotizacion'];
  $fecha=date('y-m-d');
  if(isset($_SESSION['cancelar'])) $cancelar=$_SESSION['cancelar'];
  else $cancelar=0;
  $sql="SELECT * FROM Partidas ORDER BY no_partida DESC LIMIT 1";
  $res=query($sql, $con);
  while($cam=mysql_fetch_row($res)) { $no_partida=$cam[0] + 1; }
  $sql="SELECT * FROM Clientes WHERE empresa='$empresa'";
  $res=query($sql, $con);
  $cam=mysql_fetch_assoc($res);
  foreach ($cam as $camp => $value) { ${$camp}=$value; }
  $sql="SELECT * FROM Contacto WHERE id_contacto='$id_contacto'";
  $res=query($sql, $con);
  $cam=mysql_fetch_assoc($res);
  foreach ($cam as $camp => $value) { ${$camp}=$value; }
  $sql="SELECT * FROM Usuarios WHERE id_usuario='$id_usuario'";
  $res=query($sql, $con);
  $cam=mysql_fetch_assoc($res);
  foreach ($cam as $camp => $value) { ${$camp}=$value; }
  $nombre="$nombre "."$apellido_p "."$apellido_m";
  $sql="SELECT * FROM Direcciones WHERE id_direccion=$id_direccion";
  $res=query($sql, $con);
  $cam=mysql_fetch_assoc($res);
  foreach ($cam as $camp => $value) { ${$camp}=$value; }
  $sql="SELECT * FROM Usuarios WHERE id_usuario='$id_usuario'";
  $res=query($sql, $con);
  $cam=mysql_fetch_assoc($res);
  foreach ($cam as $camp => $value) { ${$camp}=$value; }
  $sql="SELECT * FROM Datos_Cotizacion WHERE id_cotizacion='$id_cotizacion'";
  $res=query($sql, $con);
  $cam=mysql_fetch_assoc($res);
  foreach ($cam as $camp => $value) { ${$camp}=$value; }
  $sql="SELECT * FROM Partidas WHERE id_cotizacion='$id_cotizacion'";
  $res=query($sql, $con);
  $cam=mysql_fetch_assoc($res);
  $sql="SELECT * FROM Cotizaciones WHERE id_cotizacion='$id_cotizacion'";
  $res=query($sql, $con);
  $cam=mysql_fetch_assoc($res);
  foreach ($cam as $camp => $value) { ${$camp}=$value; }
  $descuento2=$descuento * 100;
  $_SESSION['no_partidas']=$no_partidas;
?>
<!doctype html>
<html>
  <head>
    <link href="style.css" rel="stylesheet" type="text/css">
	  <link href="jqueryCalendar.css" rel="stylesheet" type="text/css">
    <link href="hoja_blanca.css" rel="stylesheet" type="text/css">
  </head>
  <body class="h7">
    <div align="center">
      <div id="hoja">
        <div id="imprimeme">
          <br><br><br>
          <div id="page">
            <div align="center">
              <table border=0 cellspacing="2px" width="90%">
                <tr>
                  <td height="33.3%" width="33.3%" id="bordet">
                    <div align="center" class="h7">
                      <img src="images/logo112x82.png" width="112">
                        <br>
                        Artefactos Lumínicos S.A. de C.V.
                    </div>
                  </td>
                  <form method="POST" action="editar_cotizacion2.php">
                  <td height="33.3%" width="33.3%" id="bordet" class="h7">
                    <div align="center">
                      <table>
                        <tr>
                          <td width="50%" align=right class="h7">
                            Número de cotización:
                          </td>
                          <td align=center width="50px">
                            <input class="caja" type="text"
                              name="id_cotizacion" disabled value=
                              "<?php echo $id_cotizacion; ?>">
                          </td>
                        </tr>
                        <tr>
                          <td width="50%" align=right class="h7">Fecha:</td>
                          <td align=center width="50px">
                            <input class="caja" id="caja" type="text"
                              name="fecha" value="<?php echo $fecha; ?>">
                          </td>
                        </tr>
                        <tr>
                          <td width="50%" align=right class="h7">
                            Vigencia en Días:
                          </td>
                          <td align=center width="50px">
                            <input class="caja" type="text"
                              placeholder="Vigencia en días"
                              name="vigencia" value="<?php echo $vigencia ?>">
                          </td>
                        </tr>
                        <tr>
                          <td width="50%" class="h7">Partidas:</td>
                          <td align=center width="50px">
                            <input class="caja" type="text"
                              name="no_partidas1"
                              value="<?php echo $no_partidas; ?>">
                          </td>
                        </tr>
                      </table>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td id="bordet">
                    <div align="center" class="h7">
                      <br>
                      <h3>Artefactos Lumínicos S.A. de C.V.</h3>
                      <span class="fCDatos">
                      Av. Juárez No. 9-2, Col. San Mateo Ixtacalco,
                      <br>
                      Cuautitlán Izcalli, Estado de México, C.P. 54713
                      <br>
                      ventas@artefactosluminicos.com.mx
                      <br>
                      www.artefactosluminicos.com.mx
                      </span>
                    </div>
                  </td>
                  <td id="bordet" align="left" class="h7">
                    <br>
                    <h3>Condiciones de venta</h3>
                    <br>
                    <span class="fCDatos">
                    *Precios sujetos a cambio sin previo aviso.
                    <br>
                    *Cuenta 0451244973 CLABE 012180004512449814 de Bancomer.
                    <br>
                    *Toda devolución autorizada causará un cargo del 35%.
                    <br>
                    *No se aceptan cancelaciones.
                    <br>
                    *La empresa se reserva el derecho de hacer cargos por
                    almacenaje 72 hrs. posteriores al aviso de mercancia
                    preparada.
                    <br>
                    *Cualquier modificación de este documento lo invalidará.
                    </span >
                  </td>
                </tr>
              </table>
              <br><br>
              <table border=0 cellspacing="2px" width="90%">
                <tr>
                  <td id="bordet">
                    <div align="center">
                      <div class="h7">Datos del cliente</div>
                      <textarea class="cajaa" align="Center"
                        name="datos_cliente" rows="3" cols="28"><?php
                        echo "$datos_cliente"; ?></textarea>
                    </div>
                    <br>
                  </td>
                  <td id="bordet">
                    <div align="center"><div class="h7">Datos de contacto</div>
                      <textarea class="cajaa" align="Center"
                        name="datos_contacto" rows="3" cols="28"><?php
                        echo "$datos_contacto"; ?></textarea>
                    </div>
                    <br>
                  </td>
                  <td id="bordet">
                    <div align="center">
                      <div class="h7">Datos del vendedor</div>
                      <textarea class="cajaa" align="Center"
                        name="datos_vendedor" rows="3" cols="28"><?php
                        echo "$datos_vendedor"; ?></textarea>
                    </div>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
            <div class="h7" align="center" style="font-size: 15px;">
              PONEMOS A SU AMABLE CONSIDERACIÓN EL SIGUIENTE PRESUPUESTO
            </div>
            <br>
            <div align="center">
              <table border="4px" width="950" cellspacing="1px"
                class="h7 correccion">
                <thead>
                  <tr>
                    <th width="10%">Partida</th>
                    <th width="10%">Cantidad</th>
                    <th width="10%">Unidad</th>
                    <th width="10%">Catálogo</th>
                    <th width="40%">Descripción</th>
                    <th width="10%">Precio unitario</th>
                    <th width="10%">Precio total</th>
                  </tr>
                </thead>
                <?php
                  $subtotal=0;
                  $nom_partida=0;
                  $sql="SELECT * FROM Partidas WHERE
                    id_cotizacion='$id_cotizacion' ORDER BY no_partida";
                  $res=query($sql, $con);
                  while($cam=mysql_fetch_array($res)) {
                    $precio_uni=$cam['precio_uni'];
                    $precio_total=$cam['precio_total'];
                    $precio_uni=number_format($precio_uni, 2);
                    $precio_total=number_format($precio_total, 2);
                    echo "<tr>
                      <td align='center' id='texto1'>".$cam['partida'].
                      "</td>";
                      if($cam['cantidad']==0)
                      echo "<td align='center' id='texto1'></td>";
                      else
                        echo "<td align='center' id='texto1'>"
                          .$cam['cantidad'].
                        "</td>";
                      echo "<td align='center' id='texto1'>"
                        .$cam['unidad'].
                      "</td>
                      <td align='center' id='texto1'>".$cam['catalogo']."</td>
                      <td align='justify' id='texto1'>"
                        .$cam['descripcion'].
                      "</td>";
                      if($cam['precio_uni']==0)
                        echo "<td id='aligder'></td><td id='aligder'> </td>";
                      else
                        echo"<td id='aligder'>"
                          .$precio_uni.
                        "</td>
                        <td id='aligder'>".$precio_total."</td>";
                    "</tr>";
                    $subtotal=$subtotal + $cam['precio_total'];
                    $nom_partida=$nom_partida + 1;
                  }
                  $subtotal1=$subtotal * $descuento;
                  $subtotal2=$subtotal - $subtotal1;
                  $iva=$subtotal2 * 0.16;
                  $total=$subtotal2 + $iva;
                  $_SESSION['subtotal']=$subtotal;
                  $_SESSION['total']=$total;
                  $_SESSION['iva']=$iva;
                  $iva=number_format($iva, 2);
                  $total=number_format($total, 2);
                  $subtotal=number_format($subtotal, 2);
                  $subtotal2=number_format($subtotal2, 2);
                ?>
                <tr>
                  <td style="border: hidden" colspan="5">
                    <table border="3px" width="500px" id="margen" class="h7">
                      <thead>
                        <tr>
                          <th width="20%" align="center" colspan="2"
                            id="sin_borde">
                            Notas
                          </th>
                        </tr>
                        <tr>
                          <th width="20%" align="center" id='texto1'>
                            No de nota
                          </th>
                          <th width="80%" align="center" id='texto1'>
                            Descripción
                          </th>
                        </tr>
                      </thead>
                      <?php
                        $sql="SELECT * FROM Notas WHERE id_cotizacion=
                          '$id_cotizacion'";
                        $res=query($sql, $con);
                        while($cam=mysql_fetch_array($res)) {
                          echo "<tr>
                            <td align='center' id='texto1' class='lenotas'
                              style='color:black;'>"
                              .$cam['no_nota'].
                            "</td>
                            <td align='justify' id='texto1' class='lenotas'
                              style='color:black;'>"
                              .$cam['descripcion'].
                            "</td>
                          </tr>";
                        }
                      ?>
                    </table>
                  </td>
            </div>
                  <td>
                    <br>
                    <div class="h7" style="font-size: 15px;">
                      <?php echo 'Divisa'; ?>
                    </div>
                    <hr width=100% align="left">
                    <div class="h7" style="font-size: 15px;">
                      <?php echo 'Subtotal'; ?>
                    </div>
                    <hr width=100% align="left">
                    <?php if($descuento > 0) { ?>
                      <div class="h7" style="font-size: 15px;">
                        <?php echo 'Descuento'; ?>
                      </div>
                      <hr width=100% align="left">
                      <div class="h7" style="font-size: 15px;">
                        <?php echo 'Subt. c/desc.'; ?>
                      </div>
                      <hr width=100% align="left">
                    <?php } ?>
                    <div class="h7" style="font-size: 15px;">
                      <?php echo 'I.V.A.'; ?>
                    </div>
                    <hr width=100% align="left">
                    <div class="h7" style="font-size: 15px;">
                      <?php echo 'Total'; ?>
                    </div>
                  </td>
                  <td>
                    <br>
                    <div align="right">
                      <select id="select1" name="divisa">
                        <option  value="M.N." name="mn"
                          <?php if($divisa=='M.N.') echo "selected"; ?>>
                          M.N.
                        </option>
                        <option value="Dolar" name="dolar"
                          <?php if($divisa=='Dolar') echo "selected"; ?>>
                          Dolar
                        </option>
                      </select>
                      <hr width=100% align="right">
                      <div class="h7" style="font-size: 15px;">
                        <?php echo $subtotal; ?>
                      </div>
                      <hr width=100% align="left">
                      <?php if($descuento > 0) { ?>
                        <div class="h7" style="font-size: 15px;">
                          <?php echo "$descuento2 %"; ?>
                        </div>
                        <hr width=100% align="left">
                        <div class="h7" style="font-size: 15px;">
                          <?php echo $subtotal2; ?>
                        </div>
                        <hr width=100% align="left">
                      <?php } ?>
                      <div class="h7" style="font-size: 15px;">
                        <?php echo $iva; ?>
                      </div>
                      <hr width=100% align="right">
                      <div class="h7" style="font-size: 15px;">
                        <?php echo $total; ?>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
          </div>
          <br><br><br>
          <table border=1 cellspacing="2px" class="h7">
            <tr>
              <td class="fCDatos">
                Condiciones de entrega
                <br>
                *El tiempo de entrega corre a partir de recibir su pedido
                original firmado
                <br>
                haciendo referencia a este número de cotización y de confirmar
                el anticipó
                <br>
                correspondiente en nuestra cuenta.
                <br>
                *Para embalajes especiales considerar cargos extras.
                <br>
                *Los fletes foraneos corren por cuenta y riesgo del cliente.
                <br>
                *En pedidos mínimo de $12,500.00 L.A.B. D.F. y zona
                metropolitana, excepto postes.
                <br>
                *No se liberan materiales sin el pago total de la mercancia.
              </td>
              <td width="210px">
                <h3 align="center">Tiempo de entrega</h3>
                <br><br>
                <div align="center">
                  <input class="caja" type="text"
                    placeholder="Tiempo de entrega" name="t_entrega"
                    align="center" value="<?php echo $t_entrega; ?>">
                </div>
              </td>
              <td width="210px">
                <h3 align="center">Condiciones de pago</h3>
                <br><br>
                <div align="center">
                  <input class="caja" type="text"
                    placeholder="Condiciones de pago" name="c_pago"
                    align="center"value="<?php echo $c_pago; ?>">
                </div>
              </td>
            </tr>
          </table>
        </div>
        <br><br>
        <?php if($cancelar==0) { ?>
          <div align="center"><input type="submit" value="Crear" id="botonp">
          </div>
        <?php } else { ?>
          <div align="center"><input type="submit" value="Aceptar" id="botonp">
          </div>
        <?php } ?>
                  </form>
      </div>
    </div>
    <script src="jquery/jquery-1.12.0.js"></script>
    <script>
      $(function() { $("#caja").datepicker({ dateFormat: "y-mm-dd" }).val() });
    </script>
  </body>
</html>
