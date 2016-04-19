<?php
  $cam=pGetIdProyecto(); $noPlano=generaNoPlano();
  foreach($cam as $camp => $val) {  $val=dText($val); ${$camp}=$val; }
?>
<div class="pElPlano" id="pElPlano">
  <span id="advPlano"></span><span id="bNoPlano"></span>
  <div class="palTa">
    <i class="fa fa-check fa-2x izq poin" onclick="dPlano(<?php
      echo $idProyecto; ?>)"></i>
    <i class="fa fa-times fa-2x der poin" onclick="cBPlano()"></i>
  </div>
</div>
<div class="pElNota" id="pElNota">
  <span id="advNota"></span><span id="bNoNota"></span>
  <div class="palTa">
    <i class="fa fa-check fa-2x izq poin" onclick="dNota(<?php
      echo $idProyecto; ?>)"></i>
    <i class="fa fa-times fa-2x der poin" onclick="cBNota()"></i>
  </div>
</div>
<div class="pElLum" id="pElLum">
  <span id="advLum"></span><span id="bNoLum"></span>
  <span id="advNotaL"></span><span id="noNotaL"></span>
  <div class="palTa">
    <i class="fa fa-check fa-2x izq poin" onclick="dLum(<?php
      echo $idProyecto; ?>)"></i>
    <i class="fa fa-times fa-2x der poin" onclick="cBLum()"></i>
  </div>
</div>
<div class="creaPlano" id="creaPlano">
  <span class="fa-stack fa-lg cierraCrearGP" onclick="cierraCrearGP()">
    <i class="fa fa-circle fa-stack-2x"></i>
    <i class="fa fa-times fa-stack-1x fa-inverse"></i>
  </span>
  <hr class="hrCreaPlano">
  <form method="POST" action="php/saver.php?idProyecto=<?php echo $idProyecto
    ?>&plano=<?php echo $noPlano ?>">
    <section class="centrarCS">
      <select class="cs-select cs-skin-circular" onclick="cambiaGuardarPlano()"
        name="tipoPlano" id="tPla" onChange="desactivaInputsPlano()">
        <option value="" disabled selected>Tipe</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
    </section>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        value="<?php echo $noPlano ?>" title="No de plano" disabled>
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-object-group icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          No plano
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto disabled" id="nRe">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="nivelRecomendado" title="Nivel recomendado">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-list-ol icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Nivel recomendado
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto disabled" id="anc">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="ancho" title="Ancho">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-arrows-h icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Ancho
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto disabled" id="lar">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="largo" title="Largo">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-long-arrow-right icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Largo
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto disabled" id="alt">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="alto" title="Alto">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-long-arrow-up icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Alto
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto disabled" id="aCa">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="anCame" title="Ancho de camellón">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-sort-numeric-asc icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Ancho de camellón
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto disabled" id="aAv">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="anAve" title="Ancho de avenida">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-road icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Ancho de avenida
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto disabled" id="dIn">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="disIn" title="Distancia interpostal">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-random icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Distancia interpostal
        </span>
      </label>
    </span>
    <div class="saveBar" id="guardaPlano" >
      <span class="fa-stack fa-lg">
      <i class="fa fa-floppy-o fa-stack-1x"></i>
      <i class="fa fa-ban fa-stack-2x text-danger" id="iconoBotonNP"></i>
      </span>
      <h1 id="textoBotonNP">Seleccione un tipo de plano</h1>
    </div>
  </form>
</div>
<div class="creaLum" id="creaLum">
  <span class="fa-stack fa-lg cierraCrearGP" onclick="cierraCrearGL()">
    <i class="fa fa-circle fa-stack-2x"></i>
    <i class="fa fa-times fa-stack-1x fa-inverse"></i>
  </span>
  <hr class="hrCreaLum">
  <form method="POST" name="formLum">
    <span class="input input--kohana-eProyecto input--filled">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        title="No plano" id="planNo" name="planNo" readonly>
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-object-group icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          No plano
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto input--filled">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        title="No Luminario" id="lumNo" name="noLum" readonly>
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-archive icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Luminario No
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        title="Catálogo" oninput="cambiaGuardarLum()" id="catLum" name="cat">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-lightbulb-o icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Catálogo
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        title="Watts" name="watts" id="watts">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-flash icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Watts
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        title="Lumens iniciales" name="lumens" id="lumens">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-sun-o icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Lumens iniciales
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        title="Factor depreciación" name="dep" id="fDep">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-hand-o-down icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Factor depreciación
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        title="Altura montaje" name="altMont" id="aMont">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-arrows-v icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Altura montaje
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        title="Altura plano trabajo" name="altPlan" id="aPTra">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-hospital-o icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Altura plano trabajo
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        title="Tipo montaje" alt="tipoMont" id="tMont">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-legal icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Tipo montaje
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        title="Largo brazo" name="laBrazo" id="lBra">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-long-arrow-right icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Largo brazo
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        title="Tilt" name="tilt" id="tilt">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-undo icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Tilt
        </span>
      </label>
    </span>
    <div class="saveBar" id="guardaLum" onclick="gLumF(<?php echo $idProyecto ?>)">
      <span class="fa-stack fa-lg">
      <i class="fa fa-floppy-o fa-stack-1x"></i>
      <i class="fa fa-ban fa-stack-2x text-danger" id="iconoBotonNL"></i>
      </span>
      <h1 id="textoBotonNL">Inserte un catálogo</h1>
    </div>
  </form>
</div>
<div class="creaLuminario" id="creaLuminario">
  <span class="fa-stack fa-lg cierraCrearGP" onclick="cierraCrearGP()">
    <i class="fa fa-circle fa-stack-2x"></i>
    <i class="fa fa-times fa-stack-1x fa-inverse"></i>
  </span>
  <hr class="hrCreaPlano">
  <form method="POST" action="php/saver.php?idProyecto=<?php echo $idProyecto
    ?>&plano=<?php echo $noPlano ?>">
    <section class="centrarCS">
      <select class="cs-select cs-skin-circular" onclick="cambiaGuardarPlano()"
        name="tipoPlano" id="tPla" onChange="desactivaInputsPlano()">
        <option value="" disabled selected>Tipe</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
    </section>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        value="<?php echo $noPlano ?>" title="No de plano" disabled>
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-object-group icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          No plano
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto disabled" id="nRe">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="nivelRecomendado" title="Nivel recomendado">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-list-ol icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Nivel recomendado
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto disabled" id="anc">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="ancho" title="Ancho">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-arrows-h icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Ancho
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto disabled" id="lar">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="largo" title="Largo">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-long-arrow-right icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Largo
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto disabled" id="alt">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="alto" title="Alto">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-long-arrow-up icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Alto
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto disabled" id="aCa">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="anCame" title="Ancho de camellón">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-sort-numeric-asc icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Ancho de camellón
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto disabled" id="aAv">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="anAve" title="Ancho de avenida">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-road icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Ancho de avenida
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto disabled" id="dIn">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="disIn" title="Distancia interpostal">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-random icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Distancia interpostal
        </span>
      </label>
    </span>
  </form>
</div>
<div class="editaProyecto" id="editaProyecto">
  <div id="cContainer1">
    <hr class="hrProyecto">
    <div id="iPContainer1" class="center" onclick="toggleIt('pContainer',1)">
      <i class="fa fa-chevron-down"></i>
    </div>
  </div>
  <div id="pContainer">
  <form action="php/saver.php?gDProy=true&proy=<?php echo $idProyecto ?>"
    method="POST">
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="idProyecto" value="<?php echo $idProyecto; ?>" title="No Proyecto"
        disabled>
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-gear fa-spin icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          No proyecto
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="noCot" value="<?php echo $idCotizacion; ?>"
        title="Referencia a cotización">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-th-list icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          No cotización
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="usuario" value="<?php echo $idUsuario ?>" title="Usuario"
        disabled>
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-user icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Usuario
        </span>
      </label>
    </span>
    <section class="fColorFont">
      <select class="cs-select cs-skin-border" name="clien">
        <?php oClientesS($idProyecto); ?>
      </select>
    </section>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="nomPr" value="<?php echo $nombreProyecto ?>"
        title="Nombre proyecto">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-home icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Nombre proyecto
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="fecha" value="<?php echo $fecha ?>">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-calendar icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Fecha
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="estad" value="<?php echo $estado; ?>" title="Estado">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-globe icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Estado
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="munic" value="<?php echo $municipio; ?>" title="Municipio">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-map icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Municipio
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="colon" value="<?php echo $colonia; ?>" title="Colonia">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-map-o icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Colonia
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="calle" value="<?php echo $calle; ?>" title="Calle">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-road icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Calle
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="noInt" value="<?php echo $numInt; ?>" title="No Interior">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-street-view icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          No Interior
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="noExt" value="<?php echo $numExt; ?>" title="No Exterior">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-building icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          No exterior
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="cp" value="<?php echo $cp; ?>" title="Código postal" maxlength="5"
        onkeypress="return cCP(event);">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-hashtag icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          C.P.
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana-eProyecto" type="text"
        name="nota" title="Nueva nota" id="gNota" oninput="cBotonG()">
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-sticky-note-o icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Nueva nota
        </span>
      </label>
      <div id="aNota" onclick="gNota(<?php echo $idProyecto ?>)">
        <i class="fa fa-fw fa-floppy-o vCIcon"></i>
      </div>
    </span>
    <button class="bGDProy">
      <i class="fa fa-fw fa-floppy-o"></i>
      Guardar datos
    </button>
  </form>
</div>
<?php gTablaNotas($idProyecto); ?>
  <div class="editaPlano">
    <div id="cContainer3">
      <hr class="hrPlano">
      <div id="iPContainer3" class="center" onclick="toggleIt('plContainer',3)">
        <i class="fa fa-chevron-down"></i>
      </div>
    </div>
    <div id="plContainer">
    <section class="tPlanos"><?php generaPlanos($idProyecto); ?></section>
    <button class="botonEditaProyecto" onclick="agregaPlano()">
      <i class="fa fa-fw fa-plus-circle"></i>
    </button>
  </div>
</div>
<script src="js/circleSelect/selectFx.js"></script>
<script>
  (function() {
    [].slice.call(document.querySelectorAll('select.cs-select')).forEach(
      function(el) {
      new SelectFx(el, {
        stickyPlaceholder: false,
        onChange: function(val) {
          var img=document.createElement('img');
          img.src='img/'+val+'.png';
          img.onload=function() {
            document.querySelector('span.cs-placeholder').style.backgroundImage=
              'url(img/'+val+'.png)';
          };
        }
    });});})();
</script>
