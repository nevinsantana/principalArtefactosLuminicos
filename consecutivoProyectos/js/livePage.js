  /*start********************************************************************/

/*globalVariables**************************************************************/
var sectionAbierta, sectionIs,
idUbicarBotones1= document.getElementById('ubicarBotones1'),
idUbicarBotones2= document.getElementById('ubicarBotones2'),
idSectionAbierta= document.getElementById('sectionAbierta'),
idSectionAbierta2= document.getElementById('sectionAbierta2'),
idTopBar= document.getElementById('topBar'),
idTopBar2= document.getElementById('topBar2'),
idCSA= document.getElementById('contentSectionAbierta'),
idCSA2= document.getElementById('contentSectionAbierta2'),
idProyectosExistentes= document.getElementById('proyectosExistentes'),
idNuevoProyecto= document.getElementById('nuevoProyecto'),
idNuevoCliente= document.getElementById('nuevoCliente'),
idEliminarCliente= document.getElementById('eliminarCliente'),
idModificarCliente= document.getElementById('modificarCliente'),
idListaClientes= document.getElementById('listaClientes'),
idTituloNuevoProyecto= document.getElementById('tituloNuevoProyecto'),
idTituloProyectosExistentes=
  document.getElementById('tituloProyectosExistentes'),
idNPGeneral= document.getElementById('nPGeneral'),
idNPUbicacion= document.getElementById('nPUbicacion'),
idTituloNuevoCliente= document.getElementById('tituloNuevoCliente'),
idTituloEliminarCliente= document.getElementById('tituloEliminarCliente'),
idTituloModificarCliente= document.getElementById('tituloModificarCliente'),
idTituloListaClientes= document.getElementById('tituloListaClientes'),
idIconoNuevoProyecto= document.getElementById('iconoNuevoProyecto'),
idIconoProyectosExistentes= document.getElementById('iconoProyectosExistentes'),
idIconoNuevoCliente= document.getElementById('iconoNuevoCliente'),
idIconoEliminarCliente= document.getElementById('iconoEliminarCliente'),
idIconoModificarCliente= document.getElementById('iconoModificarCliente'),
idIconoListaClientes= document.getElementById('iconoListClientes'),
idBotonRegresar= document.getElementById('botonRegresar'),
idGuardaNP= document.getElementById('guardaNP'),
idGuardaPlano= document.getElementById('guardaPlano');
/*fGlobalVariables*************************************************************/

/*global***********************************************************************/
var width = (document.body.clientWidth);
if(width<500 &&
    /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
    navigator.userAgent)) {
  idTituloNuevoProyecto.style.fontSize="22px";
  idTituloProyectosExistentes.style.fontSize="22px";
  idIconoNuevoProyecto.style.marginLeft="43%";
  idIconoProyectosExistentes.style.marginLeft="43%";
}

var heightIcono = idIconoNuevoProyecto.offsetWidth;
idIconoNuevoProyecto.style.height=heightIcono + "px";
idIconoProyectosExistentes.style.height=heightIcono + "px";
/*fGlobal**********************************************************************/

/*kohanaInputs*****************************************************************/
/*!
 * classie - class helper functions
 * from bonzo https://github.com/ded/bonzo
 *
 * classie.has( elem, 'my-class' ) -> true/false
 * classie.add( elem, 'my-new-class' )
 * classie.remove( elem, 'my-unwanted-class' )
 * classie.toggle( elem, 'my-class' )
 */

/*jshint browser: true, strict: true, undef: true */
/*global define: false */

( function( window ) {

'use strict';

// class helper functions from bonzo https://github.com/ded/bonzo

function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}

// classList support for class management
// altho to be fair, the api sucks because it won't accept multiple classes at
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}

var classie = {
  // full names
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  // short names
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};

// transport
if ( typeof define === 'function' && define.amd ) {
  // AMD
  define( classie );
} else {
  // browser global
  window.classie = classie;
}

})( window );

(function() {
  // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/
  //Reference/Global_Objects/String/Trim
  if (!String.prototype.trim) {
    (function() {
      // Make sure we trim BOM and NBSP
      var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
      String.prototype.trim = function() {
        return this.replace(rtrim, '');
      };
    })();
  }

  [].slice.call( document.querySelectorAll( 'input.input__field' ) )
  .forEach( function( inputEl ) {
    // in case the input is already filled..
    if( inputEl.value.trim() !== '' ) {
      classie.add( inputEl.parentNode, 'input--filled' );
    }

    // events:
    inputEl.addEventListener( 'focus', onInputFocus );
    inputEl.addEventListener( 'blur', onInputBlur );
  } );

  function onInputFocus( ev ) {
    classie.add( ev.target.parentNode, 'input--filled' );
  }

  function onInputBlur( ev ) {
    if( ev.target.value.trim() === '' ) {
      classie.remove( ev.target.parentNode, 'input--filled' );
    }
  }
})();
/*fKohanaInputs****************************************************************/

/*circleSelect*****************************************************************/

/*fCircleSelect****************************************************************/

/*index.php********************************************************************/
function onresizeAnimaciones() {
  normalSectionElements();
  normalAbreNP();
  normalAbrePE();
  ajustaHeight();
}

function normalSectionElements() {
  var width = (document.body.clientWidth);
  if(width>1124) {
    if(idTopBar != "") {
    idTopBar.style.marginTop="170px";}
    idCSA.style.padding="210px 0 20px 0";
  }
  else {
    if(idTopBar != "") {
    idTopBar.style.marginTop="120px"; }
    idCSA.style.padding="160px 0 20px 0";
  }
}

function cierraSection() {
  idUbicarBotones1.style.zIndex="-999";
  idUbicarBotones2.style.zIndex="-999";
  idUbicarBotones1.style.opacity="0";
  idUbicarBotones2.style.opacity="0";
  if(sectionAbierta === true && sectionIs == "pNP") {
    idNuevoProyecto.style.position="relative";
    idNuevoProyecto.style.zIndex="2";
    idNuevoProyecto.style.top="0";
    idNuevoProyecto.style.height="50%";
    idNuevoProyecto.style.cursor="pointer";
    idTituloNuevoProyecto.style.top="45%";
    idTituloNuevoProyecto.style.transform= "translateY(-45%)";
    idIconoNuevoProyecto.style.marginLeft="47.5%";
    idIconoNuevoProyecto.style.top="55%";
    idIconoNuevoProyecto.style.transform= "translateY(-55%)";
    idBotonRegresar.style.top="3.5%";
    idBotonRegresar.style.opacity="0";
    sectionAbierta = false;
    idProyectosExistentes.style.height="50%";
    idProyectosExistentes.style.display="block";
    idProyectosExistentes.style.position="absolute";
    idProyectosExistentes.style.bottom="0";
    idProyectosExistentes.style.zIndex="1";
    idSectionAbierta.style.zIndex="-999";
    idSectionAbierta.style.opacity="0";
    var width = (document.body.clientWidth);
    if(width<500 &&
        /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
        navigator.userAgent)) {
      idTituloNuevoProyecto.style.fontSize="22px";
      idTituloProyectosExistentes.style.fontSize="22px";
      idIconoNuevoProyecto.style.marginLeft="43%";
      idIconoProyectosExistentes.style.marginLeft="43%";
    }
    idNPGeneral.style.display="none";
    idNPUbicacion.style.display="none";
    idSectionAbierta.style.zIndex="-999";
    idSectionAbierta.style.opacity="0";
  }
  if(sectionAbierta === true && sectionIs == "pPE") {
    idProyectosExistentes.style.position="absolute";
    idProyectosExistentes.style.zIndex="2";
    idProyectosExistentes.style.bottom="0";
    idProyectosExistentes.style.height="50%";
    idProyectosExistentes.style.cursor="pointer";
    idTituloProyectosExistentes.style.top="45%";
    idTituloProyectosExistentes.style.transform= "translateY(-45%)";
    idIconoProyectosExistentes.style.marginLeft="47.5%";
    idIconoProyectosExistentes.style.top="55%";
    idIconoProyectosExistentes.style.transform= "translateY(-55%)";
    idBotonRegresar.style.top="3.5%";
    idBotonRegresar.style.opacity="0";
    sectionAbierta = false;
    idNuevoProyecto.style.height="50%";
    idNuevoProyecto.style.display="block";
    idNuevoProyecto.style.position="absolute";
    idNuevoProyecto.style.top="0";
    idNuevoProyecto.style.zIndex="1";
    idSectionAbierta.style.zIndex="-999";
    idSectionAbierta.style.opacity="0";
    idSectionAbierta2.style.zIndex="-999";
    idSectionAbierta2.style.opacity="0";
    var width = (document.body.clientWidth);
    if(width<500 &&
        /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
        navigator.userAgent)) {
      idTituloProyectosExistentes.style.fontSize="22px";
      idTituloNuevoProyecto.style.fontSize="22px";
      idIconoProyectosExistentes.style.marginLeft="43%";
      idIconoNuevoProyecto.style.marginLeft="43%";
    }
  }
  if(sectionAbierta === true && sectionIs == "cNC" && sectionColor === true) {
    idProyectosExistentes.style.position="absolute";
    idProyectosExistentes.style.zIndex="2";
    idProyectosExistentes.style.bottom="0";
    idProyectosExistentes.style.height="50%";
    idProyectosExistentes.style.cursor="pointer";
    idTituloProyectosExistentes.style.top="45%";
    idTituloProyectosExistentes.style.transform= "translateY(-45%)";
    idIconoProyectosExistentes.style.marginLeft="47.5%";
    idIconoProyectosExistentes.style.top="55%";
    idIconoProyectosExistentes.style.transform= "translateY(-55%)";
    idBotonRegresar.style.top="3.5%";
    idBotonRegresar.style.opacity="0";
    sectionAbierta = false;
    idNuevoProyecto.style.height="50%";
    idNuevoProyecto.style.display="block";
    idNuevoProyecto.style.top="0";
    idNuevoProyecto.style.zIndex="1";
  }
}
/*fIndex.php*******************************************************************/

/*login.php********************************************************************/
/*fLogin.php*******************************************************************/

/*proyectos.php****************************************************************/
var proyectosSec = getUrlVars()["proyectosSec"];
if (proyectosSec=="NP"){
  abreNP();
}

function abreNP() {
  if(sectionAbierta!=true) {
    var width = (document.body.clientWidth);
    normalSectionElements()
    idTituloNuevoProyecto.style.transform= "none";
    idProyectosExistentes.style.position="absolute";
    idProyectosExistentes.style.zIndex="-899";
    idProyectosExistentes.style.bottom="0";
    idNuevoProyecto.style.position="absolute";
    idNuevoProyecto.style.zIndex="899";
    idNuevoProyecto.style.top="0";
    idNuevoProyecto.style.height="100%";
    idNuevoProyecto.style.cursor="default";
    idIconoNuevoProyecto.style.marginLeft="3%";
    idIconoNuevoProyecto.style.transform= "none";
    idSectionAbierta.style.zIndex="999";
    idSectionAbierta.style.opacity="1";
    idUbicarBotones1.style.zIndex="999";
    idUbicarBotones2.style.zIndex="999";
    idUbicarBotones1.style.opacity="1";
    idUbicarBotones2.style.opacity="1";
    if(width>1124) {
      idTituloNuevoProyecto.style.top="110px";
      idIconoNuevoProyecto.style.top="68px";
      idBotonRegresar.style.top="105px";
      idBotonRegresar.style.opacity="1";
    }
    else {
      idTituloNuevoProyecto.style.top="70px";
      idIconoNuevoProyecto.style.top="30px";
      idBotonRegresar.style.top="60px";
      idBotonRegresar.style.opacity="1";
    }
  }
  sectionAbierta = true;
  sectionIs = "pNP";
}

function normalAbreNP() {
  var width = (document.body.clientWidth);
  if (sectionAbierta === true && sectionIs == "pNP") {
    if(width>1124) {
      idTituloNuevoProyecto.style.top="110px";
      idIconoNuevoProyecto.style.top="68px";
      idBotonRegresar.style.top="105px";
      idBotonRegresar.style.opacity="1";
    }
    else {
      idTituloNuevoProyecto.style.top="70px";
      idIconoNuevoProyecto.style.top="30px";
      idBotonRegresar.style.top="60px";
      idBotonRegresar.style.opacity="1";
    }
    if(width<500) {
      idTituloNuevoProyecto.style.fontSize="25px";
    }
  }
}

function abrePE() {
  if(sectionAbierta!=true) {
    var width = (document.body.clientWidth);
    normalSectionElements();
    idTituloProyectosExistentes.style.transform= "none";
    idNuevoProyecto.style.position="absolute";
    idNuevoProyecto.style.zIndex="-899";
    idNuevoProyecto.style.top="40px";
    idProyectosExistentes.style.position="absolute";
    idProyectosExistentes.style.zIndex="899";
    idProyectosExistentes.style.bottom="0";
    idProyectosExistentes.style.height="100%";
    idProyectosExistentes.style.cursor="default";
    idIconoProyectosExistentes.style.marginLeft="3%";
    idIconoProyectosExistentes.style.transform= "none";
    idSectionAbierta2.style.zIndex="999";
    idSectionAbierta2.style.opacity="1";
    if(width>1124) {
      idTituloProyectosExistentes.style.top="110px";
      idIconoProyectosExistentes.style.top="68px";
      idBotonRegresar.style.top="105px";
      idBotonRegresar.style.opacity="1";
      idTopBar2.style.marginTop = "170px";
      idCSA2.style.padding="210px 0 18px 0";
    }
    else {
      idTituloProyectosExistentes.style.top="70px";
      idIconoProyectosExistentes.style.top="40px";
      idBotonRegresar.style.top="60px";
      idBotonRegresar.style.opacity="1";
      idTopBar2.style.marginTop = "130px";
      idCSA2.style.padding="170px 0 18px 0";
    }
    if(width<500) {
      idTituloProyectosExistentes.style.fontSize="20px";
    }
    else {
      idTituloProyectosExistentes.style.fontSize="25px";
    }
  }
  sectionAbierta = true;
  sectionIs = "pPE";
}

function normalAbrePE() {
  var width = (document.body.clientWidth);
  if (sectionAbierta === true && sectionIs == "pPE") {
    if(width>1124) {
      idTituloProyectosExistentes.style.top="110px";
      idIconoProyectosExistentes.style.top="68px";
      idBotonRegresar.style.top="105px";
      idBotonRegresar.style.opacity="1";
      idTopBar2.style.marginTop = "170px";
      idCSA2.style.padding="210px 0 18px 0";
    }
    else {
      idTituloProyectosExistentes.style.top="70px";
      idIconoProyectosExistentes.style.top="40px";
      idBotonRegresar.style.top="60px";
      idBotonRegresar.style.opacity="1";
      idTopBar2.style.marginTop = "125px";
      idCSA2.style.padding="170px 0 18px 0";
    }
    if(width<500) {
      idTituloProyectosExistentes.style.fontSize="20px";
    }
    else {
      idTituloProyectosExistentes.style.fontSize="25px";
    }
  }
}

function showGeneral() {
  idNPGeneral.style.display="inline";
  idNPUbicacion.style.display="none";
}

function showUbicacion() {
  idNPUbicacion.style.display="inline";
  idNPGeneral.style.display="none";
}

function ajustaHeight() {
  var heightIcono = idIconoNuevoProyecto.offsetWidth;
  idIconoNuevoProyecto.style.height=heightIcono + "px";
  idIconoProyectosExistentes.style.height=heightIcono + "px";
}
var np = getUrlVars()["NP"];
if(np=="true") {
  abrePE();
}
/*fProyectos.php***************************************************************/

/*clientes.php*****************************************************************/
function abreNC() {
  sectionAbierta = true;
  sectionIs = "cNC";
  sectionColor = true;
  var width = (document.body.clientWidth);
  idEliminarCliente.style.height="0%";
  idEliminarCliente.style.display="none";
  idModificarCliente.style.height="0%";
  idModificarCliente.style.display="none";
  idListaClientes.style.height="0%";
  idListaClientes.style.display="none";
  idNuevoCliente.style.position="absolute";
  idNuevoCliente.style.top="0";
  idNuevoCliente.style.height="100%";
  idNuevoCliente.style.width="100%";
  idNuevoCliente.style.cursor="default";
  idBotonRegresar.style.color="#262626";
  if(width>950) {
    idTituloNuevoCliente.style.top="12.5%";
    idTituloNuevoCliente.style.transform= "translateY(-12.5%)";
    idIconoNuevoCliente.style.marginLeft="3%";
    idIconoNuevoCliente.style.top="7.5%";
    idIconoNuevoCliente.style.transform=
      "translateY(-7.5%)";
  }
  else {
    idTituloNuevoCliente.style.top="7.5%";
    idTituloNuevoCliente.style.transform=
      "translateY(-7.5%)";
    idIconoNuevoCliente.style.marginLeft="3%";
    idIconoNuevoCliente.style.top="3.5%";
    idIconoNuevoCliente.style.transform=
      "translateY(-3.5%)";
  }
}

function normalAbreNC() {
  var width = (document.body.clientWidth);
  if (sectionAbierta === true) {
    if(width>950) {
      idTituloProyectosExistentes.style.top="12.5%";
      idTituloProyectosExistentes.style.transform=
        "translateY(-12.5%)";
      idIconoProyectosExistentes.style.marginLeft="50%";
      idIconoProyectosExistentes.style.marginLeft="3%";
      idIconoProyectosExistentes.style.top="7.5%";
      idIconoProyectosExistentes.style.transform=
        "translateY(-7.5%)";
      idBotonRegresar.style.top="%";
    }
    else {
      idTituloProyectosExistentes.style.top="7.5%";
      idTituloProyectosExistentes.style.transform=
        "translateY(-7.5%)";
      idIconoProyectosExistentes.style.marginLeft="3%";
      idIconoProyectosExistentes.style.top="3.5%";
      idIconoProyectosExistentes.style.transform=
        "translateY(-3.5%)";
      idBotonRegresar.style.top="5.5%";
    }
  }
}
/*fClientes.php****************************************************************/

/*filtradorDatos***************************************************************/
window.onload=function() {
  $("#searchInput").keyup(function() {
    //split the current value of searchInput
    var data = this.value.split(" ");
    //create a jquery object of the rows
    var jo = $("#fbody").find("tr");
    if (this.value === "") {
      jo.show();
      return;
    }
    //hide all the rows
    jo.hide();
    //Recusively filter the jquery object to get results.
    jo.filter(function(i, v) {
      var $t = $(this);
      for (var d = 0; d < data.length; ++d) {
        if ($t.is(":contains('" + data[d] + "')")) {
          return true;
        }
      }
      return false;
    })
    //show the rows that match.
    .show();
  }).focus(function() {
    this.value = "";
    $(this).css({"color": "black"});
    $(this).unbind('focus');
  }).css({"color": "#C0C0C0"});
}
/*fFiltradorDatos**************************************************************/

/*proyectos.php****************************************************************/
function cambiaGuardarNP() {
  if(document.formNP.proyectoNP.value!=''){
  		document.getElementById("guardaNP").style.background="#329442";
      document.getElementById("guardaNP").style.cursor="pointer";
      document.getElementById("textoBotonNP").innerHTML="Guardar";
      document.getElementById("guardaNP").
        setAttribute("onClick", "javascript: this.parentNode.submit();" );
      document.getElementById("iconoBotonNP").
        setAttribute("class", "fa fa-floppy-o" );
  		document.formNP.proyectoNP.focus();
  		return false;
  	}
  else {
    document.getElementById("guardaNP").style.background="#c14545";
    document.getElementById("guardaNP").style.cursor="default";
    document.getElementById("textoBotonNP").innerHTML="Nombre el proyecto";
    document.getElementById("iconoBotonNP").
      setAttribute("class", "fa fa-ban fa-stack-2x text-danger" );
    document.getElementById("guardaNP").onclick= function () {};
  }
}
/*fproyectos.php***************************************************************/

/*gestionProyecto.php**********************************************************/
function agregaPlano() {
  document.getElementById('editaProyecto').style.opacity="0.2";
  document.getElementById('cd-main-content').style.background="black";
  document.getElementById('cd-main-content').disabled="true";
  document.getElementById('creaPlano').style.zIndex="9999";
  document.getElementById('creaPlano').style.opacity="1";
}

function cierraCrearGP() {
  document.getElementById('editaProyecto').style.opacity="1";
  document.getElementById('cd-main-content').style.background="default";
  document.getElementById('cd-main-content').disabled="false";
  document.getElementById('creaPlano').style.zIndex="-9999";
  document.getElementById('creaPlano').style.opacity="0";
}

function cambiaGuardarPlano() {
  		idGuardaPlano.style.background="#64c273";
      idGuardaPlano.style.cursor="pointer";
      document.getElementById("textoBotonNP").innerHTML="Guardar plano";
      idGuardaPlano.
        setAttribute("onClick", "this.parentNode.submit();" );
      document.getElementById("iconoBotonNP").
        setAttribute("class", "fa fa-floppy-o" );
  		/*document.formNP.proyectoNP.focus();*/
  		return false;
}
/*fGestionProyecto.php*********************************************************/

  /*end**********************************************************************/
