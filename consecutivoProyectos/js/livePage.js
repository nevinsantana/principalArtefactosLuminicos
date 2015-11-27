  /*start********************************************************************/

/*globalVariables**************************************************************/
var sectionAbierta, sectionIs,
idSectionAbierta= document.getElementById('sectionAbierta'),
idTopBar= document.getElementById('topBar'),
idCSA= document.getElementById('contentSectionAbierta'),
idProyectosExistentes= document.getElementById('proyectosExistentes'),
idNuevoProyecto= document.getElementById('nuevoProyecto'),
idNuevoCliente= document.getElementById('nuevoCliente'),
idEliminarCliente= document.getElementById('eliminarCliente'),
idModificarCliente= document.getElementById('modificarCliente'),
idListaClientes= document.getElementById('listaClientes'),
idTituloNuevoProyecto= document.getElementById('tituloNuevoProyecto'),
idTituloProyectosExistentes=
  document.getElementById('tituloProyectosExistentes'),
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
idBotonRegresar= document.getElementById('botonRegresar');
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
// altho to be fair, the api sucks because it won't accept multiple classes at once
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
  // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
  if (!String.prototype.trim) {
    (function() {
      // Make sure we trim BOM and NBSP
      var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
      String.prototype.trim = function() {
        return this.replace(rtrim, '');
      };
    })();
  }

  [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
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

/*index.php********************************************************************/
function onresizeAnimaciones() {
  normalSectionElements();
  normalAbreNP();
}

function normalSectionElements() {
  var width = (document.body.clientWidth);
  if(width>1124) {
    idTopBar.style.marginTop="170px";
    idCSA.style.padding="210px 0 20px 0";
  }
  else {
    idTopBar.style.marginTop="120px";
    idCSA.style.padding="160px 0 20px 0";
  }
}

function cierraSection() {
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
    idNuevoProyecto.style.top="0";
    idNuevoProyecto.style.zIndex="1";
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
  if (sectionAbierta === true) {
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
  sectionAbierta = true;
  sectionIs = "pPE";
  var width = (document.body.clientWidth);
  idNuevoProyecto.style.height="0%";
  idNuevoProyecto.style.display="none";
  idProyectosExistentes.style.position="absolute";
  idProyectosExistentes.style.bottom="0";
  idProyectosExistentes.style.height="100%";
  idProyectosExistentes.style.cursor="default";
  if(width>950) {
    idTituloProyectosExistentes.style.top="12.5%";
    idTituloProyectosExistentes.style.transform= "translateY(-12.5%)";
    idIconoProyectosExistentes.style.marginLeft="3%";
    idIconoProyectosExistentes.style.top="7.5%";
    idIconoProyectosExistentes.style.transform=
      "translateY(-7.5%)";
    idBotonRegresar.style.top="15%";
    idBotonRegresar.style.opacity="1";
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
    idBotonRegresar.style.opacity="1";
  }
}

function normalAbrePE() {
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
    }
    else {
      idTituloProyectosExistentes.style.top="7.5%";
      idTituloProyectosExistentes.style.transform=
        "translateY(-7.5%)";
      idIconoProyectosExistentes.style.marginLeft="3%";
      idIconoProyectosExistentes.style.top="3.5%";
      idIconoProyectosExistentes.style.transform=
        "translateY(-3.5%)";
    }
  }
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

  /*end**********************************************************************/
