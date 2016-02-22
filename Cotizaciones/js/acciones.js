  /*inicio*/
/*globalFunctions**************************************************************/
function getUrlVars() {
var vars={};
var parts=
window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
vars[key]=value;
});
return vars;
}
/**********ejemplo: var ejemploVar=getUrlVars()['nombreVariable'];***********/
function agregar_c() { location.href="?sec=alta"; }
function eliminar_c() { location.href="?sec=baja"; }
function modificar_c() { location.href="?sec=cambio"; }
function visualizar_c() { location.href="cat_clientes.php"; }
function cotizaciones() { location.href="?sec=cotizaciones"; }
function cotizacionesVentas() { location.href="?sec=cotizacionesVentas"; }
function orden() { location.href="?sec=orden"; }
function cotizar() { location.href="?sec=cotizar"; }
function cotizarV() { location.href="?sec=cotizarV"; }
function agregar_u() { location.href="?sec=altaus"; }
function eliminar_u() { location.href="?sec=bajaus"; }
function modificar_u() { location.href="?sec=cambious"; }
function agregar_p() { location.href="?sec=alta_p"; }
function eliminar_p() { location.href="?sec=baja_p"; }
function modificar_p() { location.href="?sec=cambio_p"; }
function ver_p() { location.href="cat_prod.php"; }
function agregar_pro() { location.href="?sec=alta_pro"; }
function eliminar_pro() { location.href="?sec=baja_pro"; }
function modificar_pro() { location.href="?sec=cambio_pro"; }
function ver_pro() { location.href="?sec=proyectos"; }
/*fGlobalFunctions*************************************************************/

/*index.php********************************************************************/
var op=getUrlVars()['op'],
  indexErrorSesion=document.getElementById("indexErrorSesion");
if(op=="mal") {
  indexErrorSesion.style.opacity="1";
  indexErrorSesion.innerHTML="Error: usuario y/o contraseña erroneos";
}
if(op=="desactivado") {
  indexErrorSesion.style.opacity="1";
  indexErrorSesion.innerHTML="Error: Usuario desactivado";
}
/*fIndex.php*******************************************************************/

/*administracion.php&ventas.php************************************************/
var bodyWidth=(document.body.clientWidth);
window.onload=principalResize;

function deployLSide() {
  var mainRSideWidth=document.getElementById("mainRSide").offsetWidth,
    mainLSideWidth=document.getElementById("mainLSide").offsetWidth,
    mainRSide=document.getElementById("mainRSide"),
    mainLSide=document.getElementById("mainLSide"),
    mainRSideContent=document.getElementById("mainRSideContent"),
    mainLSideMenu=document.getElementById("mainLSideMenu"),
    menuUl=
      document.getElementById("mainLSideMenu").getElementsByTagName('ul')[0],
    mainLSideDeployer=document.getElementById("mainLSideDeployer");
  if(mainRSideWidth>mainLSideWidth) {
    mainRSide.style.width="5%";
    mainLSide.style.width="95%";
    mainRSideContent.style.display="none";
    mainLSideMenu.style.display="block";
    mainLSideDeployer.style.width="30px";
    mainLSideDeployer.style.paddingBottom="80px";
    mainLSideDeployer.style.top="5%";
    mainLSideDeployer.style.transform="translateY(-5%)";
    mainLSideDeployer.style.marginRight="5%";
    menuUl.style.width="50%";
    mainLSideMenu.style.marginTop="0";
    return;
  }
  else {
    mainRSide.style.width="95%";
    mainLSide.style.width="5%";
    mainRSideContent.style.display="block";
    mainLSideMenu.style.display="none";
    mainLSideDeployer.style.width="65%";
    mainLSideDeployer.style.paddingBottom="65%";
    mainLSideDeployer.style.top="48%";
    mainLSideDeployer.style.transform="translateY(-48%)";
    mainLSideDeployer.style.margin="auto";
    return;
  }
}

function principalResize() {
  bodyWidth=(document.body.clientWidth);
  var mainRSideWidth=document.getElementById("mainRSide").offsetWidth,
    mainLSideWidth=document.getElementById("mainLSide").offsetWidth,
    mainLSideDeployer=document.getElementById("mainLSideDeployer"),
    mainLSide=document.getElementById("mainLSide"),
    mainLSideMenu=document.getElementById("mainLSideMenu"),
    mainRSide=document.getElementById("mainRSide"),
    principalMain=document.getElementById("principalMain"),
    principalPageFooter=document.getElementById("principalPageFooter"),
    principalHeader=document.getElementById("principalHeader"),
    mainLSideDeployer=document.getElementById("mainLSideDeployer"),
    mainRSideContent=document.getElementById("mainRSideContent"),
    menuUl=
      document.getElementById("mainLSideMenu").getElementsByTagName('ul')[0];
  if(bodyWidth<950) {
    if(mainRSideWidth>mainLSideWidth) {
      mainLSideDeployer.style.display="block";
      mainLSideDeployer.style.width="65%";
      mainLSideDeployer.style.height="0";
      mainLSideDeployer.style.paddingBottom="65%";
      mainLSide.style.width="5%";
      mainLSideMenu.style.display="none";
      mainRSide.style.width="95%";
      mainRSide.style.minWidth="0";
      principalMain.style.minWidth="0";
      principalPageFooter.style.minWidth="0";
      principalHeader.style.minWidth="0";
      mainLSideDeployer.style.top="48%";
      mainLSideDeployer.style.transform="translateY(-48%)";
      mainLSideDeployer.style.margin="auto";
    }
  }
  if(bodyWidth>950) {
    mainLSideDeployer.style.display="none";
    mainLSideDeployer.style.width="30px";
    mainLSideDeployer.style.height="30px";
    mainLSide.style.width="35%";
    mainLSideMenu.style.display="block";
    mainRSide.style.width="65%";
    principalMain.style.minWidth="900px";
    principalPageFooter.style.minWidth="810px";
    principalHeader.style.minWidth="900px";
    mainRSideContent.style.display="block";
    menuUl.style.width="100%";
    mainLSideMenu.style.marginTop="10%";
  }
}

var jqWidth = $(window).width();
$(window).resize(function() {
  if($(this).width()!=jqWidth){ jqWidth=$(this).width();principalResize(); }
}); /*verifica width de window*/

/*fAdministracion.php&ventas.php***********************************************/

/*alta.php*********************************************************************/
var altaCliente=getUrlVars()['altaClien'];
if(altaCliente=='si') window.alert("Cliente añadido con éxito");
/*fAlta.php********************************************************************/

/*alta.php*********************************************************************/
var erasedEmpresa=getUrlVars()['erasedEmpresa'];
if(erasedEmpresa=='si') window.alert("Cliente eliminado con éxito");
/*fAlta.php********************************************************************/

/*cambio.php*******************************************************************/
var mEmpresa=getUrlVars()['modifiedEmpresa'];
if(mEmpresa=='si') window.alert("Cliente modificado con éxito");
/*fCambio.php******************************************************************/

/*altaus.php*******************************************************************/
var pError=getUrlVars()['passError'], altausC=getUrlVars()['altausComplete'];
if(pError=='true') window.alert("Los password no coinciden");
if(altausC=='true') window.alert("Usuario añadido");
/*fAltaus.php******************************************************************/

  /*final*/
