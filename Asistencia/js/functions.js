function aTabla1(y) {
  var i=0;
  while(i<y) {
  var bPrint=document.getElementsByClassName('bPrint')[i];
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
  var bPrint=document.getElementsByClassName('bPrint')[i];
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
  var bPrint=document.getElementsByClassName('bPrint')[i];
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
  var bPrint=document.getElementsByClassName('bPrint')[i];
  nLink=bPrint.rel+'3&fIni='+fDate+'&fFin='+lDate;
  bPrint.href=nLink;
  i++;
  }
}
