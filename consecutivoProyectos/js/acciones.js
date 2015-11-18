  /*start********************************************************************/

/*menuIndex.php****************************************************************/
if(logeado == 1) { /*var logeado viene de ../php/funciones.php*/
  document.getElementById('usuarioInicia').innerHTML = user;
}
else {
  document.getElementById('usuarioInicia').innerHTML = "Accesar";
}

if(logeado == 1) { /*var logeado viene de ../php/funciones.php*/
  document.getElementById('cerrarIniciar').innerHTML = "Cerrar Sesión";
}
else {
  document.getElementById('cerrarIniciar').innerHTML = "Iniciar Sesión";
}

function login() {
  location.href="?sec=login"
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

  /*end**********************************************************************/
