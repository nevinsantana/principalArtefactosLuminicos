<!DOCTYPE html>
<html>
</script>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="html, css, php, javascript">
    <meta name="description" content="Contacto con Artefactos Luminicos">
    <title>Contacto Artefatos Lumínicos</title>
  </head>

  <style>
  #caja
  {
  margin: 0 auto;
  margin-top: 2em;
  width: 37.7em;
  height: auto;
  padding: 2em;
  box-sizing: border-box;
  background: #E4E5E6;
  border-radius: 10px;
  border: 1px solid #C3C3C4;
  }

  .izqder
  {
  	float: left;
  }

  .inputform
  {
  	border-color: #BEC4D3;
  	width: 15em;
  padding: 4px 8px;
  border-style: solid;
  border-width: 2px;
  margin-right: 2em;
  transition: padding .25s;

  }
  </style>

  <body>
    <div id="caja">
      <h2>Contacto de correo<br>Artefactos Luminicos S.A. de C.V.</h2>
<form name="contactform" method="post" action="send_form_email.php">
<table width="450px">

<tr>
 <td valign="top">
   <div class="izqder">
  <label for="first_name">Nombre(s):</label>
</div>
 </td>
 <td valign="top">
  <input  class="inputform" type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="last_name">Apellidos:</label>
 </td>
 <td valign="top">
  <input  class="inputform" type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Correo:</label>
 </td>
 <td valign="top">
  <input class="inputform" type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telefono:</label>
 </td>
 <td valign="top">
  <input class="inputform" type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="message">Mensaje:</label>
 </td>
 <td valign="top">
  <textarea  name="message" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input class="inputform" type="submit" value="Enviar">   <a href="http://www.artefactosluminicos.com.mx/email_form.php"></a>
 </td>
</tr>
</table>


</form>
</div>
</body>
</html>
