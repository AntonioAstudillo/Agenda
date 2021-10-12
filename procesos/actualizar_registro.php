<?php

require_once 'clases.php';
require_once 'conexion.php';

if(isset($_POST['btnGuardar'])){

    $id = $_GET['id'];
    $objeto = new OperacionesSQL($conexion,$id);
    $objeto->actualizarRegistro($_POST);

}

header("Location:../index.php");





 ?>
