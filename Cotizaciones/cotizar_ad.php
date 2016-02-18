<html>
  <?php
    $cont=0;
    if(!isset($_SESSION['usuario'])) header('Location: index.php');
    $conexion=conectar();
    $id_usuario=$_SESSION['usuario'];
    $sql="SELECT empresa FROM Clientes";
    $resultado=query($sql, $conexion);
    while($campo=mysql_fetch_array($resultado)) { $cont=1; }
    if($cont==1) {
  ?>
      <link rel="stylesheet" type="text/css" href="estilo.css">
      <div id="addcliente3">Seleccione el cliente a cotizar:</div>
      <form action="partidas.php" method="POST">
        <?php
          $sql="SELECT * FROM Clientes WHERE desactivado= 0 ORDER BY empresa";
          $resultado=query($sql, $conexion);
          echo '<select id=cotizarselect name=empresa>';
            while($campo=mysql_fetch_array($resultado)) {
              echo '<option style="width:520px">'.$campo["empresa"].'</option>';
              $conectar=1;
            }
          echo '</select>';
        ?>
        <input type="submit" value="Cotizar" class="formu-button">
      </form>
    <?php } if($cont==0) { ?>
      <div id="errorimg"><img src="images/error.png" margin-left="40px"></div>
    <?php } ?>
</html>
