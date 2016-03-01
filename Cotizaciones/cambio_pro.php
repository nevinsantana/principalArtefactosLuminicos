<html>
  <body>
    <meta http-equiv="Content-Type" content="charset=utf-8">
    <?php
      if(!isset($_SESSION['usuario'])) header('Location: index.php');
      $id_usuario=$_SESSION['usuario']; $con=conectar(); $cont=0;
      $sql="SELECT * FROM Catalogo WHERE activo='1'";
      $res=query($sql, $con);
      while($cam=mysql_fetch_array($res)) { $cont=1; }
      if($cont==1) {
    ?>
    <div id="addproducto">Seleccione el producto que desea cambiar:</div>
    <form action="cambioproducto.php" method="POST">
    <select id=cambioselect name=catalogo>
      <?php
        $sql="SELECT * FROM Catalogo WHERE activo='1' ORDER BY
          id_catalogo";
        $res=query($sql, $con);
        while($cam=mysql_fetch_array($res)) {
          echo '<option>'.$cam["id_catalogo"].'</option>';
        }
      ?>
    </select>
    <input type="submit" value="Modificar" class="formu-button" >
    </form>
    <?php } if($cont==0) { ?>
      <div id="errorimg"><img src="images/error.png"></div>
    <?php } ?>
  </body>
</html>
