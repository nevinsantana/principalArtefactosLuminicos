<?php $idProyecto = $_GET['idProyecto'];
  $noPlano = generaNoPlano();?>
<div class="creaPlano" id="creaPlano">
  <span class="fa-stack fa-lg cierraCrearGP" onclick="cierraCrearGP()">
    <i class="fa fa-circle fa-stack-2x"></i>
    <i class="fa fa-times fa-stack-1x fa-inverse"></i>
  </span>
  <hr class="hrCreaPlano">
  <form method="POST" action="php/saver.php?idProyecto=<?php echo $idProyecto ?>&plano=true">
    <section class="centrarCS">
      <select class="cs-select cs-skin-circular" onclick="cambiaGuardarPlano()"
        name="tipoPlano">
        <option value="" disabled selected>Tipe</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
    </section>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana" type="text"
        name="idPlano" value="<?php echo $noPlano ?>"/>
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-object-group icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          No plano
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana" type="text"
        name="nivelRecomendado"/>
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-list-ol icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Nivel recomendado
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana" type="text"
        name="idPlano"/>
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-arrows-h icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Ancho
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana" type="text"
        name="idPlano"/>
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-long-arrow-right icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Largo
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana" type="text"
        name="idPlano"/>
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-long-arrow-up icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Alto
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana" type="text"
        name="idPlano"/>
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-sort-numeric-asc icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Ancho de camellón
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana" type="text"
        name="idPlano"/>
      <label class="input__label input__label--kohana-eProyecto" for="input-29">
        <i class="fa fa-fw fa-road icon icon--kohana-eProyecto"></i>
        <span class="input__label-content input__label-content--kohana">
          Ancho de avenida
        </span>
      </label>
    </span>
    <span class="input input--kohana-eProyecto">
      <input class="input__field input__field--kohana" type="text"
        name="idPlano"/>
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

<div class="editaProyecto" id="editaProyecto">
  <hr class="hrProyecto">
  <span class="input input--kohana-eProyecto">
    <input class="input__field input__field--kohana" type="text"
      name="idProyecto"/>
    <label class="input__label input__label--kohana-eProyecto" for="input-29">
      <i class="fa fa-fw fa-gear fa-spin icon icon--kohana-eProyecto"></i>
      <span class="input__label-content input__label-content--kohana">
        No proyecto
      </span>
    </label>
  </span>
  <span class="input input--kohana-eProyecto">
    <input class="input__field input__field--kohana" type="text"
      name="idProyecto"/>
    <label class="input__label input__label--kohana-eProyecto" for="input-29">
      <i class="fa fa-fw fa-th-list icon icon--kohana-eProyecto"></i>
      <span class="input__label-content input__label-content--kohana">
        No cotizacion
      </span>
    </label>
  </span>
  <span class="input input--kohana-eProyecto">
    <input class="input__field input__field--kohana" type="text"
      name="idProyecto"/>
    <label class="input__label input__label--kohana-eProyecto" for="input-29">
      <i class="fa fa-fw fa-user icon icon--kohana-eProyecto"></i>
      <span class="input__label-content input__label-content--kohana">
        Usuario
      </span>
    </label>
  </span>
  <span class="input input--kohana-eProyecto">
    <input class="input__field input__field--kohana" type="text"
      name="idProyecto"/>
    <label class="input__label input__label--kohana-eProyecto" for="input-29">
      <i class="fa fa-fw fa-users icon icon--kohana-eProyecto"></i>
      <span class="input__label-content input__label-content--kohana">
        Cliente
      </span>
    </label>
  </span>
  <span class="input input--kohana-eProyecto">
    <input class="input__field input__field--kohana" type="text"
      name="idProyecto"/>
    <label class="input__label input__label--kohana-eProyecto" for="input-29">
      <i class="fa fa-fw fa-pencil icon icon--kohana-eProyecto"></i>
      <span class="input__label-content input__label-content--kohana">
        Cambio
      </span>
    </label>
  </span>
  <span class="input input--kohana-eProyecto">
    <input class="input__field input__field--kohana" type="text"
      name="idProyecto"/>
    <label class="input__label input__label--kohana-eProyecto" for="input-29">
      <i class="fa fa-fw fa-home icon icon--kohana-eProyecto"></i>
      <span class="input__label-content input__label-content--kohana">
        Nombre proyecto
      </span>
    </label>
  </span>
  <span class="input input--kohana-eProyecto">
    <input class="input__field input__field--kohana" type="text"
      name="idProyecto"/>
    <label class="input__label input__label--kohana-eProyecto" for="input-29">
      <i class="fa fa-fw fa-calendar icon icon--kohana-eProyecto"></i>
      <span class="input__label-content input__label-content--kohana">
        Fecha
      </span>
    </label>
  </span>
  <span class="input input--kohana-eProyecto">
    <input class="input__field input__field--kohana" type="text"
      name="idProyecto"/>
    <label class="input__label input__label--kohana-eProyecto" for="input-29">
      <i class="fa fa-fw fa-globe icon icon--kohana-eProyecto"></i>
      <span class="input__label-content input__label-content--kohana">
        Estado
      </span>
    </label>
  </span>
  <span class="input input--kohana-eProyecto">
    <input class="input__field input__field--kohana" type="text"
      name="idProyecto"/>
    <label class="input__label input__label--kohana-eProyecto" for="input-29">
      <i class="fa fa-fw fa-map icon icon--kohana-eProyecto"></i>
      <span class="input__label-content input__label-content--kohana">
        Municipio
      </span>
    </label>
  </span>
  <span class="input input--kohana-eProyecto">
    <input class="input__field input__field--kohana" type="text"
      name="idProyecto"/>
    <label class="input__label input__label--kohana-eProyecto" for="input-29">
      <i class="fa fa-fw fa-map-o icon icon--kohana-eProyecto"></i>
      <span class="input__label-content input__label-content--kohana">
        Colonia
      </span>
    </label>
  </span>
  <span class="input input--kohana-eProyecto">
    <input class="input__field input__field--kohana" type="text"
      name="idProyecto"/>
    <label class="input__label input__label--kohana-eProyecto" for="input-29">
      <i class="fa fa-fw fa-road icon icon--kohana-eProyecto"></i>
      <span class="input__label-content input__label-content--kohana">
        Calle
      </span>
    </label>
  </span>
  <span class="input input--kohana-eProyecto">
    <input class="input__field input__field--kohana" type="text"
      name="idProyecto"/>
    <label class="input__label input__label--kohana-eProyecto" for="input-29">
      <i class="fa fa-fw fa-street-view icon icon--kohana-eProyecto"></i>
      <span class="input__label-content input__label-content--kohana">
        No Interior
      </span>
    </label>
  </span>
  <span class="input input--kohana-eProyecto">
    <input class="input__field input__field--kohana" type="text"
      name="idProyecto"/>
    <label class="input__label input__label--kohana-eProyecto" for="input-29">
      <i class="fa fa-fw fa-building icon icon--kohana-eProyecto"></i>
      <span class="input__label-content input__label-content--kohana">
        No exterior
      </span>
    </label>
  </span>
  <span class="input input--kohana-eProyecto">
    <input class="input__field input__field--kohana" type="text"
      name="idProyecto"/>
    <label class="input__label input__label--kohana-eProyecto" for="input-29">
      <i class="fa fa-fw fa-hashtag icon icon--kohana-eProyecto"></i>
      <span class="input__label-content input__label-content--kohana">
        C.P.
      </span>
    </label>
  </span>
  <span class="input input--kohana-eProyecto">
    <input class="input__field input__field--kohana" type="text"
      name="idProyecto"/>
    <label class="input__label input__label--kohana-eProyecto" for="input-29">
      <i class="fa fa-fw fa-sticky-note-o icon icon--kohana-eProyecto"></i>
      <span class="input__label-content input__label-content--kohana">
        Notas
      </span>
    </label>
  </span>
  <div class="editaPlano">
    <hr class="hrPlano">
    <button class="botonEditaProyecto" onclick="agregaPlano()">
      <i class="fa fa-fw fa-plus-circle"></i>
    </button>
    <div class="editaLuminario">
      <hr class="hrLuminario">
      <button class="botonEditaProyecto">
        <i class="fa fa-fw fa-plus-circle"></i>
      </button>
    </div>
  </div>
</div>
<script src="js/circleSelect/selectFX.js"></script>
    <script>
    (function() {
      [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
        new SelectFx(el, {
          stickyPlaceholder: false,
          onChange: function(val){
            var img = document.createElement('img');
            img.src = 'img/'+val+'.png';
            img.onload = function() {
              document.querySelector('span.cs-placeholder').style.backgroundImage = 'url(img/'+val+'.png)';
            };
          }
        });
      } );
    })();
    </script>
