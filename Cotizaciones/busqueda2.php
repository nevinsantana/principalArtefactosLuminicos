<?php
  if (!isset($_SESSION['usuario'])) header('Location: index.php');
  header('Content-Type: text/html; charset=UTF-8');
  include ("funciones_mysql.php");
  $conexion=conectar();
?>
<div class="datagrid">
  <table width="1000px">
    <tr>
      <thead>
        <th width='4%'><h3>Número</h3></th>
        <th width='10%'><h3>Catálogo</h3></th>
        <th width='10%'><h3>Unidad</h3></th>
        <th width='76%'><h3>Descripción</h3></th>
      </thead>
    </tr>
    <?php
      $cont=2;
      $numero=1;
      $sql="SELECT * FROM Catalogo WHERE descripcion LIKE '%$descripcion%'";
      $resultado=query($sql, $conexion);
      echo "<div align=center>
        <div id='caja_cat2'>Busqueda: '$descripcion'</div>
      </div>
      <br>";
      while ($campo=mysql_fetch_array($resultado)) {
        if ($cont % 2==0) {
          echo "<tr>".
            "<td id='sombra2'>".$numero."</td>".
            "<td id='sombra2'>".$campo['id_catalogo']."</td>".
            "<td id='sombra2'>".$campo['unidad']."</td>".
            "<td id='sombra2'>".$campo['descripcion']."</td>".
          "<tr>";
        }
        else {
          echo "<tr>".
            "<td id='sombra'>".$numero."</td>".
            "<td id='sombra'>".$campo['id_catalogo']."</td>".
            "<td id='sombra'>".$campo['unidad']."</td>".
            "<td id='sombra'>".$campo['descripcion']."</td>".
          "<tr>";
        }
        $cont++;
        $numero++;
      }
    ?>
  </table>
</div>
