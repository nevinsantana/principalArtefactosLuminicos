<html>
  <body>
    <meta http-equiv="Content-Type" content="charset=utf-8">
    <?php
      if(!isset($_SESSION['usuario'])) header('Location: index.php');
      session_start();
      include("funciones_mysql.php");
      $con=conectar();
      $id_usuario=$_SESSION['usuario'];
      $cont=0;
      $sql="SELECT empresa FROM Clientes";
      $res=query($sql, $con);
      while($cam=mysql_fetch_array($res)) { $cont=1; }
      if($cont==1) {
    ?>
        <div id="addcliente">Seleccione el cliente a modificar:</div>
        <form action="cambiousuario.php" method="POST">
          <select id=cambioselect name=empresa>
            <?php
              $sql="SELECT empresa FROM Clientes ORDER BY empresa";
              $res=query($sql, $con);
              while($cam=mysql_fetch_array($res)) {
                echo '<option>'.$cam["empresa"];
              }
            ?>
          </select>
          <input type="submit" value="MODIFICAR!" class="formu-button">
        </form>
      <?php } if($cont==0) { ?>
        <div id="errorimg"><img src="images/error.png"></div>
      <?php } ?>
  </body>
</html>
