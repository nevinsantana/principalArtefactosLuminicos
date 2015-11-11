  /*start********************************************************************/

/*globalVariables**************************************************************/
var sectionAbierta, sectionIs,
idProyectosExistentes= document.getElementById('proyectosExistentes'),
idNuevoProyecto= document.getElementById('nuevoProyecto'),
idTituloNuevoProyecto= document.getElementById('tituloNuevoProyecto'),
idTituloProyectosExistentes=
  document.getElementById('tituloProyectosExistentes'),
idIconoNuevoProyecto= document.getElementById('iconoNuevoProyecto'),
idIconoProyectosExistentes= document.getElementById('iconoProyectosExistentes'),
idBotonRegresar= document.getElementById('botonRegresar'),
idNuevoCliente= document.getElementById('nuevoCliente');
/*fGlobalVariables*************************************************************/

/*index.php********************************************************************/
function cierraSection() {
  if(sectionAbierta == true && sectionIs == "pNP") {
    idNuevoProyecto.style.position="absolute";
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
  }

  if(sectionAbierta == true && sectionIs == "pPE") {
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

/*proyectos.php****************************************************************/
function abreNP() {
  sectionAbierta = true;
  sectionIs = "pNP";
  var width = (document.body.clientWidth);
  idProyectosExistentes.style.height="0%";
  idProyectosExistentes.style.display="none";
  idNuevoProyecto.style.position="absolute";
  idNuevoProyecto.style.top="0";
  idNuevoProyecto.style.height="100%";
  idNuevoProyecto.style.cursor="default";
  if(width>950) {
    idTituloNuevoProyecto.style.top="12.5%";
    idTituloNuevoProyecto.style.transform= "translateY(-12.5%)";
    idIconoNuevoProyecto.style.marginLeft="3%";
    idIconoNuevoProyecto.style.top="7.5%";
    idIconoNuevoProyecto.style.transform=
      "translateY(-7.5%)";
    idBotonRegresar.style.top="15%";
    idBotonRegresar.style.opacity="1";
  }
  else {
    idTituloNuevoProyecto.style.top="7.5%";
    idTituloNuevoProyecto.style.transform=
      "translateY(-7.5%)";
    idIconoNuevoProyecto.style.marginLeft="3%";
    idIconoNuevoProyecto.style.top="3.5%";
    idIconoNuevoProyecto.style.transform=
      "translateY(-3.5%)";
    idBotonRegresar.style.top="5.5%";
    idBotonRegresar.style.opacity="1";
  }
}

function normalAbreNP() {
  var width = (document.body.clientWidth);
  if (sectionAbierta == true) {
    if(width>950) {
      idTituloNuevoProyecto.style.top="12.5%";
      idTituloNuevoProyecto.style.transform=
        "translateY(-12.5%)";
      idIconoNuevoProyecto.style.marginLeft="50%";
      idIconoNuevoProyecto.style.marginLeft="3%";
      idIconoNuevoProyecto.style.top="7.5%";
      idIconoNuevoProyecto.style.transform=
        "translateY(-7.5%)";
      idBotonRegresar.style.top="15%";
    }
    else {
      idTituloNuevoProyecto.style.top="7.5%";
      idTituloNuevoProyecto.style.transform=
        "translateY(-7.5%)";
      idIconoNuevoProyecto.style.marginLeft="3%";
      idIconoNuevoProyecto.style.top="3.5%";
      idIconoNuevoProyecto.style.transform=
        "translateY(-3.5%)";
      idBotonRegresar.style.top="5.5%";
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
  if (sectionAbierta == true) {
    if(width>950) {
      idTituloProyectosExistentes.style.top="12.5%";
      idTituloProyectosExistentes.style.transform=
        "translateY(-12.5%)";
      idIconoProyectosExistentes.style.marginLeft="50%";
      idIconoProyectosExistentes.style.marginLeft="3%";
      idIconoProyectosExistentes.style.top="7.5%";
      idIconoProyectosExistentes.style.transform=
        "translateY(-7.5%)";
      idBotonRegresar.style.top="15%";
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
/*fProyectos.php***************************************************************/

/*clientes.php*****************************************************************/
function abreNC() {
  idBotonRegresar.style.height="100%";
  idBotonRegresar.style.width="100%";
  idBotonRegresar.style.position="absolute";
  idBotonRegresar.style.top="0";
  idBotonRegresar.style.left="0";
}
/*fClientes.php****************************************************************/

/*filtradorDatos***************************************************************/
window.onload=function() {
  $("#searchInput").keyup(function() {
    //split the current value of searchInput
    var data = this.value.split(" ");
    //create a jquery object of the rows
    var jo = $("#fbody").find("tr");
    if (this.value == "") {
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
