<?php if(!isset($_SESSION['usuario'])) header('Location: index.php'); ?>
<div id="addcliente">Ingrese los datos del cliente que desea agregar:</div>
<br>
<form action="php/funciones.php?altaCliente=true" method="POST">
  <input type="text" class="formu" placeholder="RFC de la empresa" name="rfc"
    autofocus>
  <input type="text" class="formu" placeholder="Razón social" name="empresa"
    required>
  <input type="text" class="formu" placeholder="Calle" name="calle">
  <input type="text" class="formu" placeholder="Número interior" name="num_int">
  <input type="text" class="formu" placeholder="Número exterior" name="num_ext">
  <input type="text" class="formu" placeholder="Colonia" name="colonia">
  <input type="text" class="formu" placeholder="Municipio/Delegacion"
    name="municipio">
  <input type="text" class="formu" placeholder="Estado" name="estado">
  <input type="text" class="formu" placeholder="Código Postal" name="cp">
  <input type="text" class="formu" placeholder="Nombre del contacto"
    name="contacto">
  <input type="text" class="formu" placeholder="Departamento"
    name="departamento">
  <input type="text" class="formu" placeholder="Teléfono" name="telefono1">
  <input type="text" class="formu" placeholder="Teléfono Alternativo"
    name="telefono2">
  <input type="text" class="formu" placeholder="E-mail" name="email">
  <input type="submit" value="Agregar" class="formu-button">
</form>
