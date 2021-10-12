<?php

require_once 'conexion.php';
require_once 'clases.php';

if(isset($_POST['btnGuardar'])){

    $objeto = new OperacionesSQL($conexion);
    $objeto->insertarDatos($_POST);
}

header("Refresh:1; url=../index.php");


?>
