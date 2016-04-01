<?php session_start(); ?>
<!--fSesiones------------------------------------------------------------------>
<!--conexiónDB----------------------------------------------------------------->
<?php
  function conectar() {
    $li=mysql_connect("localhost", "artes_cotizacion", "Cotizaciones_1209");
    mysql_set_charset('utf8');
    mysql_select_db("artes01_Cotizaciones", $li) OR DIE("Conexión no hecha");
    return $li;
  } $con=conectar();
  function query($sql, $con) {
    $res=mysql_query($sql, $con);
    return $res;
  }
  function rText($var) {
    $var=str_replace(array('�','�','�','�','�','�','�','�','�','�','�','�','�',
      '�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�',
      "'"),array('�','a','a','a','�','A','A','�','e','e','�','E','E','�','i',
      'i','�','I','I','�','o','o','�','O','O','�','u','u','�','U','U',"`"),
    $var);
    return $var;
  }
  function dText($var) {
    $var=str_replace("`","'",$var);
    return $var;
  }
?>
<!--fConexiónDB---------------------------------------------------------------->
<!--verificaSesionTerminada---------------------------------------------------->
<?php
  if(!isset($_SESSION['user'])) {
    if(!isset($_GET['sec'])) {}
    else {
      if($_GET['sec']=='principal') {}
      else {
        if($_GET['sec']=='login') {
          if(isset($_GET['logout'])) { header('Location: ?sec=login'); }
        }
        else { header('Location: ?sec=login'); }
      }
    }
  }
  if(isset($_GET['sec'])) { /*Para evitar mensaje de undefined sec*/
    if(isset($_SESSION['user']) && $_GET['sec'] == 'login') {
      if(isset($_GET['logout'])) {} else { header('Location: ?sec=principal'); }
    }
  } /*Si se quiere entrar a login normal cuando hay sesion iniciada, redirigirá
      a sec=principal*/
  function loginin() { //Realizada al presionar boton Entrar en login
    if(isset($_GET['loginin'])) {
      global $con;
      $_SESSION['user']=$_POST['user']; $user=$_SESSION['user'];
      $pass=$_POST['pass']; $userTest=1;
      $sql="SELECT * FROM Log_In WHERE id_usuario='$user' and password='$pass'";
      $res=query($sql, $con);
      $cam=mysql_fetch_array($res);
      if ($cam['id_usuario'] == $user) { $userTest=$cam['id_usuario']; }
      if ($userTest == 1) {
        session_destroy();
        header("Location: ?sec=login&errorLogin=true");
      }
      else {
        $sql= "SELECT * FROM Usuarios WHERE id_usuario='$userTest'";
        $res=query($sql, $con);
        $cam=mysql_fetch_array($res);
        $permiso=$cam['permisoProyecto']; $activo=$cam['activo'];
        $_SESSION['nUser']=$cam['nombre'];
        if ($permiso == '1' && $activo == '1') { $_SESSION['permiso']='1'; }
        if ($permiso == '2' && $activo == '1') { $_SESSION['permiso']='2'; }
        if ($activo == 0) {
          session_destroy();
          header("Location: ?sec=login&errorLogin2=true");
        } //Si no está activo, manda error
        else { header("Location: ?sec=principal"); }
      } //Si todo esta bien, manda a principal
    }
  }
  if(isset($_SESSION['permiso'])) { $logeado=1; }
  else { $logeado=2; }
  if(isset($_GET['cerrarSesion'])) { //Cierra sesión con botón
    setcookie (session_id(), "", time() - 3600);
    session_destroy();
    session_write_close();
    header("Location: ?sec=login");
  }
?>
<!--fIndex.php----------------------------------------------------------------->
<!--proyectos.php-------------------------------------------------------------->
<?php
  if(isset($_POST['proyecto'])) {
    function guardaForm() { $np=array($_POST); echo $np[0]; }
  }
  function nProyecto() {
    global $con;
    $sql="SELECT * FROM proyecto ORDER BY idProyecto DESC LIMIT 1";
    $res=query($sql, $con);
    $cam=mysql_fetch_row($res);
    $idProyecto=$cam[0] + 1;
    if ($idProyecto == "") { $idProyecto=1; }
    echo "Proyecto no. ".$idProyecto;
  }
  function nomUsuario() { echo $_SESSION['user']; }
  function generaTablaPE() {
    global $con;
    if($_SESSION['permiso'] == 1) {
      $sql="SELECT * FROM proyecto ORDER BY idProyecto DESC";
      $res=query($sql, $con);
      while ($cam=mysql_fetch_array($res)) {
        $idPE=$cam['idProyecto'];
        $fechaPE=$cam['fecha'];
        $nombrePE=$cam['nombreProyecto'];
        ?>
        <tr><!--Genera contenido de la tabla-->
          <td><?php echo $idPE; ?></td>
          <td><?php echo $fechaPE; ?></td>
          <td><?php echo $nombrePE; ?></td>
          <td>
            <span onclick="gestionProyecto(<?php echo $idPE; ?>)">
              editar
            </span>
          </td>
        </tr>
        <?php
      }
    }
    else {
      $userPE=$_SESSION['user'];
      $sql="SELECT * FROM proyecto WHERE idUsuario='$userPE'
        ORDER BY idProyecto DESC";
      $res=query($sql, $con);
      while ($cam=mysql_fetch_array($res)) {
        $idPE=$cam['idProyecto'];
        $fechaPE=$cam['fecha'];
        $nombrePE=$cam['nombreProyecto'];
        ?>
        <tr>
          <td><?php echo $idPE; ?></td>
          <td><?php echo $fechaPE; ?></td>
          <td><?php echo $nombrePE; ?></td>
          <td>
            <span onclick="gestionProyecto(<?php echo $idPE; ?>)">
              editar
            </span>
          </td>
        </tr>
        <?php
      }
    }
  }
?>
<!--fProyectos.php------------------------------------------------------------->
<!--gestionProyecto.php-------------------------------------------------------->
<?php
  function gTablaNotas($proy) {
    global $con;
    $i="";
    $sql="SELECT * FROM notasp WHERE idProyecto=$proy";
    $res=query($sql,$con);
    $res2=query($sql,$con);
    if($cam=mysql_fetch_assoc($res)) {
      echo "<hr class='hrNota'><table class='tNotas'>";
      while($cam2=mysql_fetch_assoc($res2)) {
        $i++;
        $idNota=$cam2['idNota']; $nota=$cam2['nota']; $nota=dText($nota);
        echo "<tr>
          <td width='10%'>$i</td>
          <td width='75%'>$nota</td>
          <td width='15%'>
            <span class='fa-stack fa-lg eNota' onclick='eNota($idNota,$proy)'>
              <i class='fa fa-circle fa-stack-2x'></i>
              <i class='fa fa-times fa-stack-1x fa-inverse'></i>
            </span>
          </td>
        </tr>";
      }
      echo "</table>";
    }
  }
  if(isset($_GET['eNota'])) eNota($_GET['nota']); function eNota($idNota) {
    global $con;
    $proy=$_GET['proy'];
    $sql="DELETE FROM notasp WHERE idNota='$idNota' AND idProyecto='$proy'";
    $res=query($sql,$con);
    header("location:../?sec=gestionProyecto&idProyecto=$proy");
  }
  function pGetIdProyecto() {
    if(isset($_GET['idProyecto'])) {
      $cam=gDatosProyecto($_GET['idProyecto']);
    }
    return $cam;
  }
  function gDatosProyecto($idP) {
    global $con;
    $sql="SELECT * FROM proyecto WHERE idProyecto=$idP";
    $res=query($sql,$con);
    $cam=mysql_fetch_assoc($res);
    return $cam;
  }
  function generaNoPlano() {
    global $con;
    $idProyecto=$_GET['idProyecto'];
    if($idProyecto=="") header("location:index.php");
    $sql="SELECT * FROM proyecto WHERE idProyecto='$idProyecto'";
    $res=query($sql, $con);
    $cam=mysql_fetch_assoc($res);
    if($_SESSION['permiso']!=1) {
    if($_SESSION['user']!=$cam['idUsuario']) header("location:index.php"); }
    $sql="SELECT * FROM plano WHERE idProyecto='$idProyecto' ORDER BY idPlano
      DESC LIMIT 1";
    $res=query($sql, $con);
    $cam=mysql_fetch_row($res);
    $idPlano=$cam[0] + 1;
    if ($idPlano == "") { $idPlano=1; }
    return $idPlano;
  }
  function generaPlanos($idProy) {
    global $con;
    $sql="SELECT * FROM plano WHERE idProyecto='$idProy'";
    $res=query($sql,$con);
    while($cam=mysql_fetch_assoc($res)) {
      $i="";
      foreach($cam as $camp => $val) { ${$camp}=$val; }
      echo "<section class='sPlano$tipoPlano'><div class='headerContainer'>";
      if($tipoPlano==1) echo "<img src='img/1.png'>";
      if($tipoPlano==2) echo "<img src='img/2.png'>";
      if($tipoPlano==3) echo "<img src='img/3.png'>";
      echo "
      <div class='taPlano' onclick='bPlano($idPlano);'>
        <span class='fa-stack fa-lg'>
          <i class='fa fa-circle fa-stack-2x'></i>
          <i class='fa fa-times fa-stack-1x fa-inverse'></i>
        </span>
      </div>
      </div>
      <span class='input input--kohana-eProyecto'>
        <input class='input__field input__field--kohana-eProyecto' type='text'
          value='$idPlano' title='No de plano' disabled>
        <label class='input__label input__label--kohana-eProyecto' for='input-29'>
          <i class='fa fa-fw fa-object-group icon icon--kohana-eProyecto'></i>
          <span class='input__label-content input__label-content--kohana'>
            No plano
          </span>
        </label>
      </span>
      <span class='input input--kohana-eProyecto' id='nRe'>
        <input class='input__field input__field--kohana-eProyecto' type='text'
          name='nivelRecomendado' value='$nivelRec' title='Nivel recomendado'>
        <label class='input__label input__label--kohana-eProyecto' for='input-29'>
          <i class='fa fa-fw fa-list-ol icon icon--kohana-eProyecto'></i>
          <span class='input__label-content input__label-content--kohana'>
            Nivel recomendado
          </span>
        </label>
      </span>
      <span class='input input--kohana-eProyecto' id='anc'>
        <input class='input__field input__field--kohana-eProyecto' type='text'
          name='ancho' value='$ancho' title='Ancho'>
        <label class='input__label input__label--kohana-eProyecto' for='input-29'>
          <i class='fa fa-fw fa-arrows-h icon icon--kohana-eProyecto'></i>
          <span class='input__label-content input__label-content--kohana'>
            Ancho
          </span>
        </label>
      </span>
      <span class='input input--kohana-eProyecto' id='lar'>
        <input class='input__field input__field--kohana-eProyecto' type='text'
          name='largo' value='$largo' title='Largo'>
        <label class='input__label input__label--kohana-eProyecto' for='input-29'>
          <i class='fa fa-fw fa-long-arrow-right icon icon--kohana-eProyecto'></i>
          <span class='input__label-content input__label-content--kohana'>
            Largo
          </span>
        </label>
      </span>
      ";
      if($tipoPlano==1){
      echo "
      <span class='input input--kohana-eProyecto' id='alt'>
        <input class='input__field input__field--kohana-eProyecto' type='text'
          name='alto' value='$altura' title='Alto'>
        <label class='input__label input__label--kohana-eProyecto' for='input-29'>
          <i class='fa fa-fw fa-long-arrow-up icon icon--kohana-eProyecto'></i>
          <span class='input__label-content input__label-content--kohana'>
            Alto
          </span>
        </label>
      </span>
      "; }
      if($tipoPlano==3){
      echo "
      <span class='input input--kohana-eProyecto' id='aCa'>
        <input class='input__field input__field--kohana-eProyecto' type='text'
          name='anCame' value='$anchoCamellon' title='Ancho de camellón'>
        <label class='input__label input__label--kohana-eProyecto' for='input-29'>
          <i class='fa fa-fw fa-sort-numeric-asc icon icon--kohana-eProyecto'></i>
          <span class='input__label-content input__label-content--kohana'>
            Ancho de camellón
          </span>
        </label>
      </span>
      <span class='input input--kohana-eProyecto' id='aAv'>
        <input class='input__field input__field--kohana-eProyecto' type='text'
          name='anAve' value='$anchoAvenida' title='Ancho de avenida'>
        <label class='input__label input__label--kohana-eProyecto' for='input-29'>
          <i class='fa fa-fw fa-road icon icon--kohana-eProyecto'></i>
          <span class='input__label-content input__label-content--kohana'>
            Ancho de avenida
          </span>
        </label>
      </span>
      "; }
      if($tipoPlano!=1){
      echo "
      <span class='input input--kohana-eProyecto' id='dIn'>
        <input class='input__field input__field--kohana-eProyecto' type='text'
          name='disIn' value='$distanciaInterpostal' title='Distancia interpostal'>
        <label class='input__label input__label--kohana-eProyecto' for='input-29'>
          <i class='fa fa-fw fa-random icon icon--kohana-eProyecto'></i>
          <span class='input__label-content input__label-content--kohana'>
            Distancia interpostal
          </span>
        </label>
      </span>
      ";}
      $sql="SELECT * FROM luminario WHERE idProyecto='$idProy' AND
        idPlano='$idPlano' ORDER BY idLuminario DESC LIMIT 1";
      $res1=query($sql, $con); $cam=mysql_fetch_row($res1); $idLum=$cam[0] + 1;
      if($idLum=="") { $idLum=1; }
      echo '
      <div class="editaLuminario">
        <hr class="hrLuminario">';
      $sql="SELECT * FROM luminario WHERE idProyecto='$idProy' AND
      idPlano='$idPlano'";
      $res1=query($sql,$con);
      while($cam1=mysql_fetch_assoc($res1)) {
      $i++;
      foreach ($cam1 as $camf => $valf) {
        if($valf=="") ${$camf}="Sin asignar";
        else ${$camf}=$valf; }
        echo "<span class='tLum'>Luminario ".$i."</span>
        <div class='taPlano'>
          <span class='fa-stack fa-lg' onclick='bLum($idLuminario, $idPlano)'>
            <i class='fa fa-circle fa-stack-2x'></i>
            <i class='fa fa-times fa-stack-1x fa-inverse'></i>
          </span>
        </div>
        <div>
        <span class='input input--kohana-eProyecto'>
          <input class='input__field input__field--kohana-eProyecto' type='text'
            title='Catálogo' id='catLum' name='cat' value='".$idCatalogo."'
            disabled>
          <label class='input__label input__label--kohana-eProyecto' for='input-29'>
            <i class='fa fa-fw fa-lightbulb-o icon icon--kohana-eProyecto'></i>
            <span class='input__label-content input__label-content--kohana'>
              Catálogo
            </span>
          </label>
        </span>
        <span class='input input--kohana-eProyecto'>
          <input class='input__field input__field--kohana-eProyecto' type='text'
            title='Watts' name='watts' id='watts' value='".$watts."'
            disabled>
          <label class='input__label input__label--kohana-eProyecto' for='input-29'>
            <i class='fa fa-fw fa-flash icon icon--kohana-eProyecto'></i>
            <span class='input__label-content input__label-content--kohana'>
              Watts
            </span>
          </label>
        </span>
        <span class='input input--kohana-eProyecto'>
          <input class='input__field input__field--kohana-eProyecto' type='text'
            title='Lumens iniciales' name='lumens' id='lumens' value='".
            $lumensIniciales."' disabled>
          <label class='input__label input__label--kohana-eProyecto' for='input-29'>
            <i class='fa fa-fw fa-sun-o icon icon--kohana-eProyecto'></i>
            <span class='input__label-content input__label-content--kohana'>
              Lumens iniciales
            </span>
          </label>
        </span>
        <span class='input input--kohana-eProyecto'>
          <input class='input__field input__field--kohana-eProyecto' type='text'
            title='Factor depreciación' name='dep' id='fDep' value='".
            $factorDepreciacion."' disabled>
          <label class='input__label input__label--kohana-eProyecto' for='input-29'>
            <i class='fa fa-fw fa-hand-o-down icon icon--kohana-eProyecto'></i>
            <span class='input__label-content input__label-content--kohana'>
              Factor depreciación
            </span>
          </label>
        </span>
        <span class='input input--kohana-eProyecto'>
          <input class='input__field input__field--kohana-eProyecto' type='text'
            title='Altura montaje' name='altMont' id='aMont' value='".
            $alturaMontaje."' disabled>
          <label class='input__label input__label--kohana-eProyecto' for='input-29'>
            <i class='fa fa-fw fa-arrows-v icon icon--kohana-eProyecto'></i>
            <span class='input__label-content input__label-content--kohana'>
              Altura montaje
            </span>
          </label>
        </span>
        <span class='input input--kohana-eProyecto'>
          <input class='input__field input__field--kohana-eProyecto' type='text'
            title='Altura plano trabajo' name='altPlan' id='aPTra' value='".
            $alturaPlanoTrabajo."' disabled>
          <label class='input__label input__label--kohana-eProyecto' for='input-29'>
            <i class='fa fa-fw fa-hospital-o icon icon--kohana-eProyecto'></i>
            <span class='input__label-content input__label-content--kohana'>
              Altura plano trabajo
            </span>
          </label>
        </span>
        <span class='input input--kohana-eProyecto'>
          <input class='input__field input__field--kohana-eProyecto' type='text'
            title='Tipo montaje' alt='tipoMont' id='tMont' value='".
            $tipoMontaje."' disabled>
          <label class='input__label input__label--kohana-eProyecto' for='input-29'>
            <i class='fa fa-fw fa-legal icon icon--kohana-eProyecto'></i>
            <span class='input__label-content input__label-content--kohana'>
              Tipo montaje
            </span>
          </label>
        </span>
        <span class='input input--kohana-eProyecto'>
          <input class='input__field input__field--kohana-eProyecto' type='text'
            title='Largo brazo' name='laBrazo' id='lBra' value='".$largoBrazo."'
            disabled>
          <label class='input__label input__label--kohana-eProyecto' for='input-29'>
            <i class='fa fa-fw fa-long-arrow-right icon icon--kohana-eProyecto'></i>
            <span class='input__label-content input__label-content--kohana'>
              Largo brazo
            </span>
          </label>
        </span>
        <span class='input input--kohana-eProyecto'>
          <input class='input__field input__field--kohana-eProyecto' type='text'
            title='Tilt' name='tilt' id='tilt' value='".$tilt."' disabled>
          <label class='input__label input__label--kohana-eProyecto' for='input-29'>
            <i class='fa fa-fw fa-undo icon icon--kohana-eProyecto'></i>
            <span class='input__label-content input__label-content--kohana'>
              Tilt
            </span>
          </label>
        </span></div>
        ";
      }
      echo '
        <button class="botonEditaProyecto" onclick="aLum('.$idPlano.','.
          $idLum.')">
          <i class="fa fa-fw fa-plus-circle"></i>
        </button>
      </div>
      </section>';
    }
  }
  if(isset($_GET['bPlano'])) bPlano(); function bPlano() {
    global $con;
    foreach($_GET as $cam => $val) { ${$cam}=$val; }
    $sql="DELETE FROM plano WHERE idPlano='$plano' AND idProyecto='$proy'";
    $res=query($sql,$con);
    header("location:../?sec=gestionProyecto&idProyecto=$proy");
  }
  if(isset($_GET['bNota'])) bNota(); function bNota() {
    global $con;
    foreach($_GET as $cam => $val) { ${$cam}=$val; }
    $sql="DELETE FROM notasp WHERE idNota='$nota' AND idProyecto='$proy'";
    $res=query($sql,$con);
    header("location:../?sec=gestionProyecto&idProyecto=$proy");
  }
  function oClientesS($proy) {
    global $con;
    $user=$_SESSION['user'];
    $sql="SELECT * FROM proyecto WHERE idProyecto='$proy'";
    $res=query($sql,$con);
    $cam=mysql_fetch_assoc($res);
    $cliente=$cam['idNumCliente'];
    $sql="SELECT * FROM Clientes WHERE id_usuario='$user'";
    $res=query($sql,$con);
    echo "<option disabled "; if($cliente=='') echo "selected";
    echo ">Cliente</option>";
    while($cam=mysql_fetch_assoc($res)) {
      echo "<option value='".$cam['id_num_cliente']."'";
        if($cliente==$cam['id_num_cliente']) echo "selected"; echo ">".
        $cam['empresa']
      ."</option>";
    }
  }
  if(isset($_GET['bLum'])) bLum(); function bLum() {
    global $con;
    foreach($_GET as $cam => $val) { ${$cam}=$val; }
    $sql="DELETE FROM luminario WHERE idProyecto='$proy' AND idPlano='$plano'
      AND idLuminario='$lum'";
      echo $sql;
    $res=query($sql,$con);
    header("location:../?sec=gestionProyecto&idProyecto=$proy");
  }
?>
<!--fGestionProyecto.php------------------------------------------------------->
<!--cotizaciones.php----------------------------------------------------------->
<?php
  function generaTablaCotizaciones() {
    global $con;
    if($_SESSION['permiso'] == 1) {
      $sql="SELECT * FROM Cotizaciones ORDER BY id_cotizacion DESC";
      $res=query($sql, $con);
      while ($cam=mysql_fetch_array($res)) {
        $activo=$cam['activo'];
        $noCotizacion=$cam['id_cotizacion'];
        $fecha=$cam['fecha'];
        $idCliente=$cam['id_cliente']; //Termina FROM Cotizaciones
        $sql2="SELECT * FROM Cotizaciones WHERE id_cotizacion='$noCotizacion'";
        $res3=query($sql2, $con);
        $cam=mysql_fetch_array($res3);
        $idUsuario=$cam['id_usuario']; //Termina FROM Cotizaciones 2
        $sql2="SELECT * FROM Usuarios WHERE id_usuario='$idUsuario'";
        $res0=query($sql2, $con);
        $cam=mysql_fetch_array($res0);
        $vendedor=$cam['nombre'] . ' ' . $cam['apellido_p'];
        $sql2="SELECT * FROM Clientes WHERE id_num_cliente='$idCliente'";
        $res2=query($sql2, $con);
        $cam=mysql_fetch_array($res2);
        $empresa=$cam['empresa']; //Termina FROM Clientes
?>
        <tr><!--Gerena contenido de la tabla-->
          <td><?php echo $noCotizacion; ?></td>
          <td><?php echo $fecha; ?></td>
          <td><?php echo $empresa; ?></td>
          <td><?php echo $vendedor; ?></td>
          <td>
            <div onclick="verCotizacion(<?php echo $noCotizacion; ?>)">
              <span>Ver</span>
            </div> <!--acciones.js-->
            <div onclick="eliminarCotizacion(<?php echo $noCotizacion; ?>)">
              <span>Eliminar</span>
            </div> <!--acciones.js-->
          </td>
        </tr>
        <?php
      }
    }
    else {
      $sesionUsuario=$_SESSION['user'];
      $sql="SELECT * FROM Cotizaciones WHERE id_usuario='$sesionUsuario'
        ORDER BY id_cotizacion DESC";
      $res=query($sql, $con);
      while ($cam=mysql_fetch_array($res)) {
        $activo=$cam['activo'];
        $noCotizacion=$cam['id_cotizacion'];
        $fecha=$cam['fecha'];
        $idCliente=$cam['id_cliente']; //Termina FROM Cotizaciones
        $sql2="SELECT * FROM Cotizaciones WHERE id_cotizacion='$noCotizacion'";
        $res3=query($sql2, $con);
        $cam=mysql_fetch_array($res3);
        $idUsuario=$cam['id_usuario']; //Termina FROM Cotizaciones 2
        $sql2="SELECT * FROM Usuarios WHERE id_usuario='$idUsuario'";
        $res0=query($sql2, $con);
        $cam=mysql_fetch_array($res0);
        $vendedor=$cam['nombre'] . ' ' . $cam['apellido_p'];
        $sql2="SELECT * FROM Clientes WHERE id_num_cliente='$idCliente'";
        $res2=query($sql2, $con);
        $cam=mysql_fetch_array($res2);
        $empresa=$cam['empresa']; //Termina FROM Clientes
        ?>
        <tr>
          <td><?php echo $noCotizacion; ?></td>
          <td><?php echo $fecha; ?></td>
          <td><?php echo $empresa; ?></td>
          <td><?php echo $vendedor; ?></td>
          <td>
            <div class="verP2"
              onclick="verCotizacion(<?php echo $noCotizacion; ?>)">
              <span>Ver</span>
            </div> <!--acciones.js-->
          </td>
        </tr>
        <?php
      }
    }
  }
?>
<!--fCotizaciones.php---------------------------------------------------------->
<!--verCotizacion.php---------------------------------------------------------->
<?php
  function generaDatosCotizacion() {
    global $con;
    $idCotizacion=$_GET['cotizacion'];
    $sql="SELECT * FROM Cotizaciones WHERE id_cotizacion='$idCotizacion'";
    $res=query($sql, $con);
    $cam=mysql_fetch_array($res);
    $idCotizacion=$cam['id_cotizacion'];
    $fecha=$cam['fecha'];
    $vigencia=$cam['vigencia'];
    $noPartidas=$cam['no_partidas'];
    ?>
    <h3>No Cotizacion:</h3>
    <span class="noCotizacion"><?php echo $idCotizacion; ?></span>
    <div class="break space20px"></div>
    <h3>Fecha:</h3>
    <span><?php echo $fecha; ?></span>
    <div class="break space20px"></div>
    <h3>Vigencia:</h3>
    <span><?php echo $vigencia; ?></span>
    <div class="break space20px"></div>
    <h3>Partidas:</h3>
    <span><?php echo $noPartidas; ?></span>
    <?php
  }
  function generaDatosVenClien() {
    global $con;
    $idCotizacion=$_GET['cotizacion'];
    $sql="SELECT * FROM Cotizaciones WHERE id_cotizacion='$idCotizacion'";
    $res=query($sql, $con);
    $cam=mysql_fetch_array($res);
    $idCliente=$cam['id_cliente']; //TerminaCotizaciones
    $sql="SELECT * FROM Datos_Cotizacion WHERE id_cotizacion='$idCotizacion'";
    $res=query($sql, $con);
    $cam=mysql_fetch_array($res);
    $dCliente=$cam['datos_cliente'];
    $dContacto=$cam['datos_contacto'];
    $dVendedor=$cam['datos_vendedor'];
    ?>
    <h3>Cliente:</h3>
    <span><?php echo $dCliente; ?></span>
    <div class="break space20px"></div>
    <h3>Datos de contacto:</h3>
    <span><?php echo $dContacto; ?></span>
    <div class="break space20px"></div>
    <h3>Datos del vendedor:</h3>
    <span><?php echo $dVendedor; ?></span>
    <div class="break space20px"></div>
    <?php
  }
  function generaTablaPartidas() {
    global $con;
    $idCotizacion=$_GET['cotizacion'];
    $sql="SELECT * FROM Partidas WHERE id_cotizacion='$idCotizacion' ORDER BY
      no_partida ASC";
    $res=query($sql, $con);
    while ($cam=mysql_fetch_array($res)) {
      $partida=$cam['no_partida'];
      $cantidad=$cam['cantidad'];
      $catalogo=$cam['catalogo'];
      ?>
      <tr>
        <td><?php echo $partida; ?></td>
        <td><?php echo $cantidad; ?></td>
        <td><?php echo $catalogo; ?></td>
      </tr>
      <?php
    }
  }
?>
<!--fVerCotizacion.php--------------------------------------------------------->
<!--index.php------------------------------------------------------------------>
<script>
  var logeado=<?php echo $logeado; ?>;
  if(logeado == 1) {
    var user="<?php if(isset($_SESSION['nUser']))echo $_SESSION['nUser'];?>";
  } //Para mostrar nombre en header
</script>
<!--fIndex.php----------------------------------------------------------------->
  <!--end-------------------------------------------------------------------->
