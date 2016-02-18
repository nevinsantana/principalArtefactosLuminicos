<?php
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  $idUs=$_SESSION['usuario'];
  $con=conectar();
  $cont=0;
  $sql="SELECT * FROM Clientes WHERE id_usuario='$idUs' AND
    desactivado='0'";
  $res=query($sql, $con);
  while($cam=mysql_fetch_array($res)) { $cont=1; }
  if($cont=1 && !isset($_POST['empresa'])) {
?>
<html>
  <body>
		<br><br>
    <div id="addcliente">Seleccione el cliente que desea eliminar:</div>
		<br><br><br>
    <form action="<?php echo $_SERVER['PHP_SELF'].'?sec=baja'; ?>"
      method="POST">
      <select id=bajaselect name=empresa>
        <?php
          $sql="SELECT * FROM Clientes WHERE id_usuario='$idUs' AND
            desactivado='0' order by empresa";
          $res=query($sql, $con);
          while($cam=mysql_fetch_array($res)) {
            echo '<option style="width:520px;">'.$cam["empresa"]."</option>";
          }
        ?>
      </select>
      <br><br><br>
      <input type="submit" value="Eliminar" class="formu-button">
    </form>
  <?php } if($cont=0) { ?>
    <div id="errorimg"><img src="images/error.png" margin-left="40px"></div>
  <?php } if(isset($_POST['empresa'])) { $emp=$_POST['empresa']; ?>
    <div id="modificar">
      <div id="titulo">
        Realmente desea borrar el cliente
        <br>
        <div id=empresadel>
          <?php echo $emp; ?>
        </div>
      </div>
      <div id=centrarbaja>
        <a href="php/funciones.php?borrarEmpresa=<?php echo $emp; ?>">
          <button class="formu-button2">
            <div id="cambioboton">Aceptar</div>
          </button>
        </a>
        <a href="index.php">
          <button class="formu-button2">
            <div id="cambioboton">Cancelar</div>
          </button>
        </a>
      </div>
  <?php } ?>
    </div>
    <script>
      function irAlIndice() {
        if(confirm("¿Quieres Eliminarlo")) {
          document.location.href='bajausuario.php';
      }
    }
    </script>
  </body>
</html>
