<script src="../resources/js-cookie-2.0.4/src/js.cookie.js"></script>
<?php
  $var = "este es el valor de la variable";
?>
<script>
  Cookies.set('name', '<?php echo $var; ?>', { expires: 7 });
  var user = Cookies.get('name');
  window.alert(user);
</script>
