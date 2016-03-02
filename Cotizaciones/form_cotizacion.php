<?php
  session_start();
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  if(!isset($_SESSION['cotizacion']))
    header('Location: ventas.php?sec=cotizar');
  $id_usuario=$_SESSION['usuario'];
  $empresa=$_SESSION['empresa'];
  $id_cotizacion=$_SESSION['cotizacion'];
  include("funciones_mysql.php");
  $con=conectar();
  $fecha=date('d-m-y');
  if(isset($_SESSION['cancelar'])) $cancelar=$_SESSION['cancelar'];
  else $cancelar=0;
  $sql="SELECT * FROM Partidas ORDER BY id_partida DESC LIMIT 1";
  $res=query($sql, $con);
  while($cam=mysql_fetch_row($res)) { $id_partida=$cam[0] + 1; }
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
  $sql="SELECT * FROM Clientes WHERE empresa='$empresa'";
  $res=query($sql, $con);
  $cam=mysql_fetch_assoc($res); $id_contacto=$cam['id_contacto'];
  $sql="SELECT * FROM Contacto WHERE id_contacto=$id_contacto";
  $res=query($sql, $con);
  $cam=mysql_fetch_assoc($res);
  foreach ($cam as $camp => $value) { ${$camp}=$value; }
  $no_partidas=0;
  $sql="SELECT * FROM Partidas WHERE id_cotizacion='$id_cotizacion'";
  $res=query($sql, $con);
  while($cam=mysql_fetch_array($res)) { $no_partidas=$no_partidas + 1; }
  $_SESSION['no_partidas']=$no_partidas;
  $sql="SELECT * FROM Cotizaciones WHERE id_cotizacion='$id_cotizacion'";
  $res=query($sql, $con);
  $cam=mysql_fetch_assoc($res); $descuento=$cam['descuento'];
  $descuento2=$descuento * 100;
?>
<!doctype html>
<html>
  <head>
    <meta http-equiv="Content-Type" charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="hoja_blanca.css" rel="stylesheet" type="text/css">
    <title>Formulario de cotización</title>
  </head>
  <body class="h7">
    <div align="center">
      <div id="hoja">
        <br><br><br>
        <div id="page">
          <div align="center">
            <table border=0 cellspacing="2px" width="90%">
              <tr>
                <td height="33.3%" width="33.3%" id="bordet">
                  <div align="center">
                    <img align="center" src="images/logo112x82.png" width="112">
                      <br>
                      Artefactos Lumínicos S.A. de C.V.
                  </div>
                </td>
                <form method="POST" action="partidas3.php">
                <td height="33.3%" width="33.3%" id="bordet">
                  <div align="center">
                    <table>
                      <tr>
                        <td width="50%" align=right>Número de cotización:</td>
                        <td align=center width="50px">
                          <input class="caja" type="text" name="id_cotizacion"
                            disabled value="<?php echo $id_cotizacion; ?>">
                        </td>
                      </tr>
                      <tr>
                        <td width="50%" align=right>Fecha:</td>
                        <td align=center width="50px">
                          <input class="caja" type="text" name="fecha"
                            disabled value="<?php echo $fecha; ?>">
                        </td>
                      </tr>
                      <tr>
                        <td width="50%" align=right>Vigencia en días:</td>
                        <td align=center width="50px">
                          <input class="caja" type="text"
                            placeholder="Vigencia en días" name="vigencia">
                        </td>
                      </tr>
                      <tr>
                        <td width="50%" align=right>Partidas:</td>
                        <td align=center width="50px">
                          <input class="caja" type="text" name="no_partidas1"
                            disabled value="<?php echo $no_partidas; ?>">
                        </td>
                      </tr>
                    </table>
                  </div>
                </td>
              </tr>
              <tr>
                <td id="bordet">
                  <div align="center">
                    <br>
                    <h3>Artefactos Lumínicos S.A. de C.V. </h3>
                    <span class="fCDatos">
                    Av. Juárez No. 9-2, Col. San Mateo Ixtacalco,
                    <br>
                    Cuautitlán Izcalli, Estado de México, C.P. 54713
                    <br>
                    ventas@artefactosluminicos.com.mx
                    <br>
                    www.artefactosluminicos.com.mx<span>
                  </div>
                </td>
                <td id="bordet"  align="left">
                  <br>
                  <h3>Condiciones de venta</h3>
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
                  </span>
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
                        echo "$empresa "."$calle "."$num_int,".
                      " $num_ext, "."$colonia, "."C.P. $cp".",$municipio ".
                      "$estado"; ?></textarea>
                  </div>
                  <br>
                </td>
                <td id="bordet">
                  <div align="center">
                    <div class="h7">Datos de contacto</div>
                    <textarea class="cajaa" align="Center"
                      name="datos_contacto" rows="3" cols="28"><?php
                        echo "$nombre_c\n"."Departamento de
                        $departamento\n"."Tels: $telefono1, "."$telefono2\n".
                        "$e_mail_c"; ?></textarea>
                  </div>
                  <br>
                </td>
                <td id="bordet">
                  <div align="center">
                    <div class="h7">Datos del vendedor</div>
                    <textarea class="cajaa" align="Center"
                      name="datos_vendedor" rows="3" cols="28"><?php
                        echo "$nombre $e_mail "; ?></textarea>
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
              class="correccion">
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
                $sql="SELECT * FROM Partidas WHERE id_cotizacion=
                  '$id_cotizacion' ORDER BY no_partida";
                $res=query($sql, $con);
                while($cam=mysql_fetch_array($res)) {
                  $precio_uni=$cam['precio_uni'];
                  $precio_total=$cam['precio_total'];
                  $precio_uni=number_format($precio_uni, 2);
                  $precio_total=number_format($precio_total, 2);
                  echo "<tr>".
                    "<td align='center' id='texto1'>"
                      .$cam['partida'].
                    "</td>";
                    if($cam['cantidad']==0)
                      echo "<td align='center' id='texto1'></td>";
                    else
                      echo "<td align='center' id='texto1'>"
                        .$cam['cantidad'].
                      "</td>";
                    echo
                    "<td align='center' id='texto1'>".$cam['unidad']."</td>
                    <td align='center' id='texto1'>".$cam['catalogo']."</td>
                    <td align='justify' id='texto1'>"
                      .$cam['descripcion'].
                    "</td>";
                    if($cam['precio_uni']==0)
                      echo "<td id='aligder'></td><td id='aligder'></td>";
                    else
                      echo
                      "<td id='aligder'>".$precio_uni."</td>
                      <td id='aligder'>".$precio_total."</td>";
                  "</tr>";
                  $subtotal=$subtotal + $cam['precio_total'];
                  $nom_partida=$nom_partida + 1;
                }
                $subtotal1=$subtotal * $descuento;
                $subtotal2=$subtotal - $subtotal1;
                $iva=$subtotal2 * 0.16;
                $total=$subtotal2 + $iva;
                $_SESSION['subtotal']=$subtotal2;
                $_SESSION['total']=$total;
                $_SESSION['iva']=$iva;
                $iva=number_format($iva, 2);
                $total=number_format($total, 2);
                $subtotal=number_format($subtotal, 2);
                $subtotal2=number_format($subtotal2, 2);
              ?>
              <tr>
                <td style="border: hidden" colspan="5">
                  <table border="3px" width="500px" id="margen">
                    <thead>
                      <tr>
                        <th width="20%" align="center" colspan="2"
                          id="sin_borde">
                          Notas
                        </th>
                      </tr>
                      <tr>
                        <th width="20%" align="center">No de nota</th>
                        <th width="80%" align="center">Descripción</th>
                      </tr>
                    </thead>
                    <?php
                      $sql="SELECT * FROM Notas WHERE id_cotizacion=
                        '$id_cotizacion'";
                      $res=query($sql, $con);
                      $i=1;
                      while($cam=mysql_fetch_array($res)) {
                        echo "<tr>
                          <td align='center' class='lenotas'
                            style='color:black;'>"
                            .$i.
                          "</td>
                          <td align='justify' class='lenotas'
                            style='color:black; font-size:11px;'>"
                            .$cam['descripcion'].
                          "</td>
                        </tr>";
                        $i++;
                      }
                    ?>
                  </table>
          </div>
                </td>
                <td>
                  <br>
                  <div class="h7" style="font-size: 15px; height: 16.66%;">
                    <?php echo 'Divisa'; ?>
                  </div>
                  <HR width=100% align="left">
                  <div class="h7" style="font-size: 15px; height: 16.66%;">
                    <?php echo 'Subtotal'; ?>
                  </div>
                  <HR width=100% align="left">
                  <?php if($descuento> 0) { ?>
                    <div class="h7" style="font-size: 15px; height: 16.66%;">
                      <?php echo 'Descuento'; ?>
                    </div>
                    <HR width=100% align="left">
                    <div class="h7" style="font-size: 15px; height: 16.66%;">
                      <?php echo 'C/desc.'; ?>
                    </div>
                    <HR width=100% align="left">
                  <?php } ?>
                  <div class="h7" style="font-size: 15px; height: 16.66%;">
                    <?php echo 'I.V.A.'; ?>
                  </div>
                  <HR width=100% align="left">
                  <div class="h7" style="font-size: 15px; height: 16.66%;">
                    <?php echo 'Total'; ?>
                  </div>
                </td>
                <td>
                  <br>
                  <div align="right">
                    <select id="select1" name="divisa">
                      <option  value="M.N." name="mn">M.N</option>
                      <option value="Dolar" name="dolar">Dolares</option>
                    </select>
                    <HR width=100% align="right">
                    <div class="h7" style="font-size: 15px;">
                      <?php echo $subtotal; ?>
                    </div>
                    <HR width=100% align="left">
                    <?php if($descuento> 0) { ?>
                      <div class="h7" style="font-size: 15px;">
                        <?php echo "$descuento2 %"; ?>
                      </div>
                      <HR width=100% align="left">
                      <div class="h7" style="font-size: 15px;">
                        <?php echo $subtotal2; ?>
                      </div>
                      <HR width=100% align="left">
                    <?php } ?>
                    <div class="h7" style="font-size: 15px;">
                      <?php echo $iva; ?>
                    </div>
                    <HR width=100% align="right">
                    <div class="h7" style="font-size: 15px;">
                      <?php echo $total; ?>
                    </div>
                  </div>
                </td>
              </tr>
          </table>
        </div>
        <br><br><br>
        <table border=1 cellspacing="2px">
          <tr>
            <td>
              <span class="fCDatos">
              Condiciones de entrega
              <br>
              *El tiempo de entrega corre a partir de recibir su pedido original
              firmado
              <br>
              haciendo referencia a este número de cotización y de confirmar el
              anticipo
              <br>
              correspondiente en nuestra cuenta.
              <br>
              *Para embalajes especiales considerar cargos extras.
              <br>
              *Los fletes foraneos corren por cuenta y riesgo del cliente.
              <br>
              *En pedidos mínimo de $12,500.00 L.A.B. D.F. y zona metropolitana,
              excepto postes.
              <br>
              *No se liberan materiales sin el pago total de la mercancia.
            </span>
            </td>
            <td width="210px">
              <h3 align="center">Tiempo de entrega</h3>
              <br><br>
              <div align="center">
                <input class="caja" type="text"
                  placeholder="Tiempo de entrega" name="t_entrega"
                  align="center">
              </div>
            </td>
            <td width="210px">
              <h3 align="center">Condiciones de pago</h3>
              <br><br>
              <div align="center">
                <input class="caja" type="text"
                  placeholder="Condiciones de pago" name="c_pago"
                  align="center">
              </div>
            </td>
          </tr>
        </table>
      </div>
      <br><br>
      <?php if($cancelar==0) { ?>
        <div align="center">
          <input type="submit" value="Crear" id="botonp">
        </div>
      <?php } else { ?>
        <div align="center">
          <input type="submit" value="Aceptar" id="botonp">
        </div>
      <?php } ?>
                  </form>
    </div>
  </body>
</html>
