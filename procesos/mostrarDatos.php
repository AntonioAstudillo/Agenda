<?php

function buscar($nombre) {
   require("conexion.php");
   $consulta = "SELECT * FROM contactos WHERE nombre = '$nombre'";
   $resultado = $conexion->query($consulta);

   if(mysqli_affected_rows($conexion)==0){
      header("Location:index.php");
   }

   $conexion->close();

   return $resultado;
}

function mostrarTodo() {
   require("conexion.php");
   $consulta = "SELECT * FROM contactos ORDER BY id";
   $resultado = $conexion->query($consulta);

   $conexion->close();

   return $resultado;
}


?>
