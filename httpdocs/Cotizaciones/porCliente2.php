<div id="barra">    
        <div class="CSSTableGenerator" >
          <table border=2 align="center">
            <tr>
                <td width="10%">No</td>                        
                <td width="10%">Fecha</td>
                <td width="43%">Cliente</td>
                <td width="25%">Vendedor</td>
                <td width="12%" height="25px" colspan="3">Gesti&oacute;n</td>
            </tr>



            <?php
            $buscarCliente = $_POST['buscarCliente'];
            
            $sql0="SELECT * FROM Clientes WHERE empresa like '%$buscarCliente%'";
            $resultado0 = query($sql0, $conexion);
            while ($campo0 = mysql_fetch_array($resultado0)) {
              $id_num_cliente = $campo0['id_num_cliente'];
              $empresa = $campo0['empresa'];
              
              $sql1="SELECT * FROM Cotizaciones WHERE id_cliente = '$id_num_cliente' AND id_usuario = '$id_usuario' AND activo = '1' ORDER BY id_cotizacion ASC";
              $resultado1 = query($sql1, $conexion);
              while ($campo1 = mysql_fetch_array($resultado1)) {
                $id_cliente = $campo1['id_cliente'];
                $fecha = $campo1['fecha'];
                $id_cotizacion = $campo1['id_cotizacion'];
                $id_usuario = $campo1['id_usuario'];
                $activo = $campo1['activo'];                
                
                $sql2 = "SELECT * FROM `Usuarios` WHERE id_usuario = '$id_usuario'";
                $resultado2 = query($sql2, $conexion);
                $campo2 = mysql_fetch_array($resultado2);
                $vendedor = $campo2['nombre'] . ' ' . $campo2['apellido_p'];
                
                echo "<tr id='tTextoTabla'>";
                echo "<td align='center'>" . $id_cotizacion. "</td>";
                echo "<td align='center'>" . $fecha . "</td>";

                echo "<td>" . $empresa . "</td>";

                echo "<td>" . $vendedor . "</td>";

                echo "<td height='35px'> "
                . "<a href='ver_cotizacion.php?id_cotizacion=" . $id_cotizacion . "' ><div class='ver' align='center'>Ver</div></a></td><td height='35px'>"
                . "<a href='editar_cotizacion.php?id_cotizacion=" . $id_cotizacion . "&empresa=". $empresa . "&cotiz_usuario=". $id_usuario ."' ><div class='editar' align='center'> Editar</div></a> <br> <a href='reusar.php?id_cotizacion=" . $id_cotizacion . "' ><div class='reusar' align='center'>Reusar</div></a></td><td>";


                if ($activo == 1) {
                    echo "<div class='eliminar' align='center' onclick='Eliminar(" . $id_cotizacion . ")'> Eliminar</div></td>";
                }
                if ($activo == 0) {
                    echo "<div class='restaurar' align='center' onclick='Restaurar(" . $id_cotizacion . ")'> Activar</div></td>";
                }

                echo "</tr>";
              }
            }
            ?>
          </table>
        </div>
    </div>