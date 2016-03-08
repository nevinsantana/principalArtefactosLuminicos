<?php
  if($seccion==null) require_once("inicio.php");
  if($seccion=="inicio") require_once("inicio.php");
  if($seccion=="preguntas") require_once("preguntasFrecuentes.php");
  if($seccion=="objetivo") require_once("Objetivo.php");
  if($seccion=="mision") require_once("Mision.php");
  if($seccion=="vision") require_once("Vision.php");
  if($seccion=="quienesSomos") require_once("QuienesSomos.php");
  if($seccion=="formasPago") require_once("FormasPago.php");
  if($seccion=="bibliotecaIlu") require_once("BibliotecaIlu.php");
  if($seccion=="videos") require_once("videos.php");
?>
