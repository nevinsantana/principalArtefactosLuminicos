<html>
  <body>
    <?php
      if(!isset($_SESSION['usuario'])) header('Location: index.php');
      $idUs=$_SESSION['usuario']; $con=conectar(); $cont=0;
      $sql="SELECT * FROM Clientes WHERE id_usuario='$idUs' AND desactivado=0";
      $res=query($sql, $con);
      while($cam=mysql_fetch_array($res)) { $cont=1; }
      if(isset($_POST['empresa'])) {
        $con=conectar(); $emp=$_POST['empresa'];
        $sql="SELECT * FROM Clientes WHERE empresa='$emp'";
        $res=query($sql, $con);
        $cam=mysql_fetch_array($res);
        $id_cliente=$cam['id_cliente'];
        $id_direccion=$cam['id_direccion'];
        $id_contacto=$cam['id_contacto'];
        $id_usuario=$cam['id_usuario'];
        $id=$cam['id_num_cliente'];
        $sql="SELECT * FROM Direcciones WHERE id_direccion='$id_direccion'";
        $res=query($sql, $con);
        $cam=mysql_fetch_array($res);
        $calle=$cam['calle'];
        $num_int=$cam['num_int'];
        $num_ext=$cam['num_ext'];
        $colonia=$cam['colonia'];
        $municipio=$cam['municipio'];
        $estado=$cam['estado'];
        $cp=$cam['cp'];
        $sql="SELECT * FROM Contacto WHERE id_contacto='$id_contacto'";
        $res=query($sql, $con);
        $cam=mysql_fetch_array($res);
        $nombre=$cam['nombre_c'];
        $departamento=$cam['departamento'];
        $telefono1=$cam['telefono1'];
        $telefono2=$cam['telefono2'];
        $email=$cam['e_mail_c'];
      }
      if($cont=1 && !isset($_POST['empresa'])) {
    ?>
    		<br><br>
        <div id="addcliente">Seleccione el cliente a modificar:</div>
    		<br><br><br>
        <form action="<?php echo $_SERVER['PHP_SELF'].'?sec=cambio'; ?>"
          method="POST">
          <select id=cambioselect name=empresa>
            <?php
              $sql="SELECT * FROM Clientes WHERE id_usuario='$idUs' AND
                desactivado=0 order by empresa ";
              $res=query($sql, $con);
              while($cam=mysql_fetch_array($res)) {
                echo '<option>'.$cam["empresa"].'</option>';
              }
            ?>
          </select>
			    <br><br><br>
          <input type="submit" value="Modificar" class="formu-button">
        </form>
      <?php } if($cont=0) { ?>
        <div id="errorimg"><img src="images/error.png" margin-left="40px"></div>
      <?php } if(isset($_POST['empresa'])) {  ?>
        <br><br><br>
        <form action="php/funciones.php?cambioCliente=<?php echo $id; ?>" method="POST">
          <div id="modificar">
            <div id="titulo">Modifique los apartados de la empresa:</div>
            <table align="center" border=0 cellspacing="5">
              <tr>
                <td>
                  RFC
                  <br>
                  <input type="text" class="formu" name="rfc" value=
                    "<?php echo $id_cliente; ?>" autofocus>
                </td>
                <td>
                  Razon social
                  <br>
                  <input type="text" class="formu" name="empresa" value=
                    "<?php echo $emp; ?>" autofocus>
                </td>
              </tr>
              <tr>
                <td>
                  Calle
                  <br>
                  <input type="text" class="formu" name="calle" value=
                    "<?php echo $calle; ?>" autofocus>
                </td>
                <td>
                  Numero Interior
                  <br>
                  <input type="text" class="formu" name="num_int" value=
                    "<?php echo $num_int; ?>" autofocus>
                </td>
              </tr>
              <tr>
                <td>
                  Numero Exterior
                  <br>
                  <input type="text" class="formu" name="num_ext" value=
                    "<?php echo $num_ext; ?>" autofocus>
                </td>
                <td>
                  Colonia
                  <br>
                  <input type="text" class="formu" name="colonia" value=
                    "<?php echo $colonia; ?>" autofocus>
                </td>
              </tr>
              <tr>
                <td>
                  Municipio
                  <br>
                  <input type="text" class="formu" name="municipio" value=
                    "<?php echo $municipio; ?>" autofocus>
                </td>
                <td>
                  Estado
                  <br>
                  <input type="text" class="formu" name="estado" value=
                    "<?php echo $estado; ?>" autofocus>
                </td>
              </tr>
              <tr>
                <td>
                  Código Postal
                  <br>
                  <input type="text" class="formu" name="cp" value=
                    "<?php echo $cp; ?>" autofocus>
                </td>
                <td>
                  Nombre del Contacto
                  <br>
                  <input type="text" class="formu" name="contacto" value=
                  "<?php echo $nombre; ?>" autofocus>
                </td>
              </tr>
              <tr>
                <td>
                  Departamento
                  <br>
                  <input type="text" class="formu" name="departamento"
                    value="<?php echo $departamento; ?>" autofocus>
                </td>
                <td>
                  Telefono Directo
                  <br>
                  <input type="text" class="formu" name="telefono1"
                    value="<?php echo$telefono1; ?>" autofocus>
                </td>
              </tr>
              <tr>
                <td>
                  Telefono Alternativo
                  <br>
                  <input type="text" class="formu" name="telefono2"
                    value="<?php echo$telefono2; ?>" autofocus>
                </td>
                <td>
                  E-mail
                  <br>
                  <input type="text" class="formu" name="email"
                    value="<?php echo $email; ?>" autofocus>
                </td>
              </tr>
            </table>
          </div>
          <div id=centrarcambio>
            <input type="submit" value="MODIFICAR!" class="formu-button2">
            <a href="index.php" class="formu-button2">CANCELAR</a>
          </div>
        </form>
      <?php } ?>
  </body>
</html>
