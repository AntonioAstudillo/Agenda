<?php

require_once("clases.php");
require_once("conexion.php");

$id = $_GET['id'];

$objeto = new OperacionesSQL($conexion,$id);
$objeto->eliminarRegistro();

 ?>
