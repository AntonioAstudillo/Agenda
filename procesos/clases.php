<?php

class OperacionesSQL{
   private $conexion;
   private $id;

   public function __construct($conexion , $id=0){
       $this->conexion = $conexion;
       $this->id =$id;
   }

   public function __destruct(){
     $this->conexion->close();
   }

   public function obtenerDatos(){
       $fila = false;

       $consulta = "SELECT * FROM contactos WHERE id = $this->id";

       $resultado = $this->conexion->query($consulta);

       if($resultado){
          $fila = $resultado->fetch_assoc();
       }

       return $fila;

   }//cierra metodo obtenerDatos

   public function actualizarRegistro($valor){
     $fila = false;
     $nombre = strtolower($valor['nombre']);
     $apellido = strtolower($valor['apellido']);
     $edad = strtolower($valor['edad']);
     $correo = strtolower($valor['correo']);
     $telefono = strtolower($valor['telefono']);

     $consulta = "UPDATE contactos SET nombre = '$nombre',
     apellido = '$apellido', edad = $edad, correo = '$correo',
     telefono = '$telefono' WHERE id = $this->id ";

     $resultado = $this->conexion->query($consulta);


     if($resultado && $this->conexion->affected_rows >0){
           $fila = true;
     }else{
        echo "Hubo un problema 3.3"; //no se pudo actualizar el registro
     }

     return $fila;
   }


   public function insertarDatos($valor){

     $nombre = strtolower($valor['nombre']);
     $apellido = strtolower($valor['apellido']);
     $edad = strtolower($valor['edad']);
     $correo = strtolower($valor['correo']);
     $telefono = strtolower($valor['telefono']);

     $sistema = $_SERVER['HTTP_USER_AGENT'];


     $consulta ="INSERT INTO contactos VALUES(null,'$nombre','$apellido','$telefono','$correo','$edad','$sistema')";

     $respuesta = $this->conexion->query($consulta);

     if($respuesta){
       echo "Insercion Exitosa";
     }else{
       echo "Insercion no Exitosa";
     }
   }

   public function eliminarRegistro(){

     $consulta = "DELETE FROM contactos WHERE id = $this->id";
     $resultado = $this->conexion->query($consulta);

     if($resultado && $this->conexion->affected_rows >0){
       echo "La eliminación se hizo de forma correcta";
       header("Refresh:2; url=../index.php");
     }else{
       echo "Hubo problemas al eliminar el registro";
       die(0);
     }
   }

}//cierra clase

?>
