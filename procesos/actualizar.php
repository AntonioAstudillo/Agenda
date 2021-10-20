<?php
require_once("conexion.php");
require_once("clases.php");
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agenda de Contactos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  </head>
  <body>
      <section class="container">
        <form action="actualizar_registro.php?id=<?php echo $_GET['id']; ?>"  method="post" autocomplete="off">
        <?php
         $objeto = new OperacionesSQL($conexion,$_GET['id']);
         $fila = $objeto->obtenerDatos();
         ?>

        <h2 class="text-center mt-3">Modificar Contacto</h2>
        <label for="nombre">Nombre:</label>
        <input class="form-control" class="centrar-texto" id="nombre" type="text" name="nombre" maxlength="10" value="<?php echo $fila['nombre'] ?>">

        <label for="apellido">Apellido:</label>
        <input class="form-control" id="apellido" type="text" name="apellido"  maxlength="10" value="<?php echo $fila['apellido'] ?>">

        <label for="telefono">Telefono:</label>
        <input class="form-control" id="telefono" type="number"  name="telefono" value="<?php echo $fila['telefono'] ?>">

        <label for="correo">Correo:</label>
        <input class="form-control" id="correo" type="email" name="correo" value="<?php echo $fila['correo'] ?>">

        <label for="edad">Edad:</label>
        <input class="form-control" id="edad" type="number" name="edad" value="<?php echo $fila['edad'] ?>" >

        <input class="form-control btn btn-success mt-3 font-weight-bold" type="submit" name="btnGuardar" value="Actualizar Registro">



        </form>
      </section>
  </body>
</html>
