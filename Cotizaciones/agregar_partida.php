<?php
  header('Content-Type:text/html; charset=UTF-8');
  session_start();
  include("funciones_mysql.php");
  $con=conectar(); $formu=0; $unidad="";
  if(isset($_GET['partida'])) $partida=$_GET['partida'];
  else $partida='';
  if(isset($_GET['catalogo'])) {
    $catalogo=$_GET['catalogo'];
    $sql="SELECT * FROM Catalogo where id_catalogo='$catalogo'";
    $resultado=query($sql, $con);
    $cam=mysql_fetch_array($resultado);
    if($cam!="") { foreach($cam as $camp => $val) { ${$camp}=$val; } }
    $formu=1;
    if(!isset($descripcion)) $descripcion="Descripción no encontrada";
  }
  else { $catalogo=""; $descripcion=" "; }
?>
<!doctype html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="charset=utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Consecutivo de cotizaciones</title>
  </head>
  <body>
    <div id="page">
      <br><br><br>
      <?php
        if($formu==1) echo '<form action="partidas2.php" method="POST">';
      ?>
      <div id="grande">
        <tr>
          <td>
            <?php if($formu==0 || $formu==1) { ?>
                <div id="izq">Ingrese la partida:</div>
                <input type="text" class="cajita" name="partida"
                  placeholder="Partida" size="15" id="partida"
                  value="<?php echo $partida; ?>">
                <br><br><br>
                <div id="izq">Ingrese el catálogo:</div>
                <input type="text" class="cajita" name="catalogo"
                  placeholder="Catálogo"  size="60" id="catalogo"
                  value="<?php echo $catalogo; ?>">
                <button onclick="datos1()" id="botonp">Siguiente</button>
                <br><br><br>
              <?php } if($formu==1) { ?>
                      <div id="izq">Ingrese la descripción:</div>
                      <div id="der">
                        <textarea rows="3" cols="35" name="descripcion"
                          placeholder="Descripción" id="txt" required>
                          <?php echo $descripcion; ?>
                        </textarea>
                      </div>
                      <br><br><br><br><br><br><br><br><br><br><br><br>
                      <div id="izq">Unidad:</div>
                      <select style="background-color:white;" class="cajita"
                        name="unidad" id="unidad">
                        <option style="background-color:#DADADA" disabled
                          selected>
                          Unidad
                        </option>
                        <option value="PZA." <?php if($unidad=='PZA.') {
                          echo 'selected'; } ?>>
                          PZA.
                        </option>
                        <option name="JGO." <?php if($unidad=='JGO.') {
                          echo 'selected'; } ?>>
                          JGO.
                        </option>
                        <option value="METRO" <?php if($unidad=='METRO') {
                          echo 'selected'; } ?>>
                          METRO
                        </option>
                        <option name="CJTO." <?php if($unidad=='CJTO.') {
                          echo 'selected'; } ?>>
                          CJTO.
                        </option>
                        <option name="S/N" <?php if($unidad=='S/N') {
                          echo 'selected'; } ?>>
                          S/N
                        </option>
                        <option name="N/A" <?php if($unidad=='N/A') {
                          echo 'selected'; } ?>>
                          N/A
                        </option>
                        <option name="vacio" <?php if($unidad=='') {
                          echo 'selected'; } ?>>
                        </option>
                      </select>
                      <br><br><br>
                      <div id="izq">Cantidad:</div>
                      <input type="number" class="cajita" name="cantidad"
                        placeholder="Cantidad" id="cantidad" min="0">
                      <br><br><br>
                      <div id="izq">Precio unitario:</div>
                      <input type="number" class="cajita" name="precio_uni"
                        placeholder="Precio unitario" id="precio" size="15"
                        min="0" step="any">
                      <br><br><br>
                    </td>
                  </tr>
                </div>
                <div align="right">
                  <button id="botonp" align="right">Aceptar</button>
                  <br>
                </div>
              <?php echo '</form>'; } ?>
      <div align="left" <?php if($formu==1) { ?> style="margin-top:-45px;"
        <?php } ?>>
        <a href="partidas.php">
          <input type="button" value="Atras" id="botonp">
        </a>
      </div>
    </div>
    <script src="tinymce/tinymce.min.js"></script>
    <script>
      tinymce.init({
        selector:"textarea",
        plugins:[
          "advlist autolink autosave lists charmap print preview hr anchor",
          "searchreplace visualblocks visualchars code media nonbreaking",
          "directionality paste fullpage textcolor colorpicker textpattern"
        ],
        toolbar1:"bold italic underline strikethrough | forecolor ",
        menubar:false,
        toolbar_items_size:'small',
        style_formats:[
          {title:'Bold text', inline:'b'},
          {title:'Red text', inline:'span', styles:{color:'#ff0000'}},
          {title:'Red header', block:'h1', styles:{color:'#ff0000'}},
          {title:'Example 1', inline:'span', classes:'example1'},
          {title:'Example 2', inline:'span', classes:'example2'},
          {title:'Table styles'},
          {title:'Table row 1', selector:'tr', classes:'tablerow1'}
        ],
        templates:[
          {title:'Test template 1', content:'Test 1'},
          {title:'Test template 2', content:'Test 2'}
        ]
      });
    </script>
    <script>
      function datos1() {
        var partida=document.getElementById("partida").value,
          catalogo=document.getElementById("catalogo").value,
          catalogo=catalogo.trim();/*quita espacions al principio y al final*/
          catalogo2=encodeURIComponent(catalogo),
          dir="agregar_partida.php?partida=",
          dir2="&catalogo=",
          union=dir.concat(partida),
          union2=dir2.concat(catalogo2),
          res=union.concat(union2);
        window.location=res;
      }

      function datos2() {
        var partida=document.getElementById("partida").value,
          catalogo=document.getElementById("catalogo").value,
          descripcion=document.getElementById("txt").value,
          unidad=document.getElementById("unidad").value,
          cantidad=document.getElementById("cantidad").value,
          precio=document.getElementById("precio").value,
          dir="agregar_partida2.php?partida=",
          dir2="&catalogo=",
          dir3="&descripcion=",
          dir4="&unidad=",
          dir5="&cantidad=",
          dir6="&precio=",
          union=dir.concat(partida),
          union2=dir2.concat(catalogo),
          union3=dir3.concat(descripcion),
          union4=dir4.concat(unidad),
          union5=dir5.concat(cantidad),
          union6=dir6.concat(precio),
          res=union.concat(union2),
          res2=union3.concat(union4),
          res3=union5.concat(union6),
          res4=res.concat(res2),
          res5=res4.concat(res3);
        window.location=res5;
      }
    </script>
  </body>
</html>
