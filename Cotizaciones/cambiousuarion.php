<?php
  session_start();
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  include("funciones_mysql.php");
  $con=conectar();
  $nombre=$_POST['nombre'];
  $sql="SELECT * FROM Usuarios WHERE nombre='$nombre'";
  $res=query($sql, $con);
  $cam=mysql_fetch_assoc($res);
  foreach ($cam as $camp => $value) { ${$camp}=$value; }
  $sql="SELECT * FROM Log_In WHERE id_usuario='$id_usuario'";
  $res=query($sql, $con);
  $cam=mysql_fetch_assoc($res); $password=$cam['password'];
?>
<!doctype html>
<html>
  <head>
    <meta http-equiv="Content-Type" charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Consecutivo de Cotizaciones</title>
  </head>
  <body>
    <div id="page">
      <br><br><br>
      <form action="cambiousuarion2.php?usuario=<?php echo $id_usuario; ?>"
        method="POST">
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
              <select class="formu" name="permiso">
                <option value="1"
                  <?php if($permiso==1) echo "selected" ?>
                  >Administrador
                </option>
                <option value="2"
                  <?php if($permiso==2) echo "selected" ?>
                >Vendedor
                </option>
              </select>
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
          <button class="formu-button2"><div id="cambio">CANCELAR</div></button>
        </a>
      </div>
      </form>
    </div>
  </body>
</html>
