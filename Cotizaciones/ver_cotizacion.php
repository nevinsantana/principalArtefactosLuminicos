<?php
  session_start();
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  $id_usuario=$_SESSION['usuario'];
  include("funciones_mysql.php");
  $con=conectar();
  $id_cotizacion=$_GET['id_cotizacion'];
  $sql="SELECT * FROM Cotizaciones WHERE id_cotizacion='$id_cotizacion'";
  $res=query($sql, $con);
  $cam=mysql_fetch_assoc($res);
  foreach ($cam as $camp => $value) { ${$camp}=$value; }
  $descuento2=$descuento * 100;
  $sub=$subtotal;
  $subtotal1=$subtotal * $descuento;
  $subtotal2=$subtotal - $subtotal1;
  $sql="SELECT * FROM Clientes WHERE id_num_cliente='$id_cliente'";
  $res=query($sql, $con);
  $cam=mysql_fetch_assoc($res);
  foreach ($cam as $camp => $value) { ${$camp}=$value; }
  $sql="SELECT * FROM Datos_Cotizacion WHERE id_cotizacion='$id_cotizacion'";
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
?>
<html>
  <body id="bodier" class="h7" style="color:black;">
    <div align="center">
      <div id="hoja">
        <br><br><br>
        <div id="imprimeme">
          <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <link href="style.css" rel="stylesheet" type="text/css">
            <link href="hoja_blanca.css" rel="stylesheet" type="text/css">
            <title>Generador de cotizaciones</title>
          </head>
          <div id="page">
            <div align="center">
              <table border=0 cellspacing="2px" width="90%">
                <tr>
                  <td height="33.3%" width="33.3%" id="bordet">
                    <div align="center">
                      <img src="images/logo112x82.png" width="112">
                    </div>
                  </td>
                  <td height="33.3%" width="33.3%" id="bordet">
                    <div align="center">
                      <table>
                        <tr>
                          <td width="50%" align=right class="h7v">
                            No Cotización:
                          </td>
                          <td align=center width="50px" class="h7v">
                            <?php echo $id_cotizacion; ?>
                          </td>
                        </tr>
                        <tr>
                          <td width="50%" align=right class="h7v">Fecha:</td>
                          <td align=center width="50px" class="h7v">
                            <?php echo $fecha; ?>
                          </td>
                        </tr>
                        <tr>
                          <td width="50%" align=right class="h7v">Vigencia:</td>
                          <td align=center width="50px" class="h7v">
                            <?php echo $vigencia; ?>
                          </td>
                        </tr>
                        <tr>
                          <td width="50%" align=right class="h7v">Partidas:</td>
                          <td align=center width="50px" class="h7v">
                            <?php echo $no_partidas; ?>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td id="bordet" valign="top" class="h7">
                    <div align="center">
                      <br><br>
                      <h3>Artefactos Lumínicos S.A.de C.V.</h3>
                      <span class="fCDatos">
                        Av.Juárez No.9-2, Col.San Mateo Ixtacalco,
                        <br>
                        Cuautitlán Izcalli, Estado de México, C.P.54713
                        <br>
                        ventas@artefactosluminicos.com.mx
                        <br>
                        www.artefactosluminicos.com.mx
                      </span>
                    </div>
                  </td>
                  <td id="bordet"  align="left" class="h7">
                    <br>
                    <h3><div class="h7">Condiciones de venta</div></h3>
                    <span class="fCDatos">
                      *Precios sujetos a cambio sin previo aviso.
                      <br>
                      *Cta 4157180243 CLABE 002180024341571804 de Banamex(mx)
                      <br>
                      *Cta 0451244973 CLABE 012180004512449733 de Bancomer(mx)
                      <br>
                      *Cta 0451244973 CLABE 012180004512449814 de Bancomer(us)
                      <br>
                      *Toda devolución autorizada causará un cargo del 35%.
                      <br>
                      *No se aceptan cancelaciones.
                      <br>
                      *La empresa se reserva el derecho de hacer cargos por
                      almacenaje 72 hrs.posteriores al aviso de mercancia
                      preparada.
                      <br>
                      *Cualquier modificación de este documento lo invalidará.
                    </span>
                  </td>
                </tr>
              </table>
              <br>
              <table border="0" cellspacing="2px" width="90%">
                <tr>
                  <td id="bordet" valign="top" class="h7">
                    <div align="center" class="h7">
                      <div  class="h7">Datos del cliente</div>
                      <div id="datos_coti"><?php echo $datos_cliente; ?></div>
                    </div>
                    <br>
                  </td>
                  <td id="bordet" valign="top" class="h7">
                    <div align="center">
                      <div class="h7">Datos de contacto</div>
                      <div id="datos_coti"><?php echo $datos_contacto; ?></div>
                    </div>
                    <br>
                  </td>
                  <td id="bordet"  valign="top" class="h7">
                    <div align="center">
                      <div class="h7" >Datos del vendedor</div>
                      <div id="datos_coti"><?php echo $datos_vendedor; ?></div>
                    </div>
                    <br>
                  </td>
                </tr>
              </table>
            </div>
            <div class="h7" style="font-size: 13px" align="center">
              PONEMOS A SU AMABLE CONSIDERACIÓN EL SIGUIENTE PRESUPUESTO
            </div>
            <br>
            <div align="center">
              <table border="1px solid black" width="950px" cellspacing="0"
                class="h7 correccion tablaVC">
                <thead>
                  <tr>
                    <th width="5%">Part</th>
                    <th width="5%">Cant</th>
                    <th width="5%">UND</th>
                    <th width="15%">Catálogo</th>
                    <th width="60%">Descripción</th>
                    <th width="5%">P. unitario</th>
                    <th width="5%">P. total</th>
                  </tr>
                </thead>
                <?php
                  $sql="SELECT * FROM Partidas WHERE id_cotizacion=
                    '$id_cotizacion' ORDER BY no_partida";
                  $res=query($sql, $con);
                  while($cam=mysql_fetch_assoc($res)) {
                    $precio_uni=$cam['precio_uni'];
                    $precio_total=$cam['precio_total'];
                    $precio_uni=number_format($precio_uni, 2);
                    $precio_total=number_format($precio_total, 2);
                    echo "<tr>
                      <td align='center'>"
                        .$cam['partida'].
                      "</td>";
                      if($cam['cantidad']==0)
                        echo "<td align='center'></td>";
                      else
                        echo "<td align='center'>"
                          .$cam['cantidad'].
                        "</td>";
                      echo
                      "<td align='center'>".$cam['unidad']."</td>
                      <td align='center'>".$cam['catalogo']."</td>
                      <td align='justify'>"
                        .$cam['descripcion'].
                      "</td>";
                      if($cam['precio_uni']==0)
                        echo "<td id='aligder'></td><td id='aligder'></td>";
                      else
                        echo
                        "<td id='aligder'>".$precio_uni."</td>
                        <td id='aligder'>".$precio_total."</td>";
                    "</tr>";
                  }
                ?>
                <tr>
                  <td style="border: 0;" colspan="5" ><br>
                    <table border="2px" width="95%" id="margen" class="h7">
                      <thead>
                        <tr>
                          <th width="20%" align="center" colspan="2"
                            id="sin_borde">
                            Notas
                            <br>
                          </th>
                        </tr>
                        <tr>
                          <th width="20%" align="center">No de nota</th>
                          <th class="descripcionEncabezado" align="center">
                            Descripción
                          </th>
                        </tr>
                      </thead>
                      <?php
                        $sql="SELECT * FROM Notas WHERE id_cotizacion=
                          '$id_cotizacion'";
                        $res=query($sql, $con);
                        $i=1;
                        while($cam=mysql_fetch_assoc($res)) {
                          echo "<tr>
                            <td align='center' id='texto1' class='lenotas'
                              style='text-align: center; color: black;'>
                              $i
                            </td>
                            <td align='center' id='texto1' class='lenotas'
                              style='text-align: center; color: black;'>"
                              .$cam['descripcion'].
                            "</td>
                          </tr>";
                          $i++;
                        }
                      ?>
                    </table>
                    <br>
                  </td>
                  <td>
                    <br>
                    <input id="noborde" name="subtotal"
                      style='text-align: right; color: black;' type="text"
                      value="DIVISA" disabled>
                    <br>
                    <hr width=100% align="left">
                    <br>
                    <input id="noborde" name="subtotal"
                      style='text-align: right; color: black;' type="text"
                      value="SUBTOTAL" disabled>
                    <br>
                    <hr width=100% align="left">
                    <br>
                    <?php if($descuento > 0) { ?>
                      <input id="noborde" name="subtotal"
                        style='text-align: right; color: black;' type="text"
                        value="DESCUENTO" disabled>
                      <br>
                      <hr width=100% align="left">
                      <br>
                      <input id="noborde" name="subtotal"
                        style='text-align: right; color: black;' type="text"
                        value="SUBTOTAL CON DESC" disabled>
                      <br>
                      <hr width=100% align="left">
                      <br>
                    <?php } ?>
                    <input id="noborde" name="subtotal"
                      style='text-align: right; color: black;' type="text"
                      value="I.V.A." disabled>
                    <br>
                    <hr width=100% align="left">
                    <br>
                    <input id="noborde" name="subtotal"
                      style='text-align: right; color: black;' type="text"
                      value="TOTAL" disabled>
                  </td>
                  <td>
                    <br>
                    <?php
                      $iva=number_format($iva, 2);
                      $total=number_format($total, 2);
                      $sub=number_format($sub, 2);
                      $subtotal2=number_format($subtotal2, 2);
                    ?>
                    <input id="noborde" name="subtotal"
                      style="text-align: right; color: black;" type="text"
                      value="<?php if($divisa=='Dolar') echo 'DOLAR';
                      else echo 'M.N.'; ?>" disabled>
                    <br>
                    <hr width=100% align="left">
                    <br>
                    <input id="noborde" style="text-align: right; color: black;"
                      name="subtotal" type="text" value="<?php echo $sub; ?>"
                      disabled>
                    <br>
                    <hr width=100% align="left">
                    <br>
                    <?php if($descuento > 0) { ?>
                      <input id="noborde" style="text-align: right; color:
                        black;" name="subtotal" type="text"
                        value="<?php echo "$descuento2 %"; ?>" disabled>
                      <br>
                      <hr width=100% align="left">
                      <br>
                      <input id="noborde" style="text-align: right; color:
                        black;" name="subtotal" type="text"
                        value="<?php echo $subtotal2; ?>" disabled>
                      <br>
                      <hr width=100% align="left">
                      <br>
                    <?php } ?>
                    <input id="noborde" style="text-align: right; color: black;"
                      name="iva" type="text" value="<?php echo $iva; ?>"
                      disabled>
                    <br>
                    <hr width=100% align="left">
                    <br>
                    <input id="noborde" style="text-align: right; color: black;"
                      name="total" type="text" value="<?php echo $total; ?>"
                      disabled>
                  </td>
                </tr>
              </table>
            </div>
            <br><br><br>
            <table border=1 cellspacing="2px" width="950px">
              <tr>
                <td>
                  <h5 class="h7 h7v">
                    Condiciones de entrega
                    <br>
                    *El tiempo de entrega corre a partir de recibir su pedido
                    original firmado
                    <br>
                    haciendo referencia a este número de cotización y de
                    confirmar el anticipo
                    <br>
                    correspondiente en nuestra cuenta.
                    <br>
                    *Para embalajes especiales considerar cargos extras.
                    <br>
                    *Los fletes foraneos corren por cuenta y riesgo del cliente.
                    <br>
                    *En pedidos mínimo de $12,500.00 L.A.B.D.F.y zona
                    metropolitana, excepto postes.
                    <br>
                    *No se liberan materiales sin el pago total de la mercancia.
                  </h5>
                </td>
                <td width="210px" class="h7v">
                  <h3 align="center">Tiempo de entrega</h3>
                  <br><br>
                  <div align="center" valign="top">
                    <?php echo $t_entrega; ?>
                  </div>
                </td>
                <td width="210px" class="h7v">
                  <h3 align="center">Condiciones de pago</h3>
                  <br><br>
                  <div align="center" valign="top"><?php echo $c_pago; ?></div>
                </td>
              </tr>
            </table>
          </div><br><br>
        </div>
      </div>
      <div align="center">
        <a href="index.php">
          <input type="button" value="Regresar" class="formu-button6">
        </a>
        <button onclick="imprimir();" class="formu-button6">Imprimir</button>
      </div>
			<?php
			  echo "<br>
        <a href='orden_venta.php?id_cotizacion=".$id_cotizacion."'
          class='botoncirri'>
          Generar orden de venta
        </a>
        <br><br>";
			?>
    </div>
    <script>
      function imprimir() {
        var objeto=document.getElementById('imprimeme');
        //obtenemos el objeto a imprimir
        var ventana=window.open('', '_blank');
        //abrimos una ventana vacía nueva
        ventana.document.write(objeto.innerHTML);
        //imprimimos el HTML del objeto en la nueva ventana
        ventana.document.close();
        //cerramos el documento
        ventana.print();
        //imprimimos la ventana
        ventana.close();
        //cerramos la ventana
      }
    </script>
  </body>
</html>
