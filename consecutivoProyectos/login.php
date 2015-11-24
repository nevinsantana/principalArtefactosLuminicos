<section class="sectionContainer">
  <section class="unaSection azul">
    <section class="formuLogin">
      <?php loginin(); if(!isset($_GET['logout'])) { ?>
      <form action="?sec=login&loginin=true" method="post">
        <h1>Inicia sesión</h1>
        <h2>Usuario</h2><input type="text" name="user" autofocus required>
        <br><br>
        <div class="break"></div>
        <br>
        <h2>Contraseña</h2><input type="password" name="pass" required>
        <div class="break"></div>
        <input type="submit" value="Entrar">
      </form>
      <?php } ?>
      <?php loginin(); if(isset($_GET['logout'])) {
      ?>
        <aside><span>Realmente desea cerrar sesión?</span></aside>
        <button class="verde" onclick="principal()">Regresar</button>
        <button class="rojo" onclick="cerrarSesion()">Cerrar sesión</button>
      <?php } ?>
    </section>
  </section>
</section>
