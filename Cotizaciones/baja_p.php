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
    <html>
      <body>
        <div id="addproducto">Seleccione el producto que desea eliminar:</div>
        <form action="bajaproducto.php" method="POST">
          <select id=bajaselect name=catalogo>
          <?php
            $sql="SELECT id_catalogo FROM Catalogo WHERE activo=1";
            $resultado=query($sql, $conexion);
            while($campo=mysql_fetch_array($resultado)) {
                echo '<option>'.$campo["id_catalogo"].'</option>';
            }
          ?>
          </select>
          <input type="submit" value="Eliminar" class="formu-button">
        </form>
  <?php } if($cont==0) { ?>
    <div id="errorimg"><img src="images/error.png" margin-left="40px"></div>
  <?php } ?>
    <script>
      function irAlIndice() {
        if(confirm("¿Quieres eliminarlo"))
          document.location.href='bajausuario.php';
      }
    </script>
      </body>
    </html>
