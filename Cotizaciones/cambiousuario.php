<?php
  session_start();
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  include("funciones_mysql.php");
  $conexion=conectar();
  $id_usuario=$_SESSION['usuario'];
  $empresa=$_POST['empresa'];
  $sql="SELECT * FROM Clientes WHERE empresa='$empresa'";
  $resultado=query($sql, $conexion);
  $campo=mysql_fetch_array($resultado);
  $id_cliente=$campo['id_cliente'];
  $id_direccion=$campo['id_direccion'];
  $id_contacto=$campo['id_contacto'];
  $id_usuario=$campo['id_usuario'];
  $id=$campo['id_num_cliente'];
  $sql="SELECT * FROM Direcciones WHERE id_direccion='$id_direccion'";
  $resultado=query($sql, $conexion);
  $campo=mysql_fetch_array($resultado);
  $calle=$campo['calle'];
  $num_int=$campo['num_int'];
  $num_ext=$campo['num_ext'];
  $colonia=$campo['colonia'];
  $municipio=$campo['municipio'];
  $estado=$campo['estado'];
  $cp=$campo['cp'];
  $sql="SELECT * FROM Contacto WHERE id_contacto='$id_contacto'";
  $resultado=query($sql, $conexion);
  $campo=mysql_fetch_array($resultado);
  $nombre=$campo['nombre_c'];
  $departamento=$campo['departamento'];
  $telefono1=$campo['telefono1'];
  $telefono2=$campo['telefono2'];
  $email=$campo['e_mail_c'];
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
                  "<?php echo$empresa; ?>" autofocus>
              </td>
            </tr>
            <tr>
              <td>
                Calle
                <br>
                <input type="text" class="formu" name="calle" value=
                  "<?php echo $calle; ?>" autofocus>
              </td>
              <td>
                Numero Interior
                <br>
                <input type="text" class="formu" name="num_int" value=
                  "<?php echo $num_int; ?>" autofocus>
              </td>
            </tr>
            <tr>
              <td>
                Numero Exterior
                <br>
                <input type="text" class="formu" name="num_ext" value=
                  "<?php echo $num_ext; ?>" autofocus>
              </td>
              <td>
                Colonia
                <br>
                <input type="text" class="formu" name="colonia" value=
                  "<?php echo $colonia; ?>" autofocus>
              </td>
            </tr>
            <tr>
              <td>
                Municipio
                <br>
                <input type="text" class="formu" name="municipio" value=
                  "<?php echo $municipio; ?>" autofocus>
              </td>
              <td>
                Estado
                <br>
                <input type="text" class="formu" name="estado" value=
                  "<?php echo $estado; ?>" autofocus>
              </td>
            </tr>
            <tr>
              <td>
                Código Postal
                <br>
                <input type="text" class="formu" name="cp" value=
                  "<?php echo $cp; ?>" autofocus>
              </td>
              <td>
                Nombre del Contacto
                <br>
                <input type="text" class="formu" name="contacto" value=
                "<?php echo $nombre; ?>" autofocus>
              </td>
            </tr>
            <tr>
              <td>
                Departamento
                <br>
                <input type="text" class="formu" name="departamento" value="
                  <?php echo $departamento; ?>" autofocus>
              </td>
              <td>
                Telefono Directo
                <br>
                <input type="text" class="formu" name="telefono1" value="
                  <?php echo$telefono1; ?>" autofocus>
              </td>
            </tr>
            <tr>
              <td>
                Telefono Alternativo
                <br>
                <input type="text" class="formu" name="telefono2" value="
                  <?php echo$telefono2; ?>" autofocus>
              </td>
              <td>
                E-mail
                <br>
                <input type="text" class="formu" name="email" value="
                <?php echo $email; ?>" autofocus>
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
