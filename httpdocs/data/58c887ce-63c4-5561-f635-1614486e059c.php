<?php
return array (
  'uuid' => '58c887ce-63c4-5561-f635-1614486e059c',
  'typeId' => '6',
  'buttonText' => 'Enviar',
  'recipients' => 'ventas@artefactosluminicos.com.mx',
  'subject' => 'Contacto Pagina WEB',
  'reply' => 'Su mensaje ha sido enviado. Muchas gracias.',
  'type' => 'contact',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'name',
      'type' => 'textfield',
      'title' => 'Nombre',
      'required' => true,
    ),
    1 => 
    array (
      'name' => 'mail',
      'type' => 'email',
      'title' => 'Email',
      'required' => true,
    ),
    2 => 
    array (
      'name' => 'message',
      'type' => 'textarea',
      'title' => 'Mensaje',
      'required' => true,
    ),
  ),
  'badCaptcha' => 'El texto introducido no coincide con el texto proporcionado en la imagen.',
  'isPassCaptcha' => false,
);
?>