<?php if(!isset($_SESSION['usuario'])) header('Location: index.php'); ?>
<html>
  <body>
    <br><br>
    <div id="adouser">
      <div style="margin-left: 95px;">Seleccione el usuario a modificar:</div>
    </div>
    <form action="cambiousuarion.php" method="POST">
    <select id=cambioselect name=nombre>
      <?php
        $id_usuario=$_SESSION['usuario'];
        $con=conectar();
        $sql="SELECT * FROM Usuarios WHERE activo='1'";
        $res=query($sql, $con);
        while($cam=mysql_fetch_array($res)) {
          echo '<option value="'.$cam["nombre"].'"'.'>'.$cam["nombre"].' '.
            $cam["apellido_p"];
        }
      ?>
    </select>
      <input type="submit" value="Modificar" class="formu-button">
    </form>
  </body>
</html>
