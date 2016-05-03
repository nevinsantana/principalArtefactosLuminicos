var lo=document.getElementById('logout');
lo.addEventListener('click',function(){});

function errorSesion() {
  var log = document.createElement('div'),
  main = document.getElementsByTagName('main')[0],
  title = document.createElement('h1'),
  iUser = document.createElement('input'),
  iPass = document.createElement('input'),
  iButton = document.createElement('input'),
  lForm = document.createElement('form');
  lForm.setAttribute("action", "php/functions.php?sesion=true");
  lForm.setAttribute("method", "POST");
  main.style.opacity = '0.5'; main.style.display = 'none';
  document.body.appendChild(log);
  log.setAttribute("class", "login");
  log.style.opacity = '1';
  log.appendChild(title);
  title.setAttribute("class", "titleLogin");
  title.innerHTML='Inicie sesión';
  log.appendChild(lForm);
  lForm.appendChild(iUser);
  iUser.setAttribute('type','text');
  iUser.setAttribute('name','user');
  iUser.setAttribute('class','lInput');
  iUser.setAttribute('placeholder','Usuario');
  iUser.setAttribute('required','required');
  lForm.appendChild(iPass);
  iPass.setAttribute('type','password');
  iPass.setAttribute('name','pass');
  iPass.setAttribute('class','lInput');
  iPass.setAttribute('placeholder','Contraseña');
  iPass.setAttribute('required','required');
  lForm.appendChild(iButton);
  iButton.setAttribute("type", "submit");
  iButton.setAttribute("class", "lSubmit");
}

function aTabla1(y) {
  var i=0;
  while(i<y) {
  var bPrint=document.getElementsByClassName('bPrint1')[i];
  nLink=bPrint.rel+'1';
  bPrint.href=nLink;
  i++;
  }
  document.getElementById('tUsersContainer').style.display='inline';
  document.getElementById('fDate').style.display='none';
  document.getElementById('lDate').style.display='none';
}
function aTabla2(y) {
  var i=0;
  while(i<y) {
  var bPrint=document.getElementsByClassName('bPrint2')[i];
  nLink=bPrint.rel+'2';
  bPrint.href=nLink;
  i++;
  }
  document.getElementById('tUsersContainer').style.display='inline';
  document.getElementById('fDate').style.display='none';
  document.getElementById('lDate').style.display='none';
}
function aTabla3(y) {
  var i=0;
  while(i<y) {
  var bPrint=document.getElementsByClassName('bPrint3')[i];
  nLink=bPrint.rel+'3';
  bPrint.href=nLink;
  i++;
  }
  bPrint.form='pForm';
  document.getElementById('tUsersContainer').style.display='inline';
  document.getElementById('fDate').style.display='inline';
  document.getElementById('lDate').style.display='inline';
}
function cDate(y) {
  var i=0, fDate = document.getElementById('fDate').value,
  lDate = document.getElementById('lDate').value;
  while(i<y) {
  var bPrint=document.getElementsByClassName('bPrint3')[i];
  nLink=bPrint.rel+'3&fIni='+fDate+'&fFin='+lDate;
  bPrint.href=nLink;
  i++;
  }
}

function toggler(toTog, i) {
  $('#'+toTog).toggle(350, function() {
    var hider = toTog.slice(-1);
    if(hider==1) { var x=2, y=3; aTabla1(i); }
    if(hider==2) { var x=1, y=3; aTabla2(i); }
    if(hider==3) { var x=1, y=2; aTabla3(i); }
    $('#toggler'+x).hide(350);
    $('#toggler'+y).hide(350);
});}
