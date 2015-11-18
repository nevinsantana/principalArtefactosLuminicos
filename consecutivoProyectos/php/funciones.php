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

  /*login.php******************************************************************/
  function loginin() {
    if(isset($_GET['loginin'])) {
      $conexion = conectar();
      $_SESSION['user'] = $_POST['user'];
      $_SESSION['pass'] = $_POST['pass'];
      $user = $_SESSION['user'];
      $pass = $_SESSION['pass'];
      $userTest = 1;
      $sql = "SELECT id_usuario, password FROM Log_In WHERE
        id_usuario = '$user' and password = '$pass'";
      $result = query($sql, $conexion);
      $campo = mysql_fetch_array($result);
      if ($campo['id_usuario'] == $user) {
        $userTest = $campo['id_usuario'];
      }
      if ($userTest == 1) {
        session_destroy();
        header("Location: ?sec=login&errorLogin=true");
      }
      else {
        $sql=
          "SELECT permiso, activo FROM Usuarios WHERE id_usuario='$userTest'";
        $result = query($sql, $conexion);
        $campo = mysql_fetch_array($result);
        $permiso = $campo['permiso'];
        $activo = $campo['activo'];
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
        header("Location: ?sec=principal");
      }
    }
  }
  /*fLogin.php*****************************************************************/

  /*index.php******************************************************************/
  if(isset($_SESSION['permiso'])) {
    $logeado = 1;
  }
  else {
    $logeado = 2;
  }

  if(isset($_GET['cerrarSesion'])){
    session_destroy();
    header("Location: index.php");
  }
  /*fIndex.php*****************************************************************/
?>
<!--index.php------------------------------------------------------------------>
<script>
  var logeado = <?php echo $logeado; ?>;
  if(logeado == 1) {
    var user = "<?php if(isset($_SESSION['user']))echo $_SESSION['user'];?>";
  }
</script>
<!--fIndex.php----------------------------------------------------------------->
