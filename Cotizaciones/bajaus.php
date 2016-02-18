<html>
  <body>
    <br><br>
    <div id="adouser">
      <div style="margin-left: 55px;">
        Seleccione el usuario que desea eliminar:
      </div>
    </div>
    <br>
    <form action="bajausuarion.php" method="POST">
      <?php
        if (!isset($_SESSION['usuario'])) header('Location: index.php');
        $id_usuario=$_SESSION['usuario'];
        $con=conectar();
        $sql="SELECT * FROM Usuarios WHERE activo='1'";
        $res=query($sql, $con);
        echo '<select id=bajaselect name=nombre>';
          while ($cam=mysql_fetch_array($res)) {
            echo '<option value="'.$cam["id_usuario"].'">'.$cam["nombre"].
            ' '.$cam["apellido_p"];
          }
        echo '</select>';
      ?>
      <input type="submit" value="Eliminar" class="formu-button">
    </form>
    <script>
      function irAlIndice() {
        if (confirm("¿Quieres Eliminarlo"))
          document.location.href='bajausuarion.php';
      }
    </script>
  </body>
</html>
