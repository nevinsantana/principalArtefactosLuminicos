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
            $buscarVend = $_POST['buscarVend'];
//Obtener Datos de la empresa a cambiar "tabla clientes"
            $sql = "SELECT * FROM `Cotizaciones` WHERE id_usuario = '$buscarVend' ORDER BY id_cotizacion DESC";
            $resultado = query($sql, $conexion);
            while ($campo = mysql_fetch_array($resultado)) {
                $activo = $campo['activo'];
                $id_cotizacion = $campo['id_cotizacion'];
                $id_cliente = $campo['id_cliente'];

                echo "<tr id='tTextoTabla'>";


                echo "<td align='center'>" . $campo['id_cotizacion'] . "</td>";

                $sql3 = "SELECT id_usuario FROM `Cotizaciones` WHERE id_cotizacion = '$id_cotizacion'";
                $resultado3 = query($sql3, $conexion);
                $campo3 = mysql_fetch_array($resultado3);
                $id_usuario = $campo3['id_usuario'];


                $sql0 = "SELECT nombre, apellido_p FROM `Usuarios` WHERE id_usuario = '$id_usuario'";
                $resultado0 = query($sql0, $conexion);
                $campo0 = mysql_fetch_array($resultado0);
                $vendedor = $campo0['nombre'] . ' ' . $campo0['apellido_p'];


                echo "<td align='center'>" . $campo['fecha'] . "</td>";



                $id_num_cliente = $campo['id_cliente'];

                $sql2 = "SELECT * FROM `Clientes` WHERE id_num_cliente = '$id_cliente'";
                $resultado2 = query($sql2, $conexion);
                $campo2 = mysql_fetch_array($resultado2);
                $empresa = $campo2['empresa'];


                echo "<td>" . $campo2['empresa'] . "</td>";

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
            ?>
          </table>
        </div>
    </div>
