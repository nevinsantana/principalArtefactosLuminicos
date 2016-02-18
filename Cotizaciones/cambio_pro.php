<html>
  <body>
    <meta http-equiv="Content-Type" content="charset=utf-8">
    <?php
      if(!isset($_SESSION['usuario'])) header('Location: index.php');
      $id_usuario=$_SESSION['usuario'];
      $conexion=conectar();
      $cont=0;
      $sql="SELECT id_catalogo FROM Catalogo WHERE activo='1'";
      $resultado=query($sql, $conexion);
      while($campo=mysql_fetch_array($resultado)) { $cont=1; }
      if($cont==1) {
    ?>
    <div id="addproducto">Seleccione el producto que desea cambiar:</div>
    <form action="cambioproducto.php" method="POST">
      <select id=cambioselect name=catalogo>
        <?php
          $sql="SELECT id_catalogo FROM Catalogo WHERE activo='1' ORDER BY
            id_catalogo";
          $resultado=query($sql, $conexion);
          while($campo=mysql_fetch_array($resultado)) {
            echo '<option>'.$campo["id_catalogo"].'</option>';
          }
        ?>
      </select>
      <input type="submit" value="Modificar" class="formu-button" >
    </form>
      <?php } if($cont==0) { ?>
        <div id="errorimg"><img src="images/error.png" margin-left="40px"></div>
      <?php } ?>
  </body>
</html>
