<?php
  session_start();
  if(!isset($_SESSION['usuario'])) header('Location: index.php');
  include("funciones_mysql.php");
  $con=conectar(); $id_usuario=$_SESSION['usuario'];
  $catalogo=$_POST['catalogo'];
  $sql="SELECT * FROM Catalogo WHERE id_catalogo='$catalogo'";
  $res=query($sql, $con);
  $cam=mysql_fetch_assoc($res);
  foreach ($cam as $camp => $value) { ${$camp}=$value; }
  if($unidad=='PZA.') $i=1;
  if($unidad=='CJTO.') $i=2;
  if($unidad=='JGO.') $i=3;
  if($unidad=='ROLLO') $i=4;
  if($unidad=='METRO') $i=5;
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
      <div id="modificar">
        <div id="titulo2">Modifique los apartados del producto:</div>
        <form action="cambioproducto2.php?id_catalogo=<?php
          echo $id_catalogo; ?>" method="POST">
          <table align="center" border=0 id="tablacambio" cellspacing="5">
            <tr>
              <td>
                Catálogo
                <br>
                <input type="text" class="formu" name="id_catalogo"
                  value="<?php echo$id_catalogo; ?>" disabled>
              </td>
              <td>
                <select style="background-color: white" class="formu"
                  name="unidad">
                  <option style="background-color: #DADADA" disabled selected>
                    Unidad
                  </option>
                  <option name="PZA." <?php if($i==1) echo"selected"; ?>>
                    PZA.
                  </option>
                  <option name="JGO." <?php if($i==3) echo"selected"; ?>>
                    JGO.
                  </option>
                  <option name="METRO" <?php if($i==5) echo"selected"; ?>>
                    METRO.
                  </option>
                  <option value="CJTO." <?php if($i==2) echo"selected"; ?>>
                    CJTO.
                  </option>
                  <option value="ROLLO" <?php if($i==4) echo"selected"; ?>>
                    ROLLO
                  </option>
                </select>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                Descripcion
                <br>
                <textarea  class="formuca" name="descripcion"
                  ><?php echo$descripcion; ?></textarea>
              </td>
            </tr>
          </table>
          <div id=centrarcambio>
            <input type="submit" value="MODIFICAR!" class="formu-button2">
            <a href="index.php">
              <button class="formu-button2">
                <div id="cambio">CANCELAR</div>
              </button>
            </a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
