<?php
require_once("conexion.php");
require_once("clases.php");


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agenda de Contactos</title>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <style media="screen">
       body{
         background:#A4908B;
         font-size: 100px;
       }

       h1{
          color: yellow;
          font-size: 30px;
       }

       h2{
          color: black;
       }


    </style>
  </head>
  <body>
      <section id="inicio">

        <h1>Agenda de Contactos</h1>

        <form action="actualizar_registro.php?id=<?php echo $_GET['id']; ?>"  method="post" autocomplete="off">

        <?php
         $objeto = new OperacionesSQL($conexion,$_GET['id']);
         $fila = $objeto->obtenerDatos();
         ?>

        <h2>Modificar Contacto</h2>
        <label for="nombre">Nombre:</label>
        <input class="centrar-texto" id="nombre" type="text" name="nombre" maxlength="10" value="<?php echo $fila['nombre'] ?>">

        <label for="apellido">Apellido:</label>
        <input id="apellido" type="text" name="apellido"  maxlength="10" value="<?php echo $fila['apellido'] ?>">

        <label for="telefono">Telefono:</label>
        <input id="telefono" type="number"  name="telefono" value="<?php echo $fila['telefono'] ?>">

        <label for="correo">Correo:</label>
        <input id="correo" type="email" name="correo" value="<?php echo $fila['correo'] ?>">

        <label for="edad">Edad:</label>
        <input id="edad" type="number" name="edad" value="<?php echo $fila['edad'] ?>" >

        <input type="submit" name="btnGuardar" value="Actualizar Registro">



        </form>
      </section>
  </body>
</html>
