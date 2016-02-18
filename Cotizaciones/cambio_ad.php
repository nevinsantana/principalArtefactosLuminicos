<html>
  <body>
    <meta http-equiv="Content-Type" content="charset=utf-8">
    <?php
      if(!isset($_SESSION['usuario'])) header('Location: index.php');
      session_start();
      include("funciones_mysql.php");
      $conexion=conectar();
      $id_usuario=$_SESSION['usuario'];
      $cont=0;
      $sql="SELECT empresa FROM Clientes";
      $resultado=query($sql, $conexion);
      while($campo=mysql_fetch_array($resultado)) { $cont=1; }
      if($cont==1) {
    ?>
        <div id="addcliente">Seleccione el cliente a modificar:</div>
        <form action="cambiousuario.php" method="POST">
          <select id=cambioselect name=empresa>
            <?php
              $sql="SELECT empresa FROM Clientes ORDER BY empresa";
              $resultado=query($sql, $conexion);
              while($campo=mysql_fetch_array($resultado)) {
                echo '<option>'.$campo["empresa"];
              }
            ?>
          </select>
          <input type="submit" value="MODIFICAR!" class="formu-button">
        </form>
      <?php } if($cont==0) { ?>
        <div id="errorimg"><img src="images/error.png" margin-left="40px"></div>
      <?php } ?>
  </body>
</html>
