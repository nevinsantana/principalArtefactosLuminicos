var width = (document.body.clientWidth);

function normaliza(){
  var width = (document.body.clientWidth);
  if(width>1048){
  document.getElementById("nav").style.top="13em";
  document.getElementById("nav").style.zIndex="1";
  document.getElementById("nav").style.opacity="1";
  }
  else {
    document.getElementById("nav").style.top="-9em";
    document.getElementById("nav").style.zIndex="-1";
    document.getElementById("nav").style.opacity="0";
  }
}


  function visitar1() {
    document.getElementById("v1").style.marginTop="-2.7em";
  }
  function novisitar1() {
    document.getElementById("v1").style.marginTop="0";
  }

  function visitar2() {
    document.getElementById("v2").style.marginTop="-4.2em";
  }
  function novisitar2() {
    document.getElementById("v2").style.marginTop="0";
  }

  function visitar3() {
    document.getElementById("v3").style.marginTop="-3.7em";
  }
  function novisitar3() {
    document.getElementById("v3").style.marginTop="0";
  }

  function visitar4() {
    document.getElementById("v4").style.marginTop="-3.7em";
  }
  function novisitar4() {
    document.getElementById("v4").style.marginTop="0";
  }

  function visitar5() {
    document.getElementById("v5").style.marginTop="-3.7em";
  }
  function novisitar5() {
    document.getElementById("v5").style.marginTop="0";
  }

  function informacion() {


    document.getElementById("I").style.opacity="1";
  }
  function noinformacion() {
     document.getElementById("I").style.opacity="0";
  }

  function informacion2() {
    document.getElementById("I2").style.opacity="1";
  }
  function noinformacion2() {
     document.getElementById("I2").style.opacity="0";
  }

  function mailIn() {
     document.getElementById("mail").style.opacity="1";
     document.getElementById("mail").style.zIndex="5";
     document.getElementById("phone").style.opacity="0";
     document.getElementById("phone").style.zIndex="-5";
  }
  function mailOut() {
     document.getElementById("mail").style.opacity="0";
     document.getElementById("mail").style.zIndex="-5";
  }

  function phoneIn() {
    document.getElementById("phone").style.opacity="1";
    document.getElementById("phone").style.zIndex="5";
     document.getElementById("mail").style.opacity="0";
     document.getElementById("mail").style.zIndex="-5";
  }
  function phoneOut() {
     document.getElementById("phone").style.opacity="0";
     document.getElementById("phone").style.zIndex="-5";
  }

  function apareceMenu() {
    document.getElementById("nav").style.top="13em";
    document.getElementById("nav").style.zIndex="1";
    document.getElementById("nav").style.opacity="0.95";
    document.getElementById("closeMenu").style.display="inline";
  }

  function desapareceMenu() {
    document.getElementById("nav").style.top="-9em";
    document.getElementById("nav").style.zIndex="-1";
    document.getElementById("nav").style.opacity="0";
    document.getElementById("closeMenu").style.display="none";
  }
