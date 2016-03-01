<?php
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  $id_usuario=$_SESSION['usuario'];
  $con=conectar(); $cont=0;
  $sql="SELECT * FROM Catalogo WHERE activo='1'";
  $res=query($sql, $con);
  while($cam=mysql_fetch_array($res)) { $cont=1; }
  if($cont==1) {
?>
<html>
  <body>
    <div id="addproducto">Seleccione el producto que desea eliminar:</div>
    <form action="bajaproducto.php" method="POST">
      <select id=bajaselect name=catalogo>
        <?php
          $sql="SELECT id_catalogo FROM Catalogo WHERE activo=1";
          $res=query($sql, $con);
          while($cam=mysql_fetch_array($res)) {
            echo '<option>'.$cam["id_catalogo"].'</option>';
          }
        ?>
      </select>
      <input type="submit" value="Eliminar" class="formu-button" >
    </form>
    <?php } if($cont==0) { ?>
      <div id="errorimg"><img src="images/error.png"></div>
    <?php } ?>
    <script>
      function irAlIndice() {
        if(confirm("¿Quieres eliminarlo"))
          document.location.href='bajausuario.php';
      }
    </script>
  </body>
</html>
