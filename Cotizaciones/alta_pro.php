<?php if (!isset($_SESSION['usuario'])) {
    header('Location: relogin.php'); ?>

<?php } else { ?>
<html>
  <script>
    function apareceInteriores() {
      document.getElementById('interiores').style.visibility='visible';
      document.getElementById('interiores').style.opacity='1';
      document.getElementById('interiores').style.marginLeft='0';
        document.getElementById('tituloInteriores').style.background='#f4f2f4';
        document.getElementById('tituloInteriores').style.color='black';
      
      document.getElementById('exteriores').style.visibility='hidden';
      document.getElementById('exteriores').style.opacity='0';
      document.getElementById('exteriores').style.marginLeft='2em';
        document.getElementById('tituloExteriores').style.background='transparent';
        document.getElementById('tituloExteriores').style.color='white';
      
      document.getElementById('vialidades').style.visibility='hidden';
      document.getElementById('vialidades').style.opacity='0';
      document.getElementById('vialidades').style.marginLeft='2em';
        document.getElementById('tituloVialidades').style.background='transparent';
        document.getElementById('tituloVialidades').style.color='white';
    }
    function apareceExteriores() {
      document.getElementById('interiores').style.visibility='hidden';
      document.getElementById('interiores').style.opacity='0';
      document.getElementById('interiores').style.marginLeft='2em';
        document.getElementById('tituloInteriores').style.background='transparent';
        document.getElementById('tituloInteriores').style.color='white';
      
      document.getElementById('exteriores').style.visibility='visible';
      document.getElementById('exteriores').style.opacity='1';
      document.getElementById('exteriores').style.marginLeft='0';
        document.getElementById('tituloExteriores').style.background='#f4f2f4';
        document.getElementById('tituloExteriores').style.color='black';
      
      document.getElementById('vialidades').style.visibility='hidden';
      document.getElementById('vialidades').style.opacity='0';
      document.getElementById('vialidades').style.marginLeft='2em';
        document.getElementById('tituloVialidades').style.background='transparent';
        document.getElementById('tituloVialidades').style.color='white';
    }
    function apareceVialidades() {
      document.getElementById('interiores').style.visibility='hidden';
      document.getElementById('interiores').style.opacity='0';
      document.getElementById('interiores').style.marginLeft='2em';
        document.getElementById('tituloInteriores').style.background='transparent';
        document.getElementById('tituloInteriores').style.color='white';
      
      document.getElementById('exteriores').style.visibility='hidden';
      document.getElementById('exteriores').style.opacity='0';
      document.getElementById('exteriores').style.marginLeft='2em';
        document.getElementById('tituloExteriores').style.background='transparent';
        document.getElementById('tituloExteriores').style.color='white';
      
      document.getElementById('vialidades').style.visibility='visible';
      document.getElementById('vialidades').style.opacity='1';
      document.getElementById('vialidades').style.marginLeft='0';
        document.getElementById('tituloVialidades').style.background='#f4f2f4';
        document.getElementById('tituloVialidades').style.color='black';
    }    
  </script>
  <div id="addproducto">Ingrese los datos del producto que desea agregar:</div>

  <form action="altaproyecto.php" method="POST">   
      Formulario de proyectos
      <br />
      <br />
      <span id="tituloInteriores">Interiores
      <input class="inputRadio" type="radio" name="tipoArea" value="interiores" onfocus="apareceInteriores()"></span>
      <span id="tituloExteriores">Exteriores
      <input class="inputRadio" type="radio" name="tipoArea" value="exteriores" onfocus="apareceExteriores()"></span>
      <span id="tituloVialidades">Vialidades
      <input class="inputRadio" type="radio" name="tipoArea" value="vialidades" onfocus="apareceVialidades()"></span>
      <section id="interiores">
        <fieldset>
          <legend>Datos del proyecto</legend>
          <p>Nombre del proyecto</p>
          <input type="text">
          <div class="clear"></div>  
          <p>Fecha proyecto</p>
          <input type="text">
          <div class="clear"></div>  
          <p>Cliente</p>
          <input type="text">
          <div class="clear"></div>  
          <p>Asesor de proyecto</p>
          <input type="text">       
        </fieldset>
        
        <fieldset>
          <legend>Requerimientos del proyecto</legend>
          <p>Ubicación</p>
          <input type="text">
          <div class="clear"></div>  
          <p>Tipo de techo</p>
          <select name="techo">
            <option selected disabled>Seleccionar...</option>
            <option value="Horizontal">Horizontal</option>
            <option value="Dos aguas">Dos aguas</option>
            <option value="Diente de sierra">Diente de sierra</option>
          </select>
          <div class="clear"></div> 
          <p>Áreas a iluminar</p>
          <textarea></textarea>
          <div class="clear"></div> 
          <p>Nivel recomendado (lux)</p>
          <input type="text">
          <div class="clear"></div>
        </fieldset>
        
        <fieldset>
          <legend>Luminario o luminarios recomendados</legend>
          <p>Luminario recomendado</p>
          <input type="text">
          <div class="clear"></div>  
          <p>Catálogo</p>
          <input type="text">
          <div class="clear"></div>  
          <p>Watts</p>
          <input type="text">
          <div class="clear"></div>  
          <p>Lumens iniciales</p>
          <input type="text"> 
          <div class="clear"></div>
          <p>Factor de depreciación</p>
          <input type="text"> 
          <div class="clear"></div> 
          <p>Altura de montaje</p>
          <input type="text"> 
          <div class="clear"></div> 
          <p>Altura de plano de trabajo</p>
          <input type="text"> 
          <div class="clear"></div> 
          <p>Tipo de montaje</p>
          <input type="text"> 
          <div class="clear"></div> 
          <p>Tilt</p>
          <input type="text"> 
          <div class="clear"></div> 
          <p>Reflectancias</p>
          <input type="text"> 
          <div class="clear"></div> 
        </fieldset>
        
        <fieldset>
          <legend>Dimensiones del área</legend>
          <p>Altura(m)</p>
          <input type="text">
          <div class="clear"></div>
          <p>Ancho(m)</p>
          <input type="text">
          <div class="clear"></div>
          <p>Largo(m)</p>
          <input type="text">
          <div class="clear"></div>
          <img src="images/cuboInteriores.svg">
        </fieldset>
        
        <fieldset>
          <legend>Datos adicionales</legend>
          <p>Existe grúa viajera</p>
          <input type="radio" value="si"><div>Si</div>
          <div class="clear"></div>
          <p>Ancho(m)</p>
          <input type="text">
          <div class="clear"></div>
          <p>Largo(m)</p>
          <input type="text">
          <div class="clear"></div>
          <img src="images/cuboInteriores.svg">
        </fieldset>
        <input type="submit" value="Agregar" />
      </section>
      <section id="exteriores">
        <p>Nombre del prohsrthsrtyecto</p>
        <input type="text">
        <p>Fecha de solicitud de proyecto</p>
        <input type="text">
        <p>Cliente</p>
        <input type="text">
        <p>Asesor de proyecto</p>
        <input type="text">     
      </section>
      <section id="vialidades"></section>
  </form>
    <?php } ?>
</html>