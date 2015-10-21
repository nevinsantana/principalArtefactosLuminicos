function normaliza(){
  var width = (document.body.clientWidth);
  if(width>1048){
  document.getElementById("nav").style.top="7.2em";
  document.getElementById("nav").style.zIndex="4";
  document.getElementById("nav").style.opacity="1";
  document.getElementsByTagName('main').style.paddingTop="4em";
  }
  else {
    document.getElementById("nav").style.top="-9em";
    document.getElementById("nav").style.zIndex="-1";
    document.getElementById("nav").style.opacity="0";
    document.getElementsByTagName('main').style.paddingTop="0em";
  }
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
    var width = document.body.clientWidth;
    if(width<1048) {
    document.getElementById("nav").style.top="10.5em";
    document.getElementById("nav").style.zIndex="4";
    document.getElementById("nav").style.opacity="0.95";
    document.getElementById("closeMenu").style.display="inline";
    }
    else{}
  }

  function desapareceMenu() {
    document.getElementById("nav").style.top="-9em";
    document.getElementById("nav").style.zIndex="-1";
    document.getElementById("nav").style.opacity="0";
    document.getElementById("closeMenu").style.display="none";
  }
