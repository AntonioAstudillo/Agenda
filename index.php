<?php require_once 'procesos/mostrarDatos.php';

if(isset($_POST['buscar']) &&  !empty($_POST['buscar'])){
   $nombre = $_POST['buscar'];
   $resultado = buscar($nombre);
}else if(isset($_POST['restaurar'])){
   $resultado = mostrarTodo();
}else{
   $resultado = mostrarTodo();
}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agenda de Contactos</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script type="text/javascript" src="js/validaciones.js"></script>
  </head>
  <body>
      <section class="seccion-agenda">
          <table border="6">
              <thead>
                  <tr>
                      <td colspan="2"><a class="boton-nuevo" href="formulario.php">+ Nuevo</a> </td>
                      <td colspan="4">Agenda De Contactos</td>
                      <td colspan="2">
                        <form action="#" method="post">
                        <input type="text" name="buscar" placeholder="Buscar...">
                        <input type="submit" name="btnBuscar" value="Buscar Registro">
                        <input type="submit" name="restaurar" value="Restaurar">
                     </form></td>
                  </tr>
                  <tr>
                      <td>Numero</td>
                      <td>Nombre</td>
                      <td>Apellido</td>
                      <td>Telefono</td>
                      <td>Correo</td>
                      <td>Edad</td>
                      <td colspan="2">Operaciones</td>
                  </tr>
              </thead>
              <tbody>
                  <?php while($fila = $resultado->fetch_assoc()): ?>
                      <tr>
                        <td><?php echo $fila['id']; ?></td>
                        <td><?php echo $fila['nombre']; ?></td>
                        <td><?php echo $fila['apellido']; ?></td>
                        <td><?php echo $fila['telefono']; ?></td>
                        <td><?php echo $fila['correo']; ?></td>
                        <td><?php echo $fila['edad']; ?></td>
                        <td><a href="procesos/actualizar.php?id=<?php echo $fila['id'];?>">Modificar</a></td>
                        <td><a href="procesos/eliminar.php?id=<?php echo $fila['id'];?>" onclick="return Eliminar();">Eliminar</a></td>
                      </tr>
                 <?php endwhile; ?>
              </tbody>
          </table>
      </section>
  </body>
</html>
