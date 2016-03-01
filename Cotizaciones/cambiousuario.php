<?php
  session_start();
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  include("funciones_mysql.php");
  $con=conectar();
  $id_usuario=$_SESSION['usuario'];
  $empresa=$_POST['empresa'];
  $sql="SELECT * FROM Clientes WHERE empresa='$empresa'";
  $res=query($sql, $con);
  $cam=mysql_fetch_array($res);
  foreach ($cam as $camp => $value) { ${$camp}=$value; }
  $id=$cam['id_num_cliente'];
  $sql="SELECT * FROM Direcciones WHERE id_direccion='$id_direccion'";
  $res=query($sql, $con);
  $cam=mysql_fetch_array($res);
  foreach ($cam as $camp => $value) { ${$camp}=$value; }
  $sql="SELECT * FROM Contacto WHERE id_contacto='$id_contacto'";
  $res=query($sql, $con);
  $cam=mysql_fetch_array($res);
  foreach ($cam as $camp => $value) { ${$camp}=$value; }
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
      <div id="header">
        <h1>Artefactos Lumínicos SA de CV</h1>
      </div>
      <br><br><br>
      <form action="cambiousuario2.php?id=<?php echo $id; ?>" method="POST">
        <div id="modificar">
          <div id="titulo2">Modifique los apartados de la empresa:</div>
          <table align="center" border=0 id="tablacambio" cellspacing="5">
            <tr>
              <td>
                RFC
                <br>
                <input type="text" class="formu" name="rfc" value=
                  "<?php echo $id_cliente; ?>" autofocus>
              </td>
              <td>
                Razon social
                <br>
                <input type="text" class="formu" name="empresa" value=
                  "<?php echo$empresa; ?>">
              </td>
            </tr>
            <tr>
              <td>
                Calle
                <br>
                <input type="text" class="formu" name="calle" value=
                  "<?php echo $calle; ?>">
              </td>
              <td>
                Numero Interior
                <br>
                <input type="text" class="formu" name="num_int" value=
                  "<?php echo $num_int; ?>">
              </td>
            </tr>
            <tr>
              <td>
                Numero Exterior
                <br>
                <input type="text" class="formu" name="num_ext" value=
                  "<?php echo $num_ext; ?>">
              </td>
              <td>
                Colonia
                <br>
                <input type="text" class="formu" name="colonia" value=
                  "<?php echo $colonia; ?>">
              </td>
            </tr>
            <tr>
              <td>
                Municipio
                <br>
                <input type="text" class="formu" name="municipio" value=
                  "<?php echo $municipio; ?>">
              </td>
              <td>
                Estado
                <br>
                <input type="text" class="formu" name="estado" value=
                  "<?php echo $estado; ?>">
              </td>
            </tr>
            <tr>
              <td>
                Código Postal
                <br>
                <input type="text" class="formu" name="cp" value=
                  "<?php echo $cp; ?>">
              </td>
              <td>
                Nombre del Contacto
                <br>
                <input type="text" class="formu" name="contacto" value=
                "<?php echo $nombre; ?>">
              </td>
            </tr>
            <tr>
              <td>
                Departamento
                <br>
                <input type="text" class="formu" name="departamento" value="
                  <?php echo $departamento; ?>">
              </td>
              <td>
                Telefono Directo
                <br>
                <input type="text" class="formu" name="telefono1" value="
                  <?php echo$telefono1; ?>">
              </td>
            </tr>
            <tr>
              <td>
                Telefono Alternativo
                <br>
                <input type="text" class="formu" name="telefono2" value="
                  <?php echo$telefono2; ?>">
              </td>
              <td>
                E-mail
                <br>
                <input type="text" class="formu" name="email" value="
                <?php echo $email; ?>">
              </td>
            </tr>
          </table>
        </div>
        <div id=centrarcambio>
          <input type="submit" value="MODIFICAR!" class="formu-button2">
          <a href="ventas.php">
            <button class="formu-button2">
              <div id="cambio">CANCELAR</div>
            </button>
          </a>
        </div>
      </form>
    </div>
  </body>
</html>
