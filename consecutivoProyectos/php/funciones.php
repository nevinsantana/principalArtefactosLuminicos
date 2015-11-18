<?php
  /*sesiones*******************************************************************/
  session_start();
  /*fSesiones******************************************************************/

  /*conexiónDB*****************************************************************/
  function conectar() {
    $link = mysql_connect("localhost", "artes_cotizacion", "Cotizaciones_1209");
    mysql_set_charset('utf8');
    mysql_select_db("artes01_Cotizaciones", $link) OR
      DIE("Error: No es posible establecer la conexión");
    return $link;
  }

  function query($sql, $con) {
    $result = mysql_query($sql, $con);
    return $result;
  }
  /*fConexiónDB****************************************************************/

  /*index.php******************************************************************/
  if(isset($_SESSION['permiso'])) {
    $logeado = 1;
  }

  else {
    $logeado = 0;
  }
  /*fIndex.php*****************************************************************/

  /*login.php******************************************************************/
  function loginin() {
    if(isset($_GET['loginin'])) {
      $_SESSION['user'] = $_POST['user'];
      $_SESSION['pass'] = $_POST['pass'];
      $user = $_SESSION['user'];
      $pass = $_SESSION['pass'];
      $usuario = 0;
      $pass = 0;
      $query = "SELECT id_usuario, password FROM Log_In WHERE
        id_usuario = '$user' and password = '$pass'";
      $result = mysql_query($query);
      while ($row = mysql_fetch_assoc($result)) {
        if ($row['id_usuario'] == $user) {
          $usuario = $row['id_usuario'];
          $pass = $row['password'];
        }
      }
      if ($usuario == 0 || $pass == 0) {
        session_destroy();
        header("Location: ?sec=login&errorLogin=true");
      }
      else {
        $query= "SELECT permiso, activo FROM Usuarios WHERE id_usuario='$user'";
        if ($row = mysql_fetch_assoc($result)) {
          $permiso = $row['permiso'];
          $activo = $row['activo'];
        }
        if ($permiso == '1' && $activo == '1') {
          $_SESSION['permiso'] = '1';
        }
        if ($permiso == '2' && $activo == '1') {
          $_SESSION['permiso'] = '2';
        }
        if ($activo == '0') {
          session_destroy();
          header("Location: ?sec=login&errorLogin2=true");
        }
      }
    }
  }
  /*fLogin.php*****************************************************************/
?>
<!--index.php------------------------------------------------------------------>
<script>
var logeado = <?php echo $logeado; ?>;
</script>
<!--fIndex.php----------------------------------------------------------------->
