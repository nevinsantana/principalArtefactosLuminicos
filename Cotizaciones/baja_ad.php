<?php
  session_start();
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  include("funciones_mysql.php");
  $conexion=conectar();
  $id_usuario=$_SESSION['usuario'];
  echo $id_usuario;
  $cont=0;
  $sql="SELECT empresa FROM Clientes ";
  $resultado=query($sql, $conexion);
  while($campo=mysql_fetch_array($resultado)) { $cont=1; }
  if($cont==1) {
?>
    <html>
      <body>
      <div id="addcliente">Seleccione el cliente que desea eliminar:</div>
      <form action="bajausuario.php" method="POST">
        <select id=bajaselect name=empresa>
          <?php
            $sql="SELECT * FROM Clientes ORDER BY empresa";
            $resultado=query($sql, $conexion);
            while($campo=mysql_fetch_array($resultado)) {
              echo '<option>'.$campo["empresa"].'</option>';
            }
            echo "<option>$id_usuario</option>"
          ?>
        </select>
        <input type="submit" value="Eliminar" class="formu-button">
  <?php } if($cont==0) { ?>
    <div id="errorimg"><img src="images/error.png" margin-left="40px"></div>
  <?php } ?>
    <script>
      function irAlIndice() {
        if(confirm("¿Quieres Eliminarlo"))
          document.location.href='bajausuario.php';
      }
      window.alert("hola");
    </script>
      </body>
    </html>
