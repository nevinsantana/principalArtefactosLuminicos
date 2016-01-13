<?php /*guardaForm();*/ ?>
<section class="sectionContainer">
  <section id="nuevoProyecto" class="vertical2 azul" onclick="abreNP()">
    <p id="tituloNuevoProyecto">Nuevo proyecto</p>
    <div id="iconoNuevoProyecto" class="iconoSection">
      <img src="images/iconoNuevoProyecto.png" width="254px" height="254px"
        alt="Ícono nuevo proyecto">
    </div>
    <section id="sectionAbierta" class="sectionAbierta">
      <article id="topBar" class="topBar"></article>
      <article id="contentSectionAbierta" class="contentSectionAbierta">
        <div class="contentContent">
          <div class="dividerBar" onclick="showGeneral()">
            <i class="fa fa-dot-circle-o"></i><h1>General</h1>
          </div>
          <form action="php/saver.php" method="POST" name="formNP">
          <div id="nPGeneral">
    				<span class="input input--kohana">
    					<input class="input__field input__field--kohana" type="text"
                value="<?php nProyecto(); ?>" disabled />
    					<label class="input__label input__label--kohana" for="input-29">
    						<i class="fa fa-fw fa-gear fa-spin icon icon--kohana"></i>
    						<span class="input__label-content input__label-content--kohana">
                  No proyecto
                </span>
    					</label>
    				</span>
            <span class="input input--kohana">
    					<input class="input__field input__field--kohana" type="text"
                value="<?php nomUsuario(); ?>" disabled />
    					<label class="input__label input__label--kohana" for="input-29">
    						<i class="fa fa-fw fa-user icon icon--kohana"></i>
    						<span class="input__label-content input__label-content--kohana">
                  Usuario
                </span>
    					</label>
    				</span>
            <span class="input input--kohana">
    					<input class="input__field input__field--kohana" type="text"
                 name="proyectoNP" oninput="cambiaGuardarNP()" required/>
    					<label class="input__label input__label--kohana" for="input-29">
    						<i class="fa fa-fw fa-home icon icon--kohana"></i>
    						<span class="input__label-content input__label-content--kohana">
                  Proyecto
                </span>
    					</label>
    				</span>
            <span class="input input--kohana">
    					<input class="input__field input__field--kohana" type="text"
                id="fechaDP" onfocus="abreDP()" onblur="cierraDP()"
                name="fechaNP"/>
    					<label class="input__label input__label--kohana" for="input-29">
    						<i class="fa fa-fw fa-calendar icon icon--kohana"></i>
    						<span class="input__label-content input__label-content--kohana">
                  Fecha
                </span>
    					</label>
    				</span>
          </div>
            <div class="dividerBar" onclick="showUbicacion()">
              <i class="fa fa-map-marker"></i><h1>Ubicación</h1>
            </div>
            <div id="nPUbicacion">
            <span class="input input--kohana">
    					<input class="input__field input__field--kohana" type="text"
                name="estadoNP"/>
    					<label class="input__label input__label--kohana" for="input-29">
    						<i class="fa fa-fw fa-globe icon icon--kohana"></i>
    						<span class="input__label-content input__label-content--kohana">
                  Estado
                </span>
    					</label>
    				</span>
            <span class="input input--kohana">
    					<input class="input__field input__field--kohana" type="text"
                name="municipioNP" />
    					<label class="input__label input__label--kohana" for="input-29">
    						<i class="fa fa-fw fa-map icon icon--kohana"></i>
    						<span class="input__label-content input__label-content--kohana">
                  Municipio
                </span>
    					</label>
    				</span>
            <span class="input input--kohana">
    					<input class="input__field input__field--kohana" type="text"
                name="coloniaNP"/>
    					<label class="input__label input__label--kohana" for="input-29">
    						<i class="fa fa-fw fa-map-o icon icon--kohana"></i>
    						<span class="input__label-content input__label-content--kohana">
                  Colonia
                </span>
    					</label>
    				</span>
            <span class="input input--kohana">
    					<input class="input__field input__field--kohana" type="text"
                name="calleNP"/>
    					<label class="input__label input__label--kohana" for="input-29">
    						<i class="fa fa-fw fa-road icon icon--kohana"></i>
    						<span class="input__label-content input__label-content--kohana">
                  Calle
                </span>
    					</label>
    				</span>
            <span class="input input--kohana">
    					<input class="input__field input__field--kohana" type="text"
                name="nINP"/>
    					<label class="input__label input__label--kohana" for="input-29">
    						<i class="fa fa-fw fa-street-view icon icon--kohana"></i>
    						<span class="input__label-content input__label-content--kohana">
                  Número interior
                </span>
    					</label>
    				</span>
            <span class="input input--kohana">
    					<input class="input__field input__field--kohana" type="text"
                name="nENP"/>
    					<label class="input__label input__label--kohana" for="input-29">
    						<i class="fa fa-fw fa-building icon icon--kohana"></i>
    						<span class="input__label-content input__label-content--kohana">
                  Número exterior
                </span>
    					</label>
    				</span>
            <span class="input input--kohana">
    					<input class="input__field input__field--kohana" type="text"
                name="cPNP"/>
    					<label class="input__label input__label--kohana" for="input-29">
    						<i class="fa fa-fw fa-hashtag icon icon--kohana"></i>
    						<span class="input__label-content input__label-content--kohana">
                  Código postal
                </span>
    					</label>
    				</span>
          </div>
          <div class="saveBar" id="guardaNP" >
            <span class="fa-stack fa-lg">
            <i class="fa fa-floppy-o fa-stack-1x"></i>
            <i class="fa fa-ban fa-stack-2x text-danger" id="iconoBotonNP"></i>
            </span>
              <h1 id="textoBotonNP">Nombre el proyecto</h1>
          </div>
        </form>
        </div>
      </article>
    </section>
  </section>
  <section id="proyectosExistentes" class="vertical2 rojo" onclick="abrePE()">
    <p id="tituloProyectosExistentes">Proyectos existentes</p>
    <div id="iconoProyectosExistentes" class="iconoSection">
      <img src="images/iconoProyectosExistentes.png" width="254px"
        height="254px" alt="Ícono proyectos existentes">
    </div>
    <section id="sectionAbierta2" class="sectionAbierta2">
      <article id="topBar2" class="topBar2"></article>
      <article id="contentSectionAbierta2" class="contentSectionAbierta2">
        <div class="contentContent2">
          <div class="tableContainerPE">
            <table class="tablaPE">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Fecha</th>
                  <th>Nombre</th>
                  <th>acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php generaTablaPE(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </article>
    </section>
  </section>
</section>
