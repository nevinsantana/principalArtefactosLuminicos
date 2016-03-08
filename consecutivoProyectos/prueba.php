<script src="../resources/js-cookie-2.0.4/src/js.cookie.js"></script>
<?php $var = "si"; ?>
<body><span id="example"></span></body>
<script>
  Cookies.set('name', '<?php echo $var; ?>', { expires: 7 });
  var user = Cookies.get('name');
  if(user=='si'){
    document.getElementById('example').innerHTML="si funciona";
  }
</script>
