<html>
  <head>
    <meta http-equiv="Content-Type" charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Consecutivo de Cotizaciones</title>
  </head>
  <body>
    <div id="header">
      <h1 style="text-align: center;">Artefactos Lumínicos SA de CV</h1>
    </div>
    <?php
      include("funciones_mysql.php");
      session_start();
      $con=conectar();
      if(isset($_SESSION['cancelar'])) $cancelar=$_SESSION['cancelar'];
      else $cancelar=0;
    ?>
    <div style="margin-top: 70px;" align="center">
      <form action="descuentos2.php" method="POST">
        <div style="font-size: 16px;">
          <div class="textoPartidas">
            Ingrese el descuento en porcentaje
            <input type="number" name="descuento"
              style="width:50px; height:20px" step="0.01" min="0" max="100"
              required>
              %
          </div>
        </div>
        <div style="margin-top:30px">
          <input type="submit" value="Aceptar" id="botonp"
            style="margin: 20px 0 0 200px;">
        </div>
      </form>
      <div style="margin-top: -26px;">
        <a href="notas.php">
          <input type="submit" value="Atras" id="botonp"
            style="margin: -14px 0 0 -200px;">
        </a>
      </div>
    </div>
    <script>
      var r=confirm('Desea agregar un descuento especial a la cotizacion?');
      if(r==false) {
        if($cancelar==0) location.href='form_cotizacion.php';
        else location.href='editar_form_cotizacion.php';
      }
    </script>
  </body>
</html>
