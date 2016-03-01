<div id="barra">
  <div class="CSSTableGenerator" >
    <table border=2 align="center">
      <tr>
        <td width="10%">No</td>
        <td width="10%">Fecha</td>
        <td width="43%">Cliente</td>
        <td width="25%">Vendedor</td>
        <td width="12%" height="25px" colspan="3">Gestión</td>
      </tr>
      <?php
        if(isset($_POST['buscarCotizacion']))
          $buscarCotizacion=$_POST['buscarCotizacion'];
        $sql="SELECT * FROM Cotizaciones WHERE id_cotizacion='$buscarCotizacion'
          AND id_usuario='$id_usuario' ORDER BY id_cotizacion DESC";
        $res=query($sql, $con);
        while ($cam=mysql_fetch_array($res)) {
          $activo=$cam['activo'];
          foreach ($cam as $camp => $value) { ${$camp}=$value; }
          $sql3="SELECT * FROM Cotizaciones WHERE id_cotizacion=
            '$id_cotizacion'";
          $res3=query($sql3, $con);
          $cam3=mysql_fetch_array($res3);
          $id_usuario=$cam3['id_usuario'];
          $sql0="SELECT * FROM Usuarios WHERE id_usuario='$id_usuario'";
          $res0=query($sql0, $con);
          $cam0=mysql_fetch_array($res0);
          $vendedor=$cam0['nombre'].' '.$cam0['apellido_p'];
          $id_num_cliente=$cam['id_num_cliente'];
          $sql2="SELECT * FROM Clientes WHERE id_num_cliente='$id_cliente'";
          $res2=query($sql2, $con);
          $cam2=mysql_fetch_array($res2);
          $empresa=$cam2['empresa'];
          echo "<tr id='tTextoTabla'>
            <td align='center'>".$cam['id_cotizacion']."</td>
            <td align='center'>".$cam['fecha']."</td>
            <td>".$cam2['empresa']."</td>
            <td>$vendedor</td>
            <td height='35px'>
              <a href='ver_cotizacion.php?id_cotizacion=".$id_cotizacion."'>
                <div class='ver' align='center'>Ver</div>
              </a>
            </td>
            <td height='35px'>
              <a
                href='editar_cotizacion.php?id_cotizacion=".$id_cotizacion.
                  "&empresa=".$empresa."&cotiz_usuario=".$id_usuario."'>
                <div class='editar' align='center'>Editar</div>
              </a>
              <br>
              <a href='reusar.php?id_cotizacion=".$id_cotizacion."'>
                <div class='reusar' align='center'>Reusar</div>
              </a>
            </td>
            <td>";
              if ($activo==1)
                echo "<div class='eliminar' align='center'
                  onclick='Eliminar(".$id_cotizacion.")'>
                  Eliminar
                </div>";
              if ($activo==0)
                echo "<div class='restaurar' align='center'
                  onclick='Restaurar(".$id_cotizacion.")'>
                  Activar
                </div>";
            echo "</td>
          </tr>";
        }
      ?>
    </table>
  </div>
</div>
