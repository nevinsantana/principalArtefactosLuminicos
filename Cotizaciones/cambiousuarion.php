<?php
  session_start();
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  include("funciones_mysql.php");
  $con=conectar();
  $nombre=$_POST['nombre'];
  $sql="SELECT * FROM Usuarios WHERE nombre='$nombre'";
  $res=query($sql, $con);
  while($cam=mysql_fetch_array($res)) {
    $id_usuario=$cam['id_usuario'];
    $permiso=$cam['permiso'];
    $nombre=$cam['nombre'];
    $apellido_p=$cam['apellido_p'];
    $apellido_m=$cam['apellido_m'];
    $e_mail=$cam['e_mail'];
  }
  $sql="SELECT password FROM Log_in WHERE id_usuario='$id_usuario'";
  $res=query($sql, $con);
  while($cam=mysql_fetch_array($res)) { $password=$cam['password']; }
?>
<!doctype html >
<html>
  <head>
    <meta http-equiv="Content-Type" charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Consecutivo de Cotizaciones</title>
  </head>
  <body>
    <div id="page">
      <div id="header">
        <h1>Artefactos Lumínicos SA de CV</h1>
      </div>
      <br><br><br>
      <form action="cambiousuarion2.php?usuario=<?php echo $id_usuario; ?>" method="POST">
        <div id="modificar">
          <div id="titulo2">Modifique los apartados del usuario:</div>
          <table align="center" border=0 id="tablacambio" cellspacing="5">
            <tr>
              <td>
                Nombre de Usuario
                <br>
                <input type="text" class="formu" name="usuario"
                  value="<?php echo $id_usuario; ?>" disabled>
              </td>
              <td>
                Nombre
                <br>
                <input type="text" class="formu" name="nombre"
                  value="<?php echo $nombre; ?>" required autofocus>
              </td>
            </tr>
            <tr>
              <td>
                Apellido Paterno
                <br>
                <input type="text" class="formu" name="apellido_p"
                  value="<?php echo $apellido_p; ?>" required>
              </td>
              <td>
                Apellido Materno
                <br>
                <input type="text" class="formu" name="apellido_m"
                  value="<?php echo $apellido_m; ?>" >
              </td>
            </tr>
            <tr>
              <td>
                E-Mail
                <br>
                <input type="text" class="formu" name="e_mail"
                  value="<?php echo $e_mail; ?>">
              </td>
              <td>
                Permisos
                <br>
                <input type="text" class="formu" name="permiso"
                  value="<?php echo $permiso; ?>" required>
              </td>
            </tr>
            <tr>
              <td>
                Password
                <br>
                <input type="text" class="formu" name="password"
                  value="<?php echo $password; ?>" required>
              </td>
            </tr>
          </table>
        </div>
        <div id=centrarcambio>
          <input type="submit" value="MODIFICAR!" class="formu-button2">
          <a href="administracion.php">
            <button class="formu-button2">
              <div id="cambio">CANCELAR</div>
            </button>
          </a>
        </div>
      </form>
    </div>
  </body>
</html>
