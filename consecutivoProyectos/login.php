<section class="sectionContainer">
  <section class="unaSection azul">
    <section class="formuLogin">
      <form action="?sec=login&loginin=true" method="post">
        <h1>Inicia sesión</h1>
        <h2>Usuario</h2><input type="text" name="user">
        <br><br>
        <div class="break"></div>
        <br>
        <h2>Contraseña</h2><input type="password" name="pass">
        <div class="break"></div>
        <input type="submit" value="Entrar">
      </form>
      <?php loginin(); ?>
    </section>
  </section>
</section>
