<?php
  session_start();
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  include("funciones_mysql.php");
  $con=conectar(); $id_usuario=$_SESSION['usuario']; $cont=0;
  $sql="SELECT FROM Clientes ";
  $res=query($sql, $con);
  while($cam=mysql_fetch_array($res)) { $cont=1; }
  if($cont==1) {
?>
<html>
  <body>
  <div id="addcliente">Seleccione el cliente que desea eliminar:</div>
  <form action="bajausuario.php" method="POST">
  <select id=bajaselect name=empresa>
    <?php
      $sql="SELECT * FROM Clientes ORDER BY empresa";
      $res=query($sql, $con);
      while($cam=mysql_fetch_array($res)) {
        echo '<option>'.$cam["empresa"].'</option>';
      }
      echo "<option>$id_usuario</option>"
    ?>
  </select>
  <input type="submit" value="Eliminar" class="formu-button">
  </form>
<?php } if($cont==0) { ?>
  <div id="errorimg"><img src="images/error.png"></div>
<?php } ?>
<script>
  function irAlIndice() {
    if(confirm("¿Quieres Eliminarlo"))
      document.location.href='bajausuario.php';
  }
</script>
  </body>
</html>
