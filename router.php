<?php
include_once("controladores/controlador_".$controlador.".php");
$controlador = new Controlador($accion);

print_r($controlador);
?>