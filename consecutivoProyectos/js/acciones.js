  /*start********************************************************************/

/*globalVar's******************************************************************/
var user;
/*fGlobalVar's*****************************************************************/

/*menuIndex.php****************************************************************/
if(logeado == 1) { /*var logeado viene de ../php/funciones.php*/
  document.getElementById('usuarioInicia').innerHTML = user;
}
else {
  document.getElementById('usuarioInicia').innerHTML = "Accesar";
}

function login() {
  location.href="?sec=login"
}

function logout() {
  location.href="?sec=login&logout=true"
}

function cerrarSesion() {
  location.href="?sec=login&cerrarSesion=true"
}

function principal() {
  location.href="?sec=principal"
}

function proyectos() {
  location.href="?sec=proyectos"
}

function clientes() {
  location.href="?sec=clientes"
}

function cotizaciones() {
  location.href="?sec=cotizaciones"
}
/*fMenuIndex.php***************************************************************/

/*cotizaciones.php*************************************************************/
function verCotizacion(noCotizacion) {
  location.href="?sec=verCotizacion&cotizacion="+noCotizacion;
}

function eliminarCotizacion(noCotizacion) {
  location.href="?sec=eliminarCotizacion&cotizacion="+noCotizacion;
}
/*fCotizaciones.php************************************************************/

  /*end**********************************************************************/
