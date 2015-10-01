<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta name="keywords" content="HTML, CSS, PHP, JavaScript" />
        <meta name="description" content="Venta de artefactos fotoluminiscentes"/>
        <title>Prueba de diseño</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />
        
    </head>
    <body>
    
        
       <div id="titlePreguntas">       
        <h1>Preguntas Frecuentes</h1>
       </div>
       
        <dl>
          <dt>¿Quiénes somos?</dt>
          <dd> <img src="images/alsa_negritas.svg">
          Artefactos Luminicos S.A. de C.V. </br> Somos una empresa
          que se dedica a la distribución, promoción, venta de equipo,
          accesorios y proyectos de iluminación comercial, industrial, 
          exterior para áreas deportivas, áreas clasificadas (incluyendo
          Luminarios a prueba de explosión) y para lumbrado público.
          Alumbrado con sistemas de alto montaje (superpostes), para sistemas
          viales, complejos carreteros, prisiones, puertos de carga, estacionamientos,
          etc. Luminarios para áreas clasificadas, para industrias petroquimicas,
          plataformas, farmacéuticas y almacenaje de productos peligrosos
          o explosivos. Luminarios especializados para empotrar en piso,
          iluminación de fachadas, monumentos, fuentes, albercas, todo con 
          fotometria disponible. 
          </dd>

          <dt>¿Cómo puedes contactarnos?</dt>
          <dd>Puedes contáctarnos en los siguientes teléfonos:
          </br>58 72 83 26
          </br>58 70 07 71
          </br>58 72 21 32
          </br>58 72 21 16
          </dd>

          <dt>¿Cuáles son nuestros productos?</dt>
          <dd>Para ver todo el catálogo de nuestros productos
          de click en la siguiente liga:</dd>
          
          <dt>¿Cuáles son las formas de pago?
          <dd>Los pagos se efectuan mediante deposito a cualquiera de las siguientes cuentas
          </br> A nombre de Artefactos Luminicos S.A. de C.V.</br>
          </br> <img src="images/BancomerLogo.svg"> 
          </br>No. de cuenta 0451244 973
          </br>Clave interbancaria 012 180 004 512 449 733
          </br> <img src="images/Banamex.svg">
          </br>No. de cuenta 4157180 243
          </br>Clave iterbancaria 002 180 024 341 571 804         
          </br></dd>

          <dt>¿Dónde estamos ubicados?</dt>
          <dd>Nos encontramos ubicados en: </br>
          </br>Av. Juárez #9 Int 1. San Mateo Ixtacalco Cuautitlán
          </br>Izcalli, Estado de México. CP 54713
          </dd>

          <dt>¿Para qué fines utilizaremos sus datos personales?</dt>
          <dd>Los datos personales que recabamos de usted, los utilizaremos para las siguientes finalidades que son necesarias<br/>
              para el servicio que solicita:<br/>
              ● Facturación<br/>
              De manera adicional, utilizaremos su información personal para las siguientes finalidades secundarias que no son<br/>
              necesarias para el servicio solicitado, pero que nos permiten y facilitan brindarle una mejor atención:<br/>
              ● Calidad del servicio<br/>
              ● Promociones<br/>
              ● Mercadotecnia o publicitaria<br/>
              ● Prospección comercial<br/>
              <br/>
              La negativa para el uso de sus datos personales para estas finalidades no podrá ser un motivo para que le neguemos<br/>
              los servicios y productos que solicita o contrata con nosotros.<br/></dd>
        </dl>
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript">
          $('dl dd').not('dt.activo + dd').hide();
             $('dl dt').click(function(){
                if ($(this).hasClass('activo')) {
                     $(this).removeClass('activo');
                     $(this).next().slideUp();
                } else {
                     $('dl dt').removeClass('activo');
                     $(this).addClass('activo');
                     $('dl dd').slideUp();
                     $(this).next().slideDown();
                }
             });
         </script>
      
         
        

    </body>
</html>