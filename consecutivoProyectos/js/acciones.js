  /*start********************************************************************/
/*globalVar's******************************************************************/
var user;
/*fGlobalVar's*****************************************************************/
/*globalFunctions**************************************************************/
function getUrlVars() {
  var vars={},
  parts=window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi,function(m,key,value) {
  vars[key]=value;
  });
  return vars;
}
/**********ejemplo: var ejemploVar=getUrlVars()['nombreVariable'];***********/
function abreDP() { $('#fechaDP').glDatePicker(); }
function cierraDP() { $(window).unload(abreDP()); }
/*fGlobalFunctions*************************************************************/
/*menuIndex.php****************************************************************/
if(logeado == 1) { document.getElementById('usuarioInicia').innerHTML=user; }
else { document.getElementById('usuarioInicia').innerHTML="Accesar"; }
function login() { location.href="?sec=login" }
function logout() { location.href="?sec=login&logout=true" }
function cerrarSesion() { location.href="?sec=login&cerrarSesion=true" }
function principal() { location.href="?sec=principal" }
function proyectos() { location.href="?sec=proyectos" }
function clientes() { location.href="?sec=clientes" }
function cotizaciones() { location.href="?sec=cotizaciones" }
/*fMenuIndex.php***************************************************************/
/*botonesCrear.php*************************************************************/
function convert2Submit() { document.getElementById('npForm').submit(); }
/*fBotonesCrear.php************************************************************/
/*proyectos.php****************************************************************/
function gestionProyecto(idProyecto) {
  var url='?sec=gestionProyecto&idProyecto='+idProyecto,
    win=window.open(url, '_self');
  wind.focus();
}
/*fProyectos.php***************************************************************/
/*cotizaciones.php*************************************************************/
function verCotizacion(noCotizacion) {
  var url='?sec=verCotizacion&cotizacion='+noCotizacion,
      win=window.open(url, '_blank');
  win.focus();
}

function eliminarCotizacion(noCotizacion) {
  location.href="?sec=cotizaciones&cotizacion="+noCotizacion;
}
/*fCotizaciones.php************************************************************/
/*gestionProyecto.php**********************************************************/
function gNota(proy) {
  var valANota=document.getElementById('gNota');
  location.href="php/saver.php?gNota=true&nota="+valANota.value+"&proy="+proy;
}
function eNota(idNota, proy) {
  document.getElementById('editaProyecto').style.opacity="0.2";
  document.getElementById('cd-main-content').style.background="black";
  document.getElementById('cd-main-content').disabled="true";
  document.getElementById('pElNota').style.zIndex="9999";
  document.getElementById('pElNota').style.opacity="1";
  document.getElementById('advNota').innerHTML=
    "De verdad desea eliminar la nota ";
  document.getElementById('bNoNota').innerHTML=idNota;
    //location.href="php/funciones.php?eNota=true&nota="+idNota+"&proy="+proy;
}
/*fGestionProyecto.php*********************************************************/
  /*end**********************************************************************/
