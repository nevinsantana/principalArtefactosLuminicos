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
        $buscarCliente=$_POST['buscarCliente'];
        $sql0="SELECT * FROM Clientes WHERE empresa like '%$buscarCliente%'";
        $res0=query($sql0, $con);
        while($cam0=mysql_fetch_array($res0)) {
          $id_num_cliente=$cam0['id_num_cliente'];
          $empresa=$cam0['empresa'];
          $sql1="SELECT * FROM Cotizaciones WHERE id_cliente='$id_num_cliente'
            ORDER BY id_cotizacion ASC";
          $res1=query($sql1, $con);
          while($cam1=mysql_fetch_array($res1)) {
            $id_cliente=$cam1['id_cliente'];
            foreach ($cam1 as $camp => $value) { ${$camp}=$value; }
            $sql2="SELECT * FROM Usuarios WHERE id_usuario='$id_usuario'";
            $res2=query($sql2, $con);
            $cam2=mysql_fetch_array($res2);
            $vendedor=$cam2['nombre'].' '.$cam2['apellido_p'];
            echo "<tr id='tTextoTabla'>
              <td align='center'>".$id_cotizacion."</td>
              <td align='center'>".$fecha."</td>
              <td>".$empresa."</td>
              <td>".$vendedor."</td>
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
              if($activo== 1)
                echo "<div class='eliminar' align='center'
                  onclick='Eliminar(".$id_cotizacion.")'>
                  Eliminar
                </div>";
              if($activo== 0)
                echo "<div class='restaurar' align='center'
                  onclick='Restaurar(".$id_cotizacion.")'>
                  Activar
                </div>";
              }
            echo "</tr>";
          }
      ?>
    </table>
  </div>
</div>
